
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
	  echo "<p align=center style='color:green'>file is " . $check["mime"] . " type </p>"; 
	  echo "<p align=center style='color:green'>your file has been uploaded.</p>";
    $uploadOk = 1;
  } else {
    echo "<p align=center style='color:red'>file is not an image.</p>";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "<p align=center style='color:red'>your file is too large.</p>";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "<p align=center style='color:red'>only JPG, JPEG, PNG & GIF files are allowed.</p>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  
// if everything is ok, try to upload file
} else {
       echo "<p align=center style='color:green'>your file has been uploaded.</p>";
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	  echo "<p align=center style='color:green'>your file has been uploaded.</p>";
	  echo "<p align=center style='color:green'>The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.</p>";
  } else {
    print_r($_FILES);	    
    echo "<p align=center style='color:red'>Sorry, there was an error uploading your file.</p>";
  }
}
?>
<html lang="" >
    <head>
        <meta charset="utf-8">
        <style>
            p {backdrop-filter: blur(10px);}
            
            title {color: rgb(64, 64, 64); font-size:100%; background-color:rgb(222, 222, 222); margin: 20px 0; line-height: 1.6;}
            
            text {font-weight:bold;}

            body{background-image: url('uploads/mountain.jpg'); font-size:40px; color: white; }
            h1{color: white;}
            h2{color: white;}
            hint{
                position: absolute;
                bottom: 8px;
                right: 16px;
                font-size: 12px;
                font-weight: bold;
                color: white;
            }

            .centers{
                position:absolute;
                bottom:15px;
                left:20%;
		width:60%;
            }

            .centers .btn{
                background:#e7e7e7; 
                color: black;
                width: 28%;
                text-align: center;
                font-weight:bold;
                padding:17px;
                border-radius: 12px;
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            }
            
            .centers .btn:hover{
                background:#3589e8; 
                color: white;
                text-align: center;
                width: 28%;
                font-weight:bold;
                padding:17px;
                border-radius: 12px;
            }
        </style>
        <title>Kid Image Caption</title>
    </head>
<center>
<body>
<center>
    <div id = "grad">
        <centers>
            <h1>Welcome !</h1>
	    <h2>to the Kid Image Caption Website</h2>
            <form action="" method="post" enctype="multipart/form-data">
		Choose an image here:<br></br>
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
            </form>
            <hint> Hgw, Xwf, Shr and Wwc</hint>
        </centers>
    </div>
</center>
    </body>
</center>
</html>
 

