<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <form method="post" style="width: 600px;margin: left 500px;">
        @csrf 
        <!-- <h1>Simple Form</h1>
        <div class="form-group">
            <label>Enter a number greater than 10</label>
            <input class="form-control" placeholder="0" name="num">
        </div>
        <button type="submit" class="btn btn-primary">Calculate</button>
        <h1><?php if (isset($result)) echo $result?></h1> -->
        <div class="form-group">
            <label for="">Enter your name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="">Enter your age</label>
            <input type="text" class="form-control" name="age">
        </div>
        <div class="form-group">
            <label for="">Enter your birthday</label>
            <input type="text" class="form-control" name="date">
        </div>
        <div class="form-group">
            <label for="">Enter your phone </label>
            <input type="text" class="form-control" name="phone">
        </div>
        <div class="form-group">
            <label for="">Enter your website</label>
            <input type="url" class="form-control" name="web">
        </div>
        <div class="form-group">
            <label for="">Enter your address</label>
            <input type="text" class="form-control" name="address">
        </div>
        <div>
            @include('Block.error')
        </div>
        <button type= "submit" class="btn btn-primary" stype="left: 200px"> Submit</button>
        <div class="display-info">
            @if(isset($user))
            
                <p>Name: {{$user['name']}}</p>
                <p>Age: {{$user['age']}}</p>
                <p>Date: {{$user['date']}}</p>
                <p>Phone: {{$user['phone']}}</p>
                <p>Website: {{$user['web']}}</p>
                <p>Address: {{$user['address']}}</p>
            @endif
        </div>
    </form>
</body>
</html>