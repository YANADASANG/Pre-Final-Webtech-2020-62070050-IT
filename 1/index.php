<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    .class{
        margin:5;
    }
</style>
</head>
<body>
    <?php 
        $url = "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json";
        $response = file_get_contents($url);
        $result = json_decode($response);
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <?php
                for($i=0;$i<sizeof($result->tracks->items);$i+=3){
                    echo "<div class=\"card\"style=\"width:640\">";
                    echo "<img class=\"card-img-top\" src=\"img_avatar1.png\" style=\"width:640\">";
                    echo "<div class=\"card-body\">";
                    echo "<h4 class=\"card-title\">".$result->tracks->items[$i]->album->name."</h4>";
                    echo "Artist: ";
                    foreach ($result->tracks->items[$i]->album->artists as $art) {
                        echo $art->name."<br>";//ศิลปิน
                    }
                    echo "Release date: ".$result->tracks->items[$i]->album->release_date."<br>";
                    echo "Available :".sizeof($result->tracks->items[$i]->available_markets)."contries";//ขายกี่ประเทศ
                    echo "</div></div>";
                }
            ?>
            </div><!--col-->

            <div class="col-4">
                <?php
                for($i=1;$i<sizeof($result->tracks->items);$i+=3){
                    echo "<div class=\"card\"style=\"width:640\">";
                    echo "<img class=\"card-img-top\" src=\"img_avatar1.png\" style=\"width:640\">";
                    echo "<div class=\"card-body\">";
                    echo "<h4 class=\"card-title\">".$result->tracks->items[$i]->album->name."</h4>";
                    echo "Artist: ";
                    foreach ($result->tracks->items[$i]->album->artists as $art) {
                        echo $art->name."<br>";//ศิลปิน
                    }
                    echo "Release date: ".$result->tracks->items[$i]->album->release_date."<br>";
                    echo "Available :".sizeof($result->tracks->items[$i]->available_markets)."contries";//ขายกี่ประเทศ
                    echo "</div></div>";
                }
            ?>
            </div><!--col-->

            <div class="col-4">
                <?php
                for($i=2;$i<sizeof($result->tracks->items);$i+=3){
                    echo "<div class=\"card\"style=\"width:640\">";
                    echo "<img class=\"card-img-top\" src=\"img_avatar1.png\" style=\"width:640\">";
                    echo "<div class=\"card-body\">";
                    echo "<h4 class=\"card-title\">".$result->tracks->items[$i]->album->name."</h4>";
                    echo "Artist: ";
                    foreach ($result->tracks->items[$i]->album->artists as $art) {
                        echo $art->name."<br>";//ศิลปิน
                    }
                    echo "Release date: ".$result->tracks->items[$i]->album->release_date."<br>";
                    echo "Available :".sizeof($result->tracks->items[$i]->available_markets)."contries";//ขายกี่ประเทศ
                    echo "</div></div>";
                }
            ?>
            </div><!--col-->

            <div class="col-4">
                <?php
                for($i=3;$i<sizeof($result->tracks->items);$i+=3){
                    echo "<div class=\"card\"style=\"width:640\">";
                    echo "<img class=\"card-img-top\" src=\"img_avatar1.png\" style=\"width:640\">";
                    echo "<div class=\"card-body\">";
                    echo "<h4 class=\"card-title\">".$result->tracks->items[$i]->album->name."</h4>";
                    echo "Artist: ";
                    foreach ($result->tracks->items[$i]->album->artists as $art) {
                        echo $art->name."<br>";//ศิลปิน
                    }
                    echo "Release date: ".$result->tracks->items[$i]->album->release_date."<br>";
                    echo "Available :".sizeof($result->tracks->items[$i]->available_markets)."contries";//ขายกี่ประเทศ
                    echo "</div></div>";
                }
            ?>
            </div><!--col-->
        </div><!--row-->
    </div>
    
        
</body>
</html>