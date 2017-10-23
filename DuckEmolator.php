<?php

namespace phpUnitTutorial;

class DuckEmolator
{
	public static function home(){
        $dk[] = DuckEmolator::mallardDuck();
        $dk[] = DuckEmolator::decoyDuck();
        $dk[] = DuckEmolator::rubberDuck();
        $dk[] = DuckEmolator::redHeadDuck();
        $dkarr = array();
        foreach ($dk as $d) {
            $str = $d->getName() . $d->getQuack(). $d->getFly();
            $dkarr[]=$str;
        }
        return $dkarr;
    }

    private static function mallardDuck() {
        return new Duck("Mallard_Duck", " says: Quack! Quack!", 1);
    }

    private static function decoyDuck() {
        return new Duck("Decoy_Duck", " is always silent!", 0);
    }

    private static function rubberDuck() {
        return new Duck("Rubber_Duck", " says: Squeak!", 0);
    }

    private static function redHeadDuck() {
        return new Duck("Red_Head_Duck", " says: Quack! Quack!", 1);
    }
}
class Duck
{
    private $name;
    private $quack;
    private $fly;

    function __construct($name, $quack, $fly) {
        $this->name = $name;
        $this->quack = $quack;
        $this->fly = $fly;
    }

    public function getName() {
        return $this->name;
    }

    public function getQuack() {
        return $this->quack;
    }

    public function getFly() {
        if ($this->fly == 0) {
            return " And can't fly!";
        } else {
            return " And is flying.";
        }
    }

}
