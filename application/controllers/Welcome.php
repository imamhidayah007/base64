<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();


		$this->load->helper('url');
		$this->load->library('session');
		//$this->load->model('Query');

		date_default_timezone_set('Asia/Jakarta');

	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$enskripsi=base64_encode($this->input->post('plaintext'));
		$deskripsi=base64_decode($this->input->post('chipertext'));

		$data['hasil'] = array(
			'enskripsi' => $enskripsi,
			'deskripsi' => $deskripsi

		);

		$this->load->view('welcome_message',$data);
	}
}
