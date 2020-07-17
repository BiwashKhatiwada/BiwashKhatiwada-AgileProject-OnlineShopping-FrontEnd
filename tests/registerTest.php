<?php
use PHPUnit\Framework\TestCase;
require '../backend/login.php';
 
class RegisterTest extends TestCase
{
 
    public function testRegister()
    {
        $result = registerUser('Biwash Khatiwada Test', 'biwashkhatiwadatest@gmail.com',"98421433","Test@123");
        $expected=true;
        $this->assertEquals($expected, $result);
    }
}