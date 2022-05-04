<?php
$dir=scandir('Templates');


foreach($dir as $index => $file)
if(is_file("Templates/$file"))
{
// $caption = preg_replace('/^(.*)\..*$/','\1',$file ); // regex nochmal nachvollziehen  
  //$caption = ucfirst($caption); //dient zur Großschreiung des ersten Buchstaben 
    //echo     "<figure id = '$caption'>\n";
    echo     "<img src='Templates/$file'>\n";
    //echo     "<figcaption>$caption</figcaption>";
    echo     "</figure>";
}
/*  foreach($dir as $index => $file)
    if(is_file("Templates/$file"))
    echo "$index : $file \n"; //oder auch {$dir[$index]}
*/
/* for($i = 0; $i < count($dir); $i++)
if(is_file('Templates/' . $dir[$i]))
echo $dir[$i] . "\n";
*/

?>