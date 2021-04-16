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
@alerta(['titulo'=>'Erro fatal','tipo'=>'info'])
<p> <strong> Erro Inesperado</strong></p>
<p>Ocorreu um erro Inesperado</p>

@endalerta

@alerta(['titulo'=>'Erro fatal','tipo'=>'error'])
<p> <strong> Erro Inesperado</strong></p>
<p>Ocorreu um erro Inesperado</p>

@endalerta


@alerta(['titulo'=>'Erro fatal','tipo'=>'sucess'])
<p> <strong> Erro Inesperado</strong></p>
<p>Ocorreu um erro Inesperado</p>

@endalerta

@alerta(['titulo'=>'Erro fatal','tipo'=>'warning'])
<p> <strong> Erro Inesperado</strong></p>
<p>Ocorreu um erro Inesperado</p>


@endalerta



@endsection
