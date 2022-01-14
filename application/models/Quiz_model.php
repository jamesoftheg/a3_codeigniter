  
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz_model extends CI_Model
{

    public function get_entries()
    {
        $query = $this->db->get('quiz');
        return $query->result();
    }

}

?>