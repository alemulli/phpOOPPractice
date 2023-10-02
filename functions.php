<?php 

class Rectangle {
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
}