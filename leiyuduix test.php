<?php
class Site {
  /* 成员变量 */
  var $url=2;
  var $title="oo";
  
  /* 成员函数 */
  function a($par){
     $this->url = $par;
  }
  
  function b(){
     echo $this->url ; 
  }
  
  function c($par){
     $this->title = $par;
  }
  
  function d(){
     echo $this->title ;
  }
}
$giao=new Site();
echo $giao->b();

?>