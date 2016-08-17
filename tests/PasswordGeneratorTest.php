<?php

namespace Yuloh\BatteryStaple;

class PasswordGeneratorTest extends \PHPUnit_Framework_TestCase
{
    public function testGenerate()
    {
        $password = PasswordGenerator::generate();
        $this->assertRegExp('/[aA-zZ]/', $password);
    }
}
