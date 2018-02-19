<?php 
include_once("header.inc.php");
            

        $checkins = [
            [
                
                "picture" => "images/vier.png",
                "username" => "Birger",
                "place" => "Home",
                "location" => "Leefdaal, Belgium",
                "comment" => "@home",
                "distance" => 100,
                "photo" => "images/vijf.png"
            ],
           [
                "picture" => "images/zes.png",
                "username" => "Thomas",
                "place" => "Thomas more",
                "location" => "Mechelen, Belgium",
                "comment" => "@school",
                "distance" => 2,
               "photo" => "images/zeven.png"
            ],
            [
                "picture" => "images/acht.png",
                "username" => "Veerle",
                "place" => "Gemeentehuis",
                "location" => "Tervuren, Belgium",
                "comment" => "Op het werk",
                "distance" => 80,
                "photo" => ""
            ],
            
        ];
    ?>
    
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>PHP 1</title>
	<style>
        .checkin {
            display:flex;
        }
        .profo{
            width: 80px; 
            height: 80px; 
            border-radius: 20%;
        }
        ul{
            list-style-type: none;
        }
        .username{
            color: #666666; 
            font-weight:bold;
        }
        .place{
            color: #fea733; 
            font-size: 25px;
        }
        .location{
            color: #646464;
        }
        .comment{
            font-size: 20px;
        }
        .photo{
            width: 150px; 
            height: 150px; 
        }
    </style>
</head>
<body>
<h1> <?php echo $title; ?> </h1>

	<?php foreach($checkins as $checkin): ?>
             <div class="checkin">
              <img src="<?php echo $checkin['picture']; ?>" class="profo">
               <ul> 
                    <li class="username"><?php echo $checkin['username']; ?></li>
                    <li class="place"><?php echo $checkin['place']; ?></li>
                    <li class="location"><?php echo $checkin['location']; ?></li>
                    <li class="comment"><?php echo $checkin['comment']; ?></li>
                   <?php if(!empty($checkin['photo'])){ ?><img src="
                        <?php echo $checkin['photo']; ?>
                        " class="photo"><?php } ?>
            </ul>
            </div>
       
    <?php endforeach; ?>
<?php include_once("footer.inc.php"); ?>
</body>
</html>