<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Welcome extends CI_Controller {
	
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
		// Get all projects
		$params = array('api_key' => '3kDqpwbx.ONTyVBDNiT7r5znhBColqAa', 'format' => '.json');
		$this->load->library('asana', $params);
		
		$data['projects'] = $this->asana->get('projects');
		
		print_r($data);
		
		
		/* // Get all projects
		$data['projects'] = $this->asana->get('projects');

		// Get all users
		$data['users'] = $this->asana->get('users');

		// Get specific user
		$data['user'] = $this->asana->get('user', 'xxxxxxxxxxxx');

		// Get specific project
		$data['project'] = $this->asana->get('project', 'xxxxxxxxxxxx');

		// Create new task
		$params = array(
			'workspace' => '11736988359761',
			'name' => 'New Task by Codeigniter',
			'notes' => 'Hi, this is my first task created by codeigniter',
			//'assignee' => 'mailtoassign@domain.com',
			'assignee_status' => 'upcoming',
			"followers" => array()
		);

		// return all data of new task
		$data['new'] = $this->asana->post('task', $params);
		// var_export($data['new']); */
		
		
		$this->load->view ( 'welcome_message' );
	}
	public function gerarTasks() {
		
			$arraTasks = array (
				0 => array (
						'vendi' => 35,
						'dados' => array (
								'nome_da_tarefa' => array (
										'Cubrir - Alta - cod.9075 - Multi Marcas Editoriais',
										'Cubrir - Alta - cod.5330 - Bompreco Supermercados Do Nordeste',
										'Cubrir - Alta - cod.1499 - Serv Nac Aprendizagem Rural Pe-Senar-Ar/Pe',
										'Cubrir - Alta - cod.8216 - Centraltech Comercio E Servicos De Informatica Ltd',
										'Cubrir - Alta - cod.3090 - Ensino Pesquisa E Cons  Epecol',
										'Cubrir - Alta - cod.9339 - Ranilson Araujo De Arruda',
										'Cubrir - Alta - cod.2270 - Celulose E Papel De Pernambuco Sa - Cepasa',
										'Cubrir - Alta - cod.5746 - Emerson Elias Do Nascimento',
										'Cubrir - Alta - cod.9080 - Terezinha Calado Rodrigues',
										'Cubrir - Alta - cod.5474 - Nacional Print',
										'Cubrir - Alta - cod.5770 - Casa Publicidade',
										'Cubrir - Alta - cod.8865 - Joao Bento De Gouveia Advogados Associados',
										'Cubrir - Alta - cod.8574 - Jungle Kids',
										'Cubrir - Alta - cod.9169 - Lucycleide Sabino Silva',
										'Cubrir - Alta - cod.9097 - Sergio & Shirley Informatica',
										'Cubrir - Alta - cod.8514 - Brascolor Grafica E Editora',
										'Cubrir - Alta - cod.9147 - Ademir De Souza Pinto Filho - Informatica',
										'Cubrir - Alta - cod.5748 - Backupe Servicos De Informatica',
										'Cubrir - Alta - cod.9364 - Cesar Phillipe De Morais Silva',
										'Cubrir - Alta - cod.1615 - Rima Instalacoes',
										'Cubrir - Media - cod.8482 - Genival Feliciano Coelho - Lan House',
										'Cubrir - Media - cod.9337 - K G Soares Carneiro Eletrodomesticos Me',
										'Cubrir - Media - cod.9331 - Iberbras Empreendimentos Imobiliarios',
										'Cubrir - Media - cod.7707 - Centro Educacional De Prevencao De Acidentes',
										'Cubrir - Media - cod.1026 - Mart Pet Comunicacao',
										'Cubrir - Media - cod.5390 - Propag Grafica E Copiadora',
										'Cubrir - Media - cod.4874 - Construtora Queiroz Galvao S/A',
										'Cubrir - Media - cod.9201 - Valderlan Soares Silva',
										'Cubrir - Media - cod.2528 - Leon Heimer S/A',
										'Cubrir - Media - cod.9275 - Coruja Comercio E Importacao De Presentes  - M',
										'Cubrir - Media - cod.8882 - Ideia Grafica Digital',
										'Cubrir - Media - cod.9254 - Harlan Pereira Correa',
										'Cubrir - Media - cod.7756 - Bureau Expresso Grafica Digital',
										'Cubrir - Media - cod.9102 - Consespe - Engenheiros Associados S/S',
										'Cubrir - Media - cod.5721 - Marcos M. Da Silva',
										'Cubrir - Media - cod.9369 - Tatiane Viana De Andrade',
										'Cubrir - Media - cod.9294 - Associacao De Pais E Mestres Da Escola Filipe Cama',
										'Cubrir - Media - cod.5102 - Josias Campos De Oliveira Junior',
										'Cubrir - Media - cod.8705 - Regiane Porto Limeira',
										'Cubrir - Media - cod.8868 - Allan Lessa',
										'Cubrir - Baixa - cod.8866 - Jose Passos Doria',
										'Cubrir - Baixa - cod.5609 - Instautec Servicos  Me',
										'Cubrir - Baixa - cod.5487 - Nb Magazine, Livraria E Papelaria',
										'Cubrir - Baixa - cod.9318 - Jose L Alves Amorim',
										'Cubrir - Baixa - cod.8869 - Flavio Ivanildo Da Silva',
										'Cubrir - Baixa - cod.8099 - Casa Do Laboratório',
										'Cubrir - Baixa - cod.8082 - M E V Industria Grafica',
										'Cubrir - Baixa - cod.8477 - Qualytech  Me',
										'Cubrir - Baixa - cod.5615 - Print 7  Me',
										'Cubrir - Baixa - cod.8336 - Belmiro M Da Silva Livraria E Papelaria',
										'Cubrir - Baixa - cod.8837 - Jurandy Pereira Da Silva Junior',
										'Cubrir - Baixa - cod.8635 - I B De Souza Grafica Me',
										'Cubrir - Baixa - cod.9244 - Casa Branca Auto Pecas',
										'Cubrir - Baixa - cod.3218 - Fundacao De Apoio Ao Desen Da Univers Fed De Pe',
										'Cubrir - Baixa - cod.9213 - R E S Print Comercio De Copiadoras',
										'Cubrir - Baixa - cod.1627 - Partido Do Movimento Democratico Nacional - Pmdb',
										'Cubrir - Baixa - cod.8244 - Mercio Fabio Tavares De Melo Me',
										'Cubrir - Baixa - cod.9176 - I. Barbosa Da Silva',
										'Cubrir - Baixa - cod.8566 - Adriano Jose De Oliveira',
										'Cubrir - Baixa - cod.8876 - Associacao Brasileira Da Igreja De Jesus Cristo',
										'Cubrir - Baixa - cod.9190 - Jose Humberto Da Silva',
										'Cubrir - Baixa - cod.8201 - Hi Fi Informatica',
										'Cubrir - Baixa - cod.7863 - Silas Cesar Da Silva Ferreira',
										'Cubrir - Baixa - cod.9335 - Hj Comercio',
										'Cubrir - Baixa - cod.8247 - Paroquia Anglicana Do Espirito Santo',
										'Cubrir - Baixa - cod.9205 - Titara Agropecuaria Comercio E Locaçoes .',
										'Cubrir - Baixa - cod.7875 - Gregory Thomas Smith',
										'Cubrir - Baixa - cod.9300 - Diego De Araujo Vitorio 07398528418',
										'Cubrir - Baixa - cod.8881 - Viana, Frazao E Oliveira Advogados Associados',
										'Cubrir - Baixa - cod.5323 - Gamborgi Bruno E Camisao Associados Advocacia',
										'Cubrir - Baixa - cod.7760 - Viacon - Construcoes E Montagens',
										'Cubrir - Baixa - cod.8664 - Lucas Antonio Da Silva',
										'Cubrir - Baixa - cod.8633 - Terceira Divisao De Levantamento',
										'Cubrir - Baixa - cod.2405 - Companhia De Tecidos Paulista',
										'Cubrir - Baixa - cod.5483 - P.P. De Miranda Losada',
										'Cubrir - Baixa - cod.8518 - Ronaldo Barbosa De Souza',
										'Cubrir - Baixa - cod.5540 - Joao Henrique De A Santos',
										'Cubrir - Baixa - cod.8373 - Ricardo Luis Do Nascimento',
										'Cubrir - Baixa - cod.8342 - Ydigoras Ribeiro De Albuquerque Junior',
										'Cubrir - Baixa - cod.9330 - Mario Gonçalves Da Silva',
										'Cubrir - Baixa - cod.809 - Techne Engenheiros Consultores .',
										'Cubrir - Baixa - cod.9289 - A M F Cavalcanti',
										'Cubrir - Baixa - cod.8563 - Luciano Borges De Santana',
										'Cubrir - Baixa - cod.9276 - G Do R Lapa Computacao Grafica',
										'Cubrir - Baixa - cod.9079 - Mayara Thalita Cavalcanti Da Silva',
										'Cubrir - Baixa - cod.5603 - Assoc Bras Da Igreja De Jesus C Dos S Dos U Dias',
										'Cubrir - Baixa - cod.5256 - Comercial Paranhos  Me',
										'Cubrir - Baixa - cod.9326 - Carlos Alberto De Farias',
										'Cubrir - Baixa - cod.4364 - Centro De Desenvolvimento Agroecologico Sabia',
										'Cubrir - Baixa - cod.9131 - Fabio Luiz Teixeira De Souza',
										'Cubrir - Baixa - cod.9250 - Rodrigo Silva Gomes',
										'Cubrir - Baixa - cod.9154 - T.A. Logistica',
										'Cubrir - Baixa - cod.9328 - Papel E Imagem' 
								)
								,
								'projeto' => 'Terr_Josias',
								'anotacoes' => array (
										'Posição do Rank =1 em Abr/2014',
										'Posição do Rank =1 em Abr/2014',
										'Posição do Rank =3 em Abr/2014',
										'Posição do Rank =4 em Abr/2014',
										'Posição do Rank =5 em Abr/2014',
										'Posição do Rank =6 em Abr/2014',
										'Posição do Rank =7 em Abr/2014',
										'Posição do Rank =8 em Abr/2014',
										'Posição do Rank =9 em Abr/2014',
										'Posição do Rank =10 em Abr/2014',
										'Posição do Rank =11 em Abr/2014',
										'Posição do Rank =12 em Abr/2014',
										'Posição do Rank =13 em Abr/2014',
										'Posição do Rank =14 em Abr/2014',
										'Posição do Rank =15 em Abr/2014',
										'Posição do Rank =16 em Abr/2014',
										'Posição do Rank =17 em Abr/2014',
										'Posição do Rank =18 em Abr/2014',
										'Posição do Rank =19 em Abr/2014',
										'Posição do Rank =20 em Abr/2014',
										'Posição do Rank =21 em Abr/2014',
										'Posição do Rank =22 em Abr/2014',
										'Posição do Rank =23 em Abr/2014',
										'Posição do Rank =24 em Abr/2014',
										'Posição do Rank =25 em Abr/2014',
										'Posição do Rank =26 em Abr/2014',
										'Posição do Rank =27 em Abr/2014',
										'Posição do Rank =28 em Abr/2014',
										'Posição do Rank =29 em Abr/2014',
										'Posição do Rank =30 em Abr/2014',
										'Posição do Rank =31 em Abr/2014',
										'Posição do Rank =32 em Abr/2014',
										'Posição do Rank =33 em Abr/2014',
										'Posição do Rank =34 em Abr/2014',
										'Posição do Rank =35 em Abr/2014',
										'Posição do Rank =36 em Abr/2014',
										'Posição do Rank =37 em Abr/2014',
										'Posição do Rank =38 em Abr/2014',
										'Posição do Rank =39 em Abr/2014',
										'Posição do Rank =40 em Abr/2014',
										'Posição do Rank =41 em Abr/2014',
										'Posição do Rank =42 em Abr/2014',
										'Posição do Rank =43 em Abr/2014',
										'Posição do Rank =44 em Abr/2014',
										'Posição do Rank =45 em Abr/2014',
										'Posição do Rank =46 em Abr/2014',
										'Posição do Rank =47 em Abr/2014',
										'Posição do Rank =48 em Abr/2014',
										'Posição do Rank =49 em Abr/2014',
										'Posição do Rank =50 em Abr/2014',
										'Posição do Rank =51 em Abr/2014',
										'Posição do Rank =52 em Abr/2014',
										'Posição do Rank =53 em Abr/2014',
										'Posição do Rank =54 em Abr/2014',
										'Posição do Rank =55 em Abr/2014',
										'Posição do Rank =56 em Abr/2014',
										'Posição do Rank =57 em Abr/2014',
										'Posição do Rank =58 em Abr/2014',
										'Posição do Rank =59 em Abr/2014',
										'Posição do Rank =60 em Abr/2014',
										'Posição do Rank =61 em Abr/2014',
										'Posição do Rank =62 em Abr/2014',
										'Posição do Rank =63 em Abr/2014',
										'Posição do Rank =64 em Abr/2014',
										'Posição do Rank =65 em Abr/2014',
										'Posição do Rank =66 em Abr/2014',
										'Posição do Rank =67 em Abr/2014',
										'Posição do Rank =68 em Abr/2014',
										'Posição do Rank =69 em Abr/2014',
										'Posição do Rank =70 em Abr/2014',
										'Posição do Rank =71 em Abr/2014',
										'Posição do Rank =72 em Abr/2014',
										'Posição do Rank =74 em Abr/2014',
										'Posição do Rank =75 em Abr/2014',
										'Posição do Rank =76 em Abr/2014',
										'Posição do Rank =77 em Abr/2014',
										'Posição do Rank =78 em Abr/2014',
										'Posição do Rank =79 em Abr/2014',
										'Posição do Rank =80 em Abr/2014',
										'Posição do Rank =81 em Abr/2014',
										'Posição do Rank =82 em Abr/2014',
										'Posição do Rank =83 em Abr/2014',
										'Posição do Rank =84 em Abr/2014',
										'Posição do Rank =85 em Abr/2014',
										'Posição do Rank =86 em Abr/2014',
										'Posição do Rank =87 em Abr/2014',
										'Posição do Rank =88 em Abr/2014',
										'Posição do Rank =89 em Abr/2014',
										'Posição do Rank =90 em Abr/2014',
										'Posição do Rank =91 em Abr/2014',
										'Posição do Rank =92 em Abr/2014',
										'Posição do Rank =93 em Abr/2014' 
								) 
						) 
				),
				1 => array (
						'vendi' => 56,
						'dados' => array (
								'nome_da_tarefa' => array (
										'Cubrir - Alta - cod.8013 - R S Grafica Editora',
										'Cubrir - Alta - cod.8165 - Auditorias Da Justica Militar',
										'Cubrir - Alta - cod.9095 - Jorge Heriberto Vasconcelos Villa Real',
										'Cubrir - Alta - cod.9179 - D S De Carvalho Grafica',
										'Cubrir - Alta - cod.9184 - X-Press Grafica E Comunicacao Visual',
										'Cubrir - Alta - cod.1279 - Centauro Solucoes Em Impressos',
										'Cubrir - Alta - cod.8015 - Tutto Limp Distribuidora',
										'Cubrir - Alta - cod.9228 - Gustavo Henrique Damaso Barbosa',
										'Cubrir - Alta - cod.9313 - Cynthia De Andrade R E Montier Liciarde',
										'Cubrir - Alta - cod.7743 - Zita M Melo Da Carvalheira',
										'Cubrir - Alta - cod.5361 - Markeplan Servicos E Comercio E Representacoes Ltd',
										'Cubrir - Alta - cod.5589 - Credimoveis Novolar',
										'Cubrir - Alta - cod.1095 - Bfc Factoring',
										'Cubrir - Alta - cod.8199 - Erico Alex Correia De Souza',
										'Cubrir - Alta - cod.7690 - W.C. Arruda-Comercio E Servicos',
										'Cubrir - Alta - cod.8515 - Saraiva Administradora E Distribuidora De Produtos',
										'Cubrir - Alta - cod.9389 - Wolney Gadelha',
										'Cubrir - Alta - cod.8740 - Maria De Fatima Frankin Barbosa Leandro Me',
										'Cubrir - Alta - cod.7924 - Christiano De Carvalho Dantas Me',
										'Cubrir - Alta - cod.3845 - Companhia Excelsior De Seguros',
										'Cubrir - Media - cod.8465 - G. C. De Almeida Goncalves',
										'Cubrir - Media - cod.2241 - Companhia Agroindustrial De Goiana',
										'Cubrir - Media - cod.8524 - A. Pereira Monnerat Soares Comercio',
										'Cubrir - Media - cod.7961 - Concex Consultoria De Comercio Exterior  Me',
										'Cubrir - Media - cod.8775 - Marcio Miguel De Santana Silva',
										'Cubrir - Media - cod.9309 - Borges E Mattos Advocacia',
										'Cubrir - Media - cod.5645 - Movimento De Apoio Aos Meninos De Rua - Mamer',
										'Cubrir - Media - cod.9322 - Heliston Ferreira De Mendonça',
										'Cubrir - Media - cod.8205 - J R Da Cruz Felinto Me',
										'Cubrir - Media - cod.9149 - Lucivania Pereira De Lima Santos',
										'Cubrir - Media - cod.8040 - Juarez Gomes De Farias',
										'Cubrir - Media - cod.8022 - Unipress Grafica E Editora Do Nordeste',
										'Cubrir - Media - cod.9092 - Universidade Federal Rural De Pernambuco',
										'Cubrir - Media - cod.7829 - Erivaldo Araujo Da Silva',
										'Cubrir - Media - cod.8344 - Paulo Marcelino De Lima Me',
										'Cubrir - Media - cod.9374 - Manoel Clemetino Mendonça',
										'Cubrir - Media - cod.9235 - Rubens Terto De Menezes 05343484409',
										'Cubrir - Media - cod.8378 - Adilson Alves Freire Me',
										'Cubrir - Media - cod.9378 - Caio Gomes Cesar Ribeiro',
										'Cubrir - Media - cod.9241 - 3P Distribuidora E Comercio De Informatica',
										'Cubrir - Baixa - cod.8805 - Rosilene Ferreira Da Silva Reis',
										'Cubrir - Baixa - cod.8523 - Cipresa Empreendimentos',
										'Cubrir - Baixa - cod.8071 - Ponto Da Propaganda Comunicacao Visual',
										'Cubrir - Baixa - cod.7997 - Andre Mahasaya Batista Informatica',
										'Cubrir - Baixa - cod.9372 - Tainah Tasselli Silvestre Correia',
										'Cubrir - Baixa - cod.5162 - Original Suprimentos E Equipamentos  Me',
										'Cubrir - Baixa - cod.8317 - Oficina Das Fronteiras Copias E Servicos  - Ep',
										'Cubrir - Baixa - cod.8625 - Debora De Freitas Arruda Camara Silva',
										'Cubrir - Baixa - cod.8724 - José Felipe Nazário Júnior 01300247401 I',
										'Cubrir - Baixa - cod.8402 - Gomes & Figueiroa Comercio E Servicos',
										'Cubrir - Baixa - cod.9373 - Alexandre Felix Moura Do Amaral',
										'Cubrir - Baixa - cod.4202 - Fac Form Impressos',
										'Cubrir - Baixa - cod.9209 - R. R. Transporte E Logistica',
										'Cubrir - Baixa - cod.5551 - Maria Da Conceicao',
										'Cubrir - Baixa - cod.8842 - Maria Das Gracas Da Conceicao',
										'Cubrir - Baixa - cod.8003 - Felipe Da Silva Ferreira',
										'Cubrir - Baixa - cod.2750 - Fundacao De Ensino Superior Do Estado De Pe',
										'Cubrir - Baixa - cod.9344 - Rafaela Correia Pinto 07407687439',
										'Cubrir - Baixa - cod.9074 - Marcio Jose Dos Santos',
										'Cubrir - Baixa - cod.4241 - Sindicato Dos Trabalhadores Das Universidades Fede',
										'Cubrir - Baixa - cod.9207 - Emm Galindo Me',
										'Cubrir - Baixa - cod.4786 - Laboratorio De Analises Clinicas Monserrate',
										'Cubrir - Baixa - cod.735 - Soll - Servicos Obras E Locacoes',
										'Cubrir - Baixa - cod.8286 - Composer Grafica E Editora',
										'Cubrir - Baixa - cod.9086 - Gabriel Moura Buregio De Lima Informatica',
										'Cubrir - Baixa - cod.5464 - Advocacia Julio Oliveira',
										'Cubrir - Baixa - cod.8773 - Taua Comunicacao Integrada',
										'Cubrir - Baixa - cod.8806 - Norsupri - Nordeste Suprimentos E Equipamentos',
										"Cubrir - Baixa - cod.9390 - Associacao Brasileira D' A Igreja De Jesus Cristo",
										'Cubrir - Baixa - cod.2048 - Hoteis Pernambuco S/A',
										'Cubrir - Baixa - cod.9385 - Vida Digital Comercio E Servicos Informatica Eirel',
										'Cubrir - Baixa - cod.8361 - Cyntya Maria Inojosa De Farias',
										'Cubrir - Baixa - cod.9297 - J A B De Melo Informatica',
										'Cubrir - Baixa - cod.5479 - Sylvio Romero Oliveira Cabral Papelaria',
										'Cubrir - Baixa - cod.9195 - P M Costa Panificacao',
										'Cubrir - Baixa - cod.8699 - Arena Pernambuco Negócios E Investimentos S.A.',
										'Cubrir - Baixa - cod.9363 - Siagra Soc Industrial Agropecuaria De Gravata',
										'Cubrir - Baixa - cod.5576 - Monica Maria De Medeiros Silva',
										'Cubrir - Baixa - cod.9324 - Augusto Santos Santana',
										'Cubrir - Baixa - cod.9138 - Selma Guedes De Lira',
										'Cubrir - Baixa - cod.8822 - Marcelo Grafica E Papelaria',
										'Cubrir - Baixa - cod.8941 - Nilson Pereira Borba Junior' 
								),
								'projeto' => 'Terr_Marilia',
								'anotacoes' => array (
										'Posição do Rank =1 em Abr/2014',
										'Posição do Rank =2 em Abr/2014',
										'Posição do Rank =3 em Abr/2014',
										'Posição do Rank =4 em Abr/2014',
										'Posição do Rank =5 em Abr/2014',
										'Posição do Rank =6 em Abr/2014',
										'Posição do Rank =7 em Abr/2014',
										'Posição do Rank =8 em Abr/2014',
										'Posição do Rank =9 em Abr/2014',
										'Posição do Rank =10 em Abr/2014',
										'Posição do Rank =11 em Abr/2014',
										'Posição do Rank =12 em Abr/2014',
										'Posição do Rank =13 em Abr/2014',
										'Posição do Rank =14 em Abr/2014',
										'Posição do Rank =15 em Abr/2014',
										'Posição do Rank =16 em Abr/2014',
										'Posição do Rank =17 em Abr/2014',
										'Posição do Rank =18 em Abr/2014',
										'Posição do Rank =19 em Abr/2014',
										'Posição do Rank =20 em Abr/2014',
										'Posição do Rank =21 em Abr/2014',
										'Posição do Rank =22 em Abr/2014',
										'Posição do Rank =23 em Abr/2014',
										'Posição do Rank =24 em Abr/2014',
										'Posição do Rank =25 em Abr/2014',
										'Posição do Rank =26 em Abr/2014',
										'Posição do Rank =27 em Abr/2014',
										'Posição do Rank =28 em Abr/2014',
										'Posição do Rank =29 em Abr/2014',
										'Posição do Rank =30 em Abr/2014',
										'Posição do Rank =31 em Abr/2014',
										'Posição do Rank =32 em Abr/2014',
										'Posição do Rank =33 em Abr/2014',
										'Posição do Rank =34 em Abr/2014',
										'Posição do Rank =35 em Abr/2014',
										'Posição do Rank =36 em Abr/2014',
										'Posição do Rank =37 em Abr/2014',
										'Posição do Rank =38 em Abr/2014',
										'Posição do Rank =39 em Abr/2014',
										'Posição do Rank =40 em Abr/2014',
										'Posição do Rank =41 em Abr/2014',
										'Posição do Rank =42 em Abr/2014',
										'Posição do Rank =43 em Abr/2014',
										'Posição do Rank =44 em Abr/2014',
										'Posição do Rank =45 em Abr/2014',
										'Posição do Rank =46 em Abr/2014',
										'Posição do Rank =47 em Abr/2014',
										'Posição do Rank =48 em Abr/2014',
										'Posição do Rank =49 em Abr/2014',
										'Posição do Rank =50 em Abr/2014',
										'Posição do Rank =51 em Abr/2014',
										'Posição do Rank =52 em Abr/2014',
										'Posição do Rank =53 em Abr/2014',
										'Posição do Rank =54 em Abr/2014',
										'Posição do Rank =55 em Abr/2014',
										'Posição do Rank =56 em Abr/2014',
										'Posição do Rank =57 em Abr/2014',
										'Posição do Rank =58 em Abr/2014',
										'Posição do Rank =59 em Abr/2014',
										'Posição do Rank =60 em Abr/2014',
										'Posição do Rank =61 em Abr/2014',
										'Posição do Rank =62 em Abr/2014',
										'Posição do Rank =63 em Abr/2014',
										'Posição do Rank =64 em Abr/2014',
										'Posição do Rank =65 em Abr/2014',
										'Posição do Rank =66 em Abr/2014',
										'Posição do Rank =67 em Abr/2014',
										'Posição do Rank =68 em Abr/2014',
										'Posição do Rank =69 em Abr/2014',
										'Posição do Rank =70 em Abr/2014',
										'Posição do Rank =71 em Abr/2014',
										'Posição do Rank =72 em Abr/2014',
										'Posição do Rank =73 em Abr/2014',
										'Posição do Rank =74 em Abr/2014',
										'Posição do Rank =75 em Abr/2014',
										'Posição do Rank =76 em Abr/2014',
										'Posição do Rank =77 em Abr/2014',
										'Posição do Rank =78 em Abr/2014',
										'Posição do Rank =79 em Abr/2014',
										'Posição do Rank =80 em Abr/2014',
										'Posição do Rank =81 em Abr/2014',
										'Posição do Rank =82 em Abr/2014' 
								) 
						) 
				),
				2 => array (
						'vendi' => 61,
						'dados' => array (
								'nome_da_tarefa' => array (
										'Cubrir - Alta - cod.9081 - Nila Lucia Ribeiro',
										'Cubrir - Alta - cod.5754 - Safetec Informatica',
										'Cubrir - Alta - cod.4035 - Flamac Incorporacao E Construcao',
										'Cubrir - Alta - cod.9292 - Marcelo Almeida Coimbra',
										'Cubrir - Alta - cod.5497 - Printpex Grafica E Editora',
										'Cubrir - Alta - cod.8785 - Quantica Tecnologia',
										'Cubrir - Alta - cod.3975 - Reprocenter',
										'Cubrir - Alta - cod.6771 - Impacto Comunicacao E Marketing',
										'Cubrir - Alta - cod.5511 - Irleide Barros Da Silva Me',
										'Cubrir - Alta - cod.8273 - Livio Gomes De Barros Junior',
										'Cubrir - Alta - cod.8825 - Livraria E Papelaria Itaenga',
										'Cubrir - Alta - cod.9293 - H. G. O. Transportes',
										'Cubrir - Alta - cod.9216 - Conselho De Integracao Socio Educativo',
										'Cubrir - Alta - cod.8884 - Robson Mauricio Alves Soares',
										'Cubrir - Alta - cod.5526 - W B De Oliveira',
										'Cubrir - Alta - cod.8867 - Centro Espirita Lar Da Redencao',
										'Cubrir - Alta - cod.5347 - Tarvernard Rubem De Macedo Neto Me',
										'Cubrir - Alta - cod.5463 - Onkos Clinica De Oncologia',
										'Cubrir - Alta - cod.9101 - Helder Sousa Melo Me',
										'Cubrir - Alta - cod.5475 - Instituto Princesa Isabel',
										'Cubrir - Media - cod.5765 - Rivaldo Cavalcante Da Silva Junior',
										'Cubrir - Media - cod.8864 - M A X Dos Santos',
										'Cubrir - Media - cod.1807 - Lagean Comercio E Representacoes',
										'Cubrir - Media - cod.8875 - Kaefer Isobrasil Tecnologia De Isolamentos',
										'Cubrir - Media - cod.9156 - Cooperativa Central De Credito Do Norte Nordeste',
										'Cubrir - Media - cod.3818 - Cbe Cia Brasileira De Equipamento',
										'Cubrir - Media - cod.8736 - Jafrio Refrigeracao',
										'Cubrir - Media - cod.7854 - Erika De Albuquerque Marques Pereira',
										'Cubrir - Media - cod.1150 - Centro Pernambucano De Servicos Educacionais E Cul',
										'Cubrir - Media - cod.9240 - Frutos Do Sol Agroindustria',
										'Cubrir - Media - cod.9393 - Brascod Comercio, Importação E Exportação S.A',
										'Cubrir - Media - cod.8784 - Jose Nilton Chagas',
										'Cubrir - Media - cod.8421 - Prevseg Corretora De Seguros',
										'Cubrir - Media - cod.9174 - João Carlos Vilaça Torres',
										'Cubrir - Media - cod.9115 - Sueli Maria De Oliveira',
										'Cubrir - Media - cod.5287 - Katia Maria Da Silva Araujo Papelaria',
										'Cubrir - Media - cod.9349 - Jatobeton Engenharia',
										'Cubrir - Media - cod.9283 - Transportadora Route',
										'Cubrir - Media - cod.9277 - Colegio Patricia Costa',
										'Cubrir - Media - cod.5694 - Marcelo Tadeu Isola',
										'Cubrir - Baixa - cod.5674 - Copy Art Servicos Graficos',
										'Cubrir - Baixa - cod.1051 - Pontual Arquitetos',
										'Cubrir - Baixa - cod.5764 - Diocese De Floresta',
										'Cubrir - Baixa - cod.5382 - Naasson Mendonca De Sales Me',
										'Cubrir - Baixa - cod.9185 - Mendes E Albuquerque',
										'Cubrir - Baixa - cod.8680 - New Building',
										'Cubrir - Baixa - cod.8375 - Joyce Maria Macedo',
										'Cubrir - Baixa - cod.9365 - Silvania De Macedo Sousa 07654310412',
										'Cubrir - Baixa - cod.7847 - Barra Da Guabiraba Prefeitura',
										'Cubrir - Baixa - cod.8655 - Rita De Fatima Almeida Costa',
										'Cubrir - Baixa - cod.8298 - Etrall Log Transportes E Logistica  Me',
										'Cubrir - Baixa - cod.9355 - Cambrone Comercio E Servicos',
										'Cubrir - Baixa - cod.9113 - Ducale Participacoes S.A',
										'Cubrir - Baixa - cod.9212 - Cci Construcoes Offshore S.A.',
										'Cubrir - Baixa - cod.9327 - Maria A Correia - Papelaria',
										'Cubrir - Baixa - cod.7800 - Provider Solucoes Tecnologicas',
										'Cubrir - Baixa - cod.8540 - Massa Pronta Produtos E Serviços',
										'Cubrir - Baixa - cod.8457 - Zummi Comercio E Industria',
										'Cubrir - Baixa - cod.9160 - Maria Vanice Maciel Vieira',
										'Cubrir - Baixa - cod.8486 - Civilport Engenharia',
										'Cubrir - Baixa - cod.8688 - Rodrigo Silva Gomes',
										'Cubrir - Baixa - cod.9296 - Pedro Ivo Barbosa De Padua Walfrido',
										'Cubrir - Baixa - cod.9125 - Flavia Maria Da Silva',
										'Cubrir - Baixa - cod.8755 - Aparecido Jose De Sousa',
										'Cubrir - Baixa - cod.8613 - Uniodonto De Recife Coop. De Trabalho Odontologico',
										'Cubrir - Baixa - cod.5415 - Claudson Souza Sobral',
										'Cubrir - Baixa - cod.8795 - Alexandre Luz De Andrade',
										'Cubrir - Baixa - cod.8030 - Hilton Paulo Da Silva',
										'Cubrir - Baixa - cod.9246 - Maciel Btista De Freitas',
										'Cubrir - Baixa - cod.9178 - Innove Paper- Papelaria E Informatica',
										'Cubrir - Baixa - cod.8855 - Nordexpress Nordeste Entregas Expressas',
										'Cubrir - Baixa - cod.9132 - Supertec Informatica & Cartuchos',
										'Cubrir - Baixa - cod.8606 - Paroquia De Cristo Redentor',
										'Cubrir - Baixa - cod.7778 - Maktec Comercio De Maquinas Copiadora E Suprimento',
										'Cubrir - Baixa - cod.8508 - Aton Construcoes',
										'Cubrir - Baixa - cod.8880 - Jaime Marçal Dantas Filho',
										'Cubrir - Baixa - cod.9100 - Ipojuca Camara Municipal',
										'Cubrir - Baixa - cod.9210 - Instituto De Pos-Graduacao Do Recife',
										'Cubrir - Baixa - cod.9366 - Jaciane Maria De Sales',
										'Cubrir - Baixa - cod.1538 - Tenorio Incorporacoes E Empreendimentos S / A' 
								),
								'projeto' => 'Terr_Claudio',
								'anotacoes' => array (
										'Posição do Rank =1 em Abr/2014',
										'Posição do Rank =2 em Abr/2014',
										'Posição do Rank =3 em Abr/2014',
										'Posição do Rank =4 em Abr/2014',
										'Posição do Rank =5 em Abr/2014',
										'Posição do Rank =6 em Abr/2014',
										'Posição do Rank =7 em Abr/2014',
										'Posição do Rank =8 em Abr/2014',
										'Posição do Rank =9 em Abr/2014',
										'Posição do Rank =10 em Abr/2014',
										'Posição do Rank =11 em Abr/2014',
										'Posição do Rank =12 em Abr/2014',
										'Posição do Rank =13 em Abr/2014',
										'Posição do Rank =14 em Abr/2014',
										'Posição do Rank =15 em Abr/2014',
										'Posição do Rank =16 em Abr/2014',
										'Posição do Rank =17 em Abr/2014',
										'Posição do Rank =18 em Abr/2014',
										'Posição do Rank =19 em Abr/2014',
										'Posição do Rank =20 em Abr/2014',
										'Posição do Rank =21 em Abr/2014',
										'Posição do Rank =22 em Abr/2014',
										'Posição do Rank =23 em Abr/2014',
										'Posição do Rank =24 em Abr/2014',
										'Posição do Rank =25 em Abr/2014',
										'Posição do Rank =26 em Abr/2014',
										'Posição do Rank =27 em Abr/2014',
										'Posição do Rank =28 em Abr/2014',
										'Posição do Rank =29 em Abr/2014',
										'Posição do Rank =30 em Abr/2014',
										'Posição do Rank =31 em Abr/2014',
										'Posição do Rank =32 em Abr/2014',
										'Posição do Rank =33 em Abr/2014',
										'Posição do Rank =34 em Abr/2014',
										'Posição do Rank =35 em Abr/2014',
										'Posição do Rank =36 em Abr/2014',
										'Posição do Rank =37 em Abr/2014',
										'Posição do Rank =38 em Abr/2014',
										'Posição do Rank =39 em Abr/2014',
										'Posição do Rank =40 em Abr/2014',
										'Posição do Rank =41 em Abr/2014',
										'Posição do Rank =42 em Abr/2014',
										'Posição do Rank =43 em Abr/2014',
										'Posição do Rank =44 em Abr/2014',
										'Posição do Rank =45 em Abr/2014',
										'Posição do Rank =46 em Abr/2014',
										'Posição do Rank =47 em Abr/2014',
										'Posição do Rank =48 em Abr/2014',
										'Posição do Rank =49 em Abr/2014',
										'Posição do Rank =50 em Abr/2014',
										'Posição do Rank =51 em Abr/2014',
										'Posição do Rank =52 em Abr/2014',
										'Posição do Rank =53 em Abr/2014',
										'Posição do Rank =54 em Abr/2014',
										'Posição do Rank =55 em Abr/2014',
										'Posição do Rank =56 em Abr/2014',
										'Posição do Rank =57 em Abr/2014',
										'Posição do Rank =58 em Abr/2014',
										'Posição do Rank =59 em Abr/2014',
										'Posição do Rank =60 em Abr/2014',
										'Posição do Rank =61 em Abr/2014',
										'Posição do Rank =62 em Abr/2014',
										'Posição do Rank =63 em Abr/2014',
										'Posição do Rank =64 em Abr/2014',
										'Posição do Rank =65 em Abr/2014',
										'Posição do Rank =66 em Abr/2014',
										'Posição do Rank =67 em Abr/2014',
										'Posição do Rank =68 em Abr/2014',
										'Posição do Rank =69 em Abr/2014',
										'Posição do Rank =70 em Abr/2014',
										'Posição do Rank =71 em Abr/2014',
										'Posição do Rank =72 em Abr/2014',
										'Posição do Rank =73 em Abr/2014',
										'Posição do Rank =74 em Abr/2014',
										'Posição do Rank =75 em Abr/2014',
										'Posição do Rank =76 em Abr/2014',
										'Posição do Rank =77 em Abr/2014',
										'Posição do Rank =78 em Abr/2014',
										'Posição do Rank =79 em Abr/2014',
										'Posição do Rank =80 em Abr/2014' 
								)
								 
						) 
				),
				3 => array (
						'vendi' => 62,
						'dados' => array (
								'nome_da_tarefa' => array (
										'Cubrir - Alta - cod.8436 - Nov Fiber Glass Systems Fabric. De Tubos E Conexõe',
										'Cubrir - Alta - cod.5745 - Saraiva Equipamentos',
										'Cubrir - Alta - cod.9279 - Soares Informatica & Servicos',
										'Cubrir - Alta - cod.8877 - Plodecad Consultoria E Servicos De Plotagem',
										'Cubrir - Alta - cod.9177 - Aline Lucena Fragosode Oliveira',
										'Cubrir - Alta - cod.7804 - Scalla Computacao Grafica',
										'Cubrir - Alta - cod.9237 - Copia Rapida Servicos Graficos E Papelaria.',
										'Cubrir - Alta - cod.5699 - Centro Profissional Especial',
										'Cubrir - Alta - cod.9198 - Francisco Edson Alencar Da Cruz',
										'Cubrir - Alta - cod.9311 - J C Santos Comercio E Servicos',
										'Cubrir - Alta - cod.9260 - Rodrigo Verissimo Dantas Rameh',
										'Cubrir - Alta - cod.5416 - Art Imagem Servicos Graficos',
										'Cubrir - Alta - cod.7928 - Industria E Comercio De Confeccoes Jhs  Me',
										'Cubrir - Alta - cod.4609 - Jbr Engenharia',
										'Cubrir - Alta - cod.8159 - Sandro Alexandre Dos Santos',
										'Cubrir - Alta - cod.8708 - Qualiagua Laboratorio E Consultoria',
										'Cubrir - Alta - cod.1612 - Concrepoxi Engenharia',
										'Cubrir - Alta - cod.9356 - Edson Luiz Arantes',
										'Cubrir - Alta - cod.4855 - Frota Mais Locadora De Veiculos',
										'Cubrir - Alta - cod.8641 - G E F Consultoria Comercio E Servicos',
										'Cubrir - Media - cod.9197 - Catao E Cia',
										'Cubrir - Media - cod.8077 - Andressa Calina Tavares Alves',
										'Cubrir - Media - cod.9208 - Suellen Ramos De Vasconcelos',
										'Cubrir - Media - cod.8885 - Paulo Rogerio Camilo De Oliveira',
										'Cubrir - Media - cod.5051 - Studio Cad Projetos E Apresentacoes',
										'Cubrir - Media - cod.5304 - Shopping Do Papel',
										'Cubrir - Media - cod.9161 - Park Carapuceiro Servicos',
										'Cubrir - Media - cod.749 - Rosa Mistica Turismo',
										'Cubrir - Media - cod.8634 - Ricardo Peixoto Da Silva',
										'Cubrir - Media - cod.9280 - L M Da Silva Papelaria',
										'Cubrir - Media - cod.3556 - Eniil Empresa Nacional De Irrigacoes E Instalacoes',
										'Cubrir - Media - cod.8872 - Empresa Baiana De Aguas E Saneamento Sa',
										'Cubrir - Media - cod.9261 - Eduardo Maciel Bezerra Lima',
										'Cubrir - Media - cod.9392 - Maria Da Conceicao Da Silva',
										'Cubrir - Media - cod.9150 - Samir Pereira De Freitas',
										'Cubrir - Media - cod.9124 - Fabio Barbosa Galvao 89611217404',
										'Cubrir - Media - cod.9350 - Genilson Aurelio Ferreira De Franca',
										'Cubrir - Media - cod.9226 - Royalprint',
										'Cubrir - Media - cod.5710 - Zapp Comercio E Servicos De Informatica',
										'Cubrir - Media - cod.9295 - Davi Nascimento Beltrao',
										'Cubrir - Baixa - cod.5021 - Alianca Comunicacao E Cultura',
										'Cubrir - Baixa - cod.9284 - Darley & Isabelle',
										'Cubrir - Baixa - cod.9270 - Joselito De Souza Marinho',
										'Cubrir - Baixa - cod.8665 - Danillo Da Silva Ventura',
										'Cubrir - Baixa - cod.8754 - Ariely De Medeiros Cunha Me',
										'Cubrir - Baixa - cod.6792 - Movimento Dos Focolares Nordeste',
										'Cubrir - Baixa - cod.6786 - Pancristal',
										'Cubrir - Baixa - cod.5499 - G M Do Nascimento Souza Me',
										'Cubrir - Baixa - cod.5488 - Flex Nordeste Comercio E Serv.',
										'Cubrir - Baixa - cod.3862 - Cia Hidro Eletrica Do Sao Francisco Chesf',
										'Cubrir - Baixa - cod.9155 - Mkp Papelaria  Me',
										'Cubrir - Baixa - cod.5657 - Tamara Farias Santana',
										'Cubrir - Baixa - cod.7796 - Tecop Terminal De Combustiveis Da Paraiba',
										'Cubrir - Baixa - cod.9274 - Hospital Regional Dom Moura',
										'Cubrir - Baixa - cod.7983 - J.P. De Souza',
										'Cubrir - Baixa - cod.8430 - Central Park Comercio E Repr. Logistica',
										'Cubrir - Baixa - cod.8558 - Ciave Alimentos',
										'Cubrir - Baixa - cod.8709 - Ananias Lins De Andrade',
										'Cubrir - Baixa - cod.8231 - Piu Bella Comercio E Servicos De Moveis Planejados',
										'Cubrir - Baixa - cod.9076 - Copy Service',
										'Cubrir - Baixa - cod.8305 - Comval - Comercio Varejista De Alimentos',
										'Cubrir - Baixa - cod.9229 - Ana Carolina Buarque Assuncao De Carvalho',
										'Cubrir - Baixa - cod.8591 - Decalplast Industria E Comercio  Me',
										'Cubrir - Baixa - cod.9196 - Ismael Severino De Souza Junior 04584971420',
										'Cubrir - Baixa - cod.9361 - L C Oliveira Imoveis',
										'Cubrir - Baixa - cod.8677 - Microlyne',
										'Cubrir - Baixa - cod.5267 - Sociedade Dos Cd Pe Ass. De Odontologia Sec Pe S A',
										'Cubrir - Baixa - cod.9383 - Carlos Souto Alves',
										'Cubrir - Baixa - cod.2049 - Hoteis Pernambuco S/A',
										'Cubrir - Baixa - cod.7749 - D R De Macedo Sobrinho Me',
										'Cubrir - Baixa - cod.5731 - Digital Printer Solucoes Em Impressao',
										'Cubrir - Baixa - cod.8858 - Wellington Seabra',
										'Cubrir - Baixa - cod.9343 - Jose Antonio Borba De Melo',
										'Cubrir - Baixa - cod.7732 - Pcr - Secretaria De Educacao',
										'Cubrir - Baixa - cod.5747 - Jose Nunes Oliveira Filho',
										'Cubrir - Baixa - cod.7922 - Joselio Pereira Da Silva',
										'Cubrir - Baixa - cod.9384 - Cargo Express Despachos Aduaneiros',
										'Cubrir - Baixa - cod.8745 - Unitur Agência De Viagens E Tur.',
										'Cubrir - Baixa - cod.9146 - Wilson Lopes Cerqueira',
										'Cubrir - Baixa - cod.9386 - Rr Luna Comercio' 
								),
								'projeto' => 'Terr_Filipe',
								'anotacoes' => array (
										'Posição do Rank =1 em Abr/2014',
										'Posição do Rank =2 em Abr/2014',
										'Posição do Rank =3 em Abr/2014',
										'Posição do Rank =4 em Abr/2014',
										'Posição do Rank =5 em Abr/2014',
										'Posição do Rank =6 em Abr/2014',
										'Posição do Rank =7 em Abr/2014',
										'Posição do Rank =8 em Abr/2014',
										'Posição do Rank =9 em Abr/2014',
										'Posição do Rank =10 em Abr/2014',
										'Posição do Rank =11 em Abr/2014',
										'Posição do Rank =12 em Abr/2014',
										'Posição do Rank =13 em Abr/2014',
										'Posição do Rank =14 em Abr/2014',
										'Posição do Rank =15 em Abr/2014',
										'Posição do Rank =16 em Abr/2014',
										'Posição do Rank =17 em Abr/2014',
										'Posição do Rank =18 em Abr/2014',
										'Posição do Rank =19 em Abr/2014',
										'Posição do Rank =20 em Abr/2014',
										'Posição do Rank =21 em Abr/2014',
										'Posição do Rank =22 em Abr/2014',
										'Posição do Rank =23 em Abr/2014',
										'Posição do Rank =24 em Abr/2014',
										'Posição do Rank =25 em Abr/2014',
										'Posição do Rank =26 em Abr/2014',
										'Posição do Rank =27 em Abr/2014',
										'Posição do Rank =28 em Abr/2014',
										'Posição do Rank =29 em Abr/2014',
										'Posição do Rank =30 em Abr/2014',
										'Posição do Rank =31 em Abr/2014',
										'Posição do Rank =32 em Abr/2014',
										'Posição do Rank =33 em Abr/2014',
										'Posição do Rank =34 em Abr/2014',
										'Posição do Rank =35 em Abr/2014',
										'Posição do Rank =36 em Abr/2014',
										'Posição do Rank =37 em Abr/2014',
										'Posição do Rank =38 em Abr/2014',
										'Posição do Rank =39 em Abr/2014',
										'Posição do Rank =40 em Abr/2014',
										'Posição do Rank =41 em Abr/2014',
										'Posição do Rank =42 em Abr/2014',
										'Posição do Rank =43 em Abr/2014',
										'Posição do Rank =44 em Abr/2014',
										'Posição do Rank =45 em Abr/2014',
										'Posição do Rank =46 em Abr/2014',
										'Posição do Rank =47 em Abr/2014',
										'Posição do Rank =48 em Abr/2014',
										'Posição do Rank =49 em Abr/2014',
										'Posição do Rank =50 em Abr/2014',
										'Posição do Rank =51 em Abr/2014',
										'Posição do Rank =52 em Abr/2014',
										'Posição do Rank =53 em Abr/2014',
										'Posição do Rank =54 em Abr/2014',
										'Posição do Rank =55 em Abr/2014',
										'Posição do Rank =56 em Abr/2014',
										'Posição do Rank =57 em Abr/2014',
										'Posição do Rank =58 em Abr/2014',
										'Posição do Rank =59 em Abr/2014',
										'Posição do Rank =60 em Abr/2014',
										'Posição do Rank =61 em Abr/2014',
										'Posição do Rank =62 em Abr/2014',
										'Posição do Rank =63 em Abr/2014',
										'Posição do Rank =64 em Abr/2014',
										'Posição do Rank =65 em Abr/2014',
										'Posição do Rank =66 em Abr/2014',
										'Posição do Rank =67 em Abr/2014',
										'Posição do Rank =68 em Abr/2014',
										'Posição do Rank =69 em Abr/2014',
										'Posição do Rank =70 em Abr/2014',
										'Posição do Rank =71 em Abr/2014',
										'Posição do Rank =72 em Abr/2014',
										'Posição do Rank =73 em Abr/2014',
										'Posição do Rank =74 em Abr/2014',
										'Posição do Rank =75 em Abr/2014',
										'Posição do Rank =76 em Abr/2014',
										'Posição do Rank =77 em Abr/2014',
										'Posição do Rank =78 em Abr/2014',
										'Posição do Rank =79 em Abr/2014',
										'Posição do Rank =80 em Abr/2014' 
								) 
						) 
				) 
		);
				
				
				//titulo da tarefa
				
				
				
					$titulo = $arraTasks[0]['dados']['nome_da_tarefa'];
					$anotacoes = $arraTasks[0]['dados']['anotacoes'];
				
				//print_r($arrayConteudo);

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
							//'name' => $titulo[$i],
							//'description' => $anotacoes[$i],
							'assignee' => '11761644757078',
							'assignee_status' => 'upcoming',
							"followers" => array()
					);
						
					/* $user = $this->asana->post('task', '11943798800741');
					// return all data of new task
					$data02['new'] = $this->asana->post('task', $params);
					var_export($data02['new']); */
							
							
							
					 $user = $this->asana->put('task',$params);
					
					var_export($user);
					print_r($user);
				}				 
			}
			/* else if ($arraTasks[$i]['vendi'] == 56) {
				
				
				//titulo da tarefa
				$vend = $arraTasks[$i]['dados']['nome_da_tarefa'];
				$anotacoes = $arraTasks[$i]['dados']['anotacoes'];
				
				foreach ($vend as $item) {
						
					$data02 = array();
				
					$params = array('api_key' => '3l4mqLQO.h3xAmrYy6tFrnd2erSQowFt', 'format' => '.json');
					$this->load->library('asana', $params);
					$data02 = array();
				
					$data02['projects'] = $this->asana->get('projects');
				
					// Create new task
					$params = array(
							'workspace' => '11736988359761',
							'projects' => '11790564410570',
							'name' => $item,
							'notes' => $anotacoes,
							'assignee' => '11761644756850',
							'assignee_status' => 'upcoming',
							"followers" => array('11761525358658','11736967977411')
					);
				
					$user = $this->asana->post('task', '11761644756850');
					// return all data of new task
					$data02['new'] = $this->asana->post('task', $params);
					var_export($data02['new']);
				}
			}
			else if ($arraTasks[$i]['vendi'] == 61) {
				
				
				//titulo da tarefa
				$vend = $arraTasks[$i]['dados']['nome_da_tarefa'];
				$anotacoes = $arraTasks[$i]['dados']['anotacoes'];
				
				foreach ($vend as $item) {
				
					$data02 = array();
				
					$params = array('api_key' => '3l4mqLQO.h3xAmrYy6tFrnd2erSQowFt', 'format' => '.json');
					$this->load->library('asana', $params);
					$data02 = array();
				
					$data02['projects'] = $this->asana->get('projects');
				
					// Create new task
					$params = array(
							'workspace' => '11736988359761',
							'projects' => '11790564410549',
							'name' => $item,
							'notes' => $anotacoes,
							'assignee' => '11761644756888',
							'assignee_status' => 'upcoming',
							"followers" => array('11761525358658','11736967977411')
					);
				
					$user = $this->asana->post('task', '11761644756888');
					// return all data of new task
					$data02['new'] = $this->asana->post('task', $params);
					var_export($data02['new']);
			}
		}
		else if ($arraTasks[$i]['vendi'] == 62) {
			
			//titulo da tarefa
			$vend = $arraTasks[$i]['dados']['nome_da_tarefa'];
			$anotacoes = $arraTasks[$i]['dados']['anotacoes'];
			
			foreach ($vend as $item) {
			
				$data02 = array();
			
				$params = array('api_key' => '3l4mqLQO.h3xAmrYy6tFrnd2erSQowFt', 'format' => '.json');
				$this->load->library('asana', $params);
				$data02 = array();
			
				$data02['projects'] = $this->asana->get('projects');
			
				// Create new task
				$params = array(
						'workspace' => '11736988359761',
						'projects' => '11790564410559',
						'name' => $item,
						'notes' => $anotacoes,
						'assignee' => '11761644756926',
						'assignee_status' => 'upcoming',
						"followers" => array('11761525358658','11736967977411')
				);
			
				$user = $this->asana->post('task', '11761644756926');
				// return all data of new task
				$data02['new'] = $this->asana->post('task', $params);
				var_export($data02['new']);
		}
		}
		}
		
		 */
		//$this->load->view ( 'mostrar', $data );
}

/* End of file gerandoTarefasExcel.php */
/* Location: ./application/controllers/gerandoTarefasExcel.php */