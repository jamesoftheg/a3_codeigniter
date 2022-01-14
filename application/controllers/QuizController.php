<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuizController extends CI_Controller {
  
  var $TPL;

  public function __construct() {
    parent::__construct();
    $this->load->database();
    $this->load->model('Quiz_model');
  }

  public function index()
  {
    $this->template->show('quiz_view', $this->TPL);
  }

  public function fetch()
	{
		if ($this->input->is_ajax_request()) {
			$posts = $this->Quiz_model->get_entries();
			echo json_encode($posts);
		} else {
			echo "'No direct script access allowed'";
		}
	}

}

?>