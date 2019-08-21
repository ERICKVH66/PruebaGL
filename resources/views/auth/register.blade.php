@extends('layouts.auth')

@section('htmlheader_title')
    Register
@endsection

@section('content')

    <body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ url('/welcome') }}"><b>Prueba</b></a>
        </div>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="register-box-body">
            
            <form action="{{ url('/register') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="{{ old('nombre') }}"/>
                   
                </div>
                 <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Apellido" name="apellido" value="{{ old('apellido') }}"/>
                   
                </div>

                <div class="form-group has-feedback">
                    <input type="number" class="form-control" placeholder="Numero" name="numero" value="{{ old('numero') }}" min="1" max="100" />
                  
                </div>
                   <div class="form-group has-feedback" >
                   <label> Numero romano  <h3 class="box-title"><font style="text-transform: uppercase;"> </font></h3></label> 
                    <input type="number" class="form-control" placeholder="" name="numero_romano" value="{{ old('numero_romano') }}" />
              <?php
                session_start();
   
                
  
            
                ?>
                </div>

                <div class="row">
                    
                 
                    <div class="col-xs-4 col-xs-push-1" action= "{{ route('usuario.store') }}" method="POST">
                        <button type="submit" class="btn btn-primary">Generar resultado</button>
                    </div><!-- /.col -->
                </div>
                <p>
                </p>
<?php
    
    function convertirNum($num) 
    {
        /*** intval(xxx) para que convierta explicitamente a int ***/
            $n = intval($num);
           $res = '';
   
        /*** Array con los numeros romanos  ***/
   $roman_numerals = array(
      'M'  => 1000,
      'CM' => 900,
      'D'  => 500,
      'CD' => 400,
      'C'  => 100,
      'XC' => 90,
      'L'  => 50,
      'XL' => 40,
      'X'  => 10,
      'IX' => 9,
      'V'  => 5,
      'IV' => 4,
      'I'  => 1);
   
   foreach ($roman_numerals as $roman => $number) 
   {
    /*** Dividir para encontrar resultados en array ***/
    $matches = intval($n / $number);
   
    /*** Asignar el numero romano al resultado ***/
    $res .= str_repeat($roman, $matches);
   
    /*** Descontar el numero romando al total ***/
    $n = $n % $number;
   }
   
   /*** Res = String ***/
   return $res;
  }
?>
              

            </form>

          

            
        </div><!-- /.form-box -->
    </div><!-- /.register-box -->

    @include('layouts.partials.scripts_auth')

    @include('auth.terms')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

@endsection
