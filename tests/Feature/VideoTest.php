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
    
}
