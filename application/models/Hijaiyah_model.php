<?php
class Hijaiyah_model extends CI_Model {

        public function get_entries()
        {
                $query = $this->db->get('hijaiyah');
                return $query->result();
        }
}
?>