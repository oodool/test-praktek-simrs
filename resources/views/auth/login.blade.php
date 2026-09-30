<!DOCTYPE html>
<html lang="en">
<head>
    <title>Database Transaksi</title>
</head>
<body>
    <h1>Login</h1>
    {{-- Error message block --}}
    @if ($errors->any())
        <div class="alert alert-danger text-center">
            {{ $errors->first() }}
        </div>
    @endif

    <div>
        <form action="{{ route('login.post') }}" method="POST" class="user">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control form-control-user"
                    id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Username" name="username"  value="{{ old('username') }}" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-user"
                    id="exampleInputPassword" placeholder="Password" name="password" value="{{ old('password') }}" required>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                Login
            </button>
        </form>
    </div>
</body>

</html>