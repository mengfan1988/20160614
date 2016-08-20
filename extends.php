<?php
class Guoxiaotian{
    public $country='南宋';
    public $enemy='段天德，完颜';
    public $age=40;
    public function kungfu(){
        echo '啸转天地';
       echo $this->age=23;
    }
    
}
//子类继承父类
class Guojing extends Guoxiaotian{
    
    public function kungfu() {
       parent::kungfu();//访问父类属性或者方法  parent::方法||属性
       echo '<br>';
       echo '江龙十八章';
    }
    
}
$person=new Guojing;
echo $person->age.'<br>';
echo $person->kungfu();