<?php

class Test
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
     * @var str
     */
    protected $age;

    /**
     * 
     * @param str $name
     * @return boolean
     */
    public function setName($name)
    {
        if (is_string($name)) {
            $this->name = $name;
            return true;
        } else {
            return false;
        }
    }

    /**
     * 
     * @param str $surname
     * @return boolean
     */
    public function setSurname($surname)
    {
        if (is_string($surname)) {
            $this->surname = $surname;
            return true;
        } else {
            return false;
        }
    }

    public function setAge($age)
    {
        if (is_string($age)) {
            if ($age > 0) {
                $this->age = $age;
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    /**
     * 
     * @param str $name
     * @param mixed $value
     */
    public function __set($name, $value){
        $method_name='set'. ucfirst($name);//пучаем имя в 
        //формате setСвойство 
       if(method_exists($this, $method_name)){
           $this->$method_name($value);
       }
    }
    
    /**
     * 
     * @param string $name
     * @return boolean
     */
    public function __get($name)
    {
        if(property_exists($this, $name)){
         return$this->$name;   
        }else{
            return false;
        }
    }
}