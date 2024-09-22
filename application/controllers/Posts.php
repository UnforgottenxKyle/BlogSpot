<?php

class Posts extends CI_Controller
{

    public function index()
    {
        $data['posts'] = $this->postsModel->get_posts();
        $this->load->view('main', $data);
    }

    public function show($id)
    {
        $data['post'] = $this->postsModel->single_post($id);
        $this->load->view('single', $data);
    }
}
