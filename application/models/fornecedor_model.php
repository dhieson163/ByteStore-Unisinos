<?php

class Fornecedor_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_fornecedores() {
        $res = $this->db->get('fornecedor');   // equivalente ao mysql_query()
        //return $res->result();               // equivalente ao mysql_fetch_object()
        return $res->result_array();           // equivalente ao mysql_fetch_array()
    }

    public function get_fornecedores($qtde, $offset) {
        $this->db->select('*');
        $this->db->from('fornecedor');
        $this->db->limit($qtde, $offset);
        $res = $this->db->get();
        return $res->result_array();
    }

    public function get_fields() {
        return $this->db->list_fields('fornecedor');
    }

    public function count_fornecedores() {
        return $this->db->count_all_results('fornecedor');
    }

    public function get_by_id($id) {
        $res = $this->db->get_where('fornecedor', array('id' => $id));
        return $res->row_array();
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('fornecedor');
    }

    public function update($id, $value) {
        $data = array('fornecedor' => $value);
        $this->db->where('id', $id);
        $this->db->update('fornecedor', $data);
    }

    public function novo($value) {
        $data = array('fornecedor' => $value);
        $this->db->novo('fornecedor', $data);
    }
    
    public function save($value) {
        $res = $this->db->insert('fornecedor',$value);
        return $res;
    }
    
}
/* fim do arquivo models/fornecedor_model.php */