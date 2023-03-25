<?php
if(isset($_POST['ajax']) && isset($_POST['checked'])){
    $checked_arr=$_POST['checked'];
    echo json_encode($checked_arr);
    exit;
}

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta value="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <h1> page d'acceuil des student </h1>

<pre>
<?php foreach($student as $student): ?>
    <h2><a href="/student/read/<?=$student->id?>"><?=$student->id?></a></h2>
<?php endforeach; ?>
<a href="/student/dirige">creation</a> 
</pre>

<!--<form action="" method="post"></form>
<input type="checkbox" value="javascript" >javascript<br>
<input type="checkbox" value="php" >php<br>
<input type="checkbox" value="ajax " >ajax<br>
<input type="checkbox" value="jquery" >jquery<br>
<input type="button" value="click" id= "but_click"><br>
<div id="response">allo</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#but_click').click(function(){
        var check_arr=[];
        $('input[type=checkbox]:checked').each(function(index, element){
            check_arr.push($(element).val());
        });
            if(check_arr.lenght>0){
                $.ajax({
                    type: "post",
                    
                    data: {ajax :1, checked:check_arr},
                    dataType: "json",
                    success: function (response) {
                        $('#response').text('response :' +JSON.stringify(response));
                    }
                });
            }
        });
    });
</script>-->

    </body>
    </html>