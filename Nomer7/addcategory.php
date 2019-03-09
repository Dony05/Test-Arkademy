<?php
include"koneksi.php";

    $category = $_POST['category'];
    if(empty($category)){
	   echo "<script>alert('category belum diisi')</script>";
	   echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    } else { 
      $save = "INSERT INTO categories SET
                    name = '$category'";
      mysqli_query($koneksi, $save) 
      or die ("Gagal menambah Category". mysql_error());
       echo "<script>alert('Category tersimpan')</script>";
	   echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    }

?>
