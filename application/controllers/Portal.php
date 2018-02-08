<?php

class Portal extends CI_Controller{
	
    function index(){
        //menambahkan captcha
        $this->load->helper('captcha');
        $config = [
            'img_width'     => '150',
            'img_height'    => 50,
            'expiration'    => 7200,
            'word_length'   => 8,
            'font_size'     => 80,
            'img_path' => './captcha/',
            'img_url' => base_url('captcha'),
            // White background and border, black text and red grid
            /*'colors'        => array(
                    'background' => array(255, 255, 255),
                    'border' => array(255, 255, 255),
                    'text' => array(0, 0, 0),
                    'grid' => array(255, 40, 40)
            )*/
        ];
        $cap = create_captcha($config);
        $this->load->view('portal_form',[
            'cap' => $cap
        ]);
    }
    function validasi(){
        //validasi captcha
        //jika inputan harus sama sesuai kapital strtolower dihapus
        if (strtolower($_POST['word']) != strtolower($_POST['captcha'])) {
            $this->session->set_flashdata(['error' => 'Captcha salah !!!']);
                redirect('portal');
        }else {
            //di unset karena post word dan captcha tidak digunakan di database
            unset($_POST['word']);
            unset($_POST['captcha']);
        }
        $_POST['password'] = md5($_POST['password']);
        $r = $this->db->where($this->input->post())->get('admin')->row_array();
            if (count($r)>0) {
                $this->session->set_userdata([
                    'username' => $r['username'],
                    'nama' => $r['nama']
                ]);
                redirect('mahasiswa');
            }  else {
                $this->session->set_flashdata([
                    'error' => 'Username/Password salah !!!'
                ]);
                redirect('portal');
            }
	}
        function logout(){
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('nama');
            redirect('portal');
        }
}
