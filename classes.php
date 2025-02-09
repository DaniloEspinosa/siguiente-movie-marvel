<?php

declare(strict_types=1);

class SuperHero
{
    // Propiedades y los metodos

    // Propiedades
    public $name;
    public $powers;
    public $planet;
    public $level;

    // Constructor
    public function __construct($name, $powers, $planet)
    {
        $this->name = $name;
        $this->powers = $powers;
        $this->planet = $planet;
        $this->level = 0;
    }

    // Métodos
    public function attack()
    {
        return "$this->name ataca con sus poderes";
    }
    public function description()
    {
        return "$this->name es un super heroe que viene del planeta $this->planet y sus poderes son $this->powers";
    }
}

class SuperHero2
{
    // Constructor con lo mismo pero con promoted properties PHP 8
    public function __construct(
        readonly public string $name,   // readonly Esta propiedad luego no se puede modificar
        public array $powers,
        private string $planet                 // private No se puede acceder a esta propiedad desde fuera de la clase
    ) {}

    // Métodos
    public function attack()
    {
        return "$this->name ataca con sus poderes";
    }
    public function description()
    {
        $powers = implode("-" , $this->powers);
        return "$this->name es un super heroe que viene del planeta $this->planet y sus poderes son: $powers";
    }
}


$hero = new SuperHero("Batman", "inteligencia, tecnologia y dinero", "tierra");

echo $hero->description();
echo "\n";  // para hacer un salto de linea


$hero->name = "Goku";
$hero->planet = "Vegito";
$hero->powers = "Teletransportacion, kame hame ha, genkidama";

echo $hero->description();
echo "\n";  // para hacer un salto de linea


$hero2 = new SuperHero2("Superman", ["Fuerza", "velocidad", "dureza"], "krypton");

echo $hero2->description();
echo "\n";  // para hacer un salto de linea
echo $hero2->name;
