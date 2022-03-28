{!! Form::label('name', 'Nombre del Rol') !!} 
{!! Form::text('name', null,['class' => 'form-control','id'=>'name','placeholder'=>'Nombre del rol','required'])!!}
{!! Form::label('permissions[]', 'Permisos') !!}
{!! Form::select('permissions[]', $permisos, null, ['class'=> 'form-control','multiple']) !!}