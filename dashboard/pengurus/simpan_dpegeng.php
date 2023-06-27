<?php
require '../conn.php';

$np_putra =$_POST['np_putra'];
$np_wanita =$_POST['np_wanita'];
$tahun =$_POST['tahun'];

$sql = mysqli_query($conn, "INSERT INTO genre_peme(np_putra, np_wanita, tahun) 
                                            VALUES('$np_putra', '$np_wanita', '$tahun')");

if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil di Simpan!');
		window.location='data_genre.php';
	</script>
<?php
}
?>