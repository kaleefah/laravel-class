<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Husna's Tech</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
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

        a {
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

        .container {
            width: 80%;
            margin: 0 auto;
        }

        section {
            padding: 40px 0;
            text-align: center;
        }

        h2 {
            color: #2c5d76;
        }

        p {
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .contact-form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .contact-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-form button {
            width: 100%;
            padding: 10px;
            background-color: #2c5d76;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #113946;
        }

        footer {
            background-color: #2c5d76;
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
            <a href="website.com">Home</a>
            <a href="about.com">About</a>
            <a href="contact2.com">Contact</a>
            <a href="services.com">Services</a>
        </nav>
    </header>

    <div class="container">

        <section>
            <h2>Get In Touch</h2>
            <p>
                Have questions, suggestions, or just want to say hello? We'd love to hear from you!
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in tellus nec urna
                malesuada cursus. Vestibulum vehicula odio at cursus efficitur.
            </p>
        </section>

        <section>
            <div class="contact-form">
                <form>
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <button type="submit">Send Message</button>
                </form>
            </div>
        </section>

    </div>

    <footer>
        &copy; 2023 Husna. All rights reserved.
    </footer>

</body>
</html>
