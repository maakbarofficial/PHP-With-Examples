<?php
// OOP stands for Object-Oriented Programming.

// Procedural programming is about writing procedures or functions that perform operations on the data, while object-oriented programming is about creating objects that contain both data and functions.

// Object-oriented programming has several advantages over procedural programming:

// OOP is faster and easier to execute
// OOP provides a clear structure for the programs
// OOP helps to keep the PHP code DRY "Don't Repeat Yourself", and makes the code easier to maintain, modify and debug
// OOP makes it possible to create full reusable applications with less code and shorter development time
// Tip: The "Don't Repeat Yourself" (DRY) principle is about reducing the repetition of code. You should extract out the codes that are common for the application, and place them at a single place and reuse them instead of repeating it.
?>

<?php
// Classes and objects are the two main aspects of object-oriented programming.
// a class is a template for objects, and an object is an instance of a class.
// Class is fruit and objects are -> Apple Mango Banana
// Class is car and objects are -> BMQ Civic RR

// Let's assume we have a class named Fruit. A Fruit can have properties like name, color, weight, etc. We can define variables like $name, $color, and $weight to hold the values of these properties.

// When the individual objects (apple, banana, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

class Fruit
{

    //Properties
    public $name;
    public $color;

    //Methods
    function set_name($name)
    {
        $this->name =  $name;
    }
    function get_name()
    {
        return $this->name;
    }
    function set_color($color)
    {
        $this->color = $color;
    }
    function get_color()
    {
        return $this->color;
    }
    // In a class, variables are called properties and functions are called methods!
}

// Classes are nothing without objects! We can create multiple objects from a class. Each object has all the properties and methods defined in the class, but they will have different property values.

// Objects of a class are created using the new keyword.

// In the example below, $apple and $banana are instances of the class Fruit:

$apple = new Fruit();
$mango = new Fruit();

$apple->set_name('Apple');
$apple->set_color('Red');
$mango->set_name('Mango');
$mango->set_color('Yellow');

echo $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
echo "<br>";
echo $mango->get_name();
echo "<br>";
echo "Color: " . $mango->get_color();
// The $this keyword refers to the current object, and is only available inside methods.
// echo $apple->name;
// change the value of the $name property? There are two ways:
// Inside the class (by adding a set_name() method and use $this)
// Outside the class (by directly changing the property value)

// You can use the instanceof keyword to check if an object belongs to a specific class:
echo "<br>";
var_dump($apple instanceof Fruit);
?>

<?php
// Constructor
// A constructor allows you to initialize an object's properties upon creation of the object.

// If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
class FruitName
{
    public $name;
    public $color;

    function __construct($name)
    {
        $this->name = $name;
    }
    // function __construct($name, $color)
    // {
    //     $this->name = $name;
    //     $this->color = $color;
    // }
    function get_name()
    {
        return $this->name;
    }
}

$apple = new FruitName("Apple");
echo $apple->get_name();
?>

<?php
// Destructor
// A destructor is called when the object is destructed or the script is stopped or exited.

// If you create a __destruct() function, PHP will automatically call this function at the end of the script.
class FruitNames
{
    public $name;
    public $color;

    function __construct($name)
    {
        $this->name = $name;
    }
    function __destruct()
    {
        echo "The fruit is {$this->name}.";
    }
}

$apple = new FruitNames("Apple");
?>

<?php
// Access Modifiers
// Properties and methods can have access modifiers which control where they can be accessed.

// There are three access modifiers:

// public - the property or method can be accessed from everywhere. This is default
// protected - the property or method can be accessed within the class and by classes derived from that class
// private - the property or method can ONLY be accessed within the class


// In the following example we have added three different access modifiers to three properties (name, color, and weight). Here, if you try to set the name property it will work fine (because the name property is public, and can be accessed from everywhere). However, if you try to set the color or weight property it will result in a fatal error (because the color and weight property are protected and private):

class Fruit
{
    public $name;
    protected $color;
    private $weight;
}

$mango = new Fruit();
$mango->name = 'Mango'; // OK
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300'; // ERROR


// In the next example we have added access modifiers to two functions. Here, if you try to call the set_color() or the set_weight() function it will result in a fatal error (because the two functions are considered protected and private), even if all the properties are public:

class Fruit
{
    public $name;
    public $color;
    public $weight;

    function set_name($n)
    {  // a public function (default)
        $this->name = $n;
    }
    protected function set_color($n)
    { // a protected function
        $this->color = $n;
    }
    private function set_weight($n)
    { // a private function
        $this->weight = $n;
    }
}

$mango = new FruitClass();
$mango->set_name('Mango'); // OK
$mango->set_color('Yellow'); // ERROR
$mango->set_weight('300'); // ERROR
?>

<?php
// Inheritance
// Inheritance in OOP = When a class derives from another class.

// The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

