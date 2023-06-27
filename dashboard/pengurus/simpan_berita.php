<?php
require '../conn.php';

$tgl        =$_POST['tgl'];
$judul      =$_POST['judul'];
$kategori   =$_POST['kategori'];
$isi        =$_POST['isi'];
$file       =$_POST['file'];

$sql = mysqli_query($conn, "INSERT INTO berita(Tanggal, judul_berita, Kategori, isi_berita, foto) VALUES('$tgl', '$judul', '$kategori', '$isi', '$file')");

if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Berita Berhasil di Simpan!');
		window.location='inputberita.php';
	</script>
<?php
}
?>