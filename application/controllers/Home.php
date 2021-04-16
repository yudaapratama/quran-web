<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	var $API = "";

	public function __construct()
	{
		parent::__construct();
		$this->API = "https://raw.githubusercontent.com/penggguna/QuranJSON/master/";
		// $this->load->library('curl');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function GetListSurah()
	{
		$data = json_decode($this->curl->simple_get($this->API."quran.json"));
		$this->output
					 ->set_content_type('application/json')
					 ->set_output(json_encode($data));
	}

	public function GetDetailSurah()
	{
		$post = $this->input->post();
		$surah = $post["param"];
		$data = $this->curl->simple_get($this->API."surah/".$surah.".json");
		$this->output
					 ->set_content_type('application/json')
					 ->set_output($data);
	}

	public function Detail($param)
	{
		$data["surah"] = $param;
		$this->load->view("detail", $data);
	}

}
