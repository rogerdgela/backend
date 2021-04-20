<?php


class News_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_news($url = false)
	{
		if($url === false){
			$query = $this->db->get('news');
			return $query->result_array();
		}else{
			$query = $this->db->get_where('news', array('url' => $url));
			return $query->row_array();
		}
	}

	public function set_news()
	{
		$this->load->helper('url');
		$url = url_title($this->input->post('title'), 'dash', TRUE);

		$data = [
			'title' => $this->input->post('title'),
			'url' => $url,
			'text' => $this->input->post('text')
		];

		$this->db->insert('news', $data);
	}
}
