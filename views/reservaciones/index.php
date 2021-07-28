<div class="row">
	<div class="col-12">
		<?php if(!empty($data['reservaciones'])): ?>	
			<table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Usuario</th>
                      <th>Fecha</th>
                      <th>Hora</th>
                      <th>Factura</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php foreach($data['reservaciones'] as $key=>$reservacion): ?>
                    <tr>
                      <td><?=$key+1?>.</td>
                      <td><?=$reservacion->usuario?></td>
                      <td>
                        <?=$reservacion->fecha?>
                      </td>
                      <td>
                      	<?=$reservacion->hora?>
                      </td>
                       <td>
                      	<?=$reservacion->factura?>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
		<?php else: ?>
			<h3>
				No se encontraron reservaciones
			</h3>
		<?php endif; ?>
	</div>
</div>