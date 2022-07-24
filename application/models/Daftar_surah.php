<?php

class Daftar_surah extends CI_Model
{
    public function isiDaftarSurah()
    {
        return $this->db->get('daftarsurah')->result_array();
    }
}