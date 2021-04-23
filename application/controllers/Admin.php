<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$data['admessage'] = '';
		$data['site'] = $this->Admin_mo->get('site');
		$data['colors'] = $this->Admin_mo->get('colors');
		$data['types'] = $this->Admin_mo->get('types');
		$data['links'] = $this->Admin_mo->get('links');
		$data['icons'] = $this->Admin_mo->get('icons');		
		$this->load->view('header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/admin',$data);
		$this->load->view('admin/links',$data);
		foreach($data['links'] as $link)
		{
			$data['link'] = $link;
			$typetable = $this->Admin_mo->getwhere('types', array('id'=>$link->type));
			$data[$typetable[0]->table] = $this->Admin_mo->getwhere($typetable[0]->table, array('linkid'=>$link->id));
			$this->load->view('admin/'.$typetable[0]->table,$data);
		}
		$this->load->view('footer');
	}
	
	public function setsite()
	{
		$this->form_validation->set_rules('title', 'Title' , 'required|max_length[100]');
		$this->form_validation->set_rules('slogan', 'Slogan' , 'required|max_length[255]');
		if($this->form_validation->run() == FALSE)
		{
			echo $data['admessage'] = 'validation error';
		}
		else
		{
			foreach($_FILES as $key => $value)
			{
				if(!empty($value['name']))
				{
					$delarr = glob('simpletheme/img/'.$key.".*");
					if(!empty($delarr)) unlink($delarr[0]);			
					$$key = $this->uploadimg($key, 'simpletheme/img', array('gif', 'jpg', 'jpeg', 'png'), $key);
				}
				if(isset($$key) && $$key != '' ) $row[$key] = $$key;
			}
			
			$row['title'] = set_value('title');
			$row['slogan'] = set_value('slogan');
			if(set_value('color') != '') $row['color'] = set_value('color');
			
			$this->Admin_mo->update('site', $row, array('id'=>1));
		}
		
		redirect('admin', 'refresh');		
	}
	
	public function setlink()
	{
		$this->form_validation->set_rules('title', 'Title' , 'required|alpha|max_length[50]|is_unique[links.title]');
		$this->form_validation->set_rules('link', 'Link' , 'required|alpha|max_length[50]|is_unique[links.link]');		
		$this->form_validation->set_rules('subject', 'Subject' , 'alpha|max_length[100]');		
		if($this->form_validation->run() == FALSE)
		{
			$data['admessage'] = 'validation error';
		}
		else
		{
			$data['id'] = $this->Admin_mo->set('links', array('title'=>set_value('title'), 'link'=>set_value('link'), 'subject'=>set_value('subject'), 'body'=>set_value('body'), 'type'=>set_value('type')));			
			if(empty($data['id'])) $data['admessage'] = 'Not Saved';
			else $data['admessage'] = 'Successfully Saved';			
		}
		
		redirect('admin', 'refresh');
	}
	
	public function sethome()
	{
		$this->form_validation->set_rules('title', 'Title' , 'required|max_length[100]');
		$this->form_validation->set_rules('description', 'Description' , 'required');
		$this->form_validation->set_rules('linkid', 'LinkID' , 'required');
		if($this->form_validation->run() == FALSE)
		{
			echo $data['admessage'] = 'validation error';
		}
		else
		{
			if(isset($_POST['id']) && set_value('id') != '')
			{
				if(isset($_POST['file']) && $_POST['file'] != '')
				{
					$newname = mt_rand();
					$image = $this->uploadimg('file', 'home', array('gif', 'jpg', 'jpeg', 'png'), $newname);
					if($image)
					{
						if(set_value('oldimage') != '') unlink('home/'.set_value('oldimage'));
						$updatearr = array('image'=>$image);
					}
				}				
				$updatearr = array('linkid'=>set_value('linkid'), 'title'=>set_value('title'), 'description'=>set_value('description'));
				$this->Admin_mo->update('home', $updatearr, array('id'=>set_value('id')));
			}
			else 
			{			
				$newname = mt_rand();
				$image = $this->uploadimg('file', 'home', array('gif', 'jpg', 'jpeg', 'png'), $newname);
				if($image)
				{
					$data['id'] = $this->Admin_mo->set('home', array('linkid'=>set_value('linkid'), 'title'=>set_value('title'), 'description'=>set_value('description'), 'image'=>$image));			
					if(empty($data['id'])) $data['admessage'] = 'Not Saved';
					else $data['admessage'] = 'Successfully Saved';			
				}
			}
		}
		
		redirect('admin', 'refresh');		
	}
	
	public function setservice()
	{
		$this->form_validation->set_rules('title', 'Title' , 'required|max_length[100]');
		$this->form_validation->set_rules('description', 'Description' , 'required');
		$this->form_validation->set_rules('linkid', 'LinkID' , 'required');
		if($this->form_validation->run() == FALSE)
		{
			$data['admessage'] = 'validation error';
		}
		else
		{
			if(isset($_POST['id']) && set_value('id') != '')
				$this->Admin_mo->update('services', array('linkid'=>set_value('linkid'), 'title'=>set_value('title'), 'description'=>set_value('description'), 'icon'=>set_value('icon')), array('id'=>set_value('id')));
			else 
			{
				$data['id'] = $this->Admin_mo->set('services', array('linkid'=>set_value('linkid'), 'title'=>set_value('title'), 'description'=>set_value('description'), 'icon'=>set_value('icon')));			
				if(empty($data['id'])) $data['admessage'] = 'Not Saved';
				else $data['admessage'] = 'Successfully Saved';			
			}
		}
		
		redirect('admin', 'refresh');
	}	
	
	public function setportfolio()
	{
		$this->form_validation->set_rules('title', 'Title' , 'required|max_length[100]');
		$this->form_validation->set_rules('description', 'Description' , 'required');
		$this->form_validation->set_rules('linkid', 'LinkID' , 'required');
		if($this->form_validation->run() == FALSE)
		{
			echo $data['admessage'] = 'validation error';
		}
		else
		{
			if(isset($_POST['id']) && set_value('id') != '')
			{
				if(isset($_POST['file']) && $_POST['file'] != '')
				{
					$newname = mt_rand();
					$image = $this->uploadimg('file', 'portfolio', array('gif', 'jpg', 'jpeg', 'png'), $newname);
					if($image)
					{
						if(set_value('oldimage') != '') unlink('portfolio/'.set_value('oldimage'));
						$updatearr = array('image'=>$image);
					}
				}				
				$updatearr = array('linkid'=>set_value('linkid'), 'title'=>set_value('title'), 'description'=>set_value('description'));
				$this->Admin_mo->update('portfolio', $updatearr, array('id'=>set_value('id')));
			}
			else 
			{			
				$newname = mt_rand();
				$image = $this->uploadimg('file', 'portfolio', array('gif', 'jpg', 'jpeg', 'png'), $newname);
				if($image)
				{
					$data['id'] = $this->Admin_mo->set('portfolio', array('linkid'=>set_value('linkid'), 'title'=>set_value('title'), 'description'=>set_value('description'), 'image'=>$image));			
					if(empty($data['id'])) $data['admessage'] = 'Not Saved';
					else $data['admessage'] = 'Successfully Saved';			
				}
			}
		}
		
		redirect('admin', 'refresh');		
	}
	
	public function setourteam()
	{
		$this->form_validation->set_rules('title', 'Title' , 'required|max_length[100]');
		$this->form_validation->set_rules('description', 'Description' , 'required|max_length[100]');
		$this->form_validation->set_rules('linkid', 'LinkID' , 'required');
		if($this->form_validation->run() == FALSE)
		{
			echo $data['admessage'] = 'validation error';
		}
		else
		{
			if(isset($_POST['id']) && set_value('id') != '')
			{
				if(isset($_POST['file']) && $_POST['file'] != '')
				{
					$newname = mt_rand();
					$image = $this->uploadimg('file', 'ourteam', array('gif', 'jpg', 'jpeg', 'png'), $newname);
					if($image)
					{
						if(set_value('oldimage') != '') unlink('portfolio/'.set_value('oldimage'));
						$updatearr = array('image'=>$image);
					}
				}				
				$updatearr = array('linkid'=>set_value('linkid'), 'title'=>set_value('title'), 'description'=>set_value('description'));
				$this->Admin_mo->update('ourteam', $updatearr, array('id'=>set_value('id')));
			}
			else 
			{			
				$newname = mt_rand();
				$image = $this->uploadimg('file', 'ourteam', array('gif', 'jpg', 'jpeg', 'png'), $newname);
				if($image)
				{
					$data['id'] = $this->Admin_mo->set('ourteam', array('linkid'=>set_value('linkid'), 'title'=>set_value('title'), 'description'=>set_value('description'), 'image'=>$image));			
					if(empty($data['id'])) $data['admessage'] = 'Not Saved';
					else $data['admessage'] = 'Successfully Saved';			
				}
			}
		}
		
		redirect('admin', 'refresh');		
	}
	
	public function setpricing()
	{
		$this->form_validation->set_rules('title', 'Title' , 'required|max_length[100]');
		$this->form_validation->set_rules('description', 'Description' , 'required');
		$this->form_validation->set_rules('linkid', 'LinkID' , 'required');
		
		if($this->form_validation->run() == FALSE)
		{
			echo $data['admessage'] = 'validation error';
		}
		else
		{			
			if(isset($_POST['id']) && set_value('id') != '')
			{
				$this->Admin_mo->update('pricing', array('linkid'=>set_value('linkid'), 'title'=>set_value('title'), 'description'=>set_value('description')), array('id'=>set_value('id')));
				$this->Admin_mo->del('pricing_features', array('pricingid'=>set_value('id')));
				for($i=1;$i<(count($_POST['descrip'])+1);$i++)
				{
					$id = $this->Admin_mo->set('pricing_features', array('pricingid'=>set_value('id'), 'descrip'=>set_value('descrip['.$i.']'), 'feature'=>set_value('feature['.$i.']')));
				}
			}
			else 
			{
				$data['id'] = $this->Admin_mo->set('pricing', array('linkid'=>set_value('linkid'), 'title'=>set_value('title'), 'description'=>set_value('description')));			
				if(empty($data['id'])) $data['admessage'] = 'Not Saved';
				else 
				{
					for($i=1;$i<(count($_POST['descrip'])+1);$i++)
					{
						$id = $this->Admin_mo->set('pricing_features', array('pricingid'=>$data['id'], 'descrip'=>set_value('descrip['.$i.']'), 'feature'=>set_value('feature['.$i.']')));
					}
				}
			}
		}
		
		redirect('admin', 'refresh');		
	}
	
	public function setcontactus()
	{
		$this->form_validation->set_rules('email', 'Email' , 'required|max_length[100]');
		$this->form_validation->set_rules('address', 'Address' , 'required');
		$this->form_validation->set_rules('linkid', 'LinkID' , 'required');
		if($this->form_validation->run() == FALSE)
		{
			$data['admessage'] = 'validation error';
		}
		else
		{
			if(isset($_POST['id']) && set_value('id') != '')
				$this->Admin_mo->update('contactus', array('linkid'=>set_value('linkid'), 'email'=>set_value('email'), 'address'=>set_value('address'), 'googlemap'=>set_value('googlemap'), 'contactform'=>set_value('contactform')), array('id'=>set_value('id')));
			else 
			{
				$data['id'] = $this->Admin_mo->set('contactus', array('linkid'=>set_value('linkid'), 'email'=>set_value('email'), 'address'=>set_value('address'), 'googlemap'=>set_value('googlemap'), 'contactform'=>set_value('contactform')));
				if(empty($data['id'])) $data['admessage'] = 'Not Saved';
				else $data['admessage'] = 'Successfully Saved';
			}				
		}
		
		redirect('admin', 'refresh');
	}
		
	public function uploadimg($inputfilename,$image_director,$extensions,$newname)
	{
		$file_extn = pathinfo($_FILES[$inputfilename]['name'], PATHINFO_EXTENSION);
		if(in_array($file_extn,$extensions))
		{			
			if(!is_dir($image_director)) $create_image_director = mkdir($image_director);
			$name = $newname.".".$file_extn;
			move_uploaded_file($_FILES[$inputfilename]["tmp_name"], $image_director.'/'.$name);		
			return $name;
		}
		else return '';
	}
	
	public function edit($table,$linkid,$id)
	{
		if(isset($table,$linkid,$id) && ($id != '' || $id != 0))
		{
			$data[$table.'_edit'] = $this->Admin_mo->getwhere($table, array('id'=>$id,'linkid'=>$linkid));
		}
		$data['admessage'] = '';
		$data['site'] = $this->Admin_mo->get('site');
		$data['colors'] = $this->Admin_mo->get('colors');
		$data['types'] = $this->Admin_mo->get('types');
		$data['links'] = $this->Admin_mo->get('links');
		$data['icons'] = $this->Admin_mo->get('icons');		
		$this->load->view('header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/admin',$data);
		$this->load->view('admin/links',$data);
		foreach($data['links'] as $link)
		{
			$data['link'] = $link;
			$typetable = $this->Admin_mo->getwhere('types', array('id'=>$link->type));
			$data[$typetable[0]->table] = $this->Admin_mo->getwhere($typetable[0]->table, array('linkid'=>$link->id));
			$this->load->view('admin/'.$typetable[0]->table,$data);
		}
		$this->load->view('footer');
	}
	
	public function del($table,$id,$image='')
	{
		if(isset($id) && ($id != '' || $id != 0))
		$this->Admin_mo->del($table, array('id'=>$id));
		if($image != '') unlink($table.'/'.$image);
		if($table == 'pricing') $this->Admin_mo->del('pricing_features', array('pricingid'=>$id));
		redirect('admin', 'refresh');
	}
	
	public function logout()
	{
		delete_cookie("id");
		delete_cookie("isadmin");
		redirect('', 'refresh');
	}
}
