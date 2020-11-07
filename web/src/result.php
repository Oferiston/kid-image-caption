<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <style>
    p {backdrop-filter: blur(10px);}
    body{background-image: url('uploads/result.jpg'); font-size:40px; color: white; font-weight:bold; }
    a {font-size:40px; color:white; font-weight:bold;}
    hint{
                position: relative;
                bottom:15%;
                left: 90%;
                font-size: 12px;
                font-weight: bold;
                color: white;
            }

    </style>
    <title></title>
  </head>
  <body>
  <center>
  <a href="http://127.0.0.1/upload.php"> Return </a>
  <p align="center">
    <img src="uploads/result.jpg" alt="result" width="60%"> 
  </p> 
   <audio id="sounds" src="uploads/result.wav" reload="auto" loop>
   </audio>
<p>
   <button onclick="document.getElementById('sounds').play();">Read Caption</button>			  
   <button onclick="document.getElementById('sounds').pause();">Stop Caption</button>
</p>
  </center>
  </body>
</html>

