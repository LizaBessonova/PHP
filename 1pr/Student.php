<?php
	class Student{
		public $name;
		private $age;
		protected $sex;
		
		public function __construct($name,$age,$sex){
			echo "Construct <br/> Name: $name<br/>Age: $age<br/> Sex: $sex<hr/>";
		}
		
		public function __destruct(){
			echo "Destruct";
		}
	
		public function getName(){return $this->name;}
		public function setName($name){$this->name = $name;}
		
		public function getAge(){return $this->age;}
		public function setAge($age){$this->age = $age;}
		
		public function getSex(){return $this->sex;}
		public function setSex($sex){$this->sex = $sex;}
	}
?>	