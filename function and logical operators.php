<!-- 1- -->
<?php
function IsPrime($n)
{
for($x=2; $x<$n; $x++)
{
if($n %$x ==0)
{
return 0;
}
}
  return 1;
}
$a = IsPrime(3);
if ($a==0)
echo 'This is not a Prime Number.....'."\n";
else
echo 'This is a Prime Number..'."\n";
?>
<br>

<!-- 2- -->
<?php
function reverse ($str){
return strrev($str);
}
$str = "remove";
echo reverse("remove");
?>
<br>

<!-- 3- -->
<?php
function check_lowercase_string($string) {
return ($string === strtolower($string));
}
 var_dump(check_lowercase_string('remove'));

?>
<br>
<!-- 4- -->

<?php

function swap($x, $y) {
  echo "Before Swap.\n";
  echo "x = $x \n";
  echo "y = $y \n";

  //Swap technique
  $x = $x ^ $y;
  $y = $x ^ $y;
  $x = $x ^ $y;

  echo "After Swap.\n";
  echo "x = $x \n";
  echo "y = $y \n";
}

echo swap(12, 10);
?>




<br>
<!-- 6- -->
<?php
function armstrongCheck($number){
    $sum = 0; 
    $x = $number; 
    while($x != 0) 
    { 
        $la = $x % 10; 
        $sum = $sum + ($la*$la*$la); 
        $x = $x / 10; 
    } 

    if ($number == $sum)
        return 1;


    return 0;
}
 
$number = 407;
$cheak= armstrongCheck($number);
if ($cheak == 1)
    echo " is Armstrong Number
    ";
else
    echo "No"
?>


<br>
<!-- 7- -->
<?php
// function Palindrome($number){ 
//     $temp = $number; 
//     $new = 0; 
//     while (floor($temp)) { 
//         $r = $temp % 10; 
//         $new = $new * 10 + $r; 
//         $temp = $temp/10; 
//     } 
//     if ($new == $number){ 
//         return 1; 
//     }
//     else{
//         return 0;
//     }
// } 
// $original = 1441;
// if (Palindrome($original)){ 
//     echo " Yes it is a Palindrome"; 
// }
// else { 
// echo "Not a Palindrome"; 
// }
 
// ?>

// <?php

// function Palindrome($string){  

//     if (strrev($string) == $string){  

//         return 1;  

//     }

//     else{

//         return 0;

//     }
// }  
 

// $str = "Eva, can I see bees in cave"; 

// if(Palindrome($str){  

//     echo "Palindrome";  
// } 

// else {  

// echo "Not a Palindrome";  
// }

// ?>

<?php

function Palindrome($str)
{

    $String = strtolower(str_replace(array('', "'", ':', ';', '<', '-', '+', "*", '\\', "\"", " ", ","), '', $str));
    $m = strlen($String);
    for ($i = 0; $i < $m; $i++) {
        if (substr($String, strlen($String) - $i - 1, 1) != substr($String, $i, 1)) {
            return "this string is not palindrome";
        }
    }
    return "this string is palindrome";
}
echo Palindrome("Eva, can i see bees in a cave ") ;

?>








<br>
<!-- 8- -->
<?php
function remove_duplicates_list($list1) {
  $nums_unique= array_values(array_unique($list1));
  return $nums_unique ;
}
$nums = array(2,4,7,4,8,4);
print_r(remove_duplicates_list($nums));
?>



<br>
<br>
<br>
<!-- --------------------------------------------------------------------------------------------------- -->
<!-- logical operators -->

<!-- 1- -->
<?php
function year_check($my_year)
{ if ($my_year % 4 == 0) print("It is a leap year"); 
 else print("This year is not a leap year"); }
 year_check("2013");
 echo "<br>" ;
 ?>
<!-- 2- -->
<?php
// $var = 27;  
// if ($var > "20") {
//     echo "It is summertime!";
//   }

