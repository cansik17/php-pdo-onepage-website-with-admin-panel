
    <?php
    if (isset($_SESSION["admin"])) {

    require_once 'layouts/header.php';
    require_once '../configs/config.php';

    $id = safe($_GET['id']);

    $query  =    $db->prepare("SELECT * FROM projects WHERE id=? ");
    $query->execute([$id]);
    $project = $query->fetch(PDO::FETCH_ASSOC);
    ?>

    <!-- içerik bölümü  -->



    <div class="mt-4">
        <h1>Referansı Düzenle</h1>
        <a href="projects.php" class="float-right mb-3"><button class="btn btn-primary">Geri</button></a>
    </div>
    <form method="POST" action="../configs/process.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
        <div class="form-group">
            <label for="formGroupExampleInput">Resim:</label><br>
            <img src="../<?php echo $project['image']; ?>" width="250px" class="img-fluid" alt="Responsive image"><br>
            <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Başlık:</b> </label>
            <input type="text" name="title" class="form-control" value="<?php echo $project['title']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1"><b>Açıklama:</b> </label>
            <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"><?php echo $project['text']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Link:</b> </label>
            <input type="text" name="link" class="form-control" value="<?php echo $project['link']; ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Kategori:</b> </label>
            <select class="custom-select" name="filter" id="validationCustom04" required>
                <option <?php if ($project['filter'] == "web") {
                            echo "selected";
                        } ?> value="web">Web</option>
                <option <?php if ($project['filter'] == "mobile") {
                            echo "selected";
                        } ?> value="mobile">Mobil</option>
                <option <?php if ($project['filter'] == "eticaret") {
                            echo "selected";
                        } ?> value="eticaret">E-ticaret</option>
            </select>
        </div>


        <button type="submit" name="projectsUpdate" class="btn btn-primary ">Güncelle</button>
    </form>

    <?php
    require_once 'layouts/footer.php';
} else {
    header("Location:../index.php");
}
    ?>
