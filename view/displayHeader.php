<!doctype html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <!-- Set the viewport so this responsive site displays correctly on mobile devices -->

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chino Quintanilla</title>

        <!-- Include bootstrap CSS -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script src="https://unpkg.com/dropbox/dist/Dropbox-sdk.min.js"></script>
        <script src="https://unpkg.com/dropbox/dist/DropboxTeam-sdk.min.js"></script>
        
        <?php
        if ($ref == 'home') {
            ?>
            <link href="CSS/style_nav.css" rel="stylesheet" type="text/css">
            <link href="CSS/style_body.css" rel="stylesheet" type="text/css">
            <link href="CSS/style_footer.css" rel="stylesheet" type="text/css">
            <?php
        }else{
            ?>
            <link href="CSS/style_nav_simple.css" rel="stylesheet" type="text/css">
            <link href="CSS/style_body_simple.css" rel="stylesheet" type="text/css">
            <link href="CSS/style_footer.css" rel="stylesheet" type="text/css">
            <?php
        }
        ?>

    </head>

