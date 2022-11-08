@extends('layouts.app')

@section('content')


<style>
.img-back{
    background-image: url("imagenes/adopta.png");
    height: 100%;
    max-width: 100%;
    background-repeat: no-repeat;
    text-align: left; 
    }

.btn{
    border: 0px;
    margin-top: 150px;
    padding: 10px;
    margin-left: 70px;
    font-size: 20px;
    background-color:rgb(241, 118, 74)!important;
    
    
}

.texto{
   font-family:Verdana, Geneva, Tahoma, sans-serif;
    font-size: 40px;
    text-align: center;
}
        
.card{
    height: 545px;
    

}

.card-body{
    background: -webkit-linear-gradient(80deg, rgb(224, 109, 180) 10%, rgb(223, 172, 233) 70%);
}


</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Love Of Pets') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="texto">
                    {{ __('Bienvenido') }}
                </div>

                    <div class="img-back" >
                        <br>
                        <br>
                        <br>
                        <br>
                        <form action="{{ route('adoptantes.index') }}">
                           
                        <button  type="submit" class="btn ">Administrar adoptantes</button>
                    </form>
                   <br>
                   <br>
                   <br>
                   <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
