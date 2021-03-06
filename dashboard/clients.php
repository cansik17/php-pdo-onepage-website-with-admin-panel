
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
    <div class="mt-4">
        <h1>Referans Şirketler Bölümü</h1>
        <a href="clientsStore.php" class="float-right mb-3"><button class="btn btn-primary">Yeni Referans Ekle</button></a>
    </div>

    <div class="table-responsive-md ">

        <table class="table w-100 ">
            <thead class="bg-secondary text-white font-italic  ">

                <tr>

                    <th scope="col">
                        <h4>id</h4>
                    </th>
                    <th scope="col">
                        <h4>Resim Altyazısı</h4>
                    </th>
                    <th scope="col">
                        <h4>Resim</h4>
                    </th>

                    <th scope="col">
                        <h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h4>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php


                foreach ($clientsQuery as $row) {
                ?>

                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['alt']; ?></td>
                    <td>
                        <img src="../<?php echo $row['image']; ?>" width="100px" class="img-fluid" alt="Responsive image"><br>

                    </td>

                    <td>
                        <a href="../configs/process.php?clientsDelete=ok&id=<?php echo $row['id']; ?>" title="Sil" class="badge badge-danger ">Sil</a>
                    </td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
        <?php
        require_once 'layouts/footer.php';
} else {
    header("Location:../index.php");
}
        ?>
