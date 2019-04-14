<?php
/**
 * Created by PhpStorm.
 * User: Nikita A
 * Date: 14/04/2019
 * Time: 00:57
 */

class Posts
{

    public function __construct()
    {
        $this->postModel = $this->model('post');
    }

    public function index()
    {

    }

    public function add()
    {

    }

    public function edit($id)
    {
        $post = $this->postModel->fetchPost($id);
        $this->view('edit', ['post' => $post]);
    }
}


?>

<h1><?php echo $data['title']; ?></h1>
