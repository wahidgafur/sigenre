<?php
require '../conn.php';

$id = $_GET['id'];

$sql = mysqli_query($conn, "DELETE FROM genre_peme WHERE id_peme='$id' ");

if($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil di Hapus!!');
		window.location='data_genre.php';
	</script>
	<?php
}
	?>
