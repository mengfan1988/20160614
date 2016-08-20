<?php

/*
 * 魔術方法：__sleep在序列化時會被自動調用
 * __wakeup在反序列化時自動調用
 * __get($n)查看私有屬性時自動調用此方法 $n為屬性名
 * __set($n,$v)對私有屬性進行設計 $n為屬性名 $v為值
 * __call
 *  __tostring當用echo一個對象時調用
 */
/* class A{
  public $name='1';
  public function __sleep() {
  echo '111';
  exit;
  }
  public function __wakeup() {
  echo '222';
  exit;
  }

  }
  $a=new A;
  $str = serialize($a);
  unserialize($str);

  class A{
  private $sex=1;
  public function __get($n) {
  if($n=='sex'){
  $arr=['男','女'];
  echo $arr[$this->$n];
  }
  }
  }
  $a=new A;
  $a->sex;//調用私有屬性自動調用__get的方法,$n=屬性名

  class A{
  private $sex=1;
  public function __get($n) {
  echo $this->$n;
  }

  }
  $a=new A;
  $a->sex;
 

class A {

    private $sex = 1;

    public function __set($n, $v) {
        if ($n == 'sex') {
            $arr = ['男', '女'];
            echo $arr[$this->$n=$v];
        }
    }

}

$a = new A;
$a->sex = 0;
*/
class A{
    function add() {
       echo __FUNCTION__;
    }
}
$a=new A;
$a->add();