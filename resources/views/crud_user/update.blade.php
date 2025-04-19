<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update user</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="nav">
            <a href="{{ route('login') }}">Home</a> |
            <a href="{{ route('user.createUser') }}">Register</a>
        </div>
        <div class="update-box">
            <h2>Update user</h2>
            <form action="{{ route('user.postUpdateUser') }}" method="POST">
                @csrf
                <input name="id" type="hidden" value="{{$user->id}}">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" placeholder="Name" id="name"
                        class="form-control" name="name"
                        value="{{ $user->name }}"
                        required autofocus>
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name')
                            }}</span>
                    @endif
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="text" placeholder="Email"
                        id="email_address" class="form-control"
                        value="{{ $user->email }}"
                        name="email" required autofocus>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email')
                            }}</span>
                    @endif
                </div>



                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Password" id="password" class="form-control"
                        name="password">
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="update-footer">
                    <button type="submit">Update</button>
                </div>
            </form>
        </div>
        <div class="footer">
            Lập Trình Web By Nguyễn Huỳnh 22/3/2025
        </div>
    </div>

</body>

</html>