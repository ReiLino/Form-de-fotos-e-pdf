<?php
if(isset($_FILES['imgUpload'])){
  $img_name = $_FILES['imgUpload']['name'];
  $img_size = $_FILES['imgUpload']['size'];
  $img_tmp = $_FILES['imgUpload']['tmp_name'];
  $img_type = $_FILES['imgUpload']['type'];
  $img_ext = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));

  if($img_ext == "jpg" || $img_ext == "png" || $img_ext == "bmp"){
    move_uploaded_file($img_tmp, "uploads/".$img_name);
    echo '<img src="uploads/'.$img_name.'" alt="Imagem enviada">';
  }
  else{
    echo "Somente arquivos JPG, PNG e BMP são permitidos.";
  }
}

if(isset($_FILES['pdfUpload'])){
  $pdf_name = $_FILES['pdfUpload']['name'];
  $pdf_size = $_FILES['pdfUpload']['size'];
  $pdf_tmp = $_FILES['pdfUpload']['tmp_name'];
  $pdf_ext = strtolower(pathinfo($pdf_name, PATHINFO_EXTENSION));

  if($pdf_ext == "pdf"){
    move_uploaded_file($pdf_tmp, "uploads/".$pdf_name);
    echo '<a href="uploads/'.$pdf_name.'">Baixar PDF</a>';
  }
  else{
    echo "Somente arquivos PDF são permitidos.";
  }
}
?>
