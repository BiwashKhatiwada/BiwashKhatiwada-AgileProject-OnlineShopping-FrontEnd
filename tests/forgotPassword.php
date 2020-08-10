<?php
use PHPUnit\Framework\TestCase;
require '../backend/forgotPasswordTest.php';
 
class forgotPassword extends TestCase
{
    public function testForgorPassword()
    {
        $result = forgotPassword('b@gmail.com','9842143756','admin');
        $expected=true;
        $this->assertEquals($expected, $result);
    }
}