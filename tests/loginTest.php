<?php
use PHPUnit\Framework\TestCase;
require '../backend/login.php';
 
class LoginTest extends TestCase
{
 
    public function testLogin()
    {
        $result = login('biwash@gmail.com', 'test@123');
        $expected=true;
        $this->assertEquals($expected, $result);
    }
}
