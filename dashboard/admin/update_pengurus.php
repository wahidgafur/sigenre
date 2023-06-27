<?php
require '../conn.php';

$nama =$_POST['nama'];
$email =$_POST['email'];
$pass =$_POST['password'];
$level =$_POST['level'];
$id = $_POST['id'];

$sql = mysqli_query($conn, "UPDATE user SET nama ='$nama',
												email ='$email',
												password ='$pass',
												nama ='$nama',
												level = '$level' WHERE id_user='$id'");

if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil di Edit!');
		window.location='pengurus.php';
	</script>
<?php
}
?>