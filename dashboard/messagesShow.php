<?php
if (isset($_SESSION["admin"])) {


    require_once 'layouts/header.php';
    require_once '../configs/config.php';

    $id = $_GET['id'];

    $show  =    $db->prepare("SELECT * FROM messages WHERE id=?");
    $show->execute([$id]);
    $detail = $show->fetch(PDO::FETCH_ASSOC);

?>

    <!-- içerik bölümü  -->
    
        <h1 class="mt-4">Mesaj Detay</h1>
        <a href="messages.php" class="btn btn-secondary">Geri</a>
    
    <ul class="list-group">
        <li class="list-group-item"><b>Gönderici Adı: </b> &nbsp;&nbsp;<?php echo $detail['name']; ?></li>
        <li class="list-group-item"><b>Gönderici Email Adresi: </b>&nbsp;&nbsp;<?php echo $detail['mail']; ?></li>
        <li class="list-group-item"><b>Mesaj Başlığı: </b>&nbsp;&nbsp;<?php echo $detail['title']; ?></li>
        <li class="list-group-item"><b>Gönderildiği Zaman: </b>&nbsp;&nbsp;<?php echo $detail['time']; ?></li>
        <li class="list-group-item"><b>Mesaj: <br> </b>&nbsp;&nbsp;<?php echo $detail['text']; ?></li>
    </ul>

<?php
    require_once 'layouts/footer.php';
} else {
    header("Location:../index.php");
}
?>