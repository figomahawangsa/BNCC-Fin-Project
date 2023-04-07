<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="formBox">
        <h1>Login</h1>
        <div class="mb-3">
            <label for="Email">Email</label>
            <input name="Email" type="text" class="form-control" id="formGroupExampleInput" placeholder="Insert your Email">
            @error('Email')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="Password">Password</label>
            <input name="Password" type="text" class="form-control" id="formGroupExampleInput" placeholder="Insert Password">
            @error('Password')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <a href="/">Don't have an account yet? Register</a>
        <button type="submit" class="loginBttn">Login</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>