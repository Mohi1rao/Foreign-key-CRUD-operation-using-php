<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new user</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <style>
        *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    
font-family: 'Roboto', sans-serif;
}

.container{
    max-width: 50%; 
    padding: 34px; 
    margin: auto;
}

.container h1 {
    text-align: center;
    font-family: 'Architects Daughter', cursive;
    font-size: 40px;
}

p{
    font-size: 20px;
    text-align: center;
    font-family: 'Architects Daughter', cursive;
    

}

input, textarea{
    
    border: 2px solid #aa90ee;
    border-radius: 6px;
    outline: none;
    font-size: 16px;
    width: 80%;
    margin: 11px 0px;
    padding: 7px;
}
form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.btn{
    background: dodgerblue;
    color: rgb(255, 255, 255);
    padding: 8px 12px;
    font-size: 20px;
    border: 2px solid rgb(255, 255, 255);
    border-radius: 14px;
    cursor: pointer;
    max-width: 20%; 
}
    </style>
</head>
<body>
    <div class="container">
        <form action="connect.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="email" id="email" placeholder="Enter your email">
            <input type="text" name="mobile" id="mobile" placeholder="Enter your mobile">
            <input type="text" name="password" id="password" placeholder="Enter Salary">
            <input type="text" name="city" id="city" placeholder="Enter your city">
            <input type="text" name="pincode" id="pincode" placeholder="Enter your pincode">
            <input type="text" name="work" id="work" placeholder="Enter your work">
            <input type="hidden" id="empId" name="empId" value="3487">

            <input type="submit" name="save" value="save" class="btn">
            

        </form>
    </div>
    
    
</body>
</html>