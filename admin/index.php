<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
					<div class="jumbotron">
						<h2>SELAMAT DATANG ( <?php echo $_SESSION['username'];?> )</h2>
						<p>Ini adalah Website SMA Negeri 5 Medan, Kelola Data dan Informasi. </p>
						<p><a class="btn btn-success btn-lg" href="tampil-siswa.php" role="button">Siswa</a>
						<a class="btn btn-success btn-lg" href="tampil-Guru.php" role="button">Guru</a>
						<a class="btn btn-primary btn-lg" href="tampil-user.php"role="button">User</a></p>
				</div>
      </div>
		</div>
</div><!-- Akhir Jumbotron -->
<?php include "footer.php";?>