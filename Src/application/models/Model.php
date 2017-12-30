<?php


class Model extends CI_Model {
    
    function simpan_data($data, $table){
        $this->db->insert($table,$data);
        return true;
    }
    
    function list_data($table, $limit, $start){
         return $query = $this->db->get($table, $limit, $start)->result();  
    }
	
    function list_data_all($table){
         return $query = $this->db->get($table);  
    }
    
    function hitung($param_id, $id, $table){
        return $this->db->get_where($table, array($param_id => $id))->num_rows();
    }
    
    function hapus($param_id, $id, $table){
        $this->db->delete($table, array($param_id => $id)); 
        return true;
    }
    
    function ambil($param_id, $id, $table){
       return $this->db->get_where($table, array($param_id => $id));
    }
    
    function update($param_id, $id, $table, $data){       
        $this->db->where($param_id, $id);
        $this->db->update($table, $data); 
        return true;
    }

    function autocomplete($table, $param_table, $id){
        //$this->db->order_by('id', 'DESC');
        $this->db->like($param_table, $id);
        $this->db->limit(5);
        return $this->db->get($table);
    }

    function max($param_id,$table ){
        $this->db->select_max($param_id);
        $query = $this->db->get($table)->result_array();
        return (int) $query[0][$param_id];

    }

    function maxWhere($param_id1,$param_id2,$id,$table ){
        $this->db->select_max($param_id1);
        $this->db->where($param_id2, $id);
        $query = $this->db->get($table)->result_array();
        return (int) $query[0][$param_id1];

    }

    function getKodeKabupaten($param_id,$id){
        return $this->db->get_where('tbl_dojo', array($param_id => $id));
    }

}