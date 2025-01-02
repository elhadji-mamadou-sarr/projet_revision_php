<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page avec Trois Versions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to bottom right, #4facfe, #00f2fe);
        }

        .container {
            display: flex;
            gap: 20px;
        }

        .card {
            width: 200px;
            height: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .card:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .card h3 {
            margin: 0;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card" onclick="version1()">
            <h3>Version 1</h3>
        </div>
        <div class="card" onclick="version2()">
            <h3>Version 2</h3>
        </div>
        <div class="card" onclick="version3()">
            <h3>Version 3</h3>
        </div>
    </div>
</body>
</html>


<script>
        function version1() {
            window.location.href = '/v1/public/?action=etudiant.index';
        }

        function version2() {
            window.location.href = '/v2/public/?action=client.index';
        }

        function version3() {
            window.location.href = '/v3/public/?action=animal.index';
        }
    </script>
