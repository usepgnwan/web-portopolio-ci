<?php
class M_upload extends CI_Model{
    function get_test()
    {
         $sql ='SELECT * FROM tb_biodata WHERE id_biodata = 1';
         return $this->db->query($sql);  
    }

    function hapus_file($id){
        $this->db->where('id_biodata',$id);
      $this->db->delete('tb_biodata');
    }

     public function update_poto($where,$data,$table)
    {
        $this->db->where('id_biodata',$where);
        $this->db->update($table,$data);
    }

     public function update_cv($where,$data,$table)
    {
        $this->db->where('id_biodata',$where);
        $this->db->update($table,$data);
    }

}   