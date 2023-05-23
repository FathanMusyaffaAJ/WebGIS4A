<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	public function index()
	{
		$data= array(
			'judul' => 'WebGIS Training',
			'content' => 'peta_leaflet'
	);
	$this->load->view('layout/viewunion', $data, FALSE);
	}	
}
/* end of file home.php */ 