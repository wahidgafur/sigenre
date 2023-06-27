<?php
require '../conn.php';

$nama_pengurus =$_POST['nama_pengurus'];
$jabatan =$_POST['jabatan'];
$angkatan =$_POST['angkatan'];

$sql = mysqli_query($conn, "INSERT INTO pengurus(nama_pengurus, jabatan, angkatan) 
                                            VALUES('$nama_pengurus', '$jabatan', '$angkatan')");

if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil di Simpan!');
		window.location='pengurus.php';
	</script>
<?php
}
?>