<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Kadai_016</title>
</head>
<body>
   <?php

   class Food {
      public $name;
      public $price;

      public function show_price() {
         return $this->price;
      }

      public function __construct(
         $name,
         $price
      ){
         $this->name = $name;
         $this->price = $price;
      }
   }


   class Animal {
      public $name;
      public $height;
      public $weight;


      public function show_height() {
         return $this->height;
      }

      public function __construct(
         $name,
         $height,
         $weight
      ) {
         $this->name = $name;
         $this->height = $height;
         $this->weight = $weight;
      }
   }

   $potato = new Food("potato", 250);
   print_r($potato);
   echo "<br>";

   $dog = new Animal("dog", 60, 5000);
   print_r($dog);
   echo "<br>";

   echo $potato->show_price();
   echo "<br>";

   echo $dog->show_height();
   echo "<br>";
   ?>
</body>
</html>
