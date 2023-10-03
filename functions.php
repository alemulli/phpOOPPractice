<?php 

// A trait is a method that can be used in multiple classes
trait echo_height {
    public function get_height() {
        echo $this->height;
    }
}

// An interface defines rules that classes need to follow, so if a class implements the Shapes interface it needs to have a method for area and perimeter
interface Shapes {

    public function area();

    public function perimeter();

}



class Rectangle implements Shapes{

    use echo_height;

    // Properties
    // Properties can be public, protected or private
    // public: accessible from anywhere
    // protected: accessible from the class itself and its children (classes that extend this class)
    // private: accessible only from the class itself

    public int $width;
    public int $height;

    // Constructor
    // A constructor is a method that is called when an object is created

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Methods
    // Methods can be public, protected or private

    public function area() {
        return $this->width * $this->height;
    }

    public function perimeter() {
        return ($this->width + $this->height) * 2;
    }

    public function diagonal() {
        return sqrt($this->width ** 2 + $this->height ** 2);
    }

}

class Square extends Rectangle {
    public function __construct(int $side) {
        parent::__construct($side, $side);
    }


        public function perimeter() {
        return ($this->width + $this->height) * 2;
    }
}



// abstract classes don't exist
abstract class FiveDimensionalRectangle implements Shapes{

    // Because it's abstract it doesn't need to implement the area and perimeter methods from the Shapes interface
    // I also cannot new up an object based on this class
    // I could have another class extend from FiveDimensionalRectangle, but it would have to follow the rules of the Shapes interface in this example. I can new up objects from classes that extend an abstract class. 
}