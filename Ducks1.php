<?php
namespace phpUnitTutorial;

class Ducks1{
	public function duckEmolator(){
        $dk = array(new MallardDuck(),
            new DecoyDuck(),
            new RubberDuck(),
            new RedHeadDuck());
        $dkarr = array();
        foreach ($dk as $d) {
            $str = $d->getName() . $d->sing();
            if ($d instanceof Fly) {
                $str .= " And is flying";
            }else{
                $str .= " And can't fly!";
            }
            $dkarr[]=$str;
        }
		return $dkarr;
    }
}
interface CommonBehavior {
	public function sing();
	public function getName();
}
interface Fly {
    //put your code here
}
class DecoyDuck implements CommonBehavior
{
    private static $name="Decoy_Duck";

    public function getName() {
        return DecoyDuck::$name;
    }

    public function sing() {
        return " is always silent!";
    }
}
class MallardDuck implements CommonBehavior, Fly
{
    private static $name="Mallard_Duck";

    public function sing() {
        return " says: Quack! Quack!";
    }

    public function getName() {
        return MallardDuck::$name;
    }
}
class RedHeadDuck implements Fly,CommonBehavior
{
    private static $name="Red_head_Duck";

    public function getName() {
        return RedHeadDuck::$name;
    }

    public function sing() {
        return " says: Quack! Quack!";
    }
}
class RubberDuck implements CommonBehavior
{
    private static $name="Rubber_Duck";

    public function sing() {
        return " says: Squeak!";
    }

    public function getName() {
        return RubberDuck::$name;
    }
}