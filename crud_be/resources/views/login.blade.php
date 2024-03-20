<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <form action="/loginproses" method="POST">
            @csrf
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Email" required name="email" id="">
                <i class='bx bxl-gmail'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label for=""><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Don't Have Any Account? <a href="register">Register</a></p>
            </div>
        </form>
    </div>
</body>

</html>
