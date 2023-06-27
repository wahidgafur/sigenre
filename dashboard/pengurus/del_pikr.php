<?php
require '../conn.php';

$id = $_GET['id'];

$sql = mysqli_query($conn, "DELETE FROM pikr WHERE id_pikr='$id' ");

if($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil di Hapus!!');
		window.location='pikr.php';
	</script>
	<?php
}
	?>
