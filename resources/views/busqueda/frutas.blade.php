@extends('layouts.default')
@section('titulo_pagina','Nutriólogo | Frutas')
@section('titulo','Búsqueda de Frutas')
@section('subtitulo','Sección')
@section('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Sección</h3>
            </div>
            <div class="box-body">
                <h4>Palabra:</h4>
                <input type="text" value="" id="texto" />
                <button id="btnrespuesta" class="btn btn-primary">
                Evaluar
                </button>
                <h4>
                Es palindromo: 
                </h4>
                <h1 id="respSI">
                SI
                </h1>
                <h1 id="respNO">
                NO
                </h1>

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
$(function() {
    if($("{{route('palindromo->{{cadena}}')}}"))
});
</script>
@endsection
