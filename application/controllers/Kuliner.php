<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuliner extends CI_Controller {
     

    public function __construct() {
        parent:: __construct();
        $this->load->model('crud_model', 'crud');
		$this->load->model('load_view_model', 'load_view');
        $this->load->helper(array('form', 'url'));

    }

    public function index() {
        // $email = $this->session->userdata('email');

		$data = [
            'wisata' => $this->crud->joinTable__wisatakul(),
            'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array()
        ];

		$this->load_view->__wisataView__('rekreasi/index', $data);
    }

    public function create() {
		$data = [
            'wisata' => $this->crud->getAll('wisata_depok'),
            'kategori' => $this->crud->getAll('kategori'),
            'jenis_wisata' => $this->crud->getAll('jenis_wisata'),
            'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array()
        ];

		$this->load_view->__wisataView__('wisata/create',$data);
    }

    public function edit($id) {
        $data = [
            'wisataId' => $this->crud->findById('wisata_depok', $id),
            'kategori' => $this->crud->getAll('kategori'),
            'jenis_wisata' => $this->crud->getAll('jenis_wisata'),
            'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array()
        ];

		$this->load_view->__wisataView__('wisata/edit', $data);
    }

    public function delete($id) {
        $this->crud->deleteData('wisata_depok', $id);
        redirect('wisata/index');
    }

    public function store() {
        $data = [
            'id' => $this->input->post('nama_wisata'), /* hidden id */
            'nama_wisata' => $this->input->post('nama_wisata'),
            'deskripsi' => $this->input->post('deskripsi'),
            'jenis_wisata_id' => $this->input->post('jenis_wisata'),
            'kategori_id' => $this->input->post('kategori'),
            'fasilitas' => $this->input->post('fasilitas'),
            'kontak' => $this->input->post('kontak'),
            'alamat'=> $this->input->post('alamat'),
            'latlong' => $this->input->post('latlong'),
            'email' => $this->input->post('email'),
            'url' => $this->input->post('url')
        ];

        $config = [
            'allowed_types' => 'gif|jpg|jpeg|png',
            'max_size' => '2048',
            'max_width' => '100',
            'max_height' => '100',
            'upload_path' => './assets/img/photo_wisata/'
        ]; 

        $this->load->library('upload', $config);

        if($this->upload->do_upload('image')) {
            $new_image = $this->upload->data('file_name');
            $this->db->set('image', $new_image);
        } else {
            echo $this->upload->display_errors();
        }

        $this->crud->insertData('wisata_depok', $data);
        redirect('wisata/index');
    }

    public function update() {
        $data = [
            'id' => $this->input->post('id'), /* hidden id */
            'nama_wisata' => $this->input->post('nama_wisata'),
            'deskripsi' => $this->input->post('deskripsi'),
            'jenis_wisata_id' => $this->input->post('jenis_wisata'),
            'kategori_id' => $this->input->post('kategori'),
            'fasilitas' => $this->input->post('fasilitas'),
            'rating' => $this->input->post('rating'),
            'kontak' => $this->input->post('kontak'),
            'alamat'=> $this->input->post('alamat'),
            'latlong' => $this->input->post('latlong'),
            'email' => $this->input->post('email'),
            'url' => $this->input->post('url')
        ];

        $this->crud->updateData('wisata_depok',$data['id'], $data);
        redirect('wisata/index');
    }
}
?>