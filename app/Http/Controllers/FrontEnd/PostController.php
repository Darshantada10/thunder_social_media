<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function Index(PostRequest $request)
    {
        // dd($request);

        $music =null;
        $video =null;
        $image =null;
        
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $image->move('image/',$filename);
            $image = $filename;
        }
    
        if($request->hasFile('video'))
        {
            $video = $request->file('video');
            $extension = $video->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $video->move('video/',$filename);
            $video = $filename;
        }
        
        if($request->hasFile('music'))
        {
            $music = $request->file('music');
            $extension = $music->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $music->move('music/',$filename);
            $music = $filename;
        }

        $post = new Post;

        $post->user_id = auth()->id();
        $post->caption = $request->caption ??  null;
        $post->music = $music ??  null;
        $post->video = $video ??  null;
        $post->image = $image ??  null;
        $post->save();

        return redirect('/home');

    }
}
