<?php
class Dictionary_model extends CI_Model {

        public function get_entries()
        {
                $query = $this->db->get('dictionary');
                return $query->result();
        }
	
	
        public function detil_get($link='')
        {
                $query = $this->db->get_where("dictionary", array('link' => $link));
                return $query->row();
        }
}
?>