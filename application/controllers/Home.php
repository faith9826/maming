<?php
class Home extends CI_Controller{
    public function index(){
        $this->load->database();
        $query = $this->db->query('select * from teat where idx="1"');

        $body['body'] = 'loginbox';
        $this->load->view('index',$body);
    }
}
?>
