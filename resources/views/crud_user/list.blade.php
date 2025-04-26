<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách người dùng</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Thêm đường link sử dụng bootstrap để chạy pagination -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
                        <th>Orders</th>
                        <th>Roles</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <th>{{ $user->id }}</th>
                        <th>{{ $user->name }}</th>
                        <th>{{ $user->email }}</th>
                        <th style="background-color: yellow;">
                            @if($user->orders->count() > 0)
                            <a href="{{ route('user.orders', $user->id) }}">
                                {{ $user->orders->count() }} orders
                            </a>
                            @else
                            No orders
                            @endif
                        </th>
                        <th>
                            @foreach($user->roles as $role)
                            <a href="{{ route('user.role', ['id' => $role->id]) }}">
                                {{ $role->name . '-' }}
                            </a>
                            @endforeach
                        </th>
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
        <div class="pagination-container">
            {!! $users->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>

        <div class="footer">
            Lập Trình Web By Nguyễn Huỳnh 22/3/2025
        </div>
    </div>
</body>

</html>