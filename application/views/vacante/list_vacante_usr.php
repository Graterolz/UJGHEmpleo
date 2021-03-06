<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<br>
		</div>
	</div> 
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-lg-12">
							<div class="btn btn-default">
								<i class="fa fa-table fa-fw"></i><strong><?= TITULO_VACANTE; ?></strong>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th><?= $vacante_rules[IDVAC]['label']; ?></th>
									<th><?= $vacante_rules[TITULO]['label']; ?></th>
									<th><?= $vacante_rules[DESCRIPCION]['label']; ?></th>
									<th><?= $vacante_rules[FECHA_REGISTRO]['label']; ?></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
<?php
	if($vacante){
		foreach($vacante->result() as $vacante_row){
			//var_dump($vacante_row);
?>
								<tr>
									<td><?= $vacante_row->idvac; ?></td>
									<td><?= $vacante_row->titulo; ?></td>
									<td><?= $vacante_row->descripcion; ?></td>
									<td><?= date("d/m/Y", strtotime($vacante_row->fecha_registro)); ?></td>
									<td><a href="<?= base_url(PATH_MENU)."/".VACANTE_GET."/".$vacante_row->idvac; ?>" class="btn btn-success btn-xs"><i class="fa fa-search fa-fw"></i><strong>VER</strong></a></td>
								</tr>
<?php
		}
	}
?>
							</tbody>
						</table>
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-8 -->
	</div>
	<!-- /.row -->
</div>
<!-- /#page-wrapper -->