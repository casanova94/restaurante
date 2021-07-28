<div class="row">
	<div class="col-12">
		<?php if(!empty($data['sucursales'])): ?>	
			<table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nombre</th>
                      <th>Mesas Ventana</th>
                      <th>Mesas Pasillo</th>
                      <th>Mesas Jardín</th>
                      <th>Horario de Apertura</th>
                      <th>Horario de Cierre</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php foreach($data['sucursales'] as $key=>$sucursal): ?>
                    <tr>
                      <td><?=$key+1?>.</td>
                      <td><?=$sucursal->nombre?></td>
                      <td>
                        <?=implode($sucursal->mesasVentana,',')?>
                      </td>
                      <td>
                      	<?=implode($sucursal->mesasPasillo,',')?>
                      </td>
                       <td>
                      	<?=implode($sucursal->mesasJardin ,',')?>
                      </td>
                       <td>
                      	<?=$sucursal->horarioApertura ?>
                      </td>
                       <td>
                      	<?=$sucursal->horarioCierre ?>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
		<?php else: ?>
			<h3>
				No se encontraron sucursales
			</h3>
		<?php endif; ?>
	</div>
</div>