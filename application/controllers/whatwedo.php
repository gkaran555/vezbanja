<?php
class Whatwedo extends CI_Controller {

        public function index()
        {
            $data['main_content'] = 'whatwedo_view';
            $this->load->view('layouts/main',$data);
				
        }
		
		
}

?>