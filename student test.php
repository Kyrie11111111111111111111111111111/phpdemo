<?php
class classroom{
	function __construct() {
        //print "In BaseClass constructor\n";
    }

	public $stduent=35;
	public function add_stduent()
    {
		$this->stduent++;
	}
	 function finaladd(){
		
	echo $this->stduent;
	}
	
    }
	$add=new classroom();
    

	for($o=1;$o<=5;++$o){
		$add->add_stduent();
	}
    //$add->finaladd();
class Student {
	var $name = "";
	var $age = "";

	public function reg($name,$age){
		$this->name = $name;
		$this->setAge($age, "ddd");
	}

	public function info(){
		return array($this->name,$this->age);
	}
	//本类/自己内部可访问
	private function setAge($age, $b){
		
		$this->age = $age;
	}

	//本类和子类内部可访问
	protected function setAge2($age){
		
		$this->age = $age;
	}

	public function reg3(){
		$this->setAge2(10);
	}
}

class smallStudent extends Student{
	public function reg2(){
		$this->setAge2(10);
	}
}
$c = new smallStudent();

$c->reg2();//必须是public
//$c->setAge2(9);


$a = new Student();
$a->reg("程川",18);

$b = new Student();
$b->reg("曾爽",18);

$res2 = $b->info();
//$a->setAge(19);

print_r($res2);



$res = $a->info();

print_r($res);