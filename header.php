<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Dev Clan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        header {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            max-width: 1400px;
            margin: 0 auto;
        }
        .nav1 a{
            padding: 8px 12px;
            display: inline-block;
            justify-content: space between;
            width: 20%;
        }

        .nav1::before {
            content: "Dev Clan";
            color: white;
            font-size: 28px;
            font-weight: 700;
            letter-spacing: 0.5px;
            margin-right: auto;
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav1 a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            padding: 8px 0;
        }

        .nav1 a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #00d4ff;
            transition: width 0.3s ease;
        }

        .nav1 a:hover {
            color: #00d4ff;
        }

        .nav1 a:hover::after {
            width: 100%;
        }

        .nav2 {
            background: rgba(255, 255, 255, 0.95);
            padding: 15px 40px;
            backdrop-filter: blur(10px);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav2 {
            display: flex;
            justify-content: center;
        }

        .nav2 input {
            padding: 12px 20px;
            border: 2px solid #e0e0e0;
            border-radius: 50px;
            width: 400px;
            font-size: 14px;
            transition: all 0.3s ease;
            background-color: #fff;

        }

        .nav2 input:focus {
            outline: none;
            border-color: #2a5298;
            box-shadow: 0 0 0 3px rgba(42, 82, 152, 0.1);
        }

        .nav2 input::placeholder {
            color: #999;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            min-height: calc(100vh - 300px);
            background-color: white;
            border-radius: 8px;
            margin-top: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        h1 {
            color: #1e3c72;
            margin-bottom: 20px;
            font-size: 36px;
            font-weight: 700;
        }

        h2 {
            color: #2a5298;
            margin-top: 30px;
            margin-bottom: 15px;
            font-size: 24px;
            font-weight: 600;
        }

        p {
            margin-bottom: 15px;
            text-align: justify;
            line-height: 1.8;
            color: #555;
        }

        a {
            color: #2a5298;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #00d4ff;
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
    <div class="nav1">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="services.php">Services</a>
        <a href="contact-us.php">Contact Us</a>
    </div>
    <div class="nav2">
        <input type="text" name="search" placeholder="Search...">
    </div>
    
</header>