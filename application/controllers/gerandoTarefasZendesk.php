<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class gerandoTarefasZendesk extends CI_Controller {
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * http://example.com/index.php/gerandoTarefasExcel
	 * - or -
	 * http://example.com/index.php/gerandoTarefasExcel/index
	 * - or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/gerandoTarefasExcel/<method_name>
	 *
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	// carregando os helpes automatimamente para a classe especificada
	public function __construct() {
		parent::__construct ();
		$this->load->helper ( 'array' ); 			// carregando funções de geração de arrays
		$this->load->library ( 'form_validation' ); // carregando funções de validação do form
		//$this->load->library ( 'session' ); 		// carregando funções de sessoes
		$this->load->library ( 'table' );	 		// carregando funções de tabela
		$this->load->helper(array('form', 'url'));
		$this->load->library('upload');
	}
	
	public function index() {
		
		$this->load->view('gerarTarefasZendesk');
	}
	
	
	public function gerarTasks() {
		$this->load->model('ZendeskConnect');
		
		$allTickets = $this->ZendeskConnect->buscarTickets();
		
		
		
		//gerando tickets
		for ($i = 0; $i < 5; $i++) {
		
				
			$data02 = array();
		
			$params = array('api_key' => '3l4mqLQO.h3xAmrYy6tFrnd2erSQowFt', 'format' => '.json');
			$this->load->library('asana', $params);
			$data02 = array();
		
			$data02['projects'] = $this->asana->get('projects');
		
			// Create new task
			$params = array(
					'workspace' => '11736988359761',
					'projects' => '11840798204669',
					'name' => $allTickets->tickets[$i]->subject,
					'description' => $allTickets->tickets[$i]->description,
					'notes' => $allTickets->tickets[$i]->description,
					'assignee' => '11761644757078',
					'assignee_status' => 'upcoming',
					"followers" => array('11943798800741')
			);
		
			 //$user = $this->asana->post('task', '11943798800741');
			 // return all data of new task
			$data02['new'] = $this->asana->post('task', $params);
			//var_export($data02['new']); 
				
			/* var_export($user);
			print_r($user); */
		}
		
		$data = array (
				'data' => $data02
		);
		
		$this->load->view('mostrar',$data);
	}
	
}
/* End of file gerandoTarefasExcel.php */
/* Location: ./application/controllers/gerandoTarefasExcel.php */