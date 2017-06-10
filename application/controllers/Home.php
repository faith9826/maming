<?php
class Home extends CI_Controller{
    public function index(){
        /* session */
        $this->load->library('session');

        /* model */
        $this->load->model('Mod_DBmb');
        $data['mb_count'] = $this->Mod_DBmb->mb_counter();

        if($data['mb_count'] == 0){
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');

            /* view */
            $views['content'] = 'mami_01001c';
            $this->load->view('mami/mami_01001s',$views);
        }else{
            echo 1;
        }
    }
    public function AdminAccountCheck(){
        if($this->input->post('admin_account_create')!='1'){
            $this->load->helper('url');
            redirect(base_url());
        }else{
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');

            /* form validation */
            $this->form_validation->set_rules(
                'admin_id', '관리자 계정',
                'required|min_length[3]|max_length[20]',
                array(
                    'required' => '%s을 입력해주세요.'
                )
            );

            $this->form_validation->set_rules(
                'admin_pw', '비밀번호',
                'required|min_length[8]|max_length[15]',
                array(
                    'required' => '%s를 입력해주세요.'
                )
            );

            $this->form_validation->set_rules(
                'admin_pwc', '비밀번호 확인',
                'required|min_length[8]|max_length[15]|matches[admin_pw]',
                array(
                    'required' => '%s을 입력해주세요.'
                )
            );

            /* url routing */
            if ($this->form_validation->run() == FALSE){
                $views['content'] = 'mami_01001c';
                $this->load->view('mami/mami_01001s',$views);
                echo $this->input->post('admin_id');
            }else{
                /* model */
                $this->load->model('Mod_DBmb');
                $data['admin_create'] = $this->Mod_DBmb->admin_creater();

                //$this->load->view(base_url().'home');
            }
        }
    }
}
?>
