<?php

namespace phpUnitTutorial;

class PizzaStore 
{
    public static function orderPizza($id) {
        if ($id == PizzaType::CHEESE) {
            $pizza = new CheesePizza();
        } elseif ($id == PizzaType::PEPPERONI) {
            $pizza = new PepperoniPizza();
        } elseif ($id == PizzaType::CALM) {
            $pizza = new CalmPizza();
        } elseif ($id == PizzaType::GREEK) {
            $pizza = new GreekPizza();
        } else {
            return array('','','','');
        }

        $str[0]= $pizza->prepare();
        $str[1]= $pizza->bake($pizza->getName());
        $str[2]= $pizza->cut($pizza->getName());
        $str[3]= $pizza->box();
		return $str;
    }
}

class PizzaType
{
    const CHEESE = 0;
    const PEPPERONI = 1;
    const CALM = 2;
    const GREEK = 3;
}
abstract class Pizza
{
    abstract public function getName();

    // these 2 functions have to define for all Pizza child
    abstract public function prepare();

    abstract public function box();

    // these 2 functions have same functionality for all pizaa type
    public function bake($pizzaType) {
        return $pizzaType . " pizza is baked";
    }

    public function cut($pizzaType) {
        return $pizzaType . " pizza is cutted";
    }
}

class CheesePizza extends Pizza
{
    public function getName() {
        return "Chesse";
    }

    public function prepare() {
        return $this->getName() . " pizza is prepared";
    }

    public function box() {
        return $this->getName() . " pizza is boxed";
    }
}
class CalmPizza extends Pizza
{
    public function getName() {
        return "Calm";
    }

    public function prepare() {
        return $this->getName() . " pizza is prepared";
    }

    public function box() {
        return $this->getName() . " pizza is boxed";
    }
}
class GreekPizza extends Pizza
{
    public function getName() {
        return "Greek";
    }

    public function prepare() {
        return $this->getName() . " pizza is prepared";
    }

    public function box() {
        return $this->getName() . " pizza is boxed";
    }

}
class PepperoniPizza extends Pizza
{
    public function getName() {
        return "Pepperoni";
    }

    public function prepare() {
        return $this->getName() . " pizza is prepared";
    }

    public function box() {
        return $this->getName() . " pizza is boxed";
    }

}
