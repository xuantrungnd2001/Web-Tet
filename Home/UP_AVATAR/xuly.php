<?php
    $id=$_SESSION['id'];
    include 'connect.php';
    if (isset($_POST['uploading'])) {
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_parts =explode('.',$_FILES['image']['name']);
        $file_ext=strtolower(end($file_parts));
        $expensions= array("jpeg","jpg","png");
        $image = $_FILES['image']['name'];
        $target = "photo/".basename($image);
        $select = mysqli_query($conn, "SELECT * FROM profileimg WHERE userid='$id';");
        $col=mysqli_fetch_assoc($select);
        $sql = "UPDATE profileimg SET avatarname='$image' WHERE userid='$id';";
        $upstatus = "UPDATE profileimg SET status=1 WHERE userid='$id';";
        // $sql = "INSERT INTO images (image) VALUES ('$image')";
        // $del = DELETE FROM `images` WHERE `images`.`id` = (SELECT MAX(id) FROM images)"
        // mysqli_query($conn, $sql);
        
        if (in_array($file_ext,$expensions)) {
            move_uploaded_file($file_tmp, $target);
            if($col['status']==0)
            {
                mysqli_query($conn, $upstatus);
                mysqli_query($conn, $sql);
                echo '<script language="javascript">alert("Đã upload thành công!");</script>';
            }
            elseif($col['status']==1){
                mysqli_query($conn, $sql);
                echo '<script language="javascript">alert("Đã upload thành công!");</script>';
            }
        }
        else{
            echo '<script language="javascript">alert("Upload thất bại!");</script>';
        }
    }
    // $result = mysqli_query($conn, "SELECT * FROM images");
    $avatar = mysqli_query($conn, "SELECT * FROM profileimg WHERE userid='$id';");
    $ava = mysqli_fetch_assoc($avatar);
?>
