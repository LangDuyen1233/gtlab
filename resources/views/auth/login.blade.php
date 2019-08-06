@extends('layouts.app')
@section('content')
    <style>
        #forget {
            color: black;
            font-size: 10pt;
        }

        #forget:hover {
            text-decoration: underline;
        }
    </style>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form action="{{route('login')}}" method="post" role="form">
                        <legend>Login</legend>
                        @if($errors->has('errorlogin'))
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                                </button>
                                {{$errors->first('errorlogin')}}
                            </div>
                        @endif
                        @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Email" name="email"
                                   value="{{old('email')}}">
                            @if($errors->has('email'))
                                <p style="color:red">{{$errors->first('email')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password"
                                   name="password">
                            @if($errors->has('password'))
                                <p style="color:red">{{$errors->first('password')}}</p>
                            @endif
                        </div>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <input type="checkbox" id="remember" name="remember"> Remember me
                        </div>
                        <button type="submit" class="btn btn-primary">Log In</button>
                        <i class="fas fa-lock"></i>
                            <a id="forget" href="{{route('reset-pass')}}">Forgot Password</a>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection