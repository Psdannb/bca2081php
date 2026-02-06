<?php
/*
forloop
for(initialization,condition, increment/decrement){
block of code to execute;
}
*/
/* eg:
for($a=1;$a<=5;$a++){
    // if($a==3){
    //     break;
    // }
     if($a==3){
        continue;
    }
    echo $a;
    // echo"Hello";
    echo "</br>";
}
*/

/*
while loop
synatx:
varibale initialize
while(condition){
block of code to execute;
increment/decrement;
}

*/
/*
eg:
 $i=0;
while($i<5){
      echo"Hello";
//    echo $i;
  echo "</br>";
   $i++;
    }

*/


/* do while loop 
 synatx
variable initialize/declare;
do{
block of code to execute;
}while(condition);
 */
/*
eg:
$x=0;
do{
      echo"Hello";
    echo $x;
    echo "</br>";
    $x++;
}while($x<5);
*/


/*
array
$arrayname=[element1,element2,.....];
$arrayname= array(element1,element2,...);
*/
$numbers=[1,2,3,4,5];
$fruits=["Apple","Banana","Orange","Mango",2];
// var_dump($fruits);
// echo $fruits;
// print_r($fruits);
// echo $fruits[4];


/*
foreach($arrayname as $singlelementname){

}
*/
foreach($fruits as $fruit){
    echo $fruit;
    echo "<br/>";
}



?>