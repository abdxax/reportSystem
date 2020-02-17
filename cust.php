<?php

class Customer{
    private $PARENT_ACC_NO;
    private $MSISDN;

    public function __construct($p,$m){
      $this->PARENT_ACC_NO=$p;
      $this->MSISDN=$m;
    }

}