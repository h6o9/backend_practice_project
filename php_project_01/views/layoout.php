<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            width: 600px;
            margin: auto;
        }

        form ul {
            padding: 0;
        }

        form li {
            list-style: none;
        }

        form input[type=text],
        form textarea {
            margin-bottom: 1.5 rem;
            width: 100%;
        }

        form textarea {
            height: 300px;
        }

        label {
            display: block;
        }
    </style>
</head>

<body>
    <div class="container">
        <?= include ($path); ?>

    </div>

</body>

</html>