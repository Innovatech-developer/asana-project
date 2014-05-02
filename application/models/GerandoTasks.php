<?php

namespace models;

class GerandoTasks extends \CI_Model {
	private $data = array ();
	public function gerarTasks() {
		function adicionar_pessoa($vendi, $rank, $nome_da_tarefa, $projeto, $nas_anotacoes_colocar_msg) {
			global $data;
			$data [] = array (
					'Vendi' => $vendi,
					'Rank' => $rank,
					'Nome_da_tarefa' => $nome_da_tarefa,
					'Projeto' => $projeto,
					'Nas_anotações_colocar_msg' => $nas_anotacoes_colocar_msg 
			);
		}
		
		if ($_FILES ['file'] ['tmp_name']) {
			$dom = DOMDocument::load ( $_FILES ['file'] ['tmp_name'] );
			$rows = $dom->getElementsByTagName ( 'Row' );
			$first_row = true;
			
			foreach ( $rows as $row ) {
				if (! $first_row) {
					$vendi = '';
					$rank = '';
					$nome_da_tarefa = '';
					$projeto = '';
					$nas_anotacoes_colocar_msg = '';
					
					$index = 1;
					$cells = $row->getElementsByTagName ( 'Cell' );
					foreach ( $cells as $cell ) {
						
						$ind = $cell->getAttribute ( 'Index' );
						
						if ($ind != null)
							$index = $ind;
						if ($index == 1)
							$vendi = $cell->nodeValue;
						if ($index == 2)
							$rank = $cell->nodeValue;
						if ($index == 3)
							$nome_da_tarefa = $cell->nodeValue;
						if ($index == 4)
							$projeto = $cell->nodeValue;
						if ($index == 5)
							$nas_anotacoes_colocar_msg = $cell->nodeValue;
						
						$index += 1;
					} // termina segundo foreche
					adicionar_pessoa ( $vendi, $rank, $nome_da_tarefa, $projeto, $nas_anotacoes_colocar_msg );
				} // termina if da primeira linha
				$first_row = false;
			} // termina primeiro foreche
		} // termina o if file
		
		$this->load->view ( 'mostrar', $data );
	}
}

?>