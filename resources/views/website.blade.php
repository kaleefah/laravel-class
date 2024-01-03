<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Husna - Your Website</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(rgba(255,255,255,0.8), rgba(255,255,255,0.8)), url('your-background-image.jpg') center/cover fixed no-repeat;
        }

        header {
            background-color: #113946;
            color: #fff;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        #logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav {
            display: flex;
            align-items: center;
        }
        a{
            text-decoration: none;
            color: white;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-weight: bold;
            transition: color 0.3s ease-in-out;
        }

        nav a:hover {
            color: #2ecc71;
        }

        section {
            padding: 200px 20px;
            text-align: center;
            color: #333;
        }

        button {
            padding: 15px 30px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            margin-right: 15px;
        }

        #login-btn {
            background-color: #113946;
            color: #fff;
        }

        #register-btn {
            background-color: #2ecc71;
            color: #fff;
        }

        footer {
            background-color: #113946;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <header>
        <div id="logo">Husna</div>
        <nav>
            <a href="#">Home</a>
            <a href="about.com">About</a>
            <a href="contact2.com">Contact</a>
            <a href="services.com">Services</a>
          
        </nav>
    </header>

    <section>
        <h1>Welcome to Husna's Tech</h1>
        <p>Discover your best self, radiate positivity, and let your brilliance shine.</p>
        <button id="login-btn"><a href="/reg.com">Register</a></button>
        <button id="register-btn"><a href="/loginweb.com">Login</a></button>
        
    </section>

    <footer>
        &copy; 2023 Husna. All rights reserved.
    </footer>

</body>
</html>
