<?php
class Student
{
    private $id;
    private $name;
    private $course;
    private $gender;
    private $avg_notes;

    public function  __construct() {}     
    
    public function __get($property)
    {
        return $this->$property;
    }

    public function __set($property, $value)
    {   
        switch($property)
        {
            case 'id':
                if($value > 0) 
                    $this->$property = $value; 
                break;
            case 'name':
                if(strlen($value) > 3) 
                    $this->$property = $value;
                break;
            case 'course':
                if(strlen($value) > 1) 
                    $this->$property = $value;
                break;
            case 'gender':   
                if($value == "M" or $value="F")                 
                    $this->$property = $value;
                break;
            case 'avg_notes':
                if($value >= 0 and $value <= 10) 
                    $this->$property = $value;
                break;
            default: break;
        }
    }   
}
?>