<div class="grid fluid">
	<div class="row">
		<div class="span12">
				<ul class="breadcrumb">
					<li><a href="<?php echo site_url('ctoc') ?>">Principal</a><span class="divider">/</span></li>
					<li class="active">Registro</li>
				</ul>		
		</div>
	</div>
	<div class="row">
		<div class="span3"></div>
		<div class="span6">
			<?php echo form_open('cregistro'); ?>

		    <?php echo validation_errors('<button class="warning">', '</button><br>'); ?> 		              
		        <h2>Registro de Agentes</h2>
		        <label>Nombre(s):</label>
		        <div class="input-control text" data-role="input-control">
				    <input type="text" placeholder="Ingresa el nombre de usuario" name="nom" value="<?php echo set_value('nom'); ?>"></input>
				    <button class="btn-clear" tabindex="-1" type="button"></button>
				</div>

		        <label>Apellidos:</label>
		        <div class="input-control text" data-role="input-control">
				    <input type="text" placeholder="Ingresa tus apellidos" name="ape" value="<?php echo set_value('ape'); ?>"></input>
				    <button class="btn-clear" tabindex="-1" type="button"></button>
				</div>

		        <label>Correo electronico:</label>
		        <input type="email" data-transform="input-control" name="correo" placeholder="Ingresa tu correo " value="<?php echo set_value('correo'); ?>"/>

		        <label>Correo electronico:</label>
		        <input type="email" data-transform="input-control" name="correo" placeholder="Opcional " value="<?php echo set_value('correo'); ?>"/>

		        <label for="username">Contraseña:</label>
		        <div class="input-control password">
				    <input type="password" value="" placeholder="Ingresa tu clave " name="contra" value="<?php echo set_value('contra'); ?>"/>
				    <button class="btn-reveal"></button>
				</div>

				<label for="username">Repetir Contraseña:</label>
		        <div class="input-control password">
				    <input type="password" value="" placeholder="Repite tu clave " name="contra2" value="<?php echo set_value('contra2'); ?>"/>
				    <button class="btn-reveal"></button>
				</div>

				<label for="username">Tipo de agente:</label>
		        <div class="input-control checkbox">
					<label>
						<input type="checkbox" />
						<span class="check"></span>
						Empresa
					</label>
				</div>
				<div class="input-control checkbox">
					<label>
						<input type="checkbox" />
						<span class="check"></span>
						IES
					</label>
				</div>
				<div class="input-control checkbox">
					<label>
						<input type="checkbox" />
						<span class="check"></span>
						Centro de Investigación
					</label>
				</div>
				<div class="input-control checkbox">
					<label>
						<input type="checkbox" />
						<span class="check"></span>
						Organización Civil
					</label>
				</div>
				<div class="input-control checkbox">
					<label>
						<input type="checkbox" />
						<span class="check"></span>
						Particular
					</label>
				</div>
				<div class="input-control checkbox">
					<label>
						<input type="checkbox" />
						<span class="check"></span>
						Financieras, Incubadora o Aceleradora
					</label>
				</div>
				<label for="username">Descripción del agente:</label>
				<div class="input-control textarea">
			    	<textarea> </textarea>
			    </div>
				<br>
		        <button class="btn btn-large btn-primary" type="submit">Registrar</button>
		      </form>
		</div>
	</div>	
</div>