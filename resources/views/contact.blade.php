@extends('layouts.master')
@section('title')
G&D Smart - Contacto
@endsection
@section('header')
<div class="container px-4 px-lg-5 mt-5">
    <div class="text-center mb-5 ">
        <h1 class=" fw-bolder">Nuestra Ubicacion</h1>
        <p class="text-xl">Calle Campos entre 6 de Agosto y 20 de Octubre Edif. Artemis N° 367 Planta Baja Of. 4 Zona San Jorge Telefono (2)2111393 La Paz - Bolivia</p>
    </div>
</div>
@endsection
@section('content')
<div class="bg-primary-600 pb-64 -mb-64 capitalize ">
    <div class="container">
<--seccion de maps google -->
    </div>
</div>

<div class="bg-primary-600 pb-64 -mb-64 capitalize">
        <div class="container">
            <h1 class="text-3xl lg:text-5xl font-medium">
             Envianos Un comentario</h1><h2 class="text-xl lg:text-2xl">y Responderemos Tus Dudas</h2>
            <form autocomplete="off" class="row">
                <div class="col-12">
                    <label for="email" class="font-medium text-xl mb-2">Correo</label>

                </div>
                <div class="input-group mb-2">
                    <input type="text" class="form-control border-4 border-primary rounded-sm h-auto p-6 w-auto font-medium text-2xl bg-secondary text-colorligth" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="required">
                  </div>
                    <br>

                <div class="col-12">
                    <label for="mensaje" class="font-medium text-xl mb-2">Comentario</label> 
                    
                </div>
                <div class="col-12">
                    <textarea name="mensaje" id="mensaje" style="height: 100px" placeholder="Comentario" required="required" class="border-4 border-primary rounded-sm font-medium text-2xl bg-secondary text-colorligth form-control">
                    </textarea>
                </div>
                <br>
                
                <div class="container col md-12">
                    <div class="row">
                      <div class="col-4"></div>
                      <div class="col-4 align-self-center">
                        <button type="submit" class="form-control" aria-label="enviar comentario">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                              </svg>
                            Enviar
                        </button>
                      </div>
                      
                    </div>
                  </div>


                <div class="row align-self-center">
                    
                </div>
            </form>
        </div>
    </div>
@endsection
