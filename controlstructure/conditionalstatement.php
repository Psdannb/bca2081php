<?php
// if statement 
/* sytax 
if(condtion){
    block of code to execute if the condition is true 
} */
// eg1:
/*$age=10;
if($age<18){
    echo "You are minor";
}*/


// eg2:
/*$role="user";
if($role=="admin"){
    ?>
<button>Delete</button>
<?php
}
*/




/* sytax 
if(condtion){
    block of code to execute if the condition is true 
}
else{
    block of code to execute if the condition is false
    }
*/

// eg:1 
/*
$age=18;
$hasvoterid=true;
if($age>=18 && $hasvoterid){
    echo "You are eligable to vote";
}
else{
    echo "You cannot vote";
}
    */

/*
if...Else if 
eg:
$percentage=90;

if($percentage>=90){
    echo"You have scored A+";
}
elseif($percentage>=80 && $percentage<=89){
   echo"You have scored A";
}
elseif($percentage>=70 && $percentage<=79){
    echo"You have scored B+";
}
else{
    echo"You failed the exam";
}
    */

// switch 
/*
synatx

variable declare;
switch(variable){
case variable-value:{
block of code to execute if condition/case matches
}
.
.
.
dafault:{
block of code to execute if all the condition fails;
}
}

*/
// eg
/*
$day=3;
switch($day){
    // if($day==1)
    case 1:{
     echo"Today is sunday";
     break;
    }
    case 2:{
        echo"Today is monday";
        break;
    }
    case 3:{
        echo"Today is Tuesday";
        break;
    }
    case 4:{
        echo"Today is Wednesday";
        break;
    }
    case 5:{
        echo"Today is Thrusday";
        break;
    }
    case 6:{
        echo"Today is Friday";
        break;
    }
    case 7:{
        echo"Today is saturday";
        break;
    }
    default:{
        echo"Invalid input";
    }
}
    */
/* $day="sun";
switch($day){
    // if($day=="sun")
    case "sun":{
     echo"Today is sunday";
     break;
    }
    case "mon":{
        echo"Today is monday";
        break;
    }
    case "tue":{
        echo"Today is Tuesday";
        break;
    }
    case "wed":{
        echo"Today is Wednesday";
        break;
    }
    case "thu":{
        echo"Today is Thrusday";
        break;
    }
    case "fri":{
        echo"Today is Friday";
        break;
    }
    case "sat":{
        echo"Today is saturday";
        break;
    }
    default:{
        echo"Invalid input";
    }
}
*/





?>