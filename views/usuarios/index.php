<div class="row">
	<div class="col-12">
		<?php if(!empty($data['usuarios'])): ?>	
			<table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nombre</th>
                      <th>Cumpleaños</th>
                      <th>Email</th>
                      <th>Teléfono</th>
                      <th>RFC</th>
                      <th>Nickname</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php foreach($data['usuarios'] as $key=>$usuario): ?>
                    <tr>
                      <td><?=$key+1?>.</td>
                      <td><?=$usuario->nombre.' '.$usuario->apellido?></td>
                      <td>
                        <?=$usuario->cumple?>
                      </td>
                      <td>
                      	<?=$usuario->email ?>
                      </td>
                       <td>
                      	<?=$usuario->tel ?>
                      </td>
                       <td>
                      	<?=$usuario->rfc ?>
                      </td>
                       <td>
                      	<?=$usuario->nickname ?>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
		<?php else: ?>
			<h3>
				No se encontraron usuarios
			</h3>
		<?php endif; ?>
	</div>
</div>