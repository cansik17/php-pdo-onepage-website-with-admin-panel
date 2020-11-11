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
    <h1 class="mt-4">Hizmetlerimiz Bölümünü Düzenle</h1>
    <form method="POST" action="../configs/process.php">


        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Hizmetlerimiz Küçük Yazısı:</b> </label>
            <input type="text" name="SmallText" class="form-control" value="<?php echo $servicesQuery['SmallText']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Başlık 1:</b> </label>
            <input type="text" name="header1" class="form-control" value="<?php echo $servicesQuery['header1']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Yazı 1:</b> </label>
            <input type="text" name="text1" class="form-control" value="<?php echo $servicesQuery['text1']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Başlık 2:</b> </label>
            <input type="text" name="header2" class="form-control" value="<?php echo $servicesQuery['header2']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Yazı 2:</b> </label>
            <input type="text" name="text2" class="form-control" value="<?php echo $servicesQuery['text2']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Başlık 3:</b> </label>
            <input type="text" name="header3" class="form-control" value="<?php echo $servicesQuery['header3']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Yazı 3:</b> </label>
            <input type="text" name="text3" class="form-control" value="<?php echo $servicesQuery['text3']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Başlık 4:</b> </label>
            <input type="text" name="header4" class="form-control" value="<?php echo $servicesQuery['header4']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Yazı 4:</b> </label>
            <input type="text" name="text4" class="form-control" value="<?php echo $servicesQuery['text4']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Başlık 5:</b> </label>
            <input type="text" name="header5" class="form-control" value="<?php echo $servicesQuery['header5']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Yazı 5:</b> </label>
            <input type="text" name="text5" class="form-control" value="<?php echo $servicesQuery['text5']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Başlık 6:</b> </label>
            <input type="text" name="header6" class="form-control" value="<?php echo $servicesQuery['header6']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Yazı 6:</b> </label>
            <input type="text" name="text6" class="form-control" value="<?php echo $servicesQuery['text6']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>

        <button type="submit" name="servicesUpdate" class="btn btn-primary ">Güncelle</button>
    </form>

    <?php
    require_once 'layouts/footer.php';
} else {
    header("Location:../index.php");
}
    ?>

