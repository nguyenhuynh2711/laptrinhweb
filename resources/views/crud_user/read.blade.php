<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết người dùng</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="nav">
            <a href="{{ route('login') }}">Home</a> |
            <a href="{{ route('user.createUser') }}">Register</a>
        </div>
        <div class="view-box">
            <h2>Information User</h2>
            <div class="detail">
                <p><strong>ID:</strong> <span>{{$messi->id}}</span></p>
                <p><strong>Name:</strong> <span>{{$messi->name}}</span></p>
                <p><strong>Email:</strong> <span>{{$messi->email}}</span></p>
                <p><strong>Phone:</strong> <span>{{$messi->phone}}</span></p>
                <p><strong>Address:</strong> <span>{{$messi->address}}</span></p>
            </div>

            <a href="{{ route('user.updateUser', ['id' => $messi->id]) }}">Edit</a>

        </div>
        <div class="footer">
            Lập Trình Web By Nguyễn Huỳnh 22/3/2025
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>