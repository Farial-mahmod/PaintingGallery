<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"DTD/xhtml1-transitional.dtd">


<html>
<head>
<center>
<title>Easha Nicea</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="SA.jpg">

<style>

body{
background-image: url("r.jpg");
background-color: lavender;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
    
}

ul{
list-style-type: none;
}
li{
float: left;
padding: 10px;
margin: 10px;
font: bold 10px Verdana, sans-serif;
}

img
{
display: block;
border: 9px solid white;
margin-bottom: 5px;
color: white;
}

</style>
</head>

<body><center>

<h1><font color="lightbrown" face="Comic Sans MS"><i><b>Easha - Nicea's <br> Gallery</i></font>
<br>
<ul>
<?php

error_reporting(0);

echo "<center>";

// defining location of photo images

$photosDir = './easha';

// defining file extensions for images

$photosExt = array('gif', 'jpg', 'jpeg', 'tif', 'tiff', 'bmp', 'png');

// initializing array to hold filenames of images found

$photosList = array();


/* reading directory contents
plus, building photo list */

if (file_exists($photosDir)) //checking file's existance
{
$dp = opendir($photosDir) or die ('ERROR: Cannot open directory');
while ($file = readdir($dp)) 
{
if ($file != '.' && $file != '..') 
{
$fileData = pathinfo($file);
if (in_array($fileData['extension'], $photosExt)) {
$photosList[] = "$photosDir/$file";
}
}
}

closedir($dp);
} 

else
{
die ('ERROR: Directory does not exist.');
}

// iterating over photo list to display each image with filename

if(count($photosList) > 0) 
{
for($x=0; $x<count($photosList); $x++) {
?>

<li>
<img height="150" width="200" border="89"
src="<?php
 echo $photosList[$x]; ?>" />
 
<?php echo basename($photosList[$x]); ?><br/>

<?php // echo round(filesize($photosList[$x])/1024) . ' KB'; ?>
</li>


<?php
}
} 
else{
die('ERROR: No images found in directory');
}

?>

</ul> 

<br><br><br> <br><br><br><br><br><br><br><br><br>
<marquee scrollamount=17 behavior=alternate><b><font size=6 color="salmon"> W </font></marquee> <br>
<marquee scrollamount=17 behavior=alternate><font size=6 color="magenta">&nbsp;&nbsp; E </font></marquee><br/>
<marquee scrollamount=17 behavior=alternate><font size=6 color="blue">&nbsp;&nbsp;&nbsp;&nbsp; L</font></marquee> <br/>
<marquee scrollamount=17 behavior=alternate><font size=6 color="lime">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 C</font></marquee><br/>
<marquee scrollamount=17 behavior=alternate><font size=6 color="hotpink">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  O</font> </marquee><br/>
<marquee scrollamount=17 behavior=alternate><font size=6 color="indigo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 M</font></marquee><br/>
<marquee scrollamount=17 behavior=alternate><font size=6 color="crimson">&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
E</font></marquee></marquee>


</body>
</html>