
@extends('device.index')

@section('tab')

<html>
  <head>
    <title>Oneclick Diagnostics Button Below</title>
  </head>

  <body>

    <?php
      if (isset($_POST['myButton'])) {
        echo "Button Clicked!";
      }
    ?>

  <form method = "post" action = "{{ route('executePythonScript') }}">
    @csrf
    <button type = "submit" name = "myButton"> Click for Diagnostics </buttont>
  </form>

  </body>
</html>
@endsection
