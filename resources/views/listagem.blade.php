@extends('layout')

@section('content')

    <div id="main" class="container-fluid">
        <!-- inicio /#top -->
        <div id="top" class="row">
            <div class="col-md-3">
                <h2>Itens</h2>
            </div>

            <div class="col-md-6">
                <div class="input-group h2">
                    <input name="data[search]" class="form-control" id="search" type="text"
                           placeholder="Pesquisar placa">
                    <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">
                    <span class="glyphicon glyphicon-search" id="btn-lupa"></span>
                </button>
                    </span>
                </div>
            </div>

            <div class="col-md-3">
                <a href="/entrada" class="btn btn-primary pull-right h2">Nova entrada</a>
            </div>
        </div> <!-- fim /#top -->

        <hr/> <!-- deixa um espaço livre -->

        <div id="list" class="row"> <!-- inicio /#list -->

            <div class="table-responsive col-md-12">
                <table class="table table-striped" cellspacing="0" cellpadding="0">
                    <thead>
                    <tr>
                        <th>Código</th>
                        <th>PLACA</th>
                        <th>ENTRADA</th>
                        <th>CATEGORIA</th>
                        <th class="actions">AÇÕES</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($entradas as $entrada)
                    <tr>
                        <td>{{$entrada->id}}</td>
                        <td>{{$entrada->placa}}</td>
                        <td>{{$entrada->entrada}}</td>
                        <td>{{$entrada->valores_id}}</td>
                            <td class="actions">
                            <a class="btn btn-success btn-xs" href="#">Saída</a>
                            <a class="btn btn-warning btn-xs" href="#">Editar</a>
                            <a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div> <!-- fim /#list -->

        <div id="bottom" class="row">
            <div class="col-md-12">

                <ul class="pagination">
                    <li class="disabled"><a>&lt; Anterior</a></li>
                    <li class="disabled"><a>1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
                </ul><!-- /.pagination -->

            </div>
        </div> <!-- /#bottom -->

    </div>  <!-- /#main -->

@endsection
