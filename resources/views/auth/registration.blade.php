<html>
<head>
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
            <h4>Registration</h4>
            <hr>
            <form action="{{route('register-user')}}" method="post">
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}
                @endif
                @csrf
                <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your Name" value="{{old('name')}}">
                <span class="text-danger">@error('name') {{$message}} @enderror</span>    
                </div>
                <div class="form-group">
                <label for="surname">Surame</label>
                <input type="text" class="form-control" name="surname" placeholder="Enter your Surname" value="{{old('surname')}}">
                <span class="text-danger">@error('surname') {{$message}} @enderror</span>    
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your Email" value="{{old('email')}}">
                <span class="text-danger">@error('email') {{$message}} @enderror</span> 
                </div>
                <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password" value="">
                <span class="text-danger">@error('password') {{$message}} @enderror</span> 
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary">Register</button>
                </div>
                <br>
                <a href="login">Already Registered ? Login Here.</a>
            </form>
</div>
</div>
</body>
</html>