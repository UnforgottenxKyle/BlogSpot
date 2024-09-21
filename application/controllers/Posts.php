<?php

class Posts extends CI_Controller
{

    public function index()
    {
        $data['posts'] = $this->postsModel->get_posts();
        $this->load->view('main', $data);
    }
}
