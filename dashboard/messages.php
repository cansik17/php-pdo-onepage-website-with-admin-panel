<?php

if (isset($_SESSION["admin"])) {

    require_once 'layouts/header.php';
    require_once '../configs/config.php';
?>
    <?php
    if (isset($_GET['durum'])) {
        if ($_GET['durum'] == 'ok') { ?>

            <script>
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'İşlem başarıyla yapılmıştır...',
                    showConfirmButton: false,
                    timer: 2500
                })
            </script>

        <?php } elseif ($_GET['durum'] == 'no') { ?>

            <script>
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'İşlem başarısız...',
                    showConfirmButton: true,
                    timer: 5000
                })
            </script>
    <?php }
    } ?>
    <!-- içerik bölümü  -->
    <div>
        <h1 class="mt-4 mb-4 text-center ">Gelen Mesajlar</h1>
    </div>


    <div class="list-group">
        <?php foreach ($messagesQuery as $key) {

        ?>
            <div class="row">
                <div class="col-md-11">
                    <a href="messagesShow.php?id=<?php echo $key['id']; ?>" class="list-group-item list-group-item-action ">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><?php echo $key['title']; ?></h5>
                            <small><?php echo $key['time']; ?></small>
                        </div>
                        <p class="mb-1"><?php echo substr($key['text'], 0, 355); ?></p>
                        <small><?php echo $key['name']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $key['mail']; ?></small>
                    </a>
                </div>
                <div class="col-md-1">
                    <a href="../configs/process.php?messagesDelete=ok&id=<?php echo $key['id']; ?>" class="btn btn-danger">sil</a>
                </div>
            </div>
            <br>
        <?php
        } ?>
    </div>

<?php
    require_once 'layouts/footer.php';
} else {
    header("Location:../index.php");
}
?>