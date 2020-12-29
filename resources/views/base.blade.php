<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Work</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <a href="" class="navbar-brand">Class Room</a>

        <form action="" class="form-inline mx-auto">
           <input type="text" name="search" class="form-control" size="80">
           <input type="submit" name="find" class="btn btn-dark">
        </form>
    </nav>
   
   @yield('content')

</body>
</head>    