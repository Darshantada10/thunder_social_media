<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use App\Models\Like;

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

    public function SaveLike(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'post_id' => 'required|exists:posts,id',
        ]);

        $existinglike  = Like::where('user_id',$request->user_id)->where('post_id',$request->post_id)->first();

        if(!$existinglike)
        {
            Like::create([
                'user_id' => $request->user_id,
                'post_id' => $request->post_id,
            ]);
            return response()->json(['message'=>'Like']);
        }
        else
        {
            $existinglike->delete();
            return response()->json(['message'=>'Unlike']);
        }

    }
}
