<?php

/*修飾符             本類       子類          對象
  public 公共的       v         v            v
  private 私有的      v         x            x
  protected受保护的   v         v            x
 */

class Guoxiaotian {

    public $country = '南宋';
    public $enemy = '段天德，完颜';
    protected $age = 40;

    public function kungfu() {
        echo '啸转天地';
    }

    public function get() {
        echo $this->age;
    }

}

class Guojing extends Guoxiaotian {
    function fun() {
      return parent::get();
    }
//   public function set() {
//        echo $this->age=23; //protected 子類可以獲得父類屬性
//    }

}

$a = new Guoxiaotian;
//echo $a->age; 對象不可訪問私有屬性
//$a->get();
$b = new Guojing;
echo $b->fun();//子類對象不可訪問私有屬性
//$b->get();

