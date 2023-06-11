<?php

    require_once "vendor/autoload.php" ;

    use berdysh_dev\BerdyshFramework ;

    protected BerdyshFramework  $ctx ;

    class BerdyshFrameworkTest extends PHPUnit\Framework\TestCase{

        protected function setUp() :void{
            $this->ctx = new BerdyshFramework() ;
        }

        public function testAll(){
            $this->assertTrue($this->ctx->SelfTest()) ;
        }
    }








