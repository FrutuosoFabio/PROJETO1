@extends('layouts.principal')
@section('titulo','Departamentos')
@section('conteudo')
    <h3>Departamentos</h3>
<ul>
<li>Compoutadores</li>
<li>Eletronicos</li>
<li>Acessorios</li>
<li>Roupas</li>



</ul>
@component('componentes.alerta',['titulo'=>'Erro fatal'])
<p> <strong> Erro Inesperado</strong></p>
<p>Ocorreu um erro Inesperado</p>
@endcomponent

@component('componentes.alerta',['titulo'=>'Erro fatal'])
<p> <strong> Erro Inesperado</strong></p>
<p>Ocorreu um erro Inesperado</p>
@endcomponent


@component('componentes.alerta',['titulo'=>'Erro fatal'])
<p> <strong> Erro Inesperado</strong></p>
<p>Ocorreu um erro Inesperado</p>
@endcomponent

@component('componentes.alerta',['titulo'=>'Erro fatal'])
<p> <strong> Erro Inesperado</strong></p>
<p>Ocorreu um erro Inesperado</p>
@endcomponent

@endsection
