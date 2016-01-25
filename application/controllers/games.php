<?php
class Games extends CI_Controller {

        public function index()
        {
            $data['main_content'] = 'games_view';
            $this->load->view('layouts/main',$data);
				
        }
		
		
}

?>