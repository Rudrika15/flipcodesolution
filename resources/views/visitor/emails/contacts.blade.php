<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .header img {
            width: 200px;
            margin-bottom: 20px;
        }
        .footer {
            margin-top: 20px;
            font-size: 0.9em;
            color: #888888;
        }
    </style>
</head>

<body>

    <div class="container mt-4">
        <div class="header">
            <img src="https://flipcodesolutions.com/img/logo.png" alt="FlipCode Solutions" />
        </div>

        <h4>Hello Admin,</h4>
        <p class="lead">You have received a new inquiry from the contact form:</p>

        <ul class="list-group">
            <li class="list-group-item"><strong>Name:</strong> {{ $user->name }}</li>
            <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
            <li class="list-group-item"><strong>Contact Number:</strong> {{ $user->contact }}</li>
            <li class="list-group-item"><strong>Message:</strong> {{ $user->message }}</li>
        </ul>
    </div>

</body>

</html>
