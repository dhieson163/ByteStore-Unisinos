<?php

class Fornecedor extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('fornecedor_model');
        $this->load->library(array('table', 'pagination'));
        $this->load->helper('url');
    }

    public function index() {
        $this->lista();
    }

    public function view() {
        $fornecedor = $this->fornecedor_model->get_by_id($this->uri->segment(4));
        $data['fornecedor'] = $fornecedor;
        $data['title'] = "Fornecedor";

        // $this->load->view('partials/admin/header', $data);
        $this->load->view('admin/fornecedor/fornecedor', $data);
        //$this->load->view('partials/admin/footer');
    }

    public function lista() {
        $config['base_url'] = base_url() . 'index.php/admin/fornecedor/lista/';
        $config['total_rows'] = $this->fornecedor_model->count_fornecedores();
        $config['per_page'] = '5';
        $config['full_tag_open'] = '<p class="pagination">';
        $config['full_tag_close'] = '</p>';
        $config['first_link'] = '<<';
        $config['last_link'] = '>>';

        $fornecedores = $this->fornecedor_model->get_fornecedores($config['per_page'], $this->uri->segment(3, 0));

        $this->pagination->initialize($config);

        $data['fornecedor'] = $fornecedores;
        $data['title'] = "Fornecedor";

        $this->load->view('admin/fornecedor/index', $data);
    }

    public function delete($id) {
        $fornecedor = $this->fornecedor_model->delete($id);
        $this->session->set_flashdata('erro', 'Fornecedor excluído com sucesso');
        redirect('admin/fornecedor/lista');
    }

    public function edit($id) {
        $fornecedor = $this->fornecedor_model->get_fornecedor($id);
        $data['fornecedor'] = $fornecedor;
        $data['documento'] = $fornecedor;
        $data['action'] = site_url('admin/fornecedor/forn');
        $this->load->view('admin/fornecedor/forn', $data);
        redirect('admin/fornecedor/lista');
    }

    public function novo() {
        $fornecedor = Array("id" => " ", "fornecedor" => " ");
        $data['fornecedor'] = $fornecedor;
        $data['documento'] = $fornecedor;
        $data['action'] = site_url('admin/fornecedor/forn');
        $this->load->view('admin/fornecedor/forn', $data);
        redirect('admin/fornecedor/lista');
    }
}
/* End of file home.php */
/* Location: ./application/controllers/fornecedor.php */