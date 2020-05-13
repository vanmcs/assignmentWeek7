<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "background-color: #0e2433; color:white">
<h1 style="text-align:center">Arrow Function in PHP 7.4</h1>
<?php 
// THIS PHP CODE WILL SHOWCASE THE NEW FEATURE OF PHP 7.4 WHICH IS ARROW FUNCTION, 
// THIS CODE IS DONE BY HENGSOPHEAVAN SAM
// LET US TAKE A LOOK AT THE FEATURE BEFORE 7.4 FIRST AND HERE IT IS


// 7.3.9

/*
function old_version($x){
    return ($x * $x * $x * $x);
}
$p = [15,23,12,72,3,9];
$q = array_map('old_version', $p);
var_dump($q);
*/

// this peace of code will display 
/* 
array(6) { 
    [0]=> int(50625) 
    [1]=> int(279841) 
    [2]=> int(20736) 
    [3]=> int(26873856) 
    [4]=> int(81) 
    [5]=> int(6561) }
*/
/* using array_map we were able to loop through the function and get the array to multiply 
each other but it is a bit too long. That is WHT WE USE THE ARROW FUNCTINO */

// HERE IS THE NEW VERSION 7.4 WITH THE ARROW FUNCTION

// 7.4


$p = [15,23,12,72,3,9];
$q = array_map(fn($x) => $x * $x * $x * $x, $p);
var_dump($q);

//THIS FEATURE WILL SHOW THE SAME RESULT AS THE ABOVE


?>
<br><br>
<a style="color:yellow" href="MyClass.php">For Next Example, click me</a>
<h3>Look in the code for more information & Explanation</h3>
</body>
</html>
