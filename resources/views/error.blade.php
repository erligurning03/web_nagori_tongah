<!DOCTYPE html>
<html>
<head>
    <title>Error</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .error-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .error-code {
            font-size: 72px;
            font-weight: bold;
            color: #e74c3c;
            margin-bottom: 10px;
        }
        .error-message {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }
        .home-link {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #2ecc71;
            border: none;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .home-link:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1 class="error-code">Error 405</h1>
        <p class="error-message">Method Not Allowed</p>
        <a class="home-link" href="{{ route('landing') }}">Go to Home</a>
    </div>
</body>
</html>
