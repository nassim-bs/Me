<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/cs.css">
</head>

<body>
<form action="{{ route('login.custom') }}" autocomplete='off' class='form login' method="POST">
  @csrf
    <div class='control'>
      <h1>
        <center> Log </center>
      </h1>
    </div>
    <div class='control block-cube block-input'>
      <input name='name' id='name' placeholder='Username' type='text' required autofocus>
      @if ($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
      @endif
      <div class='bg-top'>
        <div class='bg-inner'></div>
      </div>
      <div class='bg-right'>
        <div class='bg-inner'></div>
      </div>
      <div class='bg'>
        <div class='bg-inner'></div>
      </div>
    </div>
    <div class='control block-cube block-input'>
      <input name='password' id='password' placeholder='Password' type='password' required>
      @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
      @endif
      <div class='bg-top'>
        <div class='bg-inner'></div>
      </div>
      <div class='bg-right'>
        <div class='bg-inner'></div>
      </div>
      <div class='bg'>
        <div class='bg-inner'></div>
      </div>
    </div>
    <button class='btn block-cube block-cube-hover' type='submit'>
      <div class='bg-top'>
        <div class='bg-inner'></div>
      </div>
      <div class='bg-right'>
        <div class='bg-inner'></div>
      </div>
      <div class='bg'>
        <div class='bg-inner'></div>
      </div>
      <div class='text'>
        Log In
      </div>
    </button>
  </form>
</body>

</html>