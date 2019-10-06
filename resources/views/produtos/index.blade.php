@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="row">
              <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nome Carne</th>
                      <th scope="col">Marca</th>
                      <th scope="col">Classe</th>
                      <th scope="col">Detalhes</th>
                      <th scope="col">Alterar</th>
                      <th scope="col">remover</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($produto as $item)
                        <tr>
                        <th scope="row"> Carne</th>
                        <td>{!!$item->nome!!}</td>
                        <td>{!!$item->marca!!}</td>
                        <td>{!!$item->classe!!}</td>
                        <td><a class="btn btn-primary" href="{!!route('produto.show', ['produto'=> $item->id])!!}">Detalhes</a></td>
                        <td><a class="btn btn-warning" href="{!!route('produto.edit', ['produto'=> $item->id])!!}">Alterar</a></td>
                        <td><a class="btn btn-danger" href="{!!route('produto.destroy', ['produto'=> $item->id])!!}">Apagar</a></td>
                        
                          @endforeach
                  </tbody>
                </table>   
            </div>
        </div>
    </div>
    
@endsection