<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h3 {
            color: #ff0000;
            text-align: center;
            border-bottom: 2px solid #ff0000;
            padding-bottom: 10px;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: left;
        }

        table {
            width: 100%;
        }

        table tr {
            margin-bottom: 10px;
        }

        table td {
            padding: 8px;
        }

        input {
            width: calc(100% - 16px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #ff0000;
            color: #ffffff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #cc0000;
        }

        .register-link {
            text-align: center;
            margin-top: 10px;
        }

        .register-link a {
            color: #ff0000;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        .register-form {
            margin-top: 10px;
            display: none;
        }

        .show-register-form .register-form {
            display: block;
        }
    </style>
</head>
<body>



<form method="post" action="/register">
    @csrf
    <h3>Register Form</h3>
        
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="name" placeholder="Enter your username"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" placeholder="Enter your email"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" placeholder="Enter your password"></td>
        </tr>
        <div class="register-link">
            <p class="show-register-form">have account? <a href="{{route('login')}}">Login</a></p>
        </div>
        <tr>
            <td colspan="2"><button type="submit" name="submit">Login</button></td>
        </tr>
    </table>

</form>

</body>
</html>