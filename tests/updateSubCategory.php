<?php
use PHPUnit\Framework\TestCase;
require '../admin/backend/updateSubCategory.php';
class UpdateSubCategory extends TestCase
{
    public function testUpdateSubCategory()
    {
        $result = updateSubCategory('3','Test description','15');
        $expected=true;
        $this->assertEquals($expected, $result);
    }
}