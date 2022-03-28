{!! Form::label('name', 'Nombre') !!}
{!! Form::text('name', null,['class' => 'form-control','id'=>'name','placeholder'=>'Nombre completo del usuario','required'])!!}

{!! Form::label('username', 'Usuario') !!}
{!! Form::text('username', null,['class' => 'form-control','id'=>'username','placeholder'=>'Nombre de usuario','required'])!!}

{!! Form::label('password', 'Contraseña') !!}
{!! Form::password('password', ['class' => 'form-control','id'=>'password','placeholder'=>'Contraseña'])!!}

{!! Form::label('email', 'Correo Electronico') !!}
{!! Form::email('email', null,['class' => 'form-control','id'=>'email','placeholder'=>'Correo Electronico','required'])!!}

{!! Form::label('phone', 'Telefono o Celular') !!}
{!! Form::text('phone', null,['class' => 'form-control','id'=>'phone','placeholder'=>'numero de telefono','required'])!!}

{!! Form::label('adress', 'Dirección') !!}
{!! Form::text('adress', null,['class' => 'form-control','id'=>'addres','placeholder'=>'Direccion del usuario','required'])!!}

{!! Form::label('roles', 'Rol') !!}
{!! Form::select('roles[]', $roles, null, ['class'=> 'form-control','multiple']) !!}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
