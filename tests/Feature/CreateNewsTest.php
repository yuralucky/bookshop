<?php

namespace Tests\Feature;

use App\News;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateNewsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
   public function test_authentic_users_can_create_new_news()
   {
       $this->assertEquals(0,News::count());
       $data=[
           'title'=>'new title',
           'body'=>'new body'
       ];
       $this->postJson(route('store'),$data)->assertStatus(201);
       $this->assertEquals(1,News::count());

       $news=News::first();
   }
}
