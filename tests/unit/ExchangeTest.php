<?php

class ExchangeTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    // tests
    public function testMe()
    {
        $exchange = Yii::$app->getModule('exchange');
    }

}