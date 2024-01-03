<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Husna</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #2c5d76;
            color: #fff;
            padding: 20px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
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
            color: #fff;
            margin: 0 20px;
            font-weight: bold;
            transition: color 0.3s ease-in-out;
        }

        a:hover {
            color: #9FBB73;
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

        .team {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .team-member {
            max-width: 300px;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
            <h2>Our Story</h2>
            <p>
                Welcome to Tech Company! We are dedicated to providing innovative solutions that transform
                the digital landscape. Our journey began with a passion for technology and a vision to make a
                positive impact on businesses and individuals alike.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in tellus nec urna
                malesuada cursus. Vestibulum vehicula odio at cursus efficitur.
            </p>
        </section>

        <section>
            <h2>Meet Our Team</h2>
            <div class="team">
                <div class="team-member">
                    <h3>John Doe</h3>
                    <p>Co-founder & CEO</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="team-member">
                    <h3>Jane Smith</h3>
                    <p>CTO</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <!-- Add more team members as needed -->
            </div>
        </section>

    </div>

    <footer>
        &copy; 2023 Husna. All rights reserved.
    </footer>

</body>
</html>
