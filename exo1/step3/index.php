<?php 
    require 'validator.php'; 
    $page = new Validator(1,'hello',9.52); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validator</title>
</head>
<body>

<h1>TEST</h1>

<?php 
    echo $page->validateString();
    echo $page->validateInt();
    echo $page->validateFloat();
?>
    
</body>
</html>