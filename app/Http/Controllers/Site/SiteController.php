<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Session;
use App\Post;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
	private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('posts')->where('tipo', '1')->where('status', '1')->orderBy('created_at', 'desc')->paginate(3);

    	return view('site.index.index', compact('posts'));
    }

    public function contato()
    {
    	return view('site.contato.index');
    }

    public function enviar(Request $request)
    {
    	$this->validate($request, [
        'tipo' => 'required',
        'nome' => 'required',
        'email' => 'required|email',
        'assunto' => 'required|min:3',
        'telefone' => 'required|min:8',
        'message' => 'required',        
    ]);

    	$data = array(
    		'tipo' => $request->tipo,
    		'nome' => $request->nome,
    		'email' => $request->email,
    		'assunto' => $request->assunto,
    		'telefone' => $request->telefone,
    		'bodyMessage' => $request->message,
    		);

    	Mail::send('site.contato.email', $data, function($message) use ($data)
    	{
    		$message->from($data['email']);
    		$message->to('faleconosco@finit.mg.gov.br');
    		$message->replyTo($data['email'] , $data['nome']);
    		$message->subject($data['assunto']);
    	});

    	Session::flash('success', 'Email enviado com sucesso!');

    	return redirect('/contato');
    }

    public function blog()
    {
        $posts = DB::table('posts')->where('tipo', '1')->where('status', '1')->orderBy('created_at', 'desc')->paginate(5);

        return view('site.blog.index', compact('posts'));
    }

    
    public function viewNoticia($slug)
    {
    
    $post = DB::table('posts')->where('slug',$slug)->first();

    return view('site.blog.noticia', compact('post'));
    }
}
