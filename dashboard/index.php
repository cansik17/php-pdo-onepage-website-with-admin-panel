<?php
if (isset($_SESSION["admin"])) {

	require_once 'layouts/header.php';
	require_once '../configs/config.php';
?>

	<!-- içerik bölümü  -->
	<?php
	if (isset($_GET['login'])) {
		if ($_GET['login'] == 'ok') { ?>

			<script>
				Swal.fire({
					position: 'center',
					icon: 'success',
					title: 'Giriş başarıyla yapılmıştır...',
					showConfirmButton: false,
					timer: 2500
				})
			</script>

		<?php } elseif ($_GET['login'] == 'no') { ?>

			<script>
				Swal.fire({
					position: 'center',
					icon: 'error',
					title: 'Giriş başarısız...',
					showConfirmButton: true,
					timer: 5000
				})
			</script>
	<?php }
	} ?>
	<h1 class="mt-4">Yönetim Paneli</h1>
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item active">Sol Taraftaki seçenekleri kullanarak web sitenizi yönetebilirsiniz...</li>
	</ol>

<?php
	require_once 'layouts/footer.php';
} else {
	header("Location:../index.php");
	exit();
}

?>