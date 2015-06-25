<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {

        $categories = [
            0 => 'Category 1',
            1 => 'Category 2',
            2 => 'Category 3',
            3 => 'Category 4',
            4 => 'Category 5',
            5 => 'Category 6',
            6 => 'Category 7',
            7 => 'Category 8',
        ];

        $posts = [
            'titulo' => 'Título do Post',
            'autor' => 'Jefferson Grassine',
            'data' => '2015-06-21 20:07:07',
            'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati,
            aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi
            eos magni recusandae laborum minus inventore?'
        ];

        $comentarios = [
            'autor' => 'Pedrinho',
            'data' => '2015-06-24 20:07:07',
            'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati,
            aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi.'
        ];



        return view('blog.index', compact('categories', 'posts', 'comentarios'));

    }

//    public function category()
//    {
//        $categories = [
//            0 => 'Category 1',
//            1 => 'Category 2',
//            2 => 'Category 3',
//            3 => 'Category 4',
//            4 => 'Category 5',
//            5 => 'Category 6',
//        ];
//
//        return view('blog.category', compact('categories'));
//    }
}
