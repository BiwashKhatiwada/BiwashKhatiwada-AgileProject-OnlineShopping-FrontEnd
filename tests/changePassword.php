<?php
use PHPUnit\Framework\TestCase;
require '../backend/changePasswordTest.php';
 
class changePassword extends TestCase
{
    public function testChangePassword()
    {
        $result = changePassword('test@123','test','bib@gmail.com');
        $expected=true;
        $this->assertEquals($expected, $result);
    }
}