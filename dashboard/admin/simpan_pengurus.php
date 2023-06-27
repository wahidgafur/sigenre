<?php
require '../conn.php';

$nama =$_POST['nama'];
$email =$_POST['email'];
$pass =$_POST['password'];
$level =$_POST['level'];

$sql = mysqli_query($conn, "INSERT INTO user(nama, email, password,  level) VALUES('$nama', '$email', '$pass', '$level')");

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