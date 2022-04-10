<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Login - LokasiWow</title>
</head>

<body>

  <h1 class="fw-bolder text-center mt-5">LokasiWow</h1>
  <div class="mx-auto" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%); width: 540px;">
    <form action="{{ route('login.auth') }}" method="post" autocomplete="off">
      @csrf
      <!-- Email input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="username">Username</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Username" readonly onclick="this.removeAttribute('readonly');">
      </div>
      <div class="form-outline mb-4">
        <label class="form-label" for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" readonly onclick="this.removeAttribute('readonly');">
      </div>

      <!-- Submit button -->
      <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>

      <!-- Register buttons -->
      <div class="text-center">
        <p>Not a member? <a href={{ url('register') }}>Register</a></p>
      </div>
    </form>


  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>