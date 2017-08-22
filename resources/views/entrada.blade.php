@extends('layout')

@section('content')

     <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                    {!! csrf_field() !!} <!-- Para geração de token -->

                        @if(Request::is('*/editar'))
                            <form method="PATCH" action="{{url('entrada/'.$entradas->id)}}">
                                <div class="form-group">
                                    <label for="horarioEnt" class="control-label">Entrada</label>
                                    <label for="horaEntrada" class="form-control">{{$entradas->entrada}}</label>
                                </div>

                                <div class="form-group">
                                    <label for="placa" class="control-label">Placa</label>
                                    <input name="placa" class="form-control" placeholder="Placa..." type="text" value="{{$entradas->placa}}" required>

                                </div>

                                <div class="form-group">    <!-- O resto funciona perfeitamente, problemas apenas aqui na combo -->
                                    <label for="sel">Categoria:</label>
                                    <select id="sel1" class="form-control" name="categoria">
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
                                        <option value="1">Motocicletas</option>
                                        <option value="2">Carros de Passeio</option>
                                        <option value="3">SUV's</option>

                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Salvar</button>

                            </form>

                            @else

                            <form method="post" action="{{url('entrada/store')}}">

                            <div class="form-group">
                                <label for="horarioEnt" class="control-label">Entrada</label>
                                {!! Form::datetime('datetime', \Carbon\Carbon::now('America/Sao_Paulo')->format('Y-m-d H:i:s'), ['class'=>'form-control', 'autofocus']) !!}
                            </div>

                           <div class="form-group">
                               <label for="placa" class="control-label">Placa</label>
                               <input name="placa" class="form-control" placeholder="Placa..." type="text" required>

                           </div>

                           <div class="form-group">
                               <label for="sel">Selecione a categoria:</label>
                               <select id="sel1" class="form-control" name="categoria">
                                   <option value="1">Motocicletas</option>
                                   <option value="2">Carros de Passeio</option>
                                   <option value="3">SUV's</option>
                               </select>
                           </div>

                           <button type="submit" class="btn btn-primary">Salvar</button>

                            </form>
                       @endif
                   </div>

               </div>
           </div>
       </div>
   </div>


@endsection
