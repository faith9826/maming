<?php
class Mod_home extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function mb_counter(){
        $this->load->database();

        //$this->db->query('select count(*) from mm_mb');
        //return $query->result();

        return $this->db->count_all('mm_mb');
    }
}
?>
