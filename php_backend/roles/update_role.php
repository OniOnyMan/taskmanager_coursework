<?php
if (!empty($_POST['code']) && !empty($_POST['name'])) {
        include('../db_connection.php');
        $code = $_POST['code'];
        $name = $_POST['name'];
        $query = $pdo->prepare("CALL `Roles.UpdateRole`(?, ?)");
        $query->execute(array($code, $name));

        if ($query->errorCode() === "00000")
            echo "True";
        else
            print_r($query->errorInfo());
        $pdo = null;
    } else {
        echo "Ошибка введеных данных";
    }
 