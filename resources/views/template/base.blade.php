<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <!-- Font -->

    <!-- AoS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <!-- AoS -->



    <title>dev app monitoring</title>

    <style>
      *{
  font-family: 'Lato', sans-serif;
        
      }
      a {
          text-decoration: none;
          color: #fff;
      }

      a:hover{
          color: #121212;
      }

.box {
    margin: 200px auto;
    width: 600px;
    padding: 10px;
    border:1px solid #ccc;
    border-radius: 10px;
}

.navbar-nav .nav-item a{
  font-family: 'Lato', sans-serif;
  color: #FFFDDE;
  }

  .navbar-nav .nav-item a:hover{
    font-family: 'Lato', sans-serif;
    text-decoration: underline;
    color: #fff;
    font-size: 20px;
  }

  .navbar-nav  .nav-item a:active{
    font-family: 'Lato', sans-serif;
    text-decoration: none;

  }

  #latar{
    font-family: 'Lato', sans-serif;


  }

  footer a{
    text-decoration: none;
    color: #fff;
  }
</style>
 
 
  </head>
  <body>
@yield('navbar')
@yield('content')
@yield('footer')
  </body>

<!-- Bootstrap core JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<!-- Bootstrap core JavaScript -->

<!-- aos -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
</script>
<!-- aos -->

</html>