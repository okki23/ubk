<?php
/*
author : Okki Setyawan
mail : okkisetyawan@gmail.com
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	
	public function index()
	{       
                $data['title'] = 'Pages';
                $data['content'] = 'view_pages';
		$this->load->view('master_view',$data);
	}
}
