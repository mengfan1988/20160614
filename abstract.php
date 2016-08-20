<?php

/*
 * abstract 抽象
 */

abstract class Guoxiaotian {
    static $sex='2';
    abstract public function kungfu();//類定義為抽象，方法也需加abstract
}

class Guojing extends Guoxiaotian {

    public function kungfu() {//父類為抽象方法，一定要要
       echo '啸转天地1';
    }

}
ECHO Guoxiaotian::$sex;
$gj = new Guojing;
$gj->kungfu();
