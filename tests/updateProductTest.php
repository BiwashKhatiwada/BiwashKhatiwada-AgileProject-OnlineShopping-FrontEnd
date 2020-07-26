<?php
use PHPUnit\Framework\TestCase;
require '../admin/backend/updateProduct.php';
 
class UpdateProductTest extends TestCase
{
 
    public function testUpdateProduct()
    {
        $result = updateProduct('3','8','Book name test','ABC','250','this is book desc test','50','In Stock','250','15');
        $expected="success";
        $this->assertEquals($expected, $result);
    }
}