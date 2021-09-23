@php
use App\Http\Controllers\MarcaController; 
@endphp
<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('producto') }}
            {{ Form::text('producto', $producto->producto, ['class' => 'form-control' . ($errors->has('producto') ? ' is-invalid' : ''), 'placeholder' => 'Producto']) }}
            {!! $errors->first('producto', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
        {{ Form::label('idMarca') }}
            <div class="form-group col-md-6">
            <select id="idMarca" required="" name="idMarca" class="form-control">
                <option value="">--Select--</option>
                {{$lista = MarcaController::dropBox()}}
                @foreach ($lista as $nombre)
                <option value="{{$nombre->id}}">{{$nombre->marca}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $producto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_costo') }}
            {{ Form::text('precio_costo', $producto->precio_costo, ['class' => 'form-control' . ($errors->has('precio_costo') ? ' is-invalid' : ''), 'placeholder' => 'Precio Costo']) }}
            {!! $errors->first('precio_costo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_venta') }}
            {{ Form::text('precio_venta', $producto->precio_venta, ['class' => 'form-control' . ($errors->has('precio_venta') ? ' is-invalid' : ''), 'placeholder' => 'Precio Venta']) }}
            {!! $errors->first('precio_venta', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('existencia') }}
            {{ Form::text('existencia', $producto->existencia, ['class' => 'form-control' . ($errors->has('existencia') ? ' is-invalid' : ''), 'placeholder' => 'Existencia']) }}
            {!! $errors->first('existencia', '<div class="invalid-feedback">:message</p>') !!}
        </div>
      
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>