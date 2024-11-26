<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .signup-container {
            background: #ffffff;
            width: 350px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }

        .tabs {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .tabs div {
            padding: 8px 20px;
            cursor: pointer;
            font-weight: bold;
        }

        .tabs .active {
            background-color: #f2ebff;
            border-radius: 20px;
            color: #6a0dad;
        }

        .title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .social-buttons {
            margin-bottom: 20px;
        }

        .social-buttons button {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            font-size: 14px;
            font-weight: bold;
            border: 1px solid #ddd;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .social-buttons button img {
            margin-right: 8px;
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background: #ddd;
        }

        .divider span {
            margin: 0 10px;
            color: #888;
            font-size: 14px;
        }

        .form-group {
            text-align: left;
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .mobile-input {
            display: flex;
            align-items: center;
        }

        .mobile-input select {
            border: 1px solid #ddd;
            padding: 8px;
            margin-right: 10px;
            border-radius: 5px;
        }

        .continue-button {
            background-color: #6a0dad;
            color: white;
            font-size: 16px;
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .continue-button:hover {
            background-color: #5c0fa1;
        }

        .login-link {
            font-size: 14px;
            margin-top: 10px;
        }

        .login-link a {
            color: #6a0dad;
            text-decoration: none;
            font-weight: bold;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .terms {
            font-size: 12px;
            color: #888;
            margin-top: 10px;
        }

        .terms a {
            color: #6a0dad;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="signup-container">
    <div class="tabs">
        <div class="active">Job Seeker</div>
        <div>Company</div>
    </div>
    <div class="title">Get more opportunities</div>
    <div class="social-buttons">
        <button><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" alt="Google" width="20"> Sign Up with Google</button>
        <button><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook" width="20"> Sign Up with Facebook</button>
        <button><img src="https://upload.wikimedia.org/wikipedia/commons/e/e9/Linkedin_icon.svg" alt="LinkedIn" width="20"> Sign Up with LinkedIn</button>
        <button><img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Octicons-mark-github.svg" alt="GitHub" width="20"> Sign Up with GitHub</button>
    </div>
    <div class="divider">
        <span>Or sign up with email</span>
    </div>
    <form action="{{ route('signup.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" placeholder="Enter your first name" value="{{ old('first_name') }}">
            @error('first_name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" placeholder="Enter your last name" value="{{ old('last_name') }}">
            @error('last_name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}">
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone" placeholder="Enter your phone number" value="{{ old('phone') }}">
            @error('phone')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
            @error('password')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Sign Up</button>
    </form>


    <div class="login-link">
        Already have an account? <a href="/login">Login</a>
    </div>
    <div class="terms">
        By clicking 'Continue', you acknowledge that you have read and accept the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.
    </div>
</div>
</body>
</html>
