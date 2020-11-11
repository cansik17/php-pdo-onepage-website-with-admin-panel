
    <?php

    if (isset($_SESSION["admin"])) {


    require_once 'layouts/header.php';
    require_once '../configs/config.php';




    ?>

    <!-- içerik bölümü  -->
    <div class="mt-4">
        <h1>Yeni Referans Ekleme Bölümü</h1>
        <a href="projects.php" class="float-right mb-3"><button class="btn btn-primary">Geri</button></a>
    </div>


    <form method="POST" action="../configs/process.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="formGroupExampleInput">Resim:</label><br>
            <img id="resim" src="" width="250px" class="img-fluid" alt="Responsive image"><br>
            <!-- CANLI RESİM        -->
            <input type="file" name="img" class="form-control-file" onchange="$('#resim')[0].src = window.URL.createObjectURL(this.files[0])" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Başlık:</b> </label>
            <input type="text" name="title" class="form-control" value="" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1"><b>Açıklama:</b> </label>
            <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Link:</b> </label>
            <input type="text" name="link" class="form-control" value="" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><b>Kategori:</b> </label>
            <select class="custom-select" name="filter" id="validationCustom04" required>
                <option value="web">Web</option>
                <option value="mobile">Mobil</option>
                <option value="eticaret">E-ticaret</option>
            </select>
        </div>


        <button type="submit" name="projectsStore" class="btn btn-primary ">Ekle</button>
    </form>




    <?php
    require_once 'layouts/footer.php';
} else {
    header("Location:../index.php");
}
    ?>
