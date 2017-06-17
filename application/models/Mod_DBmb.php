<?php
class Mod_DBmb extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function mb_counter(){
        $this->load->database();
        return $this->db->count_all('dm_mb');
    }

    public function admin_creater(){
        $this->load->helper('pw_security');

        $pw = $this->input->post('admin_pw');

        //data for query
        $mb_id = $this->input->post('admin_id');
        $mb_fname = $this->input->post('admin_fname');
        $mb_gname = $this->input->post('admin_gname');
        $mb_pw = encrypt($pw,$mb_id);
        $mb_email = $this->input->post('admin_email');

        //database writting
        $this->load->database();

        $data = array('mb_id' => $mb_id,
                      'mb_fname' => $mb_fname,
                      'mb_gname' => $mb_gname,
                      'mb_pw' => $mb_pw,
                      'mb_email' => $mb_email,
                      'url' => $url
                     );
    }
}
?>
