<!DOCTYPE html>
<html>
<head>

    <title>Prueba</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="/css/base.css" rel="stylesheet" type="text/css">
    <link href="/css/app.css" rel="stylesheet" type="text/css">
    <style>
    .thumb {
        max-width: 100%;
        height: auto;
    }
    #list {
        max-width: 100%;
        height: auto;
    }
    #img {
        
        width: 359px; height: 180px;
    }

</style>

</head>
<body>

<div class="container">
	<div class="row">
    <div class="col-md-8">
<div class="form-group col-md-6">
    {!!Form::label('type','Tipo de Organización')!!}
    {!!Form::text('type',null,['class'=>'form-control','placeholder'=>'Nombre de la Organización/Empresa', 'autocomplete'=>'off'])!!}
</div>

<div class="form-group col-md-6">
    {!!Form::label('name','Nombre de la empresa')!!}
    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre de la Empresa o marca', 'autocomplete'=>'off'])!!}
</div>

<div class="form-group col-md-6">
    {!!Form::label('alternate_name','Nombre Alternativo')!!}
    {!!Form::text('alternate_name',null,['class'=>'form-control','placeholder'=>'Alias de la empresa o marca', 'autocomplete'=>'off'])!!}
</div>

<div class="form-group col-md-6">
    {!!Form::label('url','Sitio web de la empresa')!!}
    {!!Form::url('url',null,['class'=>'form-control','placeholder'=>'http://www.miempresa.com.mx', 'autocomplete'=>'off', 'pattern'=>'^http://www.[a-zA-Z0.9._-]{4,}$'])!!}
</div>


</div>
 <div class="col-md-4" align="center">
        {!!Form::hidden('imagen', null ,['id'=>'img1'])!!}
        <input name="imagen_url" type="file" id="imagen_url" style="display: none;">
     
        <a href="javascript:void(0);" class="btn btn-success btn-imagen" id="btn-imagen-icono" title="Click para asociar imagen">
            <i class="fa fa-image fa-5x"></i>
        </a>
        
        <a href="javascript:void(0);" class="btn-imagen" title="Click para asociar imagen">
            <div id="list">
            </div>
        </a>
    </div>
</div>

<div class="form-group col-md-6">
    {!!Form::label('adress','Dirección de la empresa')!!}
    {!!Form::text('adress',null,['class'=>'form-control','placeholder'=>'Vialidad, Num. ext. y colonia', 'autocomplete'=>'off'])!!}
</div>

<div class="form-group col-md-6">
    {!!Form::label('country','Pais')!!}
    {!!Form::text('country',null,['class'=>'form-control','placeholder'=>'Pais ubicación de la empresa', 'autocomplete'=>'off'])!!}
</div>

<div class="form-group col-md-6">
    {!!Form::label('state','Estado')!!}
    {!!Form::text('state',null,['class'=>'form-control','placeholder'=>'Estado ubicación de la empresa', 'autocomplete'=>'off'])!!}
</div>

<div class="form-group col-md-6">
    {!!Form::label('city','Ciudad')!!}
    {!!Form::text('city',null,['class'=>'form-control','placeholder'=>'Ciudad ubicación de la empresa', 'autocomplete'=>'off'])!!}
</div>

<div class="form-group col-md-6">
    {!!Form::label('postal_code','Codigo Postal de la empresa')!!}
    {!!Form::text('postal_code',null,['class'=>'form-control numeric','placeholder'=>'000000', 'autocomplete'=>'off','minlength'=>'5','maxlength'=>'5','pattern'=> '([0-9]{5})','title' => 'El Código Postal ingresado no tiene el formato esperado, verifique nuevamente el Código Postal ingresado'])!!}
</div>

<div class="form-group col-md-6">
    {!!Form::label('telephone','No. telefonico contacto')!!}
    {!!Form::number('telephone',null,['class'=>'form-control numeric','placeholder'=>'000-0000000', 'autocomplete'=>'off'])!!}
</div>

<div class="form-group col-md-6">
    {!!Form::label('contact_type','Tipo de contacto')!!}
    {!!Form::text('contact_type',null,['class'=>'form-control','placeholder'=>'Ej. Atención a clientes', 'autocomplete'=>'off'])!!}
</div>

 <div class="form-group col-md-12">
    {!!Form::label('description','Descripción: ')!!}
    {!!Form::textarea('description',null,['class'=>'form-control','placeholder'=>'Breve descripción de la empresa', "rows" => "1", "cols" => "2"])!!}
                    </div>

</div>
<script type="text/javascript" src="/js/base.js"></script>
<script src="/js/imagen.js"></script>
<script src="/js/corte.js"></script>

</body>
</html>