<?php
/**
 * Created by PhpStorm.
 * User: cyber
 * Date: 2017/5/4
 * Time: 上午10:51
 */

class Blog extends CI_Controller {

    function Blog()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index()
    {
        $data['title'] = "TODO list";
        $data['heading'] = "Getting Thing Done.";
        $data['query'] =  $this->db->get('thinglist');
        $this->load->database();
        $data['todo'] = array("123", "123123");


        $this->load->view("blog_view", $data);
    }

    function test01()
    {
        echo 'Hello World, 测试成功了02!';
    }

    function delete()
    {
        $this->db->where('id',$this->uri->segment(3));
        $this->db->delete('thinglist');
        $this->index();
    }

    function addthing()
    {
        $data = array(
            'id' => '',
            'title' => $this->input->post('title'),
            'body' => $this->input->post('body')
        );

        $this->db->insert('thinglist', $data);

    }


    function thing_insert()
    {
        $data = array(
            'id' => '',
            'title' => $this->input->post('title'),
            'body' => $this->input->post('body')
        );

        $this->db->insert('thinglist', $data);
        $this->index();
    }
}


?>