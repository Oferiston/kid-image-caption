## this folder is responsible with wwc
### this folder include functions:
* speak up a given text
* can repeat the speak up process and pause when the user wants
* can change the volume
* may offer selections about sounds like male sound and female sound
### this folder will complete functions: input a string and the string will be spoken up throught the microphone


-wwc
-Find the api interface for text-to-speech ：https://api.vvhan.com/api/song
Request format：
https://api.vvhan.com/api/song?txt=content

sample：
<?php
if(isset($_GET['per'])){
$per=$_GET['per'];
if($per>0&&$per<7){
$per=$per;
}
}else{
$per=4;
}
if(isset($_GET['txt'])){
$txt=$_GET['txt'];
header("Content-Type: audio/mpeg");
$voice = file_get_contents('https://api.vvhan.com/api/song?txt='.$txt.'&per='.$per);
exit($voice);
}else{
header('Content-type:application/json;charset=UTF-8');
exit('{"code":-1,"msg":"参数不完整"}');
}
?>
