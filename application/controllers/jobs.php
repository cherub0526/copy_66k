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
      $data['data']['result'][$content['category_id']] = $this->job_model->show_jobs($content['category_id'])->result_array();
    }

    $this->load->view('template',$data);
  }

  public function category($id)
  {
    $data = array(
      'data' => array(
        'category' => $this->job_model->category($id),
      ),
      'view' => array('post_job','jobs/category'),
    );

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

  public function search()
  {
    $data = array(
      'data' => array(
        'search' => $this->job_model->search(),
      ),
      'view' => array('post_job','jobs/search'),
    );

    $this->load->view('template',$data);
  }

  public function show($id)
  {
    $data = array(
      'data' => array(
        'category' => $this->job_model->category(),
        'detail' => $this->job_model->get_jobs($id),
      ),
      'view' => array('post_job','jobs/show'),
    );

    $this->load->view('template',$data);
  }

  public function create_jobs()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_message('required', ' %s 不能空白');
    $this->form_validation->set_message('integer', ' %s 必須為數字');
    $this->form_validation->set_message('greater_than', ' %s 必須 6,6000元 以上');

    $this->form_validation->set_error_delimiters('<span class="label label-default label-danger">', '</span>');

    $this->form_validation->set_rules('job_title', '職位名稱', 'required');
    $this->form_validation->set_rules('category', '分類', 'required');

    $this->form_validation->set_rules('lower_bound', '薪水下限', 'required|integer|greater_than[65999]');
    $this->form_validation->set_rules('higher_bound', '薪水上限', 'required|integer|greater_than[65999]');

    $this->form_validation->set_rules('work_place', '工作地點', 'required');
    $this->form_validation->set_rules('description', '工作敘述', 'required');
    $this->form_validation->set_rules('how_hire', '如何應徵', 'required');
    $this->form_validation->set_rules('company', '公司 / 組織名稱', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');

    if ($this->form_validation->run() == FALSE)
    {
      $this->new_job();
    }
    else
    {
      $this->job_model->create_jobs();
      redirect('jobs/index');
    }
  }

}

/* End of file jobs.php */
/* Location: ./application/controllers/jobs.php */

