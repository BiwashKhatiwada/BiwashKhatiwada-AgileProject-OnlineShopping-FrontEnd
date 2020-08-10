<?php
use PHPUnit\Framework\TestCase;
require '../admin/backend/createCategory.php';
 
class CategoryInsert extends TestCase
{
 
    public function testCategory()
    {
        $result = createCategory('Category Test', 'Category description');
        $expected="success";
        $this->assertEquals($expected, $result);
    }
}