@extends ('layouts.app')
@section('content')
    <!DOCTYPE html>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Love Of Pets</title>
    </head>
    <style>
           h1{
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    font-size: 40px;
    text-align: center;
    text-shadow: 7px 4px 5px rgb(223, 129, 226)

    }
    .btn-left{
      text-align: right;
      margin:0px;
    }
        
.cabesera{
background-color: rgb(173, 124, 197);
}
   
    </style>

    <body>
        <h1>Adoptantes</h1>
        <div class="container">
            <a href="{{ route('adoptantes.create') }}" class="btn btn-primary">Crear adoptante</a>
            <hr>
            <table class="table table-striped table-bordered table-hover" >
                <thead class="cabesera">
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Sexo</th>
                    <th>Correo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>

                </thead>

                <tbody>
                    @foreach ($adoptantes as $adoptantes)
                        <tr>
                            <td>{{ $adoptantes->id }}</td>
                            <td>{{ $adoptantes->nombre }}</td>
                            <td>{{ $adoptantes->apellidos }}</td>
                            <td>{{ $adoptantes->direccion }}</td>
                            <td>{{ $adoptantes->telefono }}</td>
                            <td>{{ $adoptantes->sexo }}</td>
                            <td>{{ $adoptantes->correo }}</td>
                            <td><a href="{{ route('adoptantes.edit', $adoptantes->id) }}" class="btn btn-success">Editar</a>
                            </td>
                            <td>
                                <form action="{{ route('adoptantes.destroy', $adoptantes->id) }}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que quiere eliminar?')" >Eliminar</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        <div class= "btn-left">
            <a href="{{ route('home') }}" class="btn btn-primary">Regresar</a>
           {{--  {{ $adoptantes->links() }} --}}
        </div>
        </div>
        <div class="card-footer">  
      </div>
    </body>
    </html>
@endsection
