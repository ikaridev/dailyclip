<?php

namespace Tests\Feature;

use App\Models\Video;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VideoTest extends TestCase
{
    /**
     *
     */
    public function test_index_page()
    {
        $video = Video::orderBy('release', 'desc')->where('is_public',1)->first();
        $response = $this->get('/');

        $response->assertStatus(200)->assertSee($video->title);
    }
    /**
     *
     */
    public function test_video_page()
    {
        $video = Video::get()->where('is_public',1)->first();
        $response = $this->get('/clip/'.$video->id);

        $response->assertStatus(200)->assertSee($video->title);
    }
    /**
     *
     */
    public function test_missing_video_page_redirect()
    {
        $response = $this->get('/clip/10000000');
        $response->assertStatus(403);
    }
    /**
     *
     */
    public function test_no_public_video_page_redirect()
    {
        $video = Video::get()->where('is_public',0)->first();
        if(!empty($video))
        {
            $response = $this->get('/clip/'.$video->id);
            $response->assertStatus(403);
        }
        return 'ok';
    }
    /**
     *
     */
    public function test_random_video_page_loads()
    {
        $response = $this->get('/random');
        $response->assertStatus(200);
    }
}
