//1-
<?php
$color = array('white', 'green', 'red');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment:
the $color[2] carpet,
the $color[1] lawn, 
the $color[0] house,the leaden sky. 
The new president and his first lady. - Richard M. Nixon"."\n";
?>

<br>
//2-
<?php

$color = array('white', 'green', 'red');
foreach ($color as $c)
{
echo "$c, ";
}
sort($color);
echo "<ul>";
foreach ($color as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";
?>

<br>
//3-
<?php
$cap = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", 
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", 
"Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

asort($cap) ;
foreach($cap as $country => $capital)
{
echo "The capital of $country is $capital"."\n" ;
}?>

<br>
//4-
<?php
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color)."\n";
?>
<br>
//5-
<?php
$var = array( '1','2','3','4','5' );
echo 'var array : '."\n";
foreach ($var as $x) 
{echo "$x ";}
$i = '$';
array_splice( $var, 3, 0, $i ); 
echo " \n After inserting '$' the array is : "."\n";
foreach ($var as $x) 
{echo "$x ";}
echo "\n";
?>
<br>

//6-
<?php
 $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
 asort($fruits);
 foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
 }
?>
<br>
//7-
<?php
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
 $temp_array = explode(',', $month_temp);
 $tot_temp = 0;
 $temp_array_length = count($temp_array);
 foreach($temp_array as $temp)
 {
  $tot_temp += $temp;
 }
  $avg_high_temp = $tot_temp/$temp_array_length;
  echo "Average Temperature is : ".$avg_high_temp."
// "; 
 sort($temp_array);
 echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
 echo $temp_array[$i].", ";
 }
 echo "List of five highest temperatures :";
 for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
 {
 echo $temp_array[$i].", ";
 }
?>
<br>
//8-
<?php
 $my_array1 = array("color" => "red", 2, 4);
 $my_array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
 $res = array_merge($my_array1, $my_array2);

 print_r($res);
 ?>


<br>
//9-
<?php
$colors = array("red","blue", "white","yellow");


 $colors_convert = array_map("strtoupper", $colors);

 foreach( $colors_convert as $NewArray ) {
 
  echo $NewArray . '</br>' ;
 
 }
 ?>




<br>
//10-
<?php
$colors = array("RED","BLUE", "WHITE","YELLOW");

 $colors_convert = array_map("strtolower", $colors);

 foreach( $colors_convert as $NewArray ) {
 
  echo $NewArray . '</br>' ;
 
  }
 ?>

<br>
//11-

<?php
//  echo implode(",",range(200,250,4))."\n";
for($i = 200; $i <= 250; $i ++)
{
    if ($i % 4==0){
        print($i."\n");
    }

}
 ?>


<br>
//12-
<?php
// $my_array = array("abcd","abc","de","hjjj","g","wer");
// $new_array = array_map('strlen', $my_array);
// echo "The shortest array length is " . min($new_array) .
// ". The longest array length is " . max($new_array).'.';

$my_array = array("abcd","abc","de","hjjj","g","wer");
$min = 0;
$max = 1;
foreach($my_array as $a){
  $length = strlen($a);
  if ($length > $max) { 
       $max = $length;
  } else if ($length < $min) { 
       $min = $length;
  }
}
$new_array = array_map('strlen', $my_array);
echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';


?>

//  <br>
//13-
 <?php
 $n=range(11,20);
 shuffle($n);
 for ($x=0; $x< 10; $x++)
 {
 echo $n[$x].' ';
 }
 echo "\n"
 ?>



<br>
//14-
 <?php

 function min_values_not_zero(Array $values) 
 {
 return min(array_diff(array_map('intval', $values), array(0)));
 }
 print_r(min_values_not_zero(array(2, 0, 10, 12, 6))."\n");
?>







<br>
///////////////////////////////////////////////////////////////////////////////////////////
// loop
<br>
// 1-
<?php
for($x=1; $x<=10; $x++)
{
 if($x< 10)
 {
 echo "$x-";
 }
 else
  {
 echo "$x"."\n";
  }
}
?>

<br>

// 2-

<?php
$sum = 0;
for($x=1; $x<=30; $x++)
{
$sum +=$x;
}
echo "The sum of the numbers 0 to 30 is $sum"."\n";
?>
<br>
// 3-











<br>
// 6-

<?php
$n = 6;
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=($i+1); 
}
echo "The factorial of  $n = $x"."\n";
?>
<br>
// -8

<?php
$text="Orange Coding Academy";
$search_char="c";
$count="0";
for($x="0"; $x< strlen($text); $x++)
  { 
    if(substr($text,$x,1)==$search_char)
    {
    $count=$count+1;
	 }
  }
echo $count."\n";
?>









<br>
// -9

<?php
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }
?>


<br>
// -10

<?php
for ($i = 1; $i <= 100; $i++)
{
  if ( $i%3 == 0 && $i%5 == 0 )
   {
     echo $i . " FizzBuzz"."\n" ;
   }
  else if ( $i%3 == 0 ) 
   {
     echo $i. " Fizz"."\n";
   }
     else if ( $i%5 == 0 ) 
   {
     echo $i. " Buzz"."\n";
   }
     else
   {
     echo $i."\n";
   }
 }
?>

<br>
// -11

<?php
$n = 5; 
echo "n = " . $n . "\n";
$count = 1;
for ($i = $n; $i > 0; $i--) 
{
  for ($j = $i; $j < $n + 1; $j++) 
   {
     printf("%4s", $count);
     $count++;
   } 
	echo "\n";
   }
?>


<br>
// -12

<?php

?>
































