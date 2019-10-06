@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-12">
    <h1 class="text-center">Você está vendo os detalhes do nosso produto</h1><br>
        <div class="row">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome Carne</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Classe</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> </th>
                        <td>{!!$produto->nome!!}</td>
                        <td>{!!$produto->marca!!}</td>
                        <td>{!!$produto->classe!!}</td>
                    </tr>
                </tbody>
            </table> 
        </div>
    </div>
</div>
@endsection