// An inherited class is defined by using the extends keyword.
class Fruit
{
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit
{
    public function message()
    {
        echo "Am I a fruit or a berry? ";
    }
}
// Try to call all three methods from outside class
$strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
$strawberry->message(); // OK. message() is public
$strawberry->intro(); // ERROR. intro() is protected


// --------------------------------------- //

class StrawberrySecond extends Fruit
{
    public function message()
    {
        echo "Am I a fruit or a berry? ";
        // Call protected method from within derived class - OK
        $this->intro();
    }
}

$strawberry = new Strawberry("Strawberry", "red"); // OK. __construct() is public
$strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
?>

<?php
// Class constants can be useful if you need to define some constant data within a class.
// A class constant is declared inside a class with the const keyword.
// A constant cannot be changed once it is declared.
// Class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters.
// We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name, like here:

class Goodbye
{
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
}

echo Goodbye::LEAVING_MESSAGE;

// Or, we can access a constant from inside the class by using the self keyword followed by the scope resolution operator (::) followed by the constant name, like here:
class Goodbye
{
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    public function byebye()
    {
        echo self::LEAVING_MESSAGE;
    }
}

$goodbye = new Goodbye();
$goodbye->byebye();
?>

<?php
// Abstract Classes
// Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.

// An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.

// An abstract class or method is defined with the abstract keyword:
abstract class ParentClass
{
    abstract public function someMethod1();
    abstract public function someMethod2($name, $color);
    abstract public function someMethod3(): string;
}

// When inheriting from an abstract class, the child class method must be defined with the same name, and the same or a less restricted access modifier. So, if the abstract method is defined as protected, the child class method must be defined as either protected or public, but not private. Also, the type and number of required arguments must be the same. However, the child classes may have optional arguments in addition.

// So, when a child class is inherited from an abstract class, we have the following rules:

// The child class method must be defined with the same name and it redeclares the parent abstract method
// The child class method must be defined with the same or a less restricted access modifier
// The number of required arguments must be the same. However, the child class may have optional arguments in addition
// Let's look at an example:

// Parent class
abstract class Car
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function intro(): string;
}

// Child classes
class Audi extends Car
{
    public function intro(): string
    {
        return "Choose German quality! I'm an $this->name!";
    }
}

class Volvo extends Car
{
    public function intro(): string
    {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}

class Citroen extends Car
{
    public function intro(): string
    {
        return "French extravagance! I'm a $this->name!";
    }
}

// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();
?>

<?php
// Interfaces allow you to specify what methods a class should implement.

// Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".

// Interfaces are declared with the interface keyword:

// Interfaces vs. Abstract Classes
// Interface are similar to abstract classes. The difference between interfaces and abstract classes are:

// Interfaces cannot have properties, while abstract classes can
// All interface methods must be public, while abstract class methods is public or protected
// All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
// Classes can implement an interface while inheriting from another class at the same time
interface Animal
{
    public function makeSound();
}

class Cat implements Animal
{
    public function makeSound()
    {
        echo "Meow";
    }
}

$animal = new Cat();
$animal->makeSound();
?>

<?php
// PHP only supports single inheritance: a child class can inherit only from one single parent.

// So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.

// Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).

// Traits are declared with the trait keyword:
trait message1
{
    public function msg1()
    {
        echo "OOP is fun! ";
    }
}

class Welcome
{
    use message1;
}

$obj = new Welcome();
$obj->msg1();


// ----------------------- //

trait message1
{
    public function msg1()
    {
        echo "OOP is fun! ";
    }
}

trait message2
{
    public function msg2()
    {
        echo "OOP reduces code duplication!";
    }
}

class Welcome
{
    use message1;
}

class Welcome2
{
    use message1, message2;
}

$obj = new Welcome();
$obj->msg1();
echo "<br>";

$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2();
?>

<?php
// Static Methods
// Static methods can be called directly - without creating an instance of the class first.
// Static methods are declared with the static keyword:
class greeting
{
    public static function welcome()
    {
        echo "Hello World!";
    }
}

// Call static method
greeting::welcome();

// ------------------
class A
{
    public static function welcome()
    {
        echo "Hello World!";
    }
}

class B
{
    public function message()
    {
        A::welcome();
    }
}

$obj = new B();
echo $obj->message();

// Static properties can be called directly - without creating an instance of a class.

// Static properties are declared with the static keyword:
class pi
{
    public static $value = 3.14159;
}

// Get static property
echo pi::$value;
?>

<div>
    // Namespaces
    // Namespaces are qualifiers that solve two different problems:
    // They allow for better organization by grouping classes that work together to perform a task
    // They allow the same name to be used for more than one class
    // For example, you may have a set of classes which describe an HTML table, such as Table, Row and Cell while also having another set of classes to describe furniture, such as Table, Chair and Bed. Namespaces can be used to organize the classes into two different groups while also preventing the two classes Table and Table from being mixed up.

    // Namespaces are declared at the beginning of a file using the namespace keyword:
</div>

<?php

namespace Html;

class Table
{
    public $title = "";
    public $numRows = 0;
    public function message()
    {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;
?>

<!DOCTYPE html>
<html>

<body>

    <?php
    $table->message();
    ?>
    <!-- Table 'My table' has 5 rows. -->

</body>

</html>

<?php
// Iterable
// An iterable is any value which can be looped through with a foreach() loop.
// The iterable pseudo-type was introduced in PHP 7.1, and it can be used as a data type for function arguments and function return values.
function printIterable(iterable $myIterable)
{
    foreach ($myIterable as $item) {
        echo $item;
    }
}

$arr = ["a", "b", "c"];
printIterable($arr);

//abc


// ----------------------- //

// Arrays

// All arrays are iterables, so any array can be used as an argument of a function that requires an iterable.

// Iterators

// Any object that implements the Iterator interface can be used as an argument of a function that requires an iterable.

// An iterator contains a list of items and provides methods to loop through them. It keeps a pointer to one of the elements in the list. Each item in the list should have a key which can be used to find the item.

// An iterator must have these methods:

// current() - Returns the element that the pointer is currently pointing to. It can be any data type
// key() Returns the key associated with the current element in the list. It can only be an integer, float, boolean or string
// next() Moves the pointer to the next element in the list
// rewind() Moves the pointer to the first element in the list
// valid() If the internal pointer is not pointing to any element (for example, if next() was called at the end of the list), this should return false. It returns true in any other case
?>