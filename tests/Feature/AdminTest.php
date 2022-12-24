<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_update_videos_from_directory()
    {
        $file = scandir(storage_path('app/public/videos'))[2];
        
        $response = $this->get('/admin/refresh?password=2123');

        $response->assertStatus(200)->assertDatabaseHas('videos', [
            'path' => $file
        ]);
    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_403_admin_refresh_videos()
    {
        $response = $this->get('/admin/refresh');
        $response->assertStatus(403);
    }
}
