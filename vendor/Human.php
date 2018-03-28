<?php

class Human
{/**
 *
 * @var srt 
 */
    protected $name;
    /**
     *
     * @var str
     */
    protected $surname;
    
    /**
     *
     * @var int
     */
    protected $age;
    
    /**
     *
     * @var str
     */
    protected $address;
    
    
    /**
     * 
     * @param string$name
     * @param string$surname
     * @param int $age
     * @param string $address
     */
    public function __construct($name, $surname, $age, $address)
    {
        $this->name=$name;
        $this->surname=$surname;
        $this->age=$age;
        $this->address=$address;
    }
    
    /**
     * 
     * @return string
     */
    public function __toString()
    {
        $str= '';
        $str.= 'Имя: '. $this->name.'<br>';
        $str.= 'Фамилия: '. $this->surname.'<br>';
        $str.= 'Возраст: '. $this->age.'<br>';
        $str.= 'Адрес: '. $this->address.'<br>';
        return $str;
    }
}
