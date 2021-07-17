<?php
class Load_view_model extends CI_Model {
    public function __loadView__($view, $data) {
        $this->load->view('layouts/authHeader');
        $this->load->view($view, $data);
        $this->load->view('layouts/authFooter');
    }
    public function __wisataView__($view, $data) {
        // $dataHeader['user'] = $this->__getSession__();
        //$dataHeader['title'] = $titlePage;
        //$dataHeader['whoCanAccessMenu'] = $this->__whoCanAccessMenu__();

        $this->load->view('layouts/header_new', $data);
        $this->load->view('layouts/sidebar_new', $data);
        $this->load->view('layouts/topbar_new', $data);
        $this->load->view($view, $data);
        $this->load->view('layouts/footer_new');

    }
    public function __getSession__() {
        return $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
    }

}

?>