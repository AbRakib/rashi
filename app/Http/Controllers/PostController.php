<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PostController extends Controller {

    /**
     * search post by user & date
     */
    public function search(Request $request) {
        $user = $request->user_id;
        $date = $request->date;
        $posts = Post::where('user_id', $user)->whereDate('created_at', $date)->get();
        return view('pages.result', compact('posts'));
    }

    /**
     * Display the specified resource.
     */
    public function show( Post $post ) {
        $posts = Post::where('status', 1)->orderBy('created_at', 'DESC')->get();
        $users = User::all();
        $searchPosts = array();
        return view('home', compact('posts', 'users', 'searchPosts'));
    }

    public function view(Request $request) {
        $slug = $request->slug;
        $post = Post::where('slug', $slug)->first();
        return view('pages.details', compact('post'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index() {
        $posts = Post::orderBy( 'created_at', 'desc' )->get();
        return view( 'admin.posts.index', compact( 'posts' ) );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view( 'admin.posts.create' );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {
        $validateData = $request->validate( [
            'title'   => 'required',
            'details' => 'required',
            'image'   => 'required|image|mimes:png',
        ] );

        try {
            $post = new Post();
            $post->title = $request->title;
            $post->slug = Str::slug( $request->title ) . time();
            $post->details = $request->details;
            $post->user_id = Auth::user()->id;
            $post->status = 1;
            // image uploads
            $image = $request->file( 'image' );
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path( '/uploads/images' );
            $image->move( $path, $imageName );
            $post->image = $imageName;
            // save data
            $post->save();
            toastr()->addSuccess( 'Post has been stored' );
            return redirect()->route( 'post.index' );
        } catch ( \Throwable $error ) {
            toastr()
                ->escapeHtml( false )
                ->addError( '<strong>We’re sorry</strong>, ' . $error );
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Request $request ) {
        $slug = $request->slug;
        $post = Post::where( 'slug', $slug )->first();
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, Post $post ) {
        $validateData = $request->validate( [
            'title'   => 'required',
            'details' => 'required',
            'image'   => 'image|mimes:png',
            'status'  => 'required'
        ] );
        try {
            $post = Post::where('slug', $request->slug)->first();
            $post->title = $request->title;
            $post->slug = Str::slug( $request->title ) . time();
            $post->details = $request->details;
            $post->user_id = Auth::user()->id;
            $post->status = $request->status;
            // image uploads
            if ($request->image) {
                $path = public_path("/uploads/images/").$post->image;
                if(File::exists($path)){
                    File::delete($path);
                }
                $image = $request->file( 'image' );
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $path = public_path( '/uploads/images' );
                $image->move( $path, $imageName );
                $post->image = $imageName;
            }
            // update data
            $post->update();
            toastr()->addSuccess( 'Post has been updated' );
            return redirect()->route( 'post.index' );
        } catch ( \Throwable $error ) {
            toastr()
                ->escapeHtml( false )
                ->addError( '<strong>We’re sorry</strong>, ' . $error );
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request ) {
        $slug = $request->slug;
        $post = Post::where( 'slug', $slug )->first();
        $post->delete();

        toastr()->addSuccess( 'Post has been deleted!' );
        return redirect()->back();
    }
}
