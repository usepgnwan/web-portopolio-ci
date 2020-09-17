<?php
class M_get_data extends CI_Model{
    function get_about()
    {
         $sql ='SELECT * FROM tb_biodata WHERE id_biodata = 1';
         return $this->db->query($sql);  
    }
        function updatebiodata($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }
     function get_project()
    {
         $sql ='SELECT * FROM tb_project WHERE id_project = 1';
         return $this->db->query($sql);  
    }
            function updateproject($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    function get_email(){
         $sql ='SELECT * FROM tb_sendemail order by id_send desc ';
         return $this->db->query($sql);  
    }
        function get_email_notif(){
         $sql ='SELECT * FROM tb_sendemail order by id_send desc Limit 5 ';
         return $this->db->query($sql);  
    }
        function jumlah_email(){
          $this->db->from('tb_sendemail');
         return $this->db->count_all_results();  
    }
    function get_skil(){
         $sql ='SELECT * FROM tb_skill order by id_skill asc ';
         return $this->db->query($sql);  
    }
    function simpan_skill($data,$tabel){
       $this->db->insert($tabel,$data);
  
    }
    function get_bahasa(){
         $sql ='SELECT * FROM tb_bahasa order by id_bahasa asc ';
         return $this->db->query($sql);  
    }

    function kirim_pesan($tb, $data){
        $this->db->insert($tb, $data);
    }

}   