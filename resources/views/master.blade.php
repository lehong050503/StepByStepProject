<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Step By Step Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
      img.slider-img{
        height: 400px !important;
      }
      .slider-text{
        background: #2f897a78;
      }
      .trending-img{
        height: 300px;
        width: 300px;
      }
      .trending-item{
        float: left;
        width: 20%;
      }
      .detail-img{
        height: 200px;
      }
      .button{
        display: flex;
        align-items: center;
      }
      .dess{
        display: flex;
        align-items: center;
      }
      .item{
        border-bottom: 1px solid #cccccc;
        margin-bottom: 30px;
      }
    </style>
  </head>
  <body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

