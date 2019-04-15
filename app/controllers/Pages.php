<?php
/**
 * Created by PhpStorm.
 * User: Nikita A
 * Date: 14/04/2019
 * Time: 12:07
 */

class Pages extends Controller
{
    public function __construct()
    {
        $this->postModel = $this->model('Post');
    }

    public function index()
    {
        $posts = $this->postModel->getPosts();
// PASSING DATA
        $data = [
            'title' => 'Welcome',
            'posts' => $posts
        ];

        $this->view('pages/index', $data);
    }

    public function about()
    {

        $data = [
            'title' => 'About Us'
        ];
        $this->view('pages/about', $data);
    }
}