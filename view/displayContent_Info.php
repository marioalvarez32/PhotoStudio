<body> 

    <?php
    # Include the Dropbox SDK libraries
    require_once "dropbox-sdk/Dropbox/autoload.php";

    use \Dropbox as dbx;
    
    $appInfo = dbx\AppInfo::loadFromJsonFile("./Resources/dropbox.json");
    
    $webAuth = new dbx\WebAuthNoRedirect($appInfo, "PHP-Example/1.0");
    $authorizeUrl = $webAuth->start();
    
    
    echo "1. Go to: " . $authorizeUrl . "\n";
    echo "2. Click \"Allow\" (you might have to log in first).\n";
    echo "3. Copy the authorization code.\n";
    $authCode = \trim(\readline("Enter the authorization code here: "));
    
    ?>


    <!--
    <div class="content">
    <div class="row">
        <div class ="col">
            
        </div>
        <div class ="col">
            
        </div>
        <div class ="col">
            
        </div>
    </div>
</div>

    -->