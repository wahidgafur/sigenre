<?php
require '../conn.php';

$nama_pikr =$_POST['nama_pikr'];
$asal_sekolah =$_POST['asal_sekolah'];
$nama_ketua =$_POST['nama_ketua'];
$jumlah_anggota =$_POST['jumlah_anggota'];

$sql = mysqli_query($conn, "INSERT INTO pikr(nama_pikr, asal_sekolah, nama_ketua,  jumlah_anggota) 
                                            VALUES('$nama_pikr', '$asal_sekolah', '$nama_ketua', '$jumlah_anggota')");

if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil di Simpan!');
		window.location='pikr.php';
	</script>
<?php
}
?>