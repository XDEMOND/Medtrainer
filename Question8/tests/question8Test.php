<?php declare(strict_types=1);

include 'fizzBuzz.php';

use PHPUnit\Framework\TestCase;
// Question 8

class FizzBuzzTest extends TestCase {
    
    public function testFizzBuzzOutput() {
        $this->assertEquals('12Fizz4Buzz', fizzBuzz(1, 5));

        // probamos módulo de 15
        $this->assertEquals('FizzBuzz', fizzBuzz(15, 15));

        // Excepción por argumentos inválidos
        $this->expectException(InvalidArgumentException::class);
        fizzBuzz(-1, 10);
    }

    // Pregunté a deep si mi test cubría todos los escenarios de la función, me recomendó agregar este siguiente test para primero > segundo
    public function testStartGreaterThanStopThrowsException() {
        $this->expectException(InvalidArgumentException::class);
        fizzBuzz(10, 5);
    }
    
}


?>