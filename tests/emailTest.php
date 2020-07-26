<?php
use PHPUnit\Framework\TestCase;
require '../backend/checkEmail.php';
class EmailTest extends TestCase
{
    public function testEmail()
    {
        $result = validateEmail('biwashgmail.com');
        $expected=true;
        $this->assertEquals($expected, $result);
    }
}

