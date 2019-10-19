
@if(Session::has('message'))
    <div class="alert alert-primary" role="alert">
        {{ Session::get('message') }}
    </div>
@endif


 
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td class="v-align-middle">{{$user->first_name}}</td>
            <td class="v-align-middle">{{$user->last_name}}</td>
            <td class="v-align-middle">{{$user->mail_address}}</td>
            <td class="v-align-middle">{{$user->phone}}</td>
            <td class="v-align-middle">
            
                <form action="{{ url('users/delete') }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">
 
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="idUser" value="{{$user->id }}">
                    <a  href="{{  url('users/update/'.$user->id)}}"   class="btn btn-primary">Editar</a>
 
                    <button type="submit" class="btn btn-danger">Eliminar</button>
 
                </form>
 
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


<script type="text/javascript">
 
  function confirmarEliminar()
  {
  var x = confirm("Estas seguro de Eliminar?");
  if (x)
     return true;
  else
     return false;
  }
 
</script>