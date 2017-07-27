<?php
class Trivia extends CI_Model {

        public function GetQuiz() {
			$quiz = $this->db->query('select * from question');
			return $quiz->result_array();
				
        }

        public function InsertData($namatable,$data) {
        	$res = $this->db->insert($namatable,$data);
        	return $res;
				
        }
        
}