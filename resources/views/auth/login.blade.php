<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}}</title>
    <!-- Styles -->
    <link href="{{ asset('bootstrap-3.3.7/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-3.3.7/css/bootstrap-theme.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
    <div class="row-fluid" style="margin-top: 5px">
        <div class="col-md-6 col-md-offset-3" style="padding-top: 100px;padding-bottom: 5px ">
            <div class="row" >
                <div class="col-sm-5 hidden-xs" style="text-align: center ; background-color: #ffb91d; padding-top: 35px;padding-bottom: 34px; border: double gray">
                    <img src="{{asset("images/logo.png")}}" width="200" height="100"/>
                   <h4 style="color: #1916d2"><b>Point-Of-Sale System </b></h4>
                    <i class="fa fa-cutlery" style="font-size:60px;color:#1048ff;"></i>
                </div>

                <div class="col-sm-7" style="background: #83d26d; padding-top: 50px ;padding-bottom: 19px;border: double gray">
                    {!! Form::open(['url'=>'/login']) !!}
                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        {!! Form::label("username","Username") !!}
                        {!! Form::text("username",null,["class"=>"form-control","placeholder"=>"Enter your username"]) !!}

                        {!! $errors->first('username','<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        {!! Form::label("password","Password") !!}
                        {!! Form::password("password",["class"=>"form-control","placeholder"=>"Enter your password"]) !!}
                        {!! $errors->first('password','<span class="help-block">:message</span>') !!}
                    </div>
                    <input type="hidden" name="active" value="1"/>
                    <div class="form-group">
                        {!! Form::button("<i class='fa fa-sign-in' style='font-size:20px;color:red'></i> Login",["type" => "submit","class"=>"btn
   btn-info","id"=>"btn_save"])!!}
                    </div>
                    {!! Form::close() !!}

                </div>

            </div>
        </div>
    </div>

</div>

<div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        <p class="navbar-text pull-left" style="padding-left: 450px">Developed By
            <a href="mailto:noknuan@hotmail.com"> Nok Phannaphop </a>
        </p>
            <a href="https://github.com/noknuan/pooleatery" class="navbar-btn btn-danger btn pull-right">
                <span class="glyphicon glyphicon-star"></span>  GitHub Code</a>

    </div>
</div>
<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('bootstrap-3.3.7/js/bootstrap.min.js') }}"></script>
</body>
</html>