<?php
declare(strict_types=1);

namespace App\Tests\ControllerTests;
use App\Controller\LuckyController;
use Exception;
use PHPUnit\Framework\TestCase;

class LuckyControllerTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testLuckyIsNotEmpty(): void
    {
//        sut
        $luckyNumber = $this->makeLuckyNumberController();

//        Act
        $actual = $luckyNumber->number();

//        Assert
        $this->assertNotEmpty(strval($actual));
    }

    public function makeLuckyNumberController(): LuckyController
    {
        return new LuckyController();
    }
}