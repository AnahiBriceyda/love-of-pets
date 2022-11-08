@extends ('layouts.app')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Document</title>
    <style>
  
    h1{
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    font-size: 20px;
    text-align: center;
  
    }
    ul.tabs{
        width: 100%;
        background: #363636;
        list-style: none;
        display: flex;
    }
    
    ul.tabs li{
        width: 50%;
    }
    
    ul.tabs li a{
        color: #fff;
        text-decoration: none;
        font-size: 16px;
        text-align: center;
        display: block;
        padding: 20px 0px;
    }

  
    
    @media screen and (max-width: 700px){
        ul.tabs li{
            width: none;
            flex-basis: 0;
            flex-grow: 1;
        }
    }
    
    @media screen and (max-width: 450px){
        ul.tabs li a{
            padding: 15px 0px;
        }
    
        ul.tabs li a .tab-text{
            display: none;
        }
    
        .secciones article{
            padding: 20px;
        }
    }
    
    form{
        width: 800px;;
        padding:6px;
        border-radius:10px;
        margin:auto;
        background-color: #dde6e1;
       
     }
  
      .opcion-radio input[type=radio] {
        position: absolute;
        opacity: 0;
    }
    
    .opcion-radio input[type=radio] + label:before {
        content: '';
        background: #F4F5F8;
        border-radius: 100%;
        border: 1px solid #a6aec6;
        display: inline-block;
        width: 1.0em;
        height: 1.0em;
        position: relative;
        top: -.2em;
        margin-right: .5em;
        vertical-align: top;
        cursor: pointer;
        text-align: center;
        -webkit-transition: all 250ms ease;
        transition: all 250ms ease;
        display: inline-block;
        vertical-align: middle;
    }
    
  
    
    .opcion-radio label {
        display: inline-block;
        vertical-align: middle;
        line-height: 20px;
    }
    
        </style>
</head>
<body>
    <div class="container">
    <form class="col-md-8 container"  action="{{route('adoptantes.store')}}" method="POST">
     <h1>Crear adoptante</h1>
      <hr>
      @csrf
        <div class="row">
          <div class="col">
            <label class="line-height:22px"  for="validationDefault01">Nombre</label>
            <input type="text" class="form-control" name="nombre" placeholder="" required>
          </div>
          <div class="col">
            <label for="validationDefault02">Apellido</label>
            <input type="text" class="form-control" name="apellidos" placeholder="" required>
          </div>
        </div>

        <div class="form-group">
            <label for="validationDefault03">Direccion</label>
            <input type="text" class="form-control"name="direccion" 
              required>
          </div>

          <div class="row">
            <div class="col">
              <label for="validationDefault04">Telefono</label>
              <input type="text" class="form-control"name="telefono"  required>
            </div>
            <div class="col">
                <label for="inputState">Sexo</label>
                <select id="inputState" class="form-control" name="sexo" >
                  <option selected>Elegir...</option>
                  <option>Femenino</option>
                  <option>Masculino</option>
                  <option>indefinido</option>
                </select>
            </div>
          </div>
<div class="col-md-8 my-1">
          <label class="sr-only" for="validationDefault05">Correo</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">@</div>
            </div>
            <input  name ="correo" type="text" class="form-control" placeholder="correo" required>
          </div>
        </div>
<hr>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ route('adoptantes.index') }}" class="btn btn-primary" style="margin-left:650px">Regresar</a>
      </form>

    </div>
</body>

</html>
@endsection