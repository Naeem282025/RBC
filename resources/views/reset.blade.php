<!-- resources/views/auth/passwords/reset.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
</head>
<body>

<h2>Reset Password</h2>

<form method="POST" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">

    <label>Email:</label><br>
    <input type="email" name="email" required>
    @error('email')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <br><br>

    <label>New Password:</label><br>
    <input type="password" name="password" required>
    @error('password')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <br><br>

    <label>Confirm Password:</label><br>
    <input type="password" name="password_confirmation" required>
    <br><br>

    <button type="submit">Reset Password</button>
</form>

</body>
</html>
