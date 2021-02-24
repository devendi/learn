<?php
class alquran_model extends CI_Model {

        public function get_entries()
        {
                $query = $this->db->get('alquran');
                return $query->result();
        }
	
        public function detil_get_entries($surah='')
        {
                $query = $this->db->get("$surah");
                return $query->result();
        }

        public function detil_get($link='')
        {
                $query = $this->db->get_where("alquran", array('link' => $link));
                return $query->row();
        }
        public function detil_id_get($id='')
        {
                $query = $this->db->get_where("alquran", array('id' => $id));
                return $query->row();
        }

        public function murokab_get_entries($surah='')
        {
                $query = $this->db->get("$surah"."_murokkab");
                return $query->result();
        }

        public function version_get_entries($tabel='', $surah='')
        {
                $query = $this->db->get_where("$tabel", array('suraID' => $surah));
                return $query->result();
        }
}
?>