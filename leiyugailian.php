<?php
 class SimpleClass{
  public $var=' a default value';	
  public function displayVar(){
  echo $this->var;
	
  }
 
 
 }

 class Car{
	 
	public $lunziCount = 2;//属性
	public $color ="red";
	
	public function getLunziCount(){//方法

		return $this->lunziCount;
	}

	/*public function usecar(){
		$this->movecar();	
		
	}
	public function movecar(){
		
	}*/
	
 }
 $benz=new Car();

echo $benz->color;
//echo $benz->usecar();
//echo $movevar;
echo $benz->lunziCount;