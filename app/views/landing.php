<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Framework Initialized</title>
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
        .logo {
            width: 100px;
            height: 100px;
            margin: 0 auto 2rem;
            background: var(--secondary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            font-weight: bold;
        }
        h1 {
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        .description {
            color: #666;
            margin-bottom: 2rem;
        }
        .code-block {
            background-color: #f4f4f4;
            border-left: 4px solid var(--secondary-color);
            padding: 1rem;
            margin-bottom: 2rem;
            text-align: left;
            font-family: monospace;
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
        <div class="logo">PHP</div>
        <h1>Framework Initialized</h1>
        <p class="description">Your development environment is set up and ready to go!</p>
        
        <div class="code-block">
            Ultra is a lightweight, custom PHP MVC framework designed to help you build scalable and maintainable web applications quickly and efficiently.
        </div>
        
        <div class="buttons">
            <a href="/docs.html" class="btn btn-primary">Docs</a>
            <!--<a href="/docs" class="btn btn-secondary">Docs</a>-->
        </div>
    </div>
</body>
</html>