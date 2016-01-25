<?php
class Gallery1 extends CI_Controller {

        public function index()
        {
            $data['main_content'] = 'gallery1_view';
            $this->load->view('layouts/main',$data);
				
        }
		
		
}

?>