<?php

class Chicken extends Animal
{

    private static $favoriteFood;

    public function setName($name)
    {
        if ('cockadoodledoo' === $name)
        {
            $new_name = "HERETIC LOVER";
        }
        else
        {
            $new_name = "<strong>KFC: " . $name . "</strong>";
        }
        parent::setName($new_name);
    }

    public static function favoriteFood()
    {
        //nastaveni jidel
        self::$favoriteFood = ['grass', 'seeds', 'worms'];

        return self::$favoriteFood;
    }

}