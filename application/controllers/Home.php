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
            $this->load->helper(array('form', 'url', 'msg'));
            $this->load->library('form_validation');

            $msg = msg();

            echo $msg['R000'];
            /* form validation */
            $this->form_validation->set_rules(
                'admin_id', '관리자 아이디',
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

            $this->form_validation->set_rules(
                'admin_fname', '성',
                'required|min_length[1]|max_length[15]',
                array(
                    'required' => '%s을 입력해주세요.'
                )
            );

            $this->form_validation->set_rules(
                'admin_gname', '이름',
                'required|min_length[1]|max_length[15]',
                array(
                    'required' => '%s을 입력해주세요.'
                )
            );

            $this->form_validation->set_rules(
                'admin_email', '이메일',
                'required|valid_email',
                array(
                    'required' => '%s을 입력해주세요.',
                    'valid_email' => '%s형식이 아닙니다.'
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
