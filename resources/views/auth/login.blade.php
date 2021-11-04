<html>
<head>
    <title>Sign-up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
            <h4>Login</h4>
            <hr>
            <form action="{{route('login-user')}}" method="post">
            @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}
                @endif
                @csrf
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your Email" value="{{old('email')}}">
                <span class="text-danger">@error('email') {{$message}} @enderror</span> 
                </div>
                <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password">
                <span class="text-danger">@error('password') {{$message}} @enderror</span> 
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary">Log in</button>
                </div>
                <br>
                <a href="registration">New User ? Register Here.</a>
            </form>
</div>
</div>
</body>
</html>