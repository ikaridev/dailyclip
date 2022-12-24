<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function update(Request $request)
    {
        if ($request['password'] != '2123')
        {
            return response()->view('videos.missing')->setStatusCode(403);
        }

        $files = scandir(storage_path('app/public/videos'));
        unset($files[0]);
        unset($files[1]);
        $rows = DB::table('videos')->get();
        $data = [];

        foreach ($rows as $row) {
            foreach ($files as $key => $file) {
                if ($row->path == $file) {
                    unset($files[$key]);
                }
            }
        }

        $length = count($rows);
        $last = DB::table('videos')->orderBy('release', 'desc')->first();
        $count = 1;

        foreach ($files as $file) {

            $releaseDate = date('Y-m-d', strtotime($last == null ? now() : $last->release) + 86400*$count++);

            $data[] = [
                'title' => 'video #'.$length++,
                'path' => $file,
                'is_public' => now() >= $releaseDate ? 1 : 0,
                'release' => $releaseDate
            ];
        }

        DB::table('videos')->insert($data);

        return 'Se han actualizado '.count($data).' registros.';
    }
}
