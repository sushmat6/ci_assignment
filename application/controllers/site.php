<?php
class Site extends ci_Controller{
	function index()
	{
		$data=array();
		
		
		if($query=$this->site_model->get_records())
		{
			$data['records']=$query;
		}
		$this->load->view('options_view',$data);
	}
	
	function create()
	{
		$data=array(
			'user_name'=>$this->input->post('username'),
			'password'=>$this->input->post('password')
		);
		
		$this->site_model->add_record($data);
		$this->index();
	}
	//function to generate random username and password
	function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
	}

	function update(){
		$data=array(
			'user_name'=>$this->generateRandomString(5),
			'password'=>$this->generateRandomString()
		);
		$this->site_model->update_record($data);
			$this->index();
	}
	
	function delete(){
		$this->site_model->delete_row();
		$this->index();
	}
}
?>