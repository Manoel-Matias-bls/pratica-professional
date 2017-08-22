@extends('layout')

@section('content')

     <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <form method="post" action="/entrada/store">

                            <div class="form-group">
                                <label for="horarioEnt" class="control-label">Entrada</label>
                                {!! Form::datetime('datetime', \Carbon\Carbon::now('America/Sao_Paulo')->format('Y-m-d H:i:s'), ['class'=>'form-control', 'autofocus' ]) !!}
                            </div>

                           <div class="form-group">
                               <label for="placa" class="control-label">Placa</label>
                               <input id="placa" class="form-control" placeholder="Placa..." type="text" required>

                           </div>
                           <!--
                           <div class="form-group">
                               <label for="sel1">Selecione a categoria:</label>
                               <select class="form-control" id="sel1">
                                   <option>Motocicletas</option>
                                   <option>Carros de Passeio</option>
                                   <option>SUV's</option>
                               </select>
                           </div> -->

                           <button type="submit" class="btn btn-primary">Salvar</button>

                       </form>

                   </div>

               </div>
           </div>
       </div>
   </div>


@endsection
