Hey this is some content above the code 
<?php
$name = 'Bobby';
$fullName = $name . 'Brooks';

class Person {
    protected $name;
    
    public function __construct($n) {
        $name->name = $n;
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
