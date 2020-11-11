<?php
try {
    $db    =    new PDO("mysql:host=localhost;dbname=website1;charset=UTF8", "root", "");
} catch (PDOException $Hata) {
    echo "Bağlantı Hatası<br />" . $Hata->getMessage();
    die();
}



function safe($Deger)
{
    $BoslukSil            =    trim($Deger);
    $TaglariTemizle       =    strip_tags($BoslukSil);
    $EtkisizYap           =    htmlspecialchars($TaglariTemizle, ENT_QUOTES);
    $Sonuc                =    $EtkisizYap;
    return $Sonuc;
}

// Pdo sorgularını burada topladım...


$intro  =    $db->prepare("SELECT * FROM intro WHERE id=?");
$intro->execute([1]);
$introQuery = $intro->fetch(PDO::FETCH_ASSOC);

// ***

$about  =    $db->prepare("SELECT * FROM about WHERE id=?");
$about->execute([1]);
$aboutQuery = $about->fetch(PDO::FETCH_ASSOC);

// ***

$services  =    $db->prepare("SELECT * FROM services WHERE id=?");
$services->execute([1]);
$servicesQuery = $services->fetch(PDO::FETCH_ASSOC);

// ***

$projects  =    $db->prepare("SELECT * FROM projects ORDER BY id DESC ");
$projects->execute();
$projectsQuery = $projects->fetchAll(PDO::FETCH_ASSOC);

// ***

$clients  =    $db->prepare("SELECT * FROM clients ORDER BY id DESC ");
$clients->execute();
$clientsQuery = $clients->fetchAll(PDO::FETCH_ASSOC);

// ***

$settings  =    $db->prepare("SELECT * FROM settings WHERE id=?");
$settings->execute([1]);
$settingsQuery = $settings->fetch(PDO::FETCH_ASSOC);

// ***

$messages  =    $db->prepare("SELECT * FROM messages ORDER BY time DESC ");
$messages->execute();
$messagesQuery = $messages->fetchAll(PDO::FETCH_ASSOC);












?> 