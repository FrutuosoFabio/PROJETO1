@extends('layouts.principal')
@section('titulo','Opcoes')
@section('conteudo')
<div class="options">
    <ul>
        <li><a class="warning {{request()->routeIs('opcoes.1',)? '' :''}} "   href="{{ route('opcoes',1)}}">warning</a></li>
        <li><a class="info 
            {{request()->routeIs('opcoes.2')? 'selected' :''}}"   href="{{ route('opcoes',2)}}"> info</a></li>
        <li><a class="success  
            {{request()->routeIs('opcoes.3',)? 'selected' :''}}"   href="{{ route('opcoes',3)}}"> sucess</a></li>
        <li><a class="error 
            {{request()->routeIs('opcoes',)? 'selected' :''}}"    href="{{ route('opcoes',4)}}"> error</a></li>
    </ul>
</div>

    @if(isset($opcao))

    @switch($opcao)
          @case(1)

          @alerta(['titulo'=>'Erro fatal','tipo'=>'warning'])
<p> <strong> Warning</strong></p>
<p>Ocorreu um erro Inesperado</p>


@endalerta


          @break

          @case(2)

          @alerta(['titulo'=>'Erro fatal','tipo'=>'info'])
          <p> <strong> info</strong></p>
          <p>Ocorreu um erro Inesperado</p>
          
          @endalerta

          @break

          @case(3)

          
            @alerta(['titulo'=>'Erro fatal','tipo'=>'success'])
           <p> <strong> Sucsess</strong></p>
           <p>Ocorreu um erro Inesperado</p>

@endalerta

          @break
         @case(4)


         @alerta(['titulo'=>'Erro fatal','tipo'=>'error'])
         <p> <strong> Error</strong></p>
         <p>Ocorreu um erro Inesperado</p>

@endalerta


          @break

          @endswitch

          @endif    

          @endsection

   





