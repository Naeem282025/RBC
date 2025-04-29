<!-- resources/views/auth/passwords/email.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
</head>
<body>

<h2>Forgot your password?</h2>

@if (session('status'))
    <div style="color: green;">{{ session('status') }}</div>
@endif

<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <label>Email:</label><br>
    <input type="email" name="email" required>
    @error('email')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <br><br>

    <button type="submit">Send Password Reset Link</button>
</form>

</body>
</html>
