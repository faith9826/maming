<?php
class Home extends CI_Controller{
    public function index(){
        //parent::__construct();

        $this->load->model('Mod_DBmb');

        $data['mb_count'] = $this->Mod_DBmb->mb_counter();

        if($data['mb_count'] == 0){
            echo $data['mb_count'];
            $test1 = $this->config->item('test1');
            echo $test1;

            $this->load->helper('test');
            $aa = test_helper();

            echo $aa;
        }else{
            echo 1;
        }

        $body['body'] = 'mami_01001c';
        $this->load->view('mami/mami_01001s',$body);
    }
}
?>
