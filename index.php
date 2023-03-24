<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index.php</title>
</head>
<body>
    <h1>Hello World php server style</h1>
    
    <form method="GET" action="./php_files/read.php">
        <input type="number" name="id" placeholder="ID">
        <button type="submit">Submit GET</button>
    </form>
    <br>
    <br>
    <br>
    <br>
    <form method="POST" action="./php_files/create.php">
        <input type="text" name="first_name" placeholder="First Name">
        <input type="text" name="last_name" placeholder="Last Name">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="ip_adress" placeholder="IP adress">
        <button>Submit POST</button>
    </form>
    <br>
    <br>
    <br>
    <br>
</body>
</html>