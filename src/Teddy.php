<?php
namespace Khromov\Teddy;

class Teddy {

    public static function speak($phrase = "World") {
        return "Hello, {$phrase}! I am Teddy!";
    }

}