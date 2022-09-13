<!-- 1- -->
<?php

$str = "hello";
echo strtoupper($str);

?>

<br>

<?php
$str = "ORANGE";
echo strtolower($str);
?>

<br>

<?php
$str = "rahaf";
echo ucfirst($str);
?>
<br>
<?php
$str = "hi i love php";
echo ucwords($str);
?>

<br>
<!-- 2- -->
<?php
$str= "085119"; 
echo substr(chunk_split($str, 2, ':'), 0, -1)."\n";
?>

<br>
<!-- 3- -->
<?php
$str = "I am a full stack developer at orange coding acadimy";
if (strpos($str,"orange") !== false) 
 {
    echo "Word found";
 }
else
 {
    echo "The specific word is not present";
 }
?>

<br>
<!-- 4- -->

<?php
$path = "www.orange.com/index.php";
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; 
?>

<br>
<!-- 5- -->
<?php
$mailid  = "info@orange.com";
$user = strstr($mailid, "@", true);
echo $user."\n";
?>

<br>
<!-- 6- -->
<?php
$str = "info@orange.com";
echo substr($str, -3)."\n";
?>

<br>
<!-- 7- -->
<?php
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(8)."\n";
?>
<br>
<!-- 8- -->
<?php
$str = "That new trainee is so genius";
echo preg_replace('/That/', 'Our', $str, 1)."\n"; 
?>

<br>
<!-- 9- -->
<?php
$str1 = 'dragonball';
$str2 = 'dragonboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
?>
8+9



<br>
<!-- 11- -->
<?php
$cha = 7;
$next_cha = ++$cha; 
if (strlen($next_cha) > 1) 
{
$next_cha = $next_cha[0];
}
echo $next_cha;
?>
<br>
<!-- 12- -->
<?php
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."\n";
?>
<br>
<!-- 13- -->
<?php
$x = '000657022.24';
$str1 = ltrim($x, '0');
echo $str1."\n";
?>
<br>
<!-- 14- -->
<?php
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str)."\n";
?>
<br>
<!-- 15- -->
<?php
$my_str = 'The quick brown fox jumps over the lazy dog///';
echo rtrim($my_str, '/')."\n";
?>
<br>
<!-- 16- -->
<?php
$my_str = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str)."\n";
?>
<br>
<!-- 17- -->
<?php
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";
?>

<br>

<!-- 18- -->
<?php
$x = '2,543.12';
$str1 = ltrim($x, '0');
echo $str1."\n";
?>




<br>
<!-- 19- -->
<?php
for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 echo "\n" ;
?>

<br>
<br>
<br>
<!-- ex -->
<?php
function sayHi(){
    
    return "say hello";
    
}

var_dump(sayHi()) ;
 ?>
 
 
 <br>
 <br>
 <?php
 function calculateAge($age){
    $result=$age*365;
    return $result+1;  //stop excute anything
    echo "hello";
 }
 
  echo calculateAge("23");








 



