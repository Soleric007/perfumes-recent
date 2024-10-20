<!DOCTYPE html>
<html>
<head>
    <title>Riyallure.com.ng</title>
</head>
<body>
    <h1 class="text-2xl font-bold uppercase">Message from: {{ $mailData['email'] }}</h1>
    <h1 class="text-xl font-semibold">Hi, My name is {{ $mailData['name'] }}</h1>
    <h1 class="text-lg">Hi, My name is {{ $mailData['name'] }}</h1>
    <p>Message: {{ $mailData['message'] }}</p>
</body>
</html>
