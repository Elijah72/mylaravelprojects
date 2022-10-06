<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Subscription</title>
</head>
<body>
    <h1>WELCOME CREATE YOUR PLAN</h1>
    <form action="" method="post">
        @csrf
            <label for="name">ENTER YOUR NAME:</label>
            <input type="text" name="name" id= ""><br>
            <label for="email">ENTER YOUR Email:</label>
            <input type="text" name="email" id= ""><br>
            <label for="phoneno">ENTER YOUR PhoneNo:</label>
            <input type="text" name="phoneno" id= ""><br>
            <label for="name">ENTER AMOUNT:</label>
            <input type="text" name="amount" id= ""><br>
            
            <input type="submit" value="SUBMIT">



    </form>
</body>
</html>