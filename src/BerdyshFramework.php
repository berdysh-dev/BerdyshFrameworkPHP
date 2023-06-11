<?php

namespace berdysh_dev;

class BerdyshFramework{
    
    public function __construct($P=NULL){
        if($P !== NULL){
            $this->P = $P ;
        }else{
            $this->P = $this ;
        }
    }

    public function init(){
        ;
    }

    public function Setter($params=[]){
        if(is_array($params)){
            foreach($params as $k => $v){
                $this->$k = $v ;
            }
        }
    }

    public function Getter($key){
        if(property_exists($this,$key)){
            return $this->$key ;
        }
        return FALSE ;
    }

    public function Hello($key){
        printf("[%s]\n",$key) ;
    }

    function SelfTest(){
        echo __CLASS__ . "\n" ;
        return TRUE ;
    }

}















