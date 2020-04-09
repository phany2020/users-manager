<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Users_manager</title>

        
    </head>
    <body>
        <h1> Events</h1>
        <ul>
            <?php foreach($events as $event) {?>
                <li> <?php echo $event; ?> </li>
            <?php } ?>
        </ul>
         
    </body>
</html>
