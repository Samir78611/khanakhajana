<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
</head>

<body>
    @if(Session::has('success'))
        <h3 style="color:green">{{ Session::get('success') }}</h3>
    @endif
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #99ccff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        .login-header {
            margin-bottom: 20px;
        }

        .login-header img {
            position: relative;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            border-radius:100px;

        }
        

        .logo {
            width: 80px;
            margin-bottom: 10px;
        }

        h2 {
            margin: 0;
            color: #343a40;
            font-size: 24px;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #495057;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 16px;
            color: #495057;
        }

        .input-group input:focus {
            border-color: #80bdff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn {
            width: 48%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .reset-btn {
            background-color: #6c757d;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .reset-btn:hover {
            background-color: #5a6268;
        }

        .forgot-password {
            margin-top: 15px;
        }

        .forgot-password a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .forgot-password a:hover {
            color: #0056b3;
        }

        .signup-link {
            margin-top: 20px;
        }

        .signup-link p {
            margin: 0;
            color: #495057;
        }

        .signup-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .signup-link a:hover {
            color: #0056b3;
        }

    </style>

    <body>
        <div class="login-container">
            <div class="login-header">
                <img src="{{ url('login_page.jpg') }}" alt="Food Service App Logo" class="logo">
                <h2>Login to Your Account</h2>
            </div>
            <form action="{{url('login_user')}}" method="POST">
                @csrf
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="button-group">
                    <button type="submit" class="btn">Login</button>
                    <button type="reset" class="btn reset-btn">Reset</button>
                </div>
                <div class="forgot-password">
                    <a href="#">Forgot Password?</a>
                </div>
            </form>
            <div class="signup-link">
                <p>Don't have an account? <a href="signup">Sign up</a></p>
            </div>
        </div>
    </body>

</html>

</body>

</html>
