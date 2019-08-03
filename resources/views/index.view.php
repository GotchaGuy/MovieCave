<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
<section id="logIn">
    <h2>Login to Movie Cave</h2>
    <form action="/my_account" method="post">
        <div>
             <h2>Name</h2>
            <input type="text" id="name" name="name" placeholder="Name here">
        </div>
        <div>
            <h2>Password</h2>
            <input type="password" id="password" name="password" placeholder="Password here">
        </div>
        <input type="submit" value="LOGIN" id="submit" name="submit">
    </form>
    </section>
</body>
</html>
