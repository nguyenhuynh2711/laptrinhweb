<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách người dùng</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="nav">
            <a href="{{ route('login') }}">Home</a> |
            <a href="{{ route('login') }}">Log out</a>
        </div>
        <div class="list-box">
            <h2>List user</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <th>{{ $user->id }}</th>
                        <th>{{ $user->name }}</th>
                        <th>{{ $user->email }}</th>
                        <th>{{ $user->phone }}</th>
                        <th>{{ $user->address }}</th>
                        <th>
                            <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                            <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> |
                            <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="footer">
            Lập Trình Web By Nguyễn Huỳnh 22/3/2025
        </div>
    </div>
</body>

</html>