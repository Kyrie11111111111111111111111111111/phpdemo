
<?php
class Car {
        function __construct() {
        print "In Car constructor\n";
       }
       }

class SubClass extends Car {
function __construct() {
parent::__construct();
print "In SubClass constructor\n";
      }
      }

class wholeCar3 extends Car {
    // 继承 Car 的构造函数
}

// In Car constructor
$obj = new Car();

// In Car constructor
// In SubClass constructor
$obj = new SubClass();

// In Car constructor
$obj = new wholeCar3();
class ccnb {
  /* 成员变量 */
  var $url=1;
  var $title="ww";
  
  /* 成员函数 */
  function setUrl($par){
     $this->url = $par;
  }
  
  function getUrl(){
     echo $this->url . PHP_EOL;
  }
  
  function setTitle($par){
     $this->title = $par;
  }
  
  function getTitle(){
     echo $this->title . PHP_EOL;
  }
}
$cc=new ccnb();
echo $cc->getUrl();
     
/*echo $cc->getTitle();
$cc->setTitle("aa");
$cc->getTitle();