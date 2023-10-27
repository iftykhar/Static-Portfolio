<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\File;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function work()
    {
        return view('pages.workex');
    }

    public function project()
    {
        $content = file_get_contents(storage_path('data/projects.json'));
        $json = json_decode($content);

        // return view('pages.project')->with('json',$json);
        return view('pages.project', ['json' => $json]);
    }

}
