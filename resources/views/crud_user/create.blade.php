<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="nav">
            <a href="{{ route('login') }}">Home</a> |
            <a href="{{ route('user.createUser') }}">Register</a>
        </div>
        <div class="register-box">
            <h2>Màn hình đăng ký</h2>
            <form action="{{ route('user.postUser') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                        required autofocus>
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <!-- Age -->
                <div class="input-group">
                    <label for="age">Age</label>
                    <input type="text" placeholder="Age" id="age" class="form-control"
                        name="age" required autofocus>
                    @if ($errors->has('age'))
                    <span class="text-danger">{{ $errors->first('age') }}</span>
                    @endif
                </div>
                <!-- Face -->
                <div class="input-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" placeholder="Facebook" id="facebook" class="form-control"
                        name="facebook" required autofocus>
                    @if ($errors->has('facebook'))
                    <span class="text-danger">{{ $errors->first('facebook') }}</span>
                    @endif
                </div>

                <!-- Avatar -->
                <div class="input-group">
                    <label for="avatar">Add picture</label>
                    <input type="file" id="avatar" class="form-control" name="avatar" accept="image/*">
                    @if ($errors->has('avatar'))
                    <span class="text-danger">{{ $errors->first('avatar') }}</span>
                    @endif
                </div>

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                        name="email" required autofocus>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Password" id="password" class="form-control"
                        name="password" required>
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="register-footer">
                    <a href="{{ route('login') }}">Already have an account</a>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="footer">
            Lập Trình Web By Nguyễn Huỳnh 22/3/2025
        </div>
    </div>
</body>

</html>