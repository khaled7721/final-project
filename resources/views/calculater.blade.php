<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calculator </title>
</head>
<body>
     <form action="#" method="post">
     <input type="number" name="num1" placeholder="First number">
     <select name="oper">
     <option value="add"> Addition</option>
     <option value="sub"> Substraction</option>
     <option value="mul"> Mutliplication</option>
     <option value="div"> Division</option>
</select>
     <input type="number" name="num2" placeholder="Second number">
<button type="submit" name="submit"> Calculate</button>
</form>
<?php

class Calc{
    public $operator;
    public $num1;
    public $num2;


    public function __construct(string $one, int $two, int $three){
        $this->operator = $one;
        $this->num1 = $two;
        $this->num2 = $three;
    }


    public function calculator(){
     switch ($this->operator) {
         case 'add':
            $result = $this->num1 + $this->num2;
            return $result;             
            break;
        case 'sub':
            $result = $this->num1 - $this->num2;
            return $result;             
            break;
        case 'div':    
             $result = $this->num1 / $this->num2;
             return $result;             
             break;
        case 'mul':    
             $result = $this->num1 * $this->num2;
             return $result;             
             break;

     }
    }

}
?>
</body>
</html> -->
