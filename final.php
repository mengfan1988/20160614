<?php

/*
 * final 修飾類指類不可繼承，修飾方法意思是不可複寫方法
 */

final class Guoxiaotian {

    public $country = '南宋';
    public $enemy = '段天德，完颜';
    public $age = 40;

    final public function kungfu() {
        echo '啸转天地';
    }

}

class Guojing extends Guoxiaotian {

//    public function kungfu() {
//        echo '啸转天地';
//    }//抽象父類，子類不能複寫方法

}
