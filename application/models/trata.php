<?php
$data = array ();
function gerarTasks() {
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
}
?>


<table>
	<tr>
		<th>Vendi</th>
		<th>Rank</th>
		<th>Nome_da_tarefa</th>
		<th>Projeto</th>
		<th>Nas_anotacoes_colocar_msg</th>
	</tr>
  <?php
		foreach ( $data as $row ) {
			?>
  <tr>
		<th><?php echo $row['Vendi'];?></th>
		<th><?php echo $row['Rank'];?></th>
		<th><?php echo $row['Nome_da_tarefa'];?></th>
		<th><?php echo $row['Projeto'];?></th>
		<th><?php echo $row['Nas_anotações_colocar_msg'];?></th>
	</tr>
  <?php }?>
</table>


