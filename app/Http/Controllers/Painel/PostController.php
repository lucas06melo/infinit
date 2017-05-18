<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostController extends Controller
{
    private $post;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Post $post)
    {
        $this->middleware('auth');
        $this->post = $post;
    }

    public function index()
    {
        $posts = DB::table('posts')->paginate(10);

    	return view('painel.posts.index', compact('posts'));
    }

    public function create()
    {
    	return view('painel.posts.create');
    }

    public function edit($id)
    {
        $posts = Post::findOrFail($id);
    	return view('painel.posts.edit')->withPost($posts);
    }

    /**
     * Store a post
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tipo' => 'required|max:1',
            'titulo' => 'required|min:4',
            'subtitulo' => 'max:255',
            'texto' => 'required|min:5',
            'resumo' => 'required|min:5',
            'imagemdestaque' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'legendaimagem' => 'max:100',
            'status' => 'required|max:1'
        ]);

		$post = new Post;

        $post = array(
            'tipo' => $request->tipo,
            'titulo' => $request->titulo,
            'subtitulo' => $request->subtitulo,
            'slug' => str_slug($request->titulo),
            'texto' => $request->texto,
            'resumo' => $request->resumo,
            'imagemdestaque' => $request->imagemdestaque,
            'legendaimagem' => $request->legendaimagem,
            'status' => $request->status,
            
            );

        if($request->hasFile('imagemdestaque')) {
            $file   = $request->file('imagemdestaque');
            $fileName           = $file->getClientOriginalName();
            $extension          = $file->getClientOriginalExtension();
            $safeName           = str_random(10).'.'.$extension;
            $request->file('imagemdestaque')->storeAs('/posts/', $safeName, 'public_folder');
            $post['imagemdestaque'] = $safeName;
        } else {
            $post['imagemdestaque'] = 'default.jpg';
        }

        $this->post->create($post);

        Session::flash('success', 'Cadastrado com sucesso!');

        return redirect('/painel/posts');
    }

    public function update(Request $request, $id)
    {

    $posts = Post::findOrFail($id);

    $this->validate($request, [
            'tipo' => 'required|max:1',
            'titulo' => 'required|min:4',
            'subtitulo' => 'max:255',
            'texto' => 'required|min:5',
            'resumo' => 'required|min:5',
            'imagemdestaque' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'legendaimagem' => 'max:100',
            'status' => 'required|max:1'
        ]);

    $input = $request->all();

    $posts->fill($input)->save();

    Session::flash('success', 'Editado com sucesso!');

    return redirect('/painel/posts');
    }
}
