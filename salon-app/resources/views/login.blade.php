<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

<div class="card p-4 shadow" style="width: 350px;">
    <h3 class="text-center">Login</h3>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form method="POST" action="/login">
        @csrf
        
        <input type="text" name="username" class="form-control mb-2" placeholder="Username" value="{{ old('username') }}">
        <input type="password" name="password" class="form-control mb-2" placeholder="Password">

        <div class="form-check mb-2">
            <input type="checkbox" name="remember" class="form-check-input">
            <label class="form-check-label">Remember Me</label>
        </div>

        <button class="btn btn-primary w-100">Login</button>
    </form>
</div>

</body>
</html>