<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function allContents()
    {
        $all_contents = Content::paginate(3);
        return view('admin.index', compact('all_contents'));

        // dd('hi');
    }
    public function createContent()
    {
        return view('admin.create-content');
    }
    public function addContent(Request $request)
    {
        $t_content = $request->input('text');
        $content = new Content;
        $content->content = $t_content;
        $content->save();
        return redirect()->route('all.contents');
    }
    public function editContent($id)
    {
        $content = Content::find($id);
        // dd($content);
        return view('admin.edit-content', compact('content'));
    }
    public function updateContent(Request $request, $id)
    {
        $content = Content::find($id);
        $text = $request->input('text');
        $attributes = ['content' => $text];
        $content->update($attributes);
        return redirect()->route('all.contents');
    }
}
