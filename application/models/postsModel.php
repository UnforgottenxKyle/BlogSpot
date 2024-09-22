<?php

class postsModel extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    function get_posts()
    {
        $query = $this->db->get('blog');
        return $query->result_array();
    }

    function single_post()
    {
        $query = $this->db->where('title');
        return $query->row_array('posts');
    }
}
