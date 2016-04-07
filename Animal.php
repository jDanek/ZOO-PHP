<?php

class Animal
{
    /** @var  string */
    private $name = '';

    /** @var string */
    private $color = '';

    /** @var int  */
    private $age=0;

    /** @var bool */
    private $hunger = true;

    /** @var string */
    protected $speech = '';


    /**
     * Nastavit zvireti jmeno
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Ziskat jmeno zvirete
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Nastavit barvu zvirete
     *
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * Ziskat barvu zvirete
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Nastavit vek zvirete
     *
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * Ziskat vek zvirete
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Nastavit hlasovy projev
     *
     * @param string $sound
     */
    public function setSpeech($sound)
    {
        $this->speech = $sound;
    }

    /**
     * Ziskat hlasovy projev
     *
     * @return string
     */
    public function getSpeech()
    {
        return $this->speech;
    }

    /**
     * Vratit stav hladu zvirete
     *
     * @return bool
     */
    public function isHungry()
    {
        return $this->hunger;
    }

    /**
     * Nakrmit zvire
     */
    public function feed()
    {
        $this->hunger = false;
    }

}