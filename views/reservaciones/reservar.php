<div class="row">
	<div class="col-12">
		<form method="POST">
            <div class="form-group">
                  <label for="usuario">Usuario</label>
                  <select class="custom-select form-control-border border-width-2" id="usuario" name="usuario">
                    <option>Seleccione el usuario</option>
                    <?php foreach($data['usuarios'] AS $usuario): ?>
                      <option value="<?=$usuario->nombre.' '.$usuario->apellido?>"><?=$usuario->nombre.' '.$usuario->apellido?></option>
                    <?php endforeach; ?>
                  </select>
            </div>
            <div class="form-group">
                  <label for="fecha">Fecha</label>
                  <input class="custom-select form-control-border border-width-2" id="fecha" type="date" name="fecha">
                </div>
            <div class="form-group">
                  <label for="hora">Hora</label>
                  <input class="custom-select form-control-border border-width-2" id="hora" type="time" name="hora">
                </div>
            <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="factura" name="factura">
                    <label class="form-check-label" for="factura">Requiero factura</label>
                  </div>
			
            <?php if(!empty($data["msg"])): ?>
            	<div>
            	<?=$data["msg"]?>
                </div>
            <?php endif;?>
            <br>
            <button type="submit" class="btn btn-primary">Reservar</button>
		</form>
	</div>
</div>