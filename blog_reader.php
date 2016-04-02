
<?php
    // DB connection info
    //TODO: Update the values for $host, $user, $pwd, and $db
    //using the values you retrieved earlier from the Azure Portal.
    $host = "eu-cdbr-azure-north-d.cloudapp.net";
    $user = "b2b8e9980d855f";
    $pwd = "383506b2";
    $db = "acsm_c5e6372ee6eccec";
    // Connect to database.
    try {
        $conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }
    catch(Exception $e){
        echo "<h3>HELP1</h3>"; //TEMP
        die(var_dump($e));

    }
    
    // Retrieve blog posts data
    $sql_select = "SELECT * FROM blog_posts";
    $stmt = $conn->query($sql_select);
    $registrants = $stmt->fetchAll();
    if(count($registrants) > 0) {
        /*echo "<h2>Blog Posts:</h2>";
        echo "<table>";
        echo "<tr><th>Title</th>";
        echo "<th>Post</th>";
        echo "<th>Date</th></tr>";
        foreach($registrants as $registrant) {
            echo "<tr><td>".$registrant['name']."</td>";
            echo "<td>".$registrant['post']."</td>";
            echo "<td>".$registrant['date']."</td></tr>";
        }
        echo "</table>";*/
        foreach($registrants as $registrant) {
            echo "<div class='postBlog'>";
            echo "<h1 id='title' style='text-align:center;'>".$registrant['name']."</h1>";
            echo "<p style='text-align:center;'>".$registrant['post']."</p>";
            echo "<h1 id='title' style='text-align:center;'>".$registrant['date']."</h1>";
            echo "</div>";
        }
    } else {
        echo "<h3>No current posts.</h3>";
    }
?>
