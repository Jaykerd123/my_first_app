<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #0f0f1a, #1b1b2f);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }

        .register-container {
            display: flex;
            gap: 2.5rem;
            padding: 2.5rem;
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(12px);
            border-radius: 18px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.5);
            max-width: 900px;
            width: 100%;
        }

        .form-box {
            flex: 1;
        }

        .form-box h2 {
            font-size: 2.2rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(90deg, #ff8acb, #9b8cff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group input {
            width: 100%;
            padding: 0.75rem 1rem;
            border-radius: 10px;
            border: none;
            outline: none;
            font-size: 1rem;
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
        }

        .form-group input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .btn-register {
            margin-top: 1rem;
            width: 100%;
            padding: 0.8rem;
            border-radius: 30px;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            color: #fff;
            background: linear-gradient(90deg, #ff8acb, #9b8cff);
            transition: 0.3s ease;
        }

        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(155, 140, 255, 0.5);
        }

        .image-box {
            display: flex;
            align-items: center;
        }

        .image-box img {
            width: 260px;
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(255, 105, 180, 0.4);
        }

        @media (max-width: 768px) {
            .register-container {
                flex-direction: column;
                text-align: center;
            }

            .image-box {
                justify-content: center;
            }
        }
        

        /*  separate css */
        .auth-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-card {
            display: flex;
            gap: 2.5rem;
            padding: 2.5rem;
            max-width: 850px;
            width: 100%;
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(12px);
            border-radius: 18px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .auth-text {
            flex: 1;
        }

        .auth-text h2 {
            font-size: 2.2rem;
            margin-bottom: 0.5rem;
            background: linear-gradient(90deg, #ff8acb, #9b8cff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .auth-text p {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            color: rgba(255, 255, 255, 0.85);
        }

        .btn-logout {
            padding: 0.75rem 2.2rem;
            border-radius: 30px;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            color: #fff;
            background: linear-gradient(90deg, #ff8acb, #9b8cff);
            transition: 0.3s ease;
        }

        .btn-logout:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(155, 140, 255, 0.5);
        }

        .auth-image {
            display: flex;
            align-items: center;
        }

        .auth-image img {
            width: 260px;
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(255, 105, 180, 0.4);
        }

        @media (max-width: 768px) {
            .auth-card {
                flex-direction: column;
                text-align: center;
            }

            .auth-image {
                justify-content: center;
            }
        }

    </style>
</head>
<body>

    @auth
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-text">
                <h2>Welcome back ✨</h2>
                <p>You are logged in &gt;_&lt;</p>

                <form action="/logout" method="POST">
                    @csrf
                    <button class="btn-logout">Logout</button>
                </form>
            </div>

            <div class="auth-image">
                <img src="https://media1.tenor.com/m/j5AL-QaaihAAAAAC/anime-sagiri.gif" alt="Sagiri">
            </div>
        </div>
    </div>
    
    @else

    <div class="register-container">
        <div class="form-box">
            <h2>Register</h2>

            

            <form method="POST" action="/register">
                @csrf
                <div class="form-group">
                    <input type="text" name="username" placeholder="Full Name">
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email Address">
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password">
                    </div>

                    <button class="btn-register">Create Account</button>
                </form>
            </div>

            <div class="image-box">
                <img src="https://media1.tenor.com/m/4tNhYHGifYYAAAAC/sagiri-eromanga-sensei.gif"
                    alt="Sagiri Izumi">
            </div>
        </div>

    @endauth



</body>
</html>
