<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - Tech Company</title>
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

        .services {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .service {
            max-width: 300px;
            margin: 20px;
            padding: 20px
            ;
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
            <h2>What We Offer</h2>
            <p>
                At Tech Company, we offer a range of services to meet your technological needs. Our team
                of experts is committed to delivering innovative solutions that drive your success.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in tellus nec urna
                malesuada cursus. Vestibulum vehicula odio at cursus efficitur.
            </p>
        </section>

        <section>
            <h2>Our Services</h2>
            <div class="services">
                <div class="service">
                    <h3>Web Development</h3>
                    <p>Creating modern, responsive, and scalable web applications.</p>
                </div>
                <div class="service">
                    <h3>Mobile App Development</h3>
                    <p>Building customized mobile applications for iOS and Android platforms.</p>
                </div>
                <div class="service">
                    <h3>Cloud Solutions</h3>
                    <p>Providing secure and efficient cloud-based services for your business.</p>
                </div>
                <div class="service">
                    <h3>Data Analytics</h3>
                    <p>Harnessing the power of data to gain valuable insights and drive decision-making.</p>
                </div>
                <!-- Add more services as needed -->
            </div>
        </section>

    </div>

    <footer>
    &copy; 2023 Husna. All rights reserved.
    </footer>

</body>
</html>
