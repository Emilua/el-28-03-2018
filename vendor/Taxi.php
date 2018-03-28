<?php


class Taxi extends Car
{
    /**
     * 
     * @param int $engine_capacity
     * @param str $body_type
     * @param str $color
     * @param int $number
     * @param str $taxi_num
     * @param str $taxi_name
     */
    public function __construct($engine_capacity, $body_type, $color, $number, $taxi_num, $taxi_name)
    {
        parent::__construct($engine_capacity, $body_type, $color, $number);
        $this->taxi_num=$taxi_num;
        $this->taxi_name=$taxi_name;
    }
    
    public function __toString()
    {
        parent::__toString();
        $str.='Номер таксопарка: '.$this->taxi_num;
        $str.='Название таксопарка: '.$this->taxi_name;
    }
}
