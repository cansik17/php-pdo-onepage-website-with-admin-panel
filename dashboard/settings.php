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
<h1 class="mt-4 mb-4">Site Ayarlarını Düzenle</h1>
<form method="POST" action="../configs/process.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="formGroupExampleInput">Site Logosu:</label><br>
        <img src="../<?php echo $settingsQuery['sitelogo']; ?>" width="250px" class="img-fluid" alt="Responsive image"><br>
        <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Site Adı:</label>
        <input type="text" name="sitename" class="form-control" value="<?php echo $settingsQuery['sitename']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Mail Adresi:</label>
        <input type="text" name="mail" class="form-control" value="<?php echo $settingsQuery['mail']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Telefon Numarası:</label>
        <input type="text" name="phone" class="form-control" value="<?php echo $settingsQuery['phone']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Açık Adres:</label>
        <input type="text" name="address" class="form-control" value="<?php echo $settingsQuery['address']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">smtphost:</label>
        <input type="text" name="smtphost" class="form-control" value="<?php echo $settingsQuery['smtphost']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">smtpuser:</label>
        <input type="text" name="smtpuser" class="form-control" value="<?php echo $settingsQuery['smtpuser']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">smtppassword:</label>
        <input type="text" name="smtppassword" class="form-control" value="<?php echo $settingsQuery['smtppassword']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">smtpport:</label>
        <input type="text" name="smtpport" class="form-control" value="<?php echo $settingsQuery['smtpport']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">facebook:</label>
        <input type="text" name="facebook" class="form-control" value="<?php echo $settingsQuery['facebook']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">twitter:</label>
        <input type="text" name="twitter" class="form-control" value="<?php echo $settingsQuery['twitter']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">instagram:</label>
        <input type="text" name="instagram" class="form-control" value="<?php echo $settingsQuery['instagram']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">youtube:</label>
        <input type="text" name="youtube" class="form-control" value="<?php echo $settingsQuery['youtube']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2"><b>Site Durumu:</b> </label>
        <select class="custom-select" name="durum" id="validationCustom04" required>
            <option <?php if ($settingsQuery['durum'] == "1") {
                        echo "selected";
                    } ?> value="1">Açık</option>
            <option <?php if ($settingsQuery['durum'] == "0") {
                        echo "selected";
                    } ?> value="0">Kapalı</option>

        </select>
    </div>



    <button type="submit" name="settingsUpdate" class="btn btn-primary ">Güncelle</button>
</form>

<?php
require_once 'layouts/footer.php';
} else {
    header("Location:../index.php");
    exit();
}
?>