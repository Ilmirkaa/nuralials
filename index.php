<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php

class Animal {
    protected $weight; 
    protected $age; 
    protected $color; 

    public function __construct($weight, $age, $color) {
        $this->weight = $weight;
        $this->age = $age;
        $this->color = $color;
    }

    public function getInfo() {
        return "Вес: {$this->weight}, Возраст: {$this->age}, Цвет: {$this->color}";
    }
}


class Lion extends Animal {
    private $mane; 

    public function __construct($weight, $age, $color, $mane) {
        parent::__construct($weight, $age, $color);
        $this->mane = $mane;
    }

    public function l() {
        return "Размер грива {$this->mane}";
    }

}


class Rabbit extends Animal {
    private $ear; 

    public function __construct($weight, $age, $color, $ear) {
        parent::__construct($weight, $age, $color);
        $this->ear = $ear;
    }

    public function r() {
        return "Размер ушей{$this->ear} ";
    }

}


class Wolf extends Animal {
    private $tail;

    public function __construct($weight, $age, $color, $tail) {
        parent::__construct($weight, $age, $color);
        $this->tail = $tail;
    }

    public function w() {
        return "Длина хвоста {$this->tail}";
    }


}

$lion = new Lion(150, 10, 'желтый', 40);
$rabbit = new Rabbit(3, 4, 'черный', 20);
$wolf = new Wolf(50, 7, 'серый', 30);
?>
<div class="animal">
<div class="lion">
    <?php
echo "Лев " . $lion->getInfo() . "\n";
echo $lion->l() . "\n\n";
?>
</div>

<div class="rabbit">
    <?php
echo "Кролик " . $rabbit->getInfo() . "\n";
echo $rabbit->r() . "\n\n";
?>
</div>

<div class="wolf">
    <?php
echo "Волк " . $wolf->getInfo() . "\n";
echo $wolf->w() . "\n";
?>

</div>
</div>
</body>
</html>

<style>
   body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
    padding: 20px;
}

.animal {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.animal > div {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    margin: 10px;
    padding: 20px;
    width: 250px;
    transition: transform 0.2s;
}

.animal > div:hover {
    transform: scale(1.05);
}

.lion {
    border-left: 5px solid goldenrod;
}

.rabbit {
    border-left: 5px solid lightcoral;
}

.wolf {
    border-left: 5px solid slategray;
}

h2 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

p {
    font-size: 1em;
    line-height: 1.5;
}

</style>