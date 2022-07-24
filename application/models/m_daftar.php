<?php 
 
class M_daftar extends CI_Model{

    public function data_user_daftar()
    {
        $query = $this->db->query('Select max(id) as id FROM user ')->row();
        $id = $query->id_unit;
        $hasil= $this->db->where('id',$id)->get('user')->row();

        $this->db->select('*');
		$this->db->from('user');
		$this->db->join('data_identitas','user.id_unit = data_identitas.id_unit','inner');
	    $this->db->where('user.id_unit',$id);
		return $this->db->get();
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
// fungsi data indonesia
	public function get_provinsi()
    {
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('provinces');
        return $query->result();
    }

    public function get_kabupaten($provinsi_id)
    {
        //ambil data kabupaten berdasarkan id provinsi yang dipilih
        $this->db->where('province_id', $provinsi_id);
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('regencies');

        $output = '<option value="">-- Pilih Kabupaten --</option>';

        //looping data
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->name . '</option>';
        }
        //return data kabupaten
        return $output;
    }

    public function get_kecamatan($kabupaten_id)
    {
        //ambil data kecamatan berdasarkan id kabupaten yang dipilih
        $this->db->where('regency_id', $kabupaten_id);
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('districts');

        $output = '<option value="">-- Pilih Kecamatan --</option>';

        //looping data
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->name . '</option>';
        }
        //return data kecamatan
        return $output;
    }

    public function get_desa($kecamatan_id)
    {
        //ambil data desa berdasarkan id kecamatan yang dipilih
        $this->db->where('district_id', $kecamatan_id);
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('villages');

        $output = '<option value="">-- Pilih Desa --</option>';

        //looping data
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '" >' . $row->name . '</option>';
        }
        //return data desa
        return $output;
    }


}