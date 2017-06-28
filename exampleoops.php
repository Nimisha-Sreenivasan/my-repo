<?php 
//require "exampleoops1.php";
class GrandPa
{
    
    public $sirname = "Patel";
	private $name='Pratik';
    protected $gender = "Male";
	
	
	 function printHello()
    {
        echo $this->sirname;
        echo $this->name;
        echo $this->gender;
    } 
	
    function getName()
    {
        echo $this->name;
    }
    function getGender()
    {
        echo $this->gender;
    }
	function sname()
	{
	echo $this->sirname;
	}
}





