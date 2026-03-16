<?php 
//bezargumentowa
function cos9(){
   echo "rd";

}
cos9();
//zwracajaca
function cos2(){
	echo "<br>";
   return "cze";  
 
 
}

$cos5 = cos2();
echo $cos5;
echo "<br>";
//przyjmujaca i zwracajaca
$licz = 50;
function cos3($licz) 
{
   return $licz*$licz;  
 
}
$task = cos3($licz);
//rekurencyjna
function silnia($liczba)
{
   if($liczba < 2) 
      return 1;
   else
      return $liczba*silnia($liczba-1);  
}
echo silnia(5);


?>



