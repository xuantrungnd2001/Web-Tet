<?php
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $name = $_POST["username"];
        $password = $_POST["password"];
        $conn = new PDO("mysql:host=localhost;dbname=tetprj", "root",);
        $stmt = $conn->prepare('SELECT * FROM user WHERE name = :name And password= :password');
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute(['name' => $name, 'password' => $password]);
        if ($rt = $stmt->fetch()) {
            echo "hello $rt->name. Your are $rt->role";
            session_start();
            $_SESSION['name'] = $rt->name;
            $_SESSION['role'] = $rt->role;
            $_SESSION['vote'] = $rt->vote;
            header("Location:../main.php");
        } else {
            header("Location:../login.php");
        }
    }
    ?>