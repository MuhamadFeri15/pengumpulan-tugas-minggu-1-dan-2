<!-- munculkan text dengan tag heading size yang berbeda sebanyak 5 jenis  -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

for ($i = 1; $i <= 5; $i++) {
    $heading= "h" . $i;
    echo "<$heading> Heading $i </$heading>";
}
?>

</body>
</html>