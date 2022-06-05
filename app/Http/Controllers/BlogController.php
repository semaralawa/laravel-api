<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BlogService;

class BlogController extends Controller
{
    protected $BlogService;
    function __construct(
        BlogService $BlogService
    ) {
        $this->BlogService = $BlogService;
    }

    public function index()
    {
        $blogs = $this->BlogService->getData();
        return view('index', [
            'data_blogs' => $blogs
        ]);
    }

    public function create()
    {
        $form_data = [
            'title' => 'Ini judul',
            'description' => 'ini deskripsi qwopeqow qjwepoqjw qoejqpowjsa',
            'created_user_id' => 13321
        ];
        $blog = $this->BlogService->create($form_data);
        return redirect('/blog');
    }
}
