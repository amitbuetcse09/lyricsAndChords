<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShowLyrics extends CI_Controller {

	
	public function index()
	{	
		$this->load->view('lyrics_view');
	}

}
?>