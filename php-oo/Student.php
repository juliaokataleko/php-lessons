<?php

function lS() {
    echo "<hr>";
}
/**
 * Undocumented class
 */
class Student {

    var $name;
    var $major;
    var $gpa;
    static $honorMedia = 3;

    // we use constructor to initialize the object
    function __construct($name, $major, $gpa) {
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
    }

    public function hasHonor()
    {
        if($this->gpa >= $this::$honorMedia) return "true";
        return "false";
    }
    
}

$student1 = new Student("Julião F. K.", 23, 2.6);
$student2 = new Student("Sus K. K.", 23, 3.8);

echo $student1->hasHonor();
lS();
echo $student2->hasHonor();