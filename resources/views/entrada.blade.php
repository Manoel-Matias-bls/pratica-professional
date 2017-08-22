@extends('layout')

@section('content')

     <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <form method="post" action="{{url('/entrada/store')}}">
                            {!! csrf_field() !!}
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

                   </div>

               </div>
           </div>
       </div>
   </div>


@endsection
