<?php
class Mod_DBmb extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function mb_counter(){
        $this->load->database();
        return $this->db->count_all('mm_mb');
    }

    public function admin_creater(){
        $test = $this->input->post('admin_id').'in Model';
        echo $test;
    }
}
?>
