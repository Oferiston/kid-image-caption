## Here is the package file of web 
you should build a php environment and make directories like this:
~~~bash
$ cd phpDirectory
$ ls -F
uploads/ result.php upload.php
$ cd uploads
$ ls -F
result.wav result.jpg mountain.jpg
~~~
result.wav is the sound file of the caption. result.jpg is the picture with caption on it and mountain.jpg is the background image of the first page.
## type local loop IP address in address bar http://127.0.0.1/upload.php
and choose a picture with apropriate size, you will see the uploaded  picture shown in the result page

## some info
* lack a simple procedure to rename the uploaded picture to result.jpg after deleting other images in the folder
* the loading time is flexible, set 5 seconds temporarily
