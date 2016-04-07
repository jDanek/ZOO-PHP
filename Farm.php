<?php

class Farm
{
    /** @var array */
    private $animals = [];

    /**
     * Pridat zvire na farmu
     *
     * @param Animal $animal
     * @return $this
     */
    public function addAnimal($animal)
    {
        if ($animal instanceof Animal)
        {
            $this->animals[] = $animal;
        }

        return $this;
    }

    /**
     * Pridat vice zvirat na farmu
     *
     * @param array $animals
     * @return $this
     */
    public function addAnimals(array $animals)
    {
        foreach ($animals as $animal)
        {
            $this->addAnimal($animal);
        }

        return $this;
    }

    /**
     * Ziskat pocet zvirat na farme
     *
     * @return int
     */
    public function countAnimals()
    {
        return sizeof($this->animals);
    }

    /**
     * Ziskat pole se zviraty
     *
     * @return array
     */
    public function getAnimals()
    {
        return $this->animals;
    }

    /**
     * Nakrmit hladova zvirata
     */
    public function feedAnimals()
    {
        /** @var $animal Animal */
        foreach ($this->animals as $animal)
        {
            if (true === $animal->isHungry())
            {
                $animal->feed();
            }
        }
    }
}