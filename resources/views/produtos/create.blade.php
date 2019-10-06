@extends('layouts.app')

@section('content')
    

        <div class="container">
            <div class="col-md-12">
                <form action="{{route('produto.store')}}" class="form-horizontal" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group">
                            <label> Nome da Carne</label>
                            <input type="text" class="form-control" name="nome"/>
                            </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label> Marca</label>
                            <input type="text" class="form-control" name="marca"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label> classe</label>
                            <input type="text" class="form-control" name="classe"/>
                        </div>
                    </div>
                    <div class="row"><button type="submit" class="btn btn-default">Cadastrar</button></div>
                
                </form>
            </div>
        </div>

@endsection