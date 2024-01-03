<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #2c5d76;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .dashboard-container {
            display: flex;
            justify-content: space-around;
            padding: 20px;
            margin: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            margin: 10px;
        }

        .card h2 {
            color: #2c5d76;
        }

        footer {
            background-color: #2c5d76;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>Husna's Dashboard</h1>
    </header>

    <div class="dashboard-container">
        <div class="card">
            <h2>Product 1</h2>
            <p>Description of Product 1</p>
            <p>Sales: 500 units</p>
            <p>Revenue: $10,000</p>
            <p>Inventory: 200 units</p>
        </div>

        <div class="card">
            <h2>Product 2</h2>
            <p>Description of Product 2</p>
            <p>Sales: 300 units</p>
            <p>Revenue: $7,000</p>
            <p>Inventory: 150 units</p>
        </div>

        <div class="card">
            <h2>Product 3</h2>
            <p>Description of Product 3</p>
            <p>Sales: 700 units</p>
            <p>Revenue: $15,000</p>
            <p>Inventory: 100 units</p>
        </div>
    </div>

    <footer>
        &copy; 2023 Your Company. All rights reserved.
    </footer>

</body>
</html>
