<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <label for="imgUpload">Enviar Imagem:</label>
  <input type="file" name="imgUpload" id="imgUpload" accept=".jpg, .png, .bmp">
  
  <br><br>
  
  <label for="pdfUpload">Enviar PDF:</label>
  <input type="file" name="pdfUpload" id="pdfUpload" accept=".pdf">
  
  <br><br>
  
  <input type="submit" value="Enviar">
</form>


</body>
</html>