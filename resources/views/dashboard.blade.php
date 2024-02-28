<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <div class="">
        <form action="{{ url('logout') }}" method="POST" class="form-inline" style="width: 50%; background-color:red;">
            @csrf
            <button class=" text-danger " type="submit" style="background-color: red" >
              <i class="ml-n3 nav-icon fas fa-sign-out-alt fa-lg text-danger"></i><p>Logout</p>
            </button>
          </form> 
    </div>
</body>
</html>