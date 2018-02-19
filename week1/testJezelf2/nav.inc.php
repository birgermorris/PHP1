<?php 
    $thisFile = basename($_SERVER["PHP_SELF"]);
    $links = [
            ["href" => "home.php", "name" => "Home"],
            ["href" => "contact.php", "name" => "Contact"]
        ];
?>
<header>  
    <nav>      
        <ul style="list-style-type: none;"> 
            <?php foreach($links as $link): ?>
                <li><a href="<?php echo $link["href"]; ?>" <?php 
                       if($thisFile == $link["href"]){
                           echo 'class="active"'; 
                       }?>><?php echo $link["name"]; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav> 
</header>