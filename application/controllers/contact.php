<?php
class Contact extends CI_Controller {

        public function index()
        {
            				
		    $data['main_content'] = 'contact_view';
            $this->load->view('layouts/main',$data);
				
        }
		
				
		
}

?>