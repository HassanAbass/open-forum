<?php

namespace Tests\Feature;

use App\Reply;
use App\Thread;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ReadThreadTest extends TestCase
{
    use DatabaseMigrations;

    protected function setUp(): void
    {
        parent::setUp();
        $this->thread = factory(Thread::class)->create();
    }

    /** @test */
    function a_user_can_view_all_threads(){
        $response = $this->get('/threads');
        $response->assertSee($this->thread->title);
    }

    /** @test */
    function a_user_can_view_thread(){
        $response = $this->get('/threads/'.$this->thread->id);
        $response->assertSee($this->thread->title);
    }

    /** @test */
    function a_user_can_read_reply_associated_with_thread(){
        $reply = factory(Reply::class)->create(['thread_id' => $this->thread->id]);
        $this->get('/threads/'.$this->thread->id)->assertSee($reply->body);
    }

}
