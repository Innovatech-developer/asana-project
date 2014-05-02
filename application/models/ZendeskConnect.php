<?php if (! defined ( 'BASEPATH' ))	exit ( 'No direct script access allowed' ); // desabilitando acesso direto ao arquivo

// Carregando class do cliente
use Zendesk\API\Client;

// carregando as classes
function __autoload($class) {
	$path = array (
			'core',
			'libraries',
			'models' 
	);	
	if (strpos ( $class, 'CI_' ) !== 0) {
		foreach ( $path as $dir ) {
			if (file_exists ( APPPATH . $dir . '/' . strtolower ( $class ) . '.php' ))
				include_once (APPPATH . $dir . '/' . strtolower ( $class ) . '.php');
		}
	}
}

class ZendeskConnect extends \CI_Model {
	/*
	 * atributos
	 */
	
	/*   // dados de acesso teste
	private $subdomain = "izdesk";
	private $username = "wilker@inoveagora.com.br";
	private $token = "G29lxQNmfKBwFwLXujP4hHX0dYcUnt1jckor8t8C"; 	// replace this with your token
	private $oAuthId = "izdesk"; 									// The value you entered into the OAuth 'Unique Identifier' field
	private $oAuthSecret = "71ea269795"; 							// The OAuth secret given to you by Zendes
	private $password = "123456";
	private $client;  */ 
	
	//dados de acesso Innovatech
	private $subdomain = "innovatech";								//innovatech
	private $username = "pcdiniz@inoveagora.com.br";				//innovatech
	private $token = "0CondGzIPY360VppBn9BmyqDVGfx5caKCC3NGHCV"; 	// replace this with your token innovatech
	private $oAuthId = "izdesk";          							// The value you entered into the OAuth 'Unique Identifier' field innovatech
	private $oAuthSecret = "bd398714ac";							//innovatech
	private $password = "#12345678Ok";	 							//innovatech 
	
	//retorna todos os tickets
	public function buscarTickets() {
		try {
			/*
			 * Criando objeto cliente
			*/
			$this->client = new Client($this->subdomain, $this->username);	// passando informações de autenticação
			$this->client->setAuth ( 'token', $this->token ); 				// set either token or password
			
			// recuperando todos os tickets
			$tickets = $this->client->tickets()->findAll();
			
			return $tickets;
		}
		catch (Exception $err) {
			//code here
		}
	}
	
	//retorna todos os agents
	public function buscarAgents() {
		try {
			/*
			 * Criando objeto cliente
			*/
			$this->client = new Client($this->subdomain, $this->username);	// passando informações de autenticação
			$this->client->setAuth ( 'token', $this->token ); 				// set either token or password
			
			//buscando grupos
			$arrayGroups = $this->client->users()->findAll();
			$groups = $arrayGroups->users;//acessando o array de ususarios
			
			return $groups;
		}
		catch (Exception $err) {
			echo "Erro! Ultrapassado o tempo limite de coneção com o Zendesk<br>
					Favor verificar sua conecção com a internet, ou chame o suporte.";
			die;
		}
	}
}