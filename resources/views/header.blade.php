<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header-styles.css">
    <title>Your Website - Header</title>
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
}

.main-header {
    background-color: #333;
    color: #fff;
    padding: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.main-header .logo {
    font-size: 1.5rem;
    font-weight: bold;
}

.main-nav ul {
    list-style: none;
    display: flex;
}

.main-nav li {
    margin-right: 20px;
}

.main-nav a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}

    </style>
</head>

<body>

    <header class="main-header">
        <div class="logo">Your Logo</div>
        <nav class="main-nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

</body>
</html>
