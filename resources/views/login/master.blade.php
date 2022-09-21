<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <title>E-Comm</title>
</head>

<body>

    {{View::make('login/header')}}
    @yield('content')
    {{-- {{View::make('login/footer')}} --}}

</body>
<style>
    img.slide_img{
        height: 400px !important;
        width: 100%;
    }
    .custom-product{
        height: 600px;
    }
    .slide_text{
        background-color: rgb(49 130 213  / 25%);
    }
     .trending-img{
        height: 100px;
    }    
    .trending-item{
        float:left;
        width: 20%; 
    }
    .trending-wraper{
       margin: 30px;
       font-size: 12px;
    }
    

</style>
</html>