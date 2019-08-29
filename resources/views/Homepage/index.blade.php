<style>
.teste:hover{   
    background-color: yellow;
}
.teste{
    font-size: 50px;
}
</style>


@extends('layouts.head')
<!-- importante ferramenta para monitorar o desenvolvimento https://laravel.com/docs/5.8/telescope-->
@section('content')
<div class="container">
    <div class="teste" name="teste" id="name">Conteudo AQUI HOME</div>
</div>
@endsection