<?php

class TransactionModel extends CI_Model {
	public function __construct(){
		$this->load->database();
	}
	public function get_Timelines($month,$days,$year){
		$this->db->select('nama_proker,description,badan,tanggal')->from('timeline')->where("tanggal BETWEEN '$year-$month-1' AND '$year-$month-$days'");
		$result_data = array();
		$result = $this->db->get()->result();
		foreach ($result as $key => $value) {
			$result_data[$key] = $value;
		}
		return $result_data;
	} 
	public function insertData($nama_proker,$description,$badan,$tanggal)
	{
		$this->db->query("INSERT INTO `timeline` (`id_proker`, `nama_proker`, `description`, `badan`, `tanggal`) VALUES (NULL, '$nama_proker', '$description', '$badan', '$tanggal');");

	}
}


?>