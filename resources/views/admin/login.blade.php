
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | VELORA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #171923;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
        }

        .login-card {
            background: white;
            width: 100%;
            max-width: 420px;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,.2);
        }

        .brand {
            font-size: 30px;
            font-weight: bold;
            letter-spacing: 4px;
            text-align: center;
        }

        .brand-subtitle {
            color: #888;
            font-size: 12px;
            text-align: center;
            letter-spacing: 2px;
            margin-bottom: 30px;
        }

        .btn-login {
            background: #171923;
            color: white;
            padding: 12px;
            border: none;
        }

        .btn-login:hover {
            background: #30364a;
            color: white;
        }
    </style>
</head>

<body>

<div class="login-card">

    <div class="brand">VELORA</div>
    <div class="brand-subtitle">ADMIN PANEL</div>

    <h5 class="text-center fw-bold mb-4">Admin Login</h5>

    @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control"
                   value="{{ old('email') }}" required>
        </div>

        <div class="mb-4">
            <label class="form-label">Password</label>
            <input type="password" name="password"
                   class="form-control" required>
        </div>

        <button type="submit" class="btn btn-login w-100">
            Login to Dashboard
        </button>
    </form>

</div>

</body>
</html>
