<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //Nome do método deve ser o mesmo que o informado na rota.
    public function showForm()
    {
        //Nome da view deve ser igual ao arquivo criado dentro do diretório views.
        return view('form');
    }

    public function debug(Request $request)
    {
//        dd($request->all());  O método all pega todas as posições do formulário
//        dd($request->only(['content']));  O método all pega todas as posições do formulário
        dd($request->except(['_token']));  // O método except permite informar campos que não são desejados persistirem no db

        $post = new Post();
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->content = $request->content;
        $post->save();
//        $post->create($request->except(['_token']));  Desse forma da erro, devido a forma insegura de persistencia.
    }
}
