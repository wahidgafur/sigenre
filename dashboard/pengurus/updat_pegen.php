<?php
require '../conn.php';

$np_putra =$_POST['np_putra'];
$np_wanita =$_POST['np_wanita'];
$tahun =$_POST['tahun'];
$id = $_GET['id'];

$sql = mysqli_query($conn, "UPDATE genre_peme SET np_putra ='$np_putra',
												np_wanita ='$np_wanita',
												tahun ='$tahun' WHERE id_peme='$id'");

if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil di Edit!');
		window.location='admin.php?url=lihat_petugas';
	</script>
<?php
}
?>