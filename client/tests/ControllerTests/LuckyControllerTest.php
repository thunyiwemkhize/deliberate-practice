<?php
declare(strict_types=1);

namespace App\Tests\ControllerTests;
use App\Controller\LuckyController;

use PHPUnit\Framework\TestCase;

class LuckyControllerTest extends TestCase
{
    public function testLuckyNumberResponseIsOK(): void
    {
//        Arrange
        $luckyNumber = $this->makeLuckyNumberController();

//        Act
        $actual = $luckyNumber->number()->getStatusCode();

//        Assert
        $this->assertEquals(200,$actual);
    }
    public function testLuckyIsNotEmpty(): void
    {
//        Arrange
        $luckyNumber = $this->makeLuckyNumberController();

//        Act
        $actual = $luckyNumber->number();

//        Assert
        $this->assertNotEmpty($actual);
    }
    public function testLucyNumberRange(): void
    {
//        Arrange
        $luckyNumber = $this->makeLuckyNumberController();

//        Act
        $actual = $luckyNumber->number();

//        Assert
        $this->assertIsInt((int)$actual->getContent());
    }
    public function testGiven100Max_ShouldReturnNumberBetween0And100(): void
    {
//        Arrange
        $luckyNumber = $this->makeLuckyNumberController();

//        Act
        $actual =(int) $luckyNumber->number()->getContent();

//        Assert
        $this->assertGreaterThanOrEqual(0, $actual);
        $this->assertLessThanOrEqual(100, $actual);
    }

    public function makeLuckyNumberController(): LuckyController
    {
        return new LuckyController();
    }
}