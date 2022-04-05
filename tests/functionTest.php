<?php
require '../function.php';
use PHPUnit\Framework\Testcase;

class functionTest extends TestCase
{
    public function testSuccessDisplayAllCards()
    {
        $testData = [[
            'name' => 'Yellow Submarine',
            'brand' => 'U.S. Playing Card Company',
            'price' => 13,
            'img' => 'https://cdn.shopify.com/s/files/1/0200/7616/products/the-beatles-yellow-submarine-playing-cards.progressive.png.jpg?v=1648827615',
            'limited' => 0,
        ]];
        $expected = "<div class='card__wrapper'><div class='card'><div class='card__img' role='img' style='background-image:linear-gradient(0deg, rgba(254, 236, 233, 0.25), rgba(254, 236, 233, 0.25)),url(https://cdn.shopify.com/s/files/1/0200/7616/products/the-beatles-yellow-submarine-playing-cards.progressive.png.jpg?v=1648827615);'/></div><div class='card__content'><h2 class='card__title'>Yellow Submarine</h2><p class='card__brand'>U.S. Playing Card Company</p><span class='card__price'>£13</span></div></div></div>";
        $case = displayAllCards($testData);
        $this->assertEquals($expected, $case);
    }
    public function testSuccessEmptyDisplayAllCards()
    {
        $testData = [[
        ]];
        $expected = false;
        $case = displayAllCards($testData);
        $this->assertEquals($expected, $case);
    }
    public function testFailureDisplayAllCards()
    {
        $testData = false;
        $expected = $this->expectException(TypeError::class);
        $case = displayAllCards($testData);
        $this->assertEquals($expected, $case);
    }
}
?>