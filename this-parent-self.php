<?php

/* 
 * this 偽對象
 * self 類自己
 * parent訪問父類方法
 * 
 */
class A{
    public $name='llii';
    const SEX='nan';
    static public $age=23;

    public function get() {
        $this->name;
        self::SEX;
        self::$age;
        
      
    }
}
