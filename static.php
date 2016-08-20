<?php

/* 
 * static 靜態變量
 */

class Guoxiaotian {

    public $country = '南宋';
    public $enemy = '段天德，完颜';
    protected $age = 40;
    public static $sex='男';

    public static function kungfu() {
        echo '啸转天地';
        echo self::$sex;
    }

}
echo Guoxiaotian::$sex;
echo Guoxiaotian::kungfu();