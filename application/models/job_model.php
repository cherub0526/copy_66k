<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Job_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  public function category()
  {
    $query = $this->db->get('category');
    return $query->result_array();
  }

  public function show_jobs($id = FALSE)
  {
    if($id === FALSE)
    {
      $query = $this->db->get('jobs');
      return $query;
    }
    $query = $this->db->order_by('jobs_update','desc')->get_where('jobs',array('jobs_category'=>$id));
    return $query;
  }

  public function create_jobs()
  {
    $data = array(
      'jobs_title' => $this->input->post('job_title'),
      'jobs_category' => $this->input->post('category'),
      'jobs_lower' => $this->input->post('lower_bound'),
      'jobs_higher' => $this->input->post('higher_bound'),
      'jobs_place' => $this->input->post('work_place'),
      'jobs_description' => $this->input->post('description'),
      'jobs_hire' => $this->input->post('how_hire'),
      'jobs_company' => $this->input->post('company'),
      'jobs_url' => $this->input->post('url'),
      'jobs_email' => $this->input->post('email'),
      'jobs_update' => date('Y-m-d H:i:s')
    );
    $this->db->insert('jobs',$data);
  }

}

/* End of file job.php */
/* Location: ./application/models/job.php */