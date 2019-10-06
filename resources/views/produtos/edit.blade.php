@extends('layouts.app')

@section('content')
    

        <div class="container">
            <div class="col-md-12">
                <form action="{{route('produto.update',[$produto -> id])}}" class="form-horizontal" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="form-group">
                            <label> Nome da Carne</label>
                            <input type="text" class="form-control" name="nome" value="{!! $produto -> nome !!}"/>
                            </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label> Marca</label>
                            <input type="text" class="form-control" name="marca" value="{!! $produto -> marca !!}"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label> classe</label>
                            <input type="text" class="form-control" name="classe" value="{!! $produto -> classe!!}"/>
                        </div>
                    </div>
                    <div class="row"><button type="submit" class="btn btn-default">Atualizar</button></div>
                
                </form>
            </div>
        </div>

@endsection