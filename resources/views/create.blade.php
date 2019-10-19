
<form method="POST" action="{{ route('users/store') }}" role="form" enctype="multipart/form-data">
 
 <input type="hidden" name="_method" value="PUT">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">

 @include('users.form.seccion')
                                                         
</form>