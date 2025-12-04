<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class User {
       public $name1;
       public $surname;
       public $age;
       protected $id;
       protected $phone;
       public function getPhone() {
            return $this->phone;
       }
       public function getId() {
            return $this->id;
       }
       function __construct($n,$s,$a,$i,$p) {
            $this -> name1=$n;
            $this -> surname=$s;
            $this -> age=$a;
            $this -> id=$i;
            $this -> phone=$p;

       }
    } 


    class Student extends User {
        public $mog;
        public $faculty;
        public $course;
        function __construct($n,$s,$a,$i,$p,$m,$f,$c) {
        parent::__construct($n,$s,$a,$i,$p); 
        $this->mog = $m;
        $this->faculty = $f;
        $this->course = $c; 
   }
    }

    ?>
</body>
</html>