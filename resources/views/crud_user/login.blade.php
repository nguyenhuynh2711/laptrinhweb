<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="nav">
            <a href="{{ route('login') }}">Home</a> |
            <a href="{{ route('user.createUser') }}">Register</a>

        </div>
        <div class="login-box">
            <h2>Màn hình đăng nhập</h2>
            <form method="POST" action="{{ route('user.authUser') }}">
                @csrf

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="remember-forgot">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                    <a href="#">Quên mật khẩu</a>
                </div>
                <button type="submit">Signin</button>
            </form>
        </div>
        <div class="footer">
            Lập Trình Web By Nguyễn Huỳnh 22/3/2025
        </div>
    </div>
</body>

</html>