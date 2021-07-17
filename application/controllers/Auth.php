<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('regis_model');
        $this->load->library('form_validation');   
    }
    private function __loadView__($whatView, $data, $title) {
        $this->load->view('layouts/header', $title);
        $this->load->view($whatView, $data);
        $this->load->view('layouts/footer');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('home/index');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('home/index');
        } else {
            // validasi berhasil
            $this->_login(); //method private
        }
    }

    private function _login()
    {
        $data = [
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        ];
        $user = $this->db->get_where('users', ['email' => $data['email']])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($data['password'], $user['password'])) {
                    $data = [
                        'email' => $user['email'], 
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('wisata');
                    }
                    redirect('user');

                    //else {
                         //redirect('http://localhost/siwikodeazka/');
                    //}
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah</div>');
                    redirect('http://localhost/siwikodeazka/');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email gak aktif</div>');
                redirect('http://localhost/siwikodeazka/');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('http://localhost/siwikodeazka/');
        }
    }

    public function register() {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        
        $this->form_validation->set_rules(
            'username', 'Username', 
            'required|trim|is_unique[users.username]', 
            ['is_unique' => 'This username has already used']
        );
        $this->form_validation->set_rules(
            'email', 'Email', 
            'required|trim|valid_email|is_unique[users.email]', 
            ['is_unique' => 'This email has already registered']
        );
        $this->form_validation->set_rules(
            'password', 'Password', 
            'required|trim|min_length[5]|matches[repeat_password]', 
            [
                'matches' => '',
                'min_length' => 'Password too short!'
            ]
        );
        $this->form_validation->set_rules(
            'repeat_password', 'Repeat_Password', 
            'required|trim|min_length[5]|matches[password]', 
            [
                'required' => 'The Repeat Password field is required',
                'matches' => 'Password didnt matches!',
                'min_length' => 'Password didnt matches!'
            ]
        );

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration Page';
            $this->__loadView__('auth/register', null, $data /* title */);

        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.png',
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT ),
                'role_id' => 1,
                'is_active' => 1,
                'date_created' => time() 
            ]; 

            $this->regis_model->insert_user($data);
            $this->session->set_userdata('message', '<div class="alert alert-success" role="alert">Create an account is successful</div>');
            redirect('home/index', 'refresh');
            
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('http://localhost/siwikodeazka/');
    }
}