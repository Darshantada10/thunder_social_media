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
            $path = 'uploads/image/';
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = $path.time().'.'.$extension;
            $image->move($path,$filename);
            $image = $filename;
        }
    
        if($request->hasFile('video'))
        {
            $path = 'uploads/video/';
            $video = $request->file('video');
            $extension = $video->getClientOriginalExtension();
            $filename = $path.time().'.'.$extension;
            $video->move($path,$filename);
            $video = $filename;
        }
        
        if($request->hasFile('music'))
        {
            $path = 'uploads/music/';
            $music = $request->file('music');
            $extension = $music->getClientOriginalExtension();
            $filename = $path.time().'.'.$extension;
            $music->move($path,$filename);
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
