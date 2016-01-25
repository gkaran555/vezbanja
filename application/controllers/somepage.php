<?php
class Somepage extends CI_Controller {

        public function index()
        {
            $data['main_content'] = 'somepage_view';
            $this->load->view('layouts/main',$data);
				
        }
		
		
}

?>