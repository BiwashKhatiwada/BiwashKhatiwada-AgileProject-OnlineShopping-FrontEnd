<?php
use PHPUnit\Framework\TestCase;
require '../admin/backend/changePassword.php';
 
class adminChangePassword extends TestCase
{
 
    public function testChangePassword()
    {
        $result = changePassword('test','test','admin');
        $expected="success";
        $this->assertEquals($expected, $result);
    }
}