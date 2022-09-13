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


<!-- 2- -->
<?php
function reverse ($str){
    return strrev($str);
}
$str = "remove";
echo reverse("remove");
?>


<!-- 3- -->
<?php
function check_lowercase_string($string) {
    return ($string === strtolower($string));
}
 var_dump(check_lowercase_string('remove'));

?>















<!-- 8- -->
<?php
function remove_duplicates_list($list1) {
  $nums_unique = array_values(array_unique($list1));
  return $nums_unique ;
}
$nums = array(1,1,2,2,3,4,5,5);
print_r(remove_duplicates_list($nums));
?>