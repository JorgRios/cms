<div class="row">
    <div class="col-md-6">
        {!! Form::label('value', 'Valor') !!}
        {!! Form::text('value', null,['class' => 'form-control','id'=>'value','maxlength'=>'4','required','autofocus']) !!}

        {!! Form::label('description', 'Decripción') !!}
        {!! Form::text('description', null,['class' => 'form-control','id'=>'description','maxlength'=>'250','required','autofocus']) !!}

        {!! Form::label('group', 'Grupo') !!}
        {!! Form::text('group', null,['class' => 'form-control','id'=>'group','maxlength'=>'50','required','autofocus']) !!}

        {!! Form::label('conector', 'Conector') !!}
        {!! Form::text('conector', null,['class' => 'form-control','id'=>'conector','maxlength'=>'35','autofocus']) !!}

        {!! Form::label('slug', 'Slug') !!}
        {!! Form::text('slug', null,['class' => 'form-control','id'=>'slug','maxlength'=>'35','autofocus']) !!}
    </div>
</div>
