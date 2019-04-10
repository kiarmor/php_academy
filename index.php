<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Form</h1>
<form method="get"> <br>
    <input type="text" name="one"> <br>
    <select name="two"> <br>
        <option value="55"> fifty five</option>
        <option value="66"> sixty six</option>
    </select>
    <br>
    <input type="checkbox" name="news"> news <br>
    <input type="checkbox" name="sports" > sports <br>
    Male
    <input type="radio" name="gender" value="male">
    Female
    <input type="radio" name="gender" value="female"> <br>

    <textarea name="three"></textarea> <br>
    <button type="submit">Go</button>
</form>

</body>
</html>

<pre>
<?php

var_dump($_GET);
//http://localhost:8888/index.php?one=name&two=55&three=coment
/*array(5) {
  ["one"]=>
  string(5) "name1"
  ["two"]=>
  string(2) "66"
  ["news"]=>
  string(2) "on"
  ["gender"]=>
  string(4) "male"
  ["three"]=>
  string(4) "comm"
}
}*/