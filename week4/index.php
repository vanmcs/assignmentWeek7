
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>First Exercise</h1>
    <?php

    // BENEFITS AND DISADVANTAGES OF MULTIPLE INHERITANCE 

    /* Language like PHP doesn't allow for Multiple Inheritance because it might lead to a problem called the diamond problem whereby 
    if we have 4 classes: A, B,C and D. In this, B and C inherit from A whereas D inherit both B and C. If A has a method called buyProduct and B & C inherit from it and has overridden the method
    then when D inherit both B and C, it won't be possible to figure out which method between B and C then D will inherit.

    That is why there is only a single inheritance in PHP and why multiple inheritance can be bad. However, there are some other alternative
    to Multiple inheritance such as traits and interface. And in this program, you will see an example of multiple inheritance using interface
    */

    /* 
    The advantages that multiple inheritance or interfaces give to us is that the interfaces will create a set of rule which the classes 
    that implement tem need to follow. By having this set of rule, it is easier when the project gets bigger since methods are direct and if we implement
    the interface and don't use the method, there will be a fatal error in the program which will remind us to use the method. In a group project this will be very 
    beneficial. In addition, each class can hold as many interfaces as possible although it is better to implement a few so there won't be any confusion
    */

    /* Another disadvantages of the multiple inheritance or interface is that if we have too many interface and we implement them, there
    will be a very high chance of confusion which can lead to fatal error in the code; thus, we might even have a very hard time finding the problem  */



    //EXPLANATION OF THE CODE BELOW

    /* In the example below, we are making a program displaying information of chainsaw products sold in a shop. Some chainsaws are good for the environment as well as for cutting grass
    whereas others are bad. And so, we have the main class which is ChainsawProduct class and this is he parent class of the chainsaw products with names down below. We extend 
    the class below from the ChainsawProduct class in order to set name for those chainsaw products. However, since we cannot extend 2 classes to use another method, we use interfact instead.
    With interface, we created 2 of them and each with different method. As a result, each of the class below can implement these two interfaces and use the methods it have. 

    This show a similar feature to inheritance
    */




    interface Chainsaw 
    {
        public function cut_grass();
    }
    interface electricChainsaw
        {
            public function save_environment();
        }


// PARENT CLASS FOR CHAINSAW PRODUCT
        class ChainsawProduct
{
    public $name;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function show()
    {
        echo 'This product name is '.$this->name . '<br>';
    }

}
    
     
    // does not implement the interface and have only one inheritance
    
    class BadChainsawsInc extends ChainsawProduct 
    {
        public function leak_oil() 
        {
            echo 'It is a Bad Chainsaw: leaking oil <br><br>';
        }
    }
    $chainsaw = new BadChainsawsInc;
    $chainsaw->setName("Lorry");
    $chainsaw->show();
    $chainsaw->leak_oil(); // oil leaking because it is a bad chainsaw
 
     //EXAMPLE OF UTILIZING MULTIPLE INHERITANCE/INTERFACES
    class Homelite extends ChainsawProduct implements Chainsaw, electricChainsaw 
    {
        public function cut_grass()
        {
            echo 'This Chainsaw: Cutting major grass quite well<br>';
        }
        public function save_environment()
        {
            echo 'This Chainsaw: This chainsaw is saving the environment <br><br>';
        }
    }
    $chainsaw = new Homelite;
    $chainsaw->setName("Homelite");
    $chainsaw->show();
    $chainsaw->cut_grass();
    $chainsaw->save_environment();
    
      //EXAMPLE OF UTILIZING MULTIPLE INHERITANCE/INTERFACES    
    class Remington extends ChainsawProduct implements Chainsaw, electricChainsaw
    {
        public function cut_grass()
        {
            echo 'Cutting grass like a champion <br>';
        }
        public function save_environment()
        {
          echo 'This Chainsaw: This chainsaw is barely saving the environment <br><br>';
      }
    }
    $chainsaw = new Remington;
    $chainsaw->setName("Remington");
    $chainsaw->show();
    $chainsaw->cut_grass();
    $chainsaw->save_environment();
    
    ?>
    <h3>DETAILED INFORMATION RELATED TO MULTIPLE INHERITANCE IS IN THE CODE</h3>
    <a class ="second" href="SecondExample.php" style = "text-decoration:none; color:lime">Second Exercise of the assignment(CLICK ME)</a>

</html>