$tempreture = 27;
function summer($tempreture){
if ($tempreture < 20) {
    echo "its winter <br>";
} else {
    echo "its summertime <br>";
}
}
summer($tempreture);

  ?>
<br>
<!-- 3- -->
<?php
function test($a, $b) 
{
    return $a == $b? ($a + $b)*3 :  false;
}
echo test(2, 2);
?>
<br>
<!-- 4- -->
<?php
function multipleOfThree($num)
{
    if ($num % 3 == 0 && $num > 0) {
        return "true";
    } else {
        return "false";
    }
}
print multipleOfThree(10) . "<br>";

?>


<!-- 5- -->
<?php
function oo($num) 
{
   return $num % 3 == 0 || $num % 7 == 0;
}

var_dump(oo(20));
?>

<br>
<!-- 6- -->
<?php
function str($num) 
{
   return $num >= 20 && $num <=50;
}

var_dump(str(50));

?>


<br>
<!-- 7- -->
<?php
 function big($x, $y, $z) 
 {
  $max = max($x, max($y, $z));
  return $max;
}

echo big(1, 5, 9)."\n";

?>
<br>
<!-- 8- -->
<?php
function Bill($value)
{
    if ($value <= 50) {
        return $value * 2.5;
    } else if ($value <= 150) { 
       $valueUnder50 = 50 * 2.5;
       $valueUnder150 = ($value - 50) * 5; 
       return $valueUnder50 + $valueUnder150;
    } else if ($value <= 250) { //170
       $valueUnder50 = 50 * 2.5;
       $valueUnder150 = 100 * 5; 
       $valueUnder250 = ($value - 150) * 6.2;
       return $valueUnder50 + $valueUnder150 + $valueUnder250;
    } else {
       $valueUnder50 = 50 * 2.5; 
       $valueUnder150 = 100 * 5; 
       $valueUnder250 = 100 * 6.2; 
       $valueAbove250 = ($value - 250) * 7.5;
       return $valueUnder50 + $valueUnder150 + $valueUnder250 + $valueAbove250;
    }
}

echo Bill(250);

?>

<br>
<!-- 9- -->
<?php

// function calculater($r1, $r2, $result) {
//         switch($result) {            
//             case '+':
//                 $result = $r1 + $r2;
//                 break;
//             case '-':
//                 $result = $r1 - $r2;
//                 break;
//             case '*':
//                 $result = $r1 * $r2;
//                 break;
//             case '/':
//                 $result = $r1 / $r2;
//                 break;       
//         }
//         return $result;
//     }
    // echo calculator (1,1,'+');
    
    
    
    
    
    
    function calculator($r1, $r2, $result)
{
    switch ($result) {
        case '+':
            return $r1 + $r2;
            break;
        case '-':
            return $r1 - $r2;
            break;
        case '*':
            return $r1* $r2;
            break;
        case '/':
            return $r1 / $r2;
            break;
    }
    return $result;
}

echo calculator(14, 8, '+');
    ?>
<br>
<!-- 10- -->
<?php
function vote() 
{
    $name = " ";
    $age = 15;
    if ($age >= 18) {
        echo $name . ", you Are Eligible For Vote";
    } else {
        echo $name . "is no eligible to vote. ";
    }
}
vote();


  ?>
<br>
<!-- 11- -->
<?php

  function pass($x) {
    if ($x > 0)
      echo "Positive ";
    if ($x == 0)
      echo "Zero";
    if ($x < 0)
     echo "Negative ";

  }
  
  echo pass(-60);
  ?>
<br>
<!-- 12- -->
<?php

$array = array(60,86,95,63,55,74,79,62,50);
$avg = array_sum($array) / count($array);
function grade($x) {
  if ($x < 60)
   echo "F ";
   else if ($x < 70)
   echo "D ";
  else if ($x < 80)
   echo "C ";
  else if ($x < 90)
   echo "B ";
  else if($x < 100)
   echo "A ";

}

 echo grade($avg);



?> 

