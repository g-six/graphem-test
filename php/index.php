<!DOCTYPE html>
<html>
<body>
<?php 

/************************************************* 

Purpose: This is an exercice to test your basic knowledge of interface and class in PHP oriented object.

Instruction:

1. Create an interface class called Car. It should contain only a single method, finalCost();

2. Create another class, Chevy, that implements Car. It should have a protected variable called cost. It should have a constructor which takes the cost in argument and sets it. It should have the method finalCost() which takes in argument a tax percentage and returns the final cost of the car in $ using the cost set when the object is initialized.

3. Use the Chevy class to get the cost of a Chevy with a tax of 12% and the initial cost of 20000. Echo the cost in the screen.

4. Please put all your code below, do not create a separate file. Do the runtime execution below as well. You can wrap it in HTML doc structure for bonus points.

5. Bonus: if you have time, create a class called Ford which implements Car and have the cost calculated. However this time, Ford has a handling fee attached to it of $1,000 to be calculated before tax.

***************************************************/

interface Car {
    public function finalCost($tax_percentage);
}
  
class Chevy implements Car {
    protected $cost;
    function __construct($cost) {
        $this->cost = $cost;
    }

    function finalCost($tax_percentage) {
        return $this->cost * (1 + $tax_percentage / 100);
    }
}
  
class Ford implements Car {
    protected $cost;
    protected $handling_fee = 1000;
    function __construct($cost) {
        $this->cost = $cost + $this->handling_fee;
    }

    function finalCost($tax_percentage) {
        return $this->cost * (1 + $tax_percentage / 100);
    }
}

$my_car = new Chevy(50000);
echo 'My Chevy: ' . $my_car->finalCost(12) . '<br />';

$my_ford = new Ford(50000);
echo 'My Ford: ' . $my_ford->finalCost(12);
?>
</body>
</html>