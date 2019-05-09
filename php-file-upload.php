<?php

<form name="form1" enctype="multipart/form-data" method="post" action="file_upload.php">
    Dosya Secin: <input style="width:150px" type="file" name="uploaded_file">
    <input type="submit" name="form_adi" value="Ekle">                       
</form>

//Post edilen uploaded_file isimli dosyayi almak için;

$target_path = "uploads/";
$target_path = $target_path . basename( $_FILES['uploaded_file']['name']);
$temp_path = $_FILES['uploaded_file']['tmp_name'];
if(move_uploaded_file($temp_path, $target_path)) {
    echo "resim yuklendi<br>";
    echo $target_path;
} else{
    echo "resim yuklenemedi!";
}

?>
