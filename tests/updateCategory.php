<?php
use PHPUnit\Framework\TestCase;
require '../admin/backend/updateCategory.php';
class updateCategory extends TestCase
{
    public function testUpdateCategory()
    {
        $result = updateCategory('Test','Test description','3');
        $expected=true;
        $this->assertEquals($expected, $result);
    }
}