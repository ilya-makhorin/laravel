<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NewsCreateTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/create')
                    ->assertSee('Тема')
                    ->assertSee('Содержимое')
            ->press('Добавить новость')
            ->assertSee('Количество символов в поле Содержимое должно быть не меньше 10');
        });
    }
}
