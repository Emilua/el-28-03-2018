<?php

class Student extends Human
{/**
 *
 * @var str
 */

    protected $group;

    /**
     *
     * @var str
     */
    protected $email;

    /**
     * 
     * @param steing $name
     * @param steing $surname
     * @param int $age
     * @param steing $address
     * @param steing $group
     * @param steing $email
     */
    public function __construct($name, $surname, $age, $address, $group, $email)
    {
        parent::__construct($name, $surname, $age, $address);
        $this->group = $group;
        $this->email = $email;
    }

    public function __toString()
    {
        $str = parent::__toString();
        $str.='Group:'. $this->group.'<br>';
        $str.='Email:'. $this->email.'<br>';
        return $str;
        
    }

}
