<?php


class Cat extends Animal
{
    /** @var string */
    private $toy = '';

    /**
     * Cat constructor.
     */
    public function __construct()
    {
        $this->setSpeech('mnau');
    }

    /**
     * Nastavit hracku
     *
     * @param $toy
     */
    public function setToy($toy)
    {
        $this->toy = $toy;
    }

    /**
     * Ziskat hracku
     *
     * @return string
     */
    public function getToy()
    {
        return $this->toy;
    }
}