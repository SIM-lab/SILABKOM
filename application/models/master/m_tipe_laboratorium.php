<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tipe_laboratorium extends CI_Model {

	public function getData($value='')
	{
		$this->db->from('master_tipe_laboratorium ma');
		$this->db->order_by('ma.id', 'desc');
		return $this->db->get();
	}

	public function insertData($data='')
	{
		
        $this->db->insert('master_tipe_laboratorium',$data);
       
	}

	public function updateData($data='')
	{
		$this->db->where('id',$data['id']);
            $this->db->update('master_tipe_laboratorium',$data);
	}

	public function deleteData($id='')
	{
		$this->db->where('id', $id);
        $this->db->delete('master_tipe_laboratorium');
	}


}

/* End of file m_tipe_laboratorium.php */
/* Location: ./application/models/master/m_tipe_laboratorium.php */