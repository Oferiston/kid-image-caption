<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <style>
    p {backdrop-filter: blur(10px);}
    body{background-image: url('uploads/seass.jpg'); font-size:40px; color: white; font-weight:bold; }
    a {font-size:20px; color:white; font-weight:bold;}
    hint{
                position: relative;
                bottom: 5%;
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
  Here is The Result
  <p align="center">
    <img src="uploads/seass.jpg" alt="result" width="80%"> 
  </p> 
   <audio id="sounds" src="uploads/testSound.wav" reload="auto" loop>
   </audio>
<p>
   <button onclick="document.getElementById('sounds').play();">Read Caption</button>			  
   <button onclick="document.getElementById('sounds').pause();">Stop Caption</button>
</p>
    <header></header>
    <main></main>
  </center>
  <hint>
        <form action="http://127.0.0.1/upload.php">
           <input type="submit" value="Return">
        </form>
    </hint>

  </body>
</html>

