<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<h1>Second Exercise</h1>
    <?php 
     require_once(__DIR__ . '/classes/ABA.php');
     require_once(__DIR__ . '/classes/PiPay.php');
     require_once(__DIR__ . '/classes/Wing.php');
    
     echo '<h1>Newest Assignment Homework</h1>';
     
     $paymentMethod =
     [
        new ABA("Item 1", 1, 5),
        new Wing("Item 2", 2, 3),
        new ABA("Item 3", 4, 1),
        new ABA("Item 4", 5, 1),
        new PiPay("Item 5", 6, 1),
        new ABA("Item 6",10, 1),
        new Wing("Item 7",15, 1),
        new Wing("Item 8",2, 1)
     ];
     //function placement

     echo '<h2>The Number of Sale By the ABA method is</h2>';
     displayABA($paymentMethod);


// DISPLAY ALL TABLE: USED FOR CLONE METHOD

     function display($paymentMethod)
    {
    echo '<table border="1">';
 
        foreach ($paymentMethod as $payment) 
        {
         
                echo '<tr>';
                echo '<td>' . $payment->getItem() . '</td>';
                echo '<td>' . get_class($payment) . '</td>';
                echo '<td>' . $payment->getTotalSale() . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    // DISPLAY ABA ONLY
     function displayABA($paymentMethod)
    {
    echo '<table border="1">';
 
        foreach ($paymentMethod as $payment) 
        {
            if(get_class($payment) == ABA)
            {
                echo '<tr>';
                echo '<td>' . $payment->getItem() . '</td>';
                echo '<td>' . get_class($payment) . '</td>';
                echo '<td>' . $payment->getTotalSale() . '</td>';
            echo '</tr>';
            }
        }
        echo '</table>';
    }

// DISPLAYING PIPAY AND WING ONLY
    echo '<h2>The Number of Sale By the PiPay and Wing method is</h2>';
     displayTwo($paymentMethod);
    function displayTwo($paymentMethod)
    {
    echo '<table border="1">';
        foreach ($paymentMethod as $payment) 
        {
            if(get_class($payment) == PiPay || get_class($payment) == Wing)
            {
                echo '<tr>';
                echo '<td>' . $payment->getItem() . '</td>';
                echo '<td>' . get_class($payment) . '</td>';
                echo '<td>' . $payment->getTotalSale() . '</td>';
            echo '</tr>';
            }
          
        }
        echo '</table>';
    }
    // Using Usort to sort out the array in ascending order
    echo '<h2>3. Display all sales ordering by biggest amount</h2>';
    $cloneMethod = $paymentMethod;
    usort($cloneMethod, function ($item1, $item2) 
    {
        return $item2->getTotalSale() <=> $item1->getTotalSale();
    });
    display($cloneMethod);
    ?>
 <h3>DETAILED INFORMATION RELATED TO THIS IS IN THE CODE</h3>
    <a class ="second" href="index.php" style = "text-decoration:none; color:lime">First Exercise of the assignment(CLICK ME)</a>

</body>
</html>