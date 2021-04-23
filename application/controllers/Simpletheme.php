<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simpletheme extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['message'] = '';
		$data['site'] = $this->Admin_mo->get('site');
		$data['colors'] = $this->Admin_mo->get('colors');
		$data['types'] = $this->Admin_mo->get('types');
		$data['links'] = $this->Admin_mo->get('links');
		$data['icons'] = $this->Admin_mo->get('icons');		
		$this->load->view('header',$data);
		$this->load->view('frontend/sidebar',$data);
		$this->load->view('frontend/welcome',$data);
		foreach($data['links'] as $link)
		{
			$data['link'] = $link;			
			$typetable = $this->Admin_mo->getwhere('types', array('id'=>$link->type));
			$data[$typetable[0]->table] = $this->Admin_mo->getwhere($typetable[0]->table, array('linkid'=>$link->id));
			$this->load->view('frontend/'.$typetable[0]->table,$data);
		}
		$this->load->view('frontend/login',$data);
		$this->load->view('footer');
	}
	
	public function login()
	{
		$this->form_validation->set_rules('username', 'UserName' , 'required');
		$this->form_validation->set_rules('password', 'Password' , 'required');
		if($this->form_validation->run() == FALSE)
		{
			$data['message'] = '';
			$this->load->view('index',$data);
		}
		else
		{
			$data['result'] = $this->Admin_mo->getwhere('users', array('username'=>set_value('username'), 'password'=>hash('sha256', set_value('password'), FALSE)));
			if(empty($data['result'])) 
			{
				$data['message'] = 'User Not Exist';
				$this->load->view('index',$data);
			}
			else
			{
				$cookie= array(
					'name'   => 'id',
					'value'  => $data['result'][0]->id,
					'expire' =>  86500
				);
				$this->input->set_cookie($cookie);
				$cookie= array(
					'name'   => 'isadmin',
					'value'  => $data['result'][0]->isadmin,
					'expire' =>  86500
				);
				$this->input->set_cookie($cookie);
				if($data['result'][0]->isadmin == 1) 
				{
					redirect('admin', 'refresh');
					//echo $this->input->cookie('id');
				}
				else
				{
					redirect('simpletheme', 'refresh');
				}			
			}
		}
	}
}
