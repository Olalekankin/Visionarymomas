<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Contact form</title>
</head>
<body>
  <h1>Contact Message</h1>
  <p>name : {{$details['name']}}</p>
  <p>email : {{$details['email']}}</p>
  <p>phone : {{$details['phone']}}</p>
  <p>message : {{$details['message']}}</p>
</body>
</html>