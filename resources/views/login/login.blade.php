@extends("index")
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    Login
                </div>
                <div class="alert-danger">
                    @if(Session::has('message'))
                    &nbsp <label>{{Session::get('message')}}</label>
                    @endif
                </div>
                <div class="panel-body">
                    <form action="{{URL::to('/login/action')}}" method="post" >
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div>
                            <label>Username</label>
                            <input class="form-control" type="text" name="login_user"
                                    placeholder="username / email">
                        </div>
                        <div>
                            <label>Password</label>
                            <input class="form-control" type="password" name="password"
                                    placeholder="password">
                        </div>
                        <center>
                            <a href="#">Register</a> if you don't have an account
                        </center>
                        <br>
                        <input type="submit" value="Login" class="btn btn-success">
                    </form>
                 </div>
            </div>
        </div>
    </div>
</div>
@stop