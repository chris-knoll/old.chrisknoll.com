<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarkdownPagesController extends Controller
{
    //
    protected function markdownView($folder, $view)
    {
        $view = $folder . '.' . $view;
        return view('layouts.markdown', [
            'markdownViewName' => $view
        ]);
    }
}
