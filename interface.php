<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
interface Guoxiaotian {//接口

     public function kungfu();
}

class Guojing implements Guoxiaotian {//implements 實現接口

    public function kungfu() {
        echo '啸转天地1';
    }

}

