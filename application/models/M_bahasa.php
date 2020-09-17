<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_bahasa extends CI_Model {
 
    var $table = 'tb_bahasa';
    var $column_order = array('label','jumlah',null); //set column field database for datatable orderable
    var $column_search = array('label','jumlah'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('id_bahasa' => 'desc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    private function _get_datatables_query()
    {
         
        $this->db->from('tb_bahasa');
 
        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from('tb_bahasa');
        return $this->db->count_all_results();
    }
 
     public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_bahasa',$id);
        $query = $this->db->get();
 
        return $query->row();
    }
 /*penutup server side*/
    public function delete_bahasa_id($id)
    {
        $this->db->where('id_bahasa', $id);
        $this->db->delete('tb_bahasa');
    }

     public function save_bahasa($data)
    {
        $this->db->insert('tb_bahasa', $data);
        return $this->db->insert_id();
    }
 
    public function update_bahasa($where, $data)
    {
        $this->db->update('tb_bahasa', $data, $where);
        return $this->db->affected_rows();
    }
 /*penutup crud skill*/
}