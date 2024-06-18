<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <?php 
    // Single line comment
    /** 
     * Multiline comments
    */
    $name='Sandhyodip Das';
    $designation='Software Developer';
    $address="<p style='font-weight:600; color:red;'>50, Hazra Para Lane, Bally, Howrah.</p>"
    ?>
    <h1>
        <?php 
        echo "$name is a $designation";
        ?>
    </h1>
    <?php 
    echo $address;
    ?>
</body>
</html>