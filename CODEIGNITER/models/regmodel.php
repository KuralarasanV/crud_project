<?php
class Regmodel extends CI_Model{
    public function insert_data($data){
        $this->load->database();
       return $this->db->insert('studentreg',$data);
        
        // echo 'hello'; 
        }
    public function GetRecord(){
       
        $this->load->database();
        return $this->db->get('studentreg')->result();
        
    }
    public function EditData($id){
        $this->load->database();
        $this->db->where('id',$id);
        return $this->db->get('studentreg')->result();

    
    }
    public function updataData(){
        $this->load->database();
        $this->db->where('id',$id);
        return $this->db->get($data,'studentreg');

    }
}   