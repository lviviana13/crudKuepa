@if ( !empty ( $users->idUsers) )
   <!-- Acá el formulario con los datos de un registro para Actualizarlo -->

 


@else
   <!--  Acá el formulario en Limpio para crear un nuevo registro -->

   <div class="form-group">
		<label for="first_name" class="negrita">Usuario:</label> 
		<div>
			<input class="form-control"  required="required" name="first_name" type="text" id="first_name"> 
		</div>
	</div>

    <div class="form-group">
		<label for="password" class="negrita">Contraseña:</label> 
		<div>
			<input class="form-control"  required="required" name="password" type="password" id="password" > 
		</div>
	</div>

   <div class="form-group">
		<label for="first_name" class="negrita">Nombres:</label> 
		<div>
			<input class="form-control"  required="required" name="first_name" type="text" id="first_name" > 
		</div>
	</div>

    <div class="form-group">
		<label for="last_name" class="negrita">Apellidos:</label> 
		<div>
			<input class="form-control"  required="required" name="last_name" type="text" id="last_name" > 
		</div>
	</div>

    <div class="form-group">
		<label for="email_address" class="negrita">Email:</label> 
		<div>
			<input class="form-control"  required="required" name="email_address" type="mail" id="email_address" > 
		</div>
	</div>

    <div class="form-group">
		<label for="phone" class="negrita">Fecha de nacimiento:</label> 
		<div>
			<input class="form-control"  required="required" name="phone" type="number" id="phone" > 
		</div>
	</div>


    <div class="form-group">
		<label for="birthdate" class="negrita">Fecha de nacimiento:</label> 
		<div>
			<input class="form-control"  required="required" name="fbirthdate" type="date" id="birthdate" > 
		</div>
	</div>

@endif

<button type="submit" class="btn btn-info">Guardar</button>
<a href="{{ route('users') }}" class="btn btn-warning">Cancelar</a>