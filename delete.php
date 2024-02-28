<?php
include 'koneksi.php';
$id = $_GET['nim'];
$query = mysqli_query($konek, "DELETE FROM mahasiswa WHERE nim = '$id'");
//var_dump(mysqli_fetch_array($query));
if(!$query){
	echo "DATA GAGAL DIHAPUS";
}else{
	echo "DATA BERHASIL DIHAPUS";
	echo '<script type="text/javascript">
                    alert("Data terhapus");
                    window.location.href = "index.php";
                </script>';
}
?>
