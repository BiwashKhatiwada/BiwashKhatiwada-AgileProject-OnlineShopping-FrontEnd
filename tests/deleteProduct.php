<?php
use PHPUnit\Framework\TestCase;
require '../admin/backend/deleteProduct.php';
 
class DeleteProduct extends TestCase
{
 
    public function testDeleteProduct()
    {
        $result = deleteProduct('1');
        $expected="success";
        $this->assertEquals($expected, $result);
    }
}