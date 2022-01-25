<?php

namespace Tests\Unit;

use App\Http\Controllers\NewsController;
use PHPUnit\Framework\TestCase;

class NewsControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
        $model = new NewsController();
        $data = $model->create();
        $this->assertNotEmpty($data);
    }
}
