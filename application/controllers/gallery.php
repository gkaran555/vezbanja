<?php
class Gallery extends CI_Controller {

        public function index()
        {
            $data['main_content'] = 'gallery_view';
            $this->load->view('layouts/main',$data);
				
        }
		
		
}

?>