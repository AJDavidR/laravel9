<?php

namespace App\Http\Controllers;

// el modelo debe llamarse Post si la tabla se llama posts 1Mayusculas y en singular

// use App\Http\Controllers\Controller;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
// only si para agregar a los metodos de autenticar ("auth", ["only"=> ["index",""]]);
// except para evitar a los metodos de autenticar ("auth", ["except"=> ["index",""]]);
    public function __construct(){
        $this->middleware("auth", ["except"=> ["index","show"]]);
    }

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }
    public function create()
    {
        return view('posts.create', ['post' => new Post()]);
    }
    public function store(SavePostRequest $request)
    {

        Post::create($request->validated());

        // { Notas
        //     $validated = $request->validate([
        //         'title' => ['required', 'min:4'],
        //         'body' => ['required']
        //     ]);
    
        //     Post::create($validated);
    
        //     $post = new Post;
        //     $post->title = $request->title;
        //     $post->body = $request->body;
        //     $post->save();
    
        //     Post::create([
        //         'title' => $request->input('title'),
        //         'body' => $request->input('body')
        //     ]);
        // }

        session()->flash('status', 'Post Creado!');

        return to_route('posts.index');
    }

    // { notas
    //     show(Post $post) -> laravel automaticamente hace un Post::findorfail($post)
    //     view("posts") -> dependiendo de con que este trabajando siemore es en plural ej:users
    // }
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }
    public function update(SavePostRequest $request, Post $post)
    {

        $post->update($request->validated());


        // { notas
        //     $validated = $request->validate([
        //         'title' => ['required', 'min:4'],
        //         'body' => ['required']
        //     ]);
    
        //     $post->update($validated);
    
        //     $post->title = $request->title;
        //     $post->body = $request->body;
        //     $post->save();
    
        //     $post->update([
        //         'title'=> $request->input('title'),
        //         'body'=> $request->input('body'),
        //     ]);
        // }

        // session()->flash('status', 'Post Actualizado!');

        return to_route('posts.show', $post)->with('status', 'post Actualizado');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        
        return to_route('posts.index')->with('status', 'post deleated');
    }

}
