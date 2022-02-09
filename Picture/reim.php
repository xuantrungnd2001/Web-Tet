<?php
    session_start();
    if (!isset($_SESSION['name'])) {
        header("Location:../index.php");
    }
    if (isset($_POST['submit'])) {

        // File upload configuration 
        $targetDir = "uploads/";
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

        $_SESSION['statusMsg'] = $errorMsg = $insertSqlName = $insertSqlFiletype = $errorUpload = $errorUploadType = $insertSqlInPic = '';
        $fileNames = array_filter($_FILES['files']['name']);
        if (!empty($fileNames)) {
            foreach ($_FILES['files']['name'] as $key => $val) {
                // File upload path 
                $fileName = basename($_FILES['files']['name'][$key]);
                $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
                $targetFilePath = $targetDir . md5($fileName) . "." . $fileType;
                // Check whether file type is valid 
                if (in_array($fileType, $allowTypes)) {
                    // Upload file to server 
                    if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
                        // Image db insert sql 
                        $insertSqlName = md5($fileName);
                        $insertSqlFiletype = $fileType;
                        $insertSqlInPic = $_POST['inpic'];
                    } else {
                        $errorUpload .= $_FILES['files']['name'][$key] . ' | ';
                    }
                } else {
                    $errorUploadType .= $_FILES['files']['name'][$key] . ' | ';
                }
                $errorUpload = !empty($errorUpload) ? 'Upload Error: ' . trim($errorUpload, ' | ') : '';
                $errorUploadType = !empty($errorUploadType) ? 'File Type Error: ' . trim($errorUploadType, ' | ') : '';
                $errorMsg = !empty($errorUpload) ? '<br/>' . $errorUpload . '<br/>' . $errorUploadType : '<br/>' . $errorUploadType;

                if (!empty($insertSqlName)) {
                    // Insert image file name into database 
                    $conn = new PDO("mysql:host=localhost;dbname=tetprj", "admin", "password");
                    $stmt = $conn->prepare('INSERT INTO photo (name,filetype,owner,inpic) VALUES (:name,:filetype,:owner,:inpic)');
                    $stmt->setFetchMode(PDO::FETCH_OBJ);
                    $select = $conn->prepare('SELECT * from photo where name=:name');
                    $select->setFetchMode(PDO::FETCH_OBJ);
                    $select->execute(['name' => $insertSqlName]);
                    if (!$select->fetch()) {
                        $stmt->execute(['name' => $insertSqlName, 'filetype' => $insertSqlFiletype, 'owner' => $_SESSION['name'], 'inpic' => $insertSqlInPic]);
                        $_SESSION['statusMsg'] = "Tải lên thành công rùi nhó.<a class=\"nav-link\" href=\"see.php\">Ngắm ảnh thoy</a>" . $errorMsg;
                    } else {
                        $_SESSION['statusMsg'] = "Tên file bị trùng mất rùi. Đổi lại thoy!";
                    }
                } else {
                    $_SESSION['statusMsg'] = "Xảy ra lỗi " . $errorMsg;
                }
            }
            // Error message 
        } else {
            $_SESSION['statusMsg'] = 'Chọn ảnh trước khi gửi nhó.';
        }
        Header("Location: up.php");
    }
