<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show infomation</title>
    <style>
        div {
            text-align: center;
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Register success</h1>
        <h3>Full Name: {{$fullName}}</h3>
        <h3>Email: {{$email}}</h3>
        <h3>Phone Number: {{$phone}}</h3>
        <h3>Address: {{$address}}</h3>
        <h3>Identity Card: {{$identityCard}}</h3>
    </div>

</body>
</html>
