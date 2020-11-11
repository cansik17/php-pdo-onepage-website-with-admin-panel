<?php

require_once 'config.php';



if (isset($_POST['login'])) {


    if (empty($_SESSION["admin"])) {

        if (isset($_POST["name"])) {
            $name        =    safe($_POST["name"]);
        } else {
            $name        =    "";
        }
        if (isset($_POST["password"])) {
            $password            =    safe($_POST["password"]);
        } else {
            $password            =    "";
        }

        $md5Password                    =    md5($password);

        if (($name != "") and ($password != "")) {
            $KontrolSorgusu        =    $db->prepare("SELECT * FROM users WHERE name = ? AND password = ?");
            $KontrolSorgusu->execute([$name, $md5Password]);
            $KullaniciSayisi    =    $KontrolSorgusu->rowCount();
            $KullaniciKaydi        =    $KontrolSorgusu->fetch(PDO::FETCH_ASSOC);

            if ($KullaniciSayisi > 0) {
                $_SESSION["admin"]    =    $name;

                header("Location:../dashboard/index.php?login=ok");
                exit();
            } else {
                header("Location:../login.php?login=no");
                exit();
            }
        } else {
            header("Location:../login.php?login=null");
            exit();
        }
    } else {
        header("Location:../dashboard/index.php");
        exit();
    }
}
///////////////////////////////////


if ($_GET['logout'] == "ok") {
    unset($_SESSION["admin"]);
    session_destroy();

    header("Location:../login.php");
    exit();
}

?>