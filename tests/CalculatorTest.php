<?php
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

require './src/Calculator.php';
class CalculatorTest extends TestCase{
     /**
     * @dataProvider factorialProvider
     */
    public function testFactorial($num,$expected){
        $c = new Calculator();
        $result = $c->Factorial($num);
        $this->assertEquals($expected,$result);
    }
    public static function factorialProvider()
    {
        return [
            [0,1],
            [1,1],
            [5, 120],
            [-3,null],
            [false,null],
            ["abc",null],
            [1.5,null],
       
        ];
    }

}

?>