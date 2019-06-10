<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FunctionalTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $db_book=\DB::select('select *from books where id=2');
        $author=ucfirst($db_book[0]->author);

        $response = $this->get('/test?id=2');

        $response->assertStatus(200);
        $response->assertSeeText($author);
    }
}
