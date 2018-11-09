<?php
/**
 * Created by PhpStorm.
 * User: yurii
 * Date: 09/11/18
 * Time: 02:03
 */

// framework/IndexTest.php
use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public function testHello()
    {
        $_GET['name'] = 'Fabien';

        ob_start();
        include 'index.php';
        $content = ob_get_clean();

        $this->assertEquals('Hello Fabien', $content);
    }
}
