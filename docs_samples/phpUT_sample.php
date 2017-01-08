<?php
    /**
     * @covers Human
     */
        /**
     * Inheritance Basics
     * Class Human (Base/Parent Class)
     */
    
    class Human {
        
        /**
         * Class Properties
         */
        
        public $firstName;
        public $lastName;
        public $gender;
        public $skeleton;
        public $age;
        public $salary;
        public $test;
        public $expected;
        /**
         * Class Methods
         */
        
        /**
         * Class Constructor
         */
        
        public function __construct( $firstName = "First Name", $lastName = "Last Name", $age ="Age") {
            
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->age = $age;
            $this->salary = $salary;
            
        }
        
        /**
         * Get Name
         */
        
        public function getName() {
            $temp = "Name: " . $this->firstName . " " . $this->lastName . "<br />";
            return $temp;
        }
        
    }
   
    class Male extends Human {
        
        /**
         * Class Methods
         */
        
        /**
         * Get Gender
         */
        
        public function getGender() {
            $temp = "Gender: Male" . "<br />";
            $this->gender = $temp;
            return $this->gender;
        }
        /**
         * Get Salary
         */
        
        public function getSalary() {
            
            $temp = $this->age;
            if ($temp < 20) {
                $this->salary = 150;
            } else if ($temp > 20){
                $this->salary = 300;
                
            } else {
                $this->salary = 180;
                
            }
            
            return $this->salary;
        }

        
    }
    
    class Female extends Human {
        
        /**
         * Class Methods
         */
        
        /**
         * Get Gender
         */
        
        public function getGender() {
            $temp = "Gender: Female" . "<br />";
            $this->gender = $temp;
            return $this->gender;
        }
        
        /**
         * Get Salary
         */
        
        public function getSalary() {
            
            $temp = $this->age;
            if ($temp < 20) {
                $this->salary = 100;
            } else if ($temp > 20){
                $this->salary = 200;
            
            } else {
                $this->salary = 120;
                
            }
            
            return $this->salary;
        }
        
    }
    
    $male = new Male( "Mike", "John" , 19 );
    echo $male->getName();
    echo $male->getGender();
    echo $male->getSalary();
    
    echo "<hr />";
    
    /**
     * Female Object
     */
    
    $female = new Female( "Martina", "John", 19);
    echo $female->getName();
    echo $female->getGender();
    echo $female->getSalary();
    
    /**
     * TEST------------------>Female Object
     */

    class HumanTest extends PHPUnit_Framework_TestCase
    {

        public function test_getSalary_Female()
        {
            $test = new Female( "Martina", "John", 19);
            $expected = 100;
            echo $test->getSalary();
            $this->assertEquals($expected,$test->getSalary());
            
        }
        
    }

?>