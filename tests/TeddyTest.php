<?php
use PHPUnit\Framework\TestCase;
use Khromov\Teddy\Teddy;

class TeddyTest extends TestCase {

    public function testSpeak() {
        $bad_teddy = (new Teddy())->speak("enemy");
        $good_teddy = (new Teddy())->speak("friend");

        $this->assertEquals("Hello, enemy! I am Teddy!", $bad_teddy);
        $this->assertNotEquals("Hello,enemy! I am Teddy!", $bad_teddy);

        $this->assertEquals("Hello, friend! I am Teddy!", $good_teddy);
        $this->assertNotEquals("Hello,friend! I am Teddy!", $good_teddy);
    }

}