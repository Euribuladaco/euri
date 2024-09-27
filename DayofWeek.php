<?php
if(isset($_POST['Monday'])){
    echo"Monday";

}
if(isset($_POST['Thuesday'])){
        echo"Thuesday";

}
if(isset($_POST['Wensday'])){
    echo"Wensday";

}
if(isset($_POST['Thursday'])){
    echo"Thursday";

}
 if(isset($_POST['Friday'])){
    echo"Friday";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="post">
        <button name= 'Monday'>Monday</button>
        <button name= 'Thuesday'>Tuesday</button>
        <button name= 'Wensday'>Wensday</button>
        <button name= 'Thursday'>Thursday</button>
        <button name= 'Friday'>Friday</button>
     


    </form>
</body>
</html>