<?php
/**
 * Created by PhpStorm.
 * User: Nikita A
 * Date: 15/04/2019
 * Time: 20:48
 */

class Post
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;

    }

    public function getPosts()
    {

        $this->db->query("SELECT * FROM posts");
      return  $this->db->resultSet();
    }
}
