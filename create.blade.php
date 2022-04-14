<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class='flow'> 
        <nav>
            <ul>
                <li><a href="/home">home</a></li>
           
                <li><a href="/edit">edit</a></li>
                <li><a href="/showAll">show</a></li>
                <!-- <li><a href="/create">create</a></li> -->

                
        </nav>
    </div>
    <h1>create</h1>
    <form action="/create" method="POST">
        @csrf
 <label for ="firstname">firstname:</label><br>
 <input type="text"  name="firstname" value=""><br>
 
 <label for ="lastname">lastname:</label><br>
 <input type="text"  name="lastname" value=""><br><br>   
        <input type="submit" value="submit">

</body>
</body>
</html>