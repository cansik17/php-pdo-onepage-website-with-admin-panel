
    <?php
    if (isset($_SESSION["admin"])) {

    require_once 'layouts/header.php';
    require_once '../configs/config.php';
    ?>

    <!-- içerik bölümü  -->
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
    <h1 class="mt-4">İntro (Giriş) Bölümünü Düzenle</h1>
    <form method="POST" action="../configs/process.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="formGroupExampleInput">Mevcut İntro Resimi:</label><br>
            <img src="../<?php echo $introQuery['image']; ?>" width="250px" class="img-fluid" alt="Responsive image"><br>
            <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">İntro (Giriş) Yazısı:</label>
            <input type="text" name="text" class="form-control" value="<?php echo $introQuery['text']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>

        <button type="submit" name="introUpdate" class="btn btn-primary ">Güncelle</button>
    </form>

    <?php
    require_once 'layouts/footer.php';
    } else {
        header("Location:../index.php");
    }
    ?>
