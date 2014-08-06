<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jobs extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('url','form','html'));
    $this->load->model('job_model');
  }

  public function index()
  {
    $data = array(
      'data' => array(
        'category' => $this->job_model->category(),
        'tab' => $this->job_model->category(),
      ),
      'view' => array('carousel','post_job','content'),
    );

    foreach($data['data']['tab'] as $content)
    {
      if($this->job_model->show_jobs($content['category_id'])->num_rows > 0)
      {
        $data['data']['result'][$content['category_id']] = $this->job_model->show_jobs($content['category_id'])->result_array();
      }
      else
      {
        $data['data']['result'][$content['category_id']] = array('jobs_id'=>'0','jobs_title'=>'0','jobs_company'=>'0','jobs_update'=>'0');
      }
    }
    $this->load->view('template',$data);
  }

  public function new_job()
  {
    $data = array(
      'data' => array('category' => $this->job_model->category()),
      'view' => array('jobs/new'),
    );

    $this->load->view('template',$data);
  }

  public function create_jobs()
  {
    // $this->load->library('form_validation');

    // $this->form_validation->set_rules('username', 'Username', 'required');
    // $this->form_validation->set_rules('password', 'Password', 'required');
    // $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
    // $this->form_validation->set_rules('email', 'Email', 'required');

    // if ($this->form_validation->run() == FALSE)
    // {

    // }

    $this->job_model->create_jobs();
    redirect('jobs/index');
  }

}

/* End of file jobs.php */
/* Location: ./application/controllers/jobs.php */

