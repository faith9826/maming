<?php
class Home extends CI_Controller{
    public function index(){
        $this->load->database();
        $query = $this->db->query('select * from c3_mb where mb_idx="1"');

        $body['body'] = 'mami_01001c';
        $this->load->view('mami/mami_01001s',$body);
    }
}
?>
