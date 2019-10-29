<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    
    public function index(Request $request)
    {
        $page = strtolower($request->page);

        try {
            $content = file_get_contents(base_path(sprintf('pages/%s.md', $page)));

            $content = \Spatie\YamlFrontMatter\YamlFrontMatter::parse($content);

            return view('page', compact('content'));
        } catch (\Exception $e) {
            return abort(404);
        }
    }
}
