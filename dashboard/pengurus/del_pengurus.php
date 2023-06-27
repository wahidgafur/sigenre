<?php
require '../conn.php';

$id = $_GET['id'];

$sql = mysqli_query($conn, "DELETE FROM pengurus WHERE id_pengurus='$id' ");

if($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil di Hapus!!');
		window.location='pengurus.php';
	</script>
	<?php
}
	?>
