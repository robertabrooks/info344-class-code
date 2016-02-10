<<<<<<< HEAD
Hey this is some content above the code 
<?php
$name = 'Bobby';
$fullName = $name . 'Brooks';
=======
Hey this is some content above the code
<?php
$name = 'Dave';
$fullName = $name . 'Stearns';
>>>>>>> dd127347d12c8bb16a0f6d7fa4d2cd6133701c08

class Person {
    protected $name;
    
    public function __construct($n) {
<<<<<<< HEAD
        $name->name = $n;
=======
        $this->name = $n;
>>>>>>> dd127347d12c8bb16a0f6d7fa4d2cd6133701c08
    }
    
    public function getName() {
        return $this->name;
    }
}

function foo($bar) {
    echo "Hey this is the foo fighting function\n";
}

echo "Hello {$name}s\n";
foo(NULL);
?>
And this is some content below
