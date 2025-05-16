<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 - Page Not Found</title>
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --background-color: #ecf0f1;
            --text-color: #333;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background: linear-gradient(135deg, var(--background-color) 0%, #ffffff 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            line-height: 1.6;
        }
        .container {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            padding: 3rem;
            text-align: center;
            max-width: 500px;
            width: 90%;
        }
        .error-code {
            font-size: 6rem;
            font-weight: bold;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }
        h1 {
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        .description {
            color: #666;
            margin-bottom: 2rem;
        }
        .buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }
        .btn {
            text-decoration: none;
            padding: 0.75rem 1.5rem;
            border-radius: 6px;
            transition: all 0.3s ease;
        }
        .btn-primary {
            background-color: var(--secondary-color);
            color: white;
        }
        .btn-secondary {
            border: 2px solid var(--secondary-color);
            color: var(--secondary-color);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="error-code">404</div>
        <h1>Page Not Found</h1>
        <p class="description">The page you are looking for might have been removed or is temporarily unavailable.</p>
        
        <div class="buttons">
            <a href="<?php echo baseURL();?>" class="btn btn-primary">Go Home</a>
        </div>
    </div>
</body>
</html>