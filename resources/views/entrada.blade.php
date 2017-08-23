@extends('layout')

@section('content')

     <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">

                            <form method="post" action="{{url('entrada/store')}}">
                                {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="horarioEnt" class="control-label">Entrada</label>
                                {!! Form::datetime('datetime', \Carbon\Carbon::now('America/Sao_Paulo')->format('Y-m-d H:i:s'), ['class'=>'form-control', 'autofocus']) !!} <!--, 'disabled selected'-->
                            </div>

                           <div class="form-group">
                               <label for="placa" class="control-label">Placa</label>
                               <input name="placa" class="form-control" placeholder="Placa..." type="text" required>

                           </div>

                           <div class="form-group">
                               <label for="sel">Selecione a categoria:</label>
                               <select id="sel1" class="form-control" name="categoria">
                                   @foreach($valores as $valor)
                                   <option value="{{$valor->id}}">{{$valor->categoria}}</option>
                                   @endforeach
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
