<?php
class Pages extends CI_Controller {

        public function view($page = 'home'){
				
			if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php')){
					// Whoops, we don't have a page for that!
					show_404();
			}
	
			$data['title'] = ucfirst($page); // Capitalize the first letter
			$quiz = $this->trivia->GetQuiz();

	
			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, array( 'quiz' => $quiz));
			$this->load->view('templates/footer', $data);
        }

        public function insert(){
        	$name = $_POST['name'];
        	$email = $_POST['email'];
        	$phone = $_POST['phone'];
        	$data_insert = array(
        		'name' => $name, 
        		'email' => $email, 
        		'phone' => $phone, 
        	);
        	$this->db->set('date', 'NOW()', FALSE);
        	$res = $this->trivia->InsertData('user',$data_insert);
        	if($res >=1){
        		$this->session->set_flashdata('message','Anda berhasil terdaftar');
                        redirect('pages/view');
        	}else{
        		echo "<h2>Insert data gagal</h2>";
        	}

        }

        public function update(){
        	
        }

        public function delete(){
        	
        }
}