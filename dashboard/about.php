
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
    <h1 class="mt-4">Hakkımızda Bölümünü Düzenle</h1>
    <form method="POST" action="../configs/process.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="formGroupExampleInput">Mevcut Hakkımızda Resimi:</label><br>
            <img src="../<?php echo $aboutQuery['image']; ?>" width="250px" class="img-fluid" alt="Responsive image"><br>
            <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1"><b>Hakkımızda Yazısı:</b> </label>
            <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"><?php echo $aboutQuery['text']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Hakkımızda Küçük Yazısı:</b> </label>
            <input type="text" name="SmallText" class="form-control" value="<?php echo $aboutQuery['SmallText']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Başlık 1:</b> </label>
            <input type="text" name="header1" class="form-control" value="<?php echo $aboutQuery['header1']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Yazı 1:</b> </label>
            <input type="text" name="text1" class="form-control" value="<?php echo $aboutQuery['text1']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Başlık 2:</b> </label>
            <input type="text" name="header2" class="form-control" value="<?php echo $aboutQuery['header2']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Yazı 2:</b> </label>
            <input type="text" name="text2" class="form-control" value="<?php echo $aboutQuery['text2']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Başlık 3:</b> </label>
            <input type="text" name="header3" class="form-control" value="<?php echo $aboutQuery['header3']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Yazı 3:</b> </label>
            <input type="text" name="text3" class="form-control" value="<?php echo $aboutQuery['text3']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>

        <button type="submit" name="aboutUpdate" class="btn btn-primary ">Güncelle</button>
    </form>

    <?php
    require_once 'layouts/footer.php';
    } else {
        header("Location:../index.php");
    }
    ?>
