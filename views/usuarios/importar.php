<div class="row">
	<div class="col-12">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
                    <label for="json_usuarios">Ingrese los usuarios en formato JSON</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="json_usuarios" accept="application/json" name="json_usuarios">
                        <label class="custom-file-label" for="json_usuarios">Elegir Archivo</label>
                      </div>
                    </div>
            </div>
            <?php if(!empty($data["msg"])): ?>
            	<div>
            	<?=$data["msg"]?>
                </div>
            <?php endif;?>

            <button type="submit" class="btn btn-primary">Subir</button>
		</form>
	</div>
</div>