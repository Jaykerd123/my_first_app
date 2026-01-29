<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | My Laravel App</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #0f0f1a, #1b1b2f);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            display: flex;
            gap: 3rem;
            align-items: center;
            padding: 3rem;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
            max-width: 1000px;
            width: 100%;
        }

        .image-box img {
            width: 320px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(255, 105, 180, 0.4);
        }

        .content {
            max-width: 500px;
        }

        .content h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            background: linear-gradient(90deg, #ff8acb, #9b8cff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .content p {
            font-size: 1.1rem;
            line-height: 1.6;
            opacity: 0.85;
            margin-bottom: 2rem;
        }

        .buttons {
            display: flex;
            gap: 1rem;
        }

        .btn {
            padding: 0.75rem 1.8rem;
            border-radius: 30px;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: linear-gradient(90deg, #ff8acb, #9b8cff);
            color: #fff;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(155, 140, 255, 0.5);
        }

        .btn-secondary {
            background: transparent;
            color: #fff;
            border: 2px solid rgba(255, 255, 255, 0.4);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                text-align: center;
            }

            .buttons {
                justify-content: center;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="image-box">
            <img src="https://media1.tenor.com/m/iURiP558ykUAAAAC/izumi-sagiri.gif" alt="Sagiri Izumi">
        </div>

        <div class="content">
            <h1>Welcome {{ $incomingData['username'] ?? 'guest'}}</h1>
            <p>
                A modern Laravel project built with style, performance,
                and just a bit of anime energy. Clean code, smooth UI,
                and powerful backend magic ✨
            </p>

            <div class="buttons">
                <button class="btn btn-primary">Get Started</button>
                <button class="btn btn-secondary">View Docs</button>
            </div>
        </div>
    </div>

</body>
</html>
