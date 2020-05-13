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

//VERSION 7.3.9 

/*
function show_Khmer($n, $m)
{
    return "The number {$n} is called {$n_} in Khmer";
}



$f = [1, 2, 3, 4, 5];
$g = ['មួយ', 'ពីរ', 'បី', 'បួន', 'ប្រាំ'];
$h = array_map(fn($n,$n_)=>  "<br>The number {$n} is called {$n_} in Khmer <br>", $f,$g);
var_dump($h);



//VERSION 7.4
/*
Between these two version, the old version requires us to write a 
long function and return the value whereas the new one all of those function
can simply be replaced by fn and the arrow (=>) in the function to return the value 
*/
$f = [1, 2, 3, 4, 5];
$g = ['មួយ', 'ពីរ', 'បី', 'បួន', 'ប្រាំ'];
$h = array_map(fn($n,$n_)=>  "<br>The number {$n} is called {$n_} in Khmer <br>", $f,$g);
var_dump($h);
?>
<br><br>
<a style="color:yellow" href="index.php">Return to last example</a>
<h3>Look in the code for more information & Explanation</h3>
<br><br>




