<?php
function speakup() {
    $input_filename = "input.txt";//读取文件名
    $output_filename = "output.mp3";//输出文件名


    $file = fopen($input_filename, "r");
    $txt = fread($file, filesize ($input_filename));//读取文本
    fclose($file);

    $per = 1;
    $voice = file_get_contents('https://api.vvhan.com/api/song?txt='.$txt.'&per='.$per);//调用接口

    $file = fopen($output_filename, "w") or die("Unable to open file!");
    fwrite($file, $voice);//储存音频文件
    fclose($file);
}

speakup()
?>