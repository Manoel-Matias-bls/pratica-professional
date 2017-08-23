@extends('layout')

@section('content')

<div class="container">
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-body">

                @if(Request::is('*/editar'))

                    <form action="{!! url('entrada/'.$entradas->id) !!}" data-toggle="modal" data-target="#update-modal" method="PATCH">

                        {{--{!!Form::model(['url' => 'entradas/'.$entradas->id, 'method'=> 'PATCH'])!!}--}}

                        <div id="divHoraEntrada" class="form-group">
                            <label for="horarioEnt" class="control-label">Entrada</label>
                            {!! Form::datetime('datetime', $entradas->entrada->format('Y-m-d H:i:s'), ['class'=>'form-control', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            <label for="placa" class="control-label">Placa</label>
                            <input name="placa" class="form-control" placeholder="Placa..." type="text"
                                   value="{!! $entradas->placa !!}" required>
                        </div>

                        <div id="divComboUpdate" class="form-group">
                            <label for="sel">Selecione a categoria:</label>

                            <select id="comboCategorias" class="form-control" name="categoria">
                                @php
                                    switch ($entradas->valores_id) {
                                    case 1:
                                        echo '<option value="1">Motocicletas</option>';
                                        break;
                                    case 2:
                                        echo '<option value="2">Carros de Passeio</option>';
                                        break;
                                    case 3:
                                        echo '<option value="3">SUVs</option>';
                                    }
                                @endphp
                                @foreach($valores as $valor)
                                    <option value="{!! $valor->id !!}">{!! $valor->categoria !!}</option>
                                @endforeach

                            </select>

                        </div>

                @else

                <form action="{!! url('entrada/store') !!}" method="post">

                    {{--{!!Form::open(['url' => 'entrada/store'])!!}--}}

                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="horarioEnt" class="control-label">Entrada</label>
                        {!! Form::datetime('datetime', \Carbon\Carbon::now('America/Sao_Paulo')->format('Y-m-d H:i:s'), ['class'=>'form-control', 'autofocus']) !!}
                    </div>

                    <div class="form-group">
                        <label for="placa" class="control-label">Placa</label>
                        <input name="placa" class="form-control" placeholder="Placa..." type="text"
                               required>
                    </div>

                    <div id="divComboStore" class="form-group">
                        <label for="sel">Selecione a categoria:</label>
                        <select id="comboCategorias" class="form-control" name="categoria">
                            @foreach($valores as $valor)
                                <option value="{{$valor->id}}">{{$valor->categoria}}</option>
                            @endforeach
                        </select>
                    </div>


                    @endif

                    <button type="submit" class="btn btn-primary">Salvar</button>

                </form>
                        <!--{{--{!! Form::close() !!}--}}-->
            </div>

        </div>
    </div>
</div>
</div>


@endsection
