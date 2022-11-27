<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>HTML Forms</h2>

    <form method="post">
        @csrf
        <label for="fname">Username:</label><br>
        <input type="text" id="username" name="username" value=""><br>
        <label for="lname">Password:</label><br>
        <input type="text" id="password" name="password" value=""><br><br>
        <label for="lname">Fullname:</label><br>
        <input type="text" id="fullname" name="fullname" value=""><br><br>
        <label for="lname">E-mail:</label><br>
        <input type="text" id="email" name="email" value=""><br><br>
        <label for="lname">Phone Number:</label><br>
        <input type="text" id="phone_number" name="phone_number" value=""><br><br>
        <label for="lname">Staff ID:</label><br>
        <input type="text" id="staffID" name="staffID" value=""><br><br>
        <label for="lname">Position:</label><br>
        <input type="text" id="position" name="position" value=""><br><br>
        <input type="submit" value="Submit">
    </form> 
    
    <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>
</body>
</html>