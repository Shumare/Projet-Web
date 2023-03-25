<?php

if(isset($_POST['ajax']) && isset($_POST['name'])){
    echo $_POST['name'];
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <h1> page d'acceuil des tutors </h1>

    <pre>
<?php foreach ($tutor as $tutor) : ?>
    <h2><a href="/tutor/read/<?= $tutor->id ?>"><?= $tutor->id ?></a></h2>
<?php endforeach; ?>
<a href="/tutor/dirige">creation</a> 
</pre>




<form action="" method="post ">
    <input type="text" name=" name" id="name" placeholder="entrez votre nom">
    <input type="submit" value="Submit" name ="submit">
    <div id ="response"></div>
  
</form>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script type="text/javascript">
        $(document).ready(function(){
                $('#name').keyup(function(){
                    var name =$(this).val();

                    $.ajax({
                        type:'post',
                        data :{ajax :1, name:name},
                        success:function(response){
                            $('#response').text('name :' +response);
                        }
                    });
                });
        });
    </script>
</body>

</html>