<?php
use PHPUnit\Framework\TestCase;
require '../admin/backend/createSubCategory.php';
 
class SubCategoryInsert extends TestCase
{
 
    public function testSubCategory()
    {
        $result = createSubCategory('4', 'Sub Category');
        $expected="success";
        $this->assertEquals($expected, $result);
    }
}