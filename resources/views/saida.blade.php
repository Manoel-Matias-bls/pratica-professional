@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">

                        {!!Form::model($entradas, ['method' => 'PATCH', 'url' => 'saida/'.$entradas->id])!!}
                        {{--{!! csrf_field() !!}--}}
                        <div id="divHoraEntrada" class="form-group">
                            <label for="horarioEnt" class="control-label">Entrada</label>
                            {!! Form::datetime('datetime', $entradas->entrada->format('Y-m-d H:i:s'), ['class'=>'form-control', 'autofocus']) !!}
                        </div>

                        <div id="divHoraSaida" class="form-group">
                            <label for="horarioEnt" class="control-label">Saída</label>
                            {!! Form::datetime('datetimeSaida', \Carbon\Carbon::now('America/Sao_Paulo')->format('Y-m-d H:i:s'), ['class'=>'form-control', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            <label for="placa" class="control-label">Placa</label>
                            <input name="placa" class="form-control" placeholder="Placa..." type="text" value="{!! $entradas->placa !!}">
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
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="valorTotal" class="control-label">Valor Total a pagar</label>
                            <input name="valorTotal" class="form-control" placeholder="Valor Total..." type="text"
                                   value="" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Fechamento</button>
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
