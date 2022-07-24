<?php 
 
class M_admin extends CI_Model{

	public function lihat_data_user(){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('data_identitas','user.id_unit = data_identitas.id_unit');
		$query = $this->db->get();
		return $query->result_array();

	}
	public function data_identitas(){
		$this->db->select('*');
		$this->db->from('data_identitas a');
		$this->db->join('data_asal_sekolah b','a.id_unit = b.id_unit');
		$query = $this->db->get();
		return $query->result_array();

	}
	public function data_prodi(){
		$this->db->select('*');
		$this->db->from('data_identitas a');
		$this->db->join('p_prodi b','a.id_unit = b.id_unit');
		$query = $this->db->get();
		return $query->result_array();

	}


	function tampil_data(){
		return $this->db->get('komponen');
	}
	function data_kegiatan(){
		return $this->db->get('kegiatan');
	}
	public function ambil_id_user($id)
    {
    	$hasil= $this->db->where('id',$id)->get('data_pengajuan');
    	if ($hasil->num_rows() > 0){
    		return $hasil->result();
    	}else{
    		return false;
    	}
    }

	public function insert_data($table,$data)
	{
		$this->db->insert($table, $data);
	}
	public function get_data($table)
	{
		$this->db->get($table);
	}

	public function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	
	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

}