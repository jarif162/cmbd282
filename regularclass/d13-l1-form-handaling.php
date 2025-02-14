

<!-- <form action="http://google.com/search"> 
    <input type="text" placeholder="Enter your name" name="q">
    <button type="submit">Show name</button>
</form> -->

<form action="./d13-l1-form-handaling.php" method="post"> 
    <input type="text" placeholder="Enter your name" name="UserName">
    <br><br>
    <input type="text" placeholder="Enter your mail" name="Usermail">
    <br><br>
    <input type="text" placeholder="Enter your city name" name="usercity">
    <br><br>
    <button type="submit">Show name</button>
</form>

<!-- when we don't use method attribute, by default form method is get method. so, when we submit the form, it will redirect to google.com/search?q=yourname -->

<?php
// echo $_GET["UserName"] ?? "Name not set"; // if name is not set, it will show "Name not set"
// echo "<br>";
// echo $_GET["Usermail"] ?? "Mail not set"; // if mail is not set, it will show "Mail not set"
// echo "<br>";
// echo $_GET["usercity"] ?? "City not set"; // if city is not set, it will show "City not set"

// echo $_POST["UserName"] ?? "Name not set"; // if name is not set, it will show "Name not set"
// echo "<br>";
// echo $_POST["Usermail"] ?? "Mail not set"; // if mail is not set, it will show "Mail not set"
// echo "<br>";
// echo $_POST["usercity"] ?? "City not set"; // if city is not set, it will show "City not set"

//post method is more secure than get method and post don't take data in url and get take the data in url


echo $_REQUEST["UserName"] ?? "Name not set"; // if name is not set, it will show "Name not set"
echo "<br>";
echo $_REQUEST["Usermail"] ?? "Mail not set"; // if mail is not set, it will show "Mail not set"
echo "<br>";
echo $_REQUEST["usercity"] ?? "City not set"; // if city is not set, it will show "City not set"

//request method is used to get the data from both get and post method
?>