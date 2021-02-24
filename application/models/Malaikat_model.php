<?php
class Malaikat_model extends CI_Model {

        public function get_detil($name)
        {
                $query = $this->db->get_where('malaikat', array('nama' => $name));
                return $query->row();
        }
        
        public function get_entries()
        {
                $query = $this->db->get('malaikat');
                return $query->result();
        }
}
?>