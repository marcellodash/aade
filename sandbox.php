<?php
require_once('utils/aade.php');

$images = aade::getSandboxBackgroundImages();
?>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-sm-6">
				<div class="panel panel-default">
					<div class="panel-heading">Filtros</div>
					<div class="panel-body">
						<div class="form-group">
							<label for="sandbox-character-field" class="control-label">Personagem:</label>
							<input type="text" id="sandbox-character-field" class="form-control" onkeyup="aade.updatePreview(this, 'sandbox', 'c', true, event, aade.getSandboxPlatform())" />
						</div>
						<div class="form-group">
							<label for="sandbox-text-field" class="control-label">Texto:</label>
							<textarea id="sandbox-text-field" class="form-control" rows="3" onkeyup="aade.updatePreview(this, 'sandbox', 't', true, event, aade.getSandboxPlatform())"></textarea>
						</div>
						<div class="form-group">
							<label for="sandbox-background-field" class="control-label">Plano de Fundo:</label>
							<select id="sandbox-background-field" class="form-control" onchange="aade.updateBackgroundsSandbox(this)">
								<?php foreach($images as $image=>$name){ ?>
									<option value="<?php echo $image ?>"><?php echo $name ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="sandbox-platform" class="control-label">Plataforma:</label>
							<select id="sandbox-platform" class="form-control" onchange="aade.updatePlatformSandbox(this)">
								<option value="3ds">Nintendo 3DS</option>
								<option value="ds_jacutemsabao">Nintendo DS (Americana - Jacutem Sabão)</option>
								<option value="ds_american">Nintendo DS (Americana)</option>
								<option value="ds_european">Nintendo DS (Européia)</option>
							</select>
						</div>
						<button type="button" class="btn btn-primary"
							onclick="aade.renderSandboxImageOnBrowser('sandbox-character-field', 'sandbox-text-field', 'sandbox')">
							<span class="glyphicon glyphicon-picture"></span>
							Gerar Imagem
						</button>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="previas row">
					<div class="col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Prévia</h3>
							</div>
							<div class="panel-body">
								<div id="sandbox" class="dialog-preview">
									<div class="character-name"></div>
									<div class="text-window"></div>
								</div>
								<br />
								<img id="sandbox-comparative-image" src="images/judge_filled.png" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>