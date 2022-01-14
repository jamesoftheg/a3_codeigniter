<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditController extends CI_Controller {

  var $TPL;

  
  public function __construct()
  {
    // First we call a parent constructor.
    parent::__construct();

    // Load form validation
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    // Set validation rules
    $this->form_validation->set_rules('question', 'Question', 'trim|required|min_length[20]|max_length[140]|alpha_numeric_spaces');
    $this->form_validation->set_rules('answer_a', 'Answer A', 'trim|required|min_length[2]|max_length[50]|alpha_numeric_spaces');
    $this->form_validation->set_rules('answer_b', 'Answer B', 'trim|required|min_length[2]|max_length[50]|alpha_numeric_spaces');
    $this->form_validation->set_rules('answer_c', 'Answer C', 'trim|required|min_length[2]|max_length[50]|alpha_numeric_spaces');
    $this->form_validation->set_rules('answer_d', 'Answer D', 'trim|required|min_length[2]|max_length[50]|alpha_numeric_spaces');
    $this->form_validation->set_rules('correct_answer', 'Correct Answer', 'trim|required|min_length[2]|max_length[50]|alpha_numeric_spaces');

    // Validate form output
    $this->TPL['success'] = false;
    $this->TPL['error'] = false;

    // We set our update and new entry flags to false.
    // If either of these are true, the form helper will pop up a form.
    $this->TPL['update'] = false;
    $this->TPL['newentry'] = false;
  }

  private function display()
  {
    // Display calls on our database to get our entries.
    $query = $this->db-> query("SELECT * FROM quiz ORDER BY id ASC;");
    $this->TPL['listing'] = $query->result_array();

    $this->template->show('edit_view', $this->TPL);
  }

  public function index()
  {
    // Index just calls display.
    $this->display();
  }

  public function delete($id)
  {
    $query = $this->db->query("DELETE FROM quiz where id = '$id';");

    $this->display();
  }

  public function newentry()
  {
    // perform form validation, if it fails, report failure
    if ($this->form_validation->run() == FALSE)
    {
      // set a template variable to report validation failure
      $this->TPL['error'] = true;
      $this->TPL['newentry'] = true;
      $this->display();
    }
    else {
      $this->TPL['success'] = true;
      // This is processing a form, getting them into local variables.
      // Input and post to get the variables.
      $question = $this->input->post("question");
      $answer_a = $this->input->post("answer_a");
      $answer_b = $this->input->post("answer_b");
      $answer_c = $this->input->post("answer_c");
      $answer_d = $this->input->post("answer_d");
      $correct_answer = $this->input->post("correct_answer");
      // Use an insert query to put them into the database.
      $query = $this->db->query("INSERT INTO quiz VALUES (NULL, '$question', '$answer_a', '$answer_b', '$answer_c', '$answer_d', '$correct_answer');");

      $this->display();
    }
  }

  public function addnew()
  {
    // On insert, this flips to true.
    $this->TPL['newentry'] = TRUE;
    // Now we update our display.
    // This is state free, until the next URL comes in, this isn't reloaded.
    $this->display();
  }

  public function update($id)
  {
    // Populate the form with data from the table.
    $query = $this->db->query("SELECT * FROM quiz where id = '$id';");
    $this->TPL['entry'] = $query->result_array()[0];
    // Flip template update to true.
    $this->TPL['update'] = true;
    // Update the display.
    $this->display();
  }

  public function updateentry($id)
  {
    // perform form validation, if it fails, report failure
    if ($this->form_validation->run() == FALSE)
    {
      // set a template variable to report validation failure
      $this->TPL['error'] = true;
      $this->TPL['update'] = true;
      $this->update($id);
    }
    else {
      $this->TPL['success'] = true;
      // On hitting update, we send the form data to our database.
      // This way is vulnerable to injection attacks.
      $question = $this->input->post("question");
      $answer_a = $this->input->post("answer_a");
      $answer_b = $this->input->post("answer_b");
      $answer_c = $this->input->post("answer_c");
      $answer_d = $this->input->post("answer_d");
      $correct_answer = $this->input->post("correct_answer");
      $query = $this->db->query("UPDATE quiz " .
                                "SET question = '$question'," .
                                "    answer_a = '$answer_a'," .
                                "    answer_b = '$answer_b'," .
                                "    answer_c = '$answer_c'," .
                                "    answer_d = '$answer_d'," .
                                "    correct_answer = '$correct_answer'" .
                                " WHERE id = '$id';");
      $this->display();
    }
  }

}

?>