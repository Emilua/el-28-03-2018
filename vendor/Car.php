<?php

class Car
{

    /**
     *
     * @var int
     */
    protected $engine_capacity;

    /**
     *
     * @var string
     */
    protected $body_type;

    /**
     *
     * @var str
     */
    protected $color;

    /**
     *
     * @var int
     */
    protected $number;

    /**
     * 
     * @param int$engine_capacity
     * @param str $body_type
     * @param str $color
     * @param int $number
     */
    public function __construct($engine_capacity, $body_type, $color, $number)
    {
        $this->engine_capacity = $engine_capacity;
        $this->body_type = $body_type;
        $this->color = $color;
        $this->number = $number;
    }

    /**
     * string
     */
    public function __toString()
    {
        $str = '';
        $str .= 'Обьем двигателя: ' . $this->engine_capacity . '<br>';
        $str .= 'Тип кузова: ' . $this->body_type . '<br>';
        $str .= 'Цвет: ' . $this->color . '<br>';
        $str .= 'Гос. номер: ' . $this->number . '<br>';
    }

}
