<!-- Require header -->
<?php  require './resources/templates/header.php';?>
<?php
    include('./phpfunctions.php');
    $cookiePage = $_SERVER['REQUEST_URI'];
    addVisitor($cookiePage);
?>
<!-- Start Video -->
<section id="youtubevideos">
    <div class="container">
        <div id="watch">
            <P>Watch My Videos</P>
        </div>
        <div class="title">
            <P>Fortnite</P>
        </div>
        <div class="container-1">
            <div class="videoWrapper">
                <iframe class="left" src="<?php getCreativeVideo()?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="container-2-incolumn top">
            <div class="videoWrapper">
                <iframe  src="https://www.youtube.com/embed/9dzsKm2YJNc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="container-2-incolumn">
            <div class="videoWrapper">
                <iframe  src="https://www.youtube.com/embed/8AW7JQt563M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div> 
    </div>
    
    <div class="container">
        <div class="title">
            <P>Fortnite Quests</P>
        </div>
        <?php 
        $videos = getQuestVideos();
        for ($i = 0; $i < count($videos); $i++) {
        ?>
        <div class="container-3-inline">
            <div class="videoWrapper">
                <iframe width="560" height="315" src="<?php echo $videos[$i]->src?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div> 
        <?php 
        }
        ?>   
    </div>

    <div class="container">
        <div class="title">
            <P>Fortnite Season 4 XP Coins</P>
        </div>
                <div class="container-3-inline">
            <div class="videoWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/bC_PFUJeP_k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div> 
        <div class="container-3-inline">
            <div class="videoWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/qVESov-voN0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>   
        <div class="container-3-inline">
            <div class="videoWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/f2tsy4HHJSM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>     
    </div>      


    <div class="container">
        <div class="title">
            <P>Fortnite Gameplay</P>
        </div>
                <div class="container-3-inline">
            <div class="videoWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/SwaVmh14mOc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div> 
        <div class="container-3-inline">
            <div class="videoWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/HxwFIpdYGXU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>   
        <div class="container-3-inline">
            <div class="videoWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/JWBvF9hW1hQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="container-3-inline">
            <div class="videoWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ObL25oSe2Eo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div> 
        <div class="container-3-inline">
            <div class="videoWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/IfHXQZawoF0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>   
        <div class="container-3-inline">
            <div class="videoWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/QtnUAxsnrbM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>      
    </div>        

     <div class="container">
        <div class="title">
            <P>Fortnite Wolverine Challenges</P>
        </div>
                <div class="container-3-inline">
            <div class="videoWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/EHF2BoKY20Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div> 
        <div class="container-3-inline">
            <div class="videoWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/BgxOhVYGa-M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>   
        <div class="container-3-inline">
            <div class="videoWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/fboU7Xuf7ug" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>         
    </div>      
</section>
<!-- End Video -->

<!-- Require newsletter -->
<?php  require './resources/templates/newsletter.php';?>                   

<!-- Start More Info -->
<section id="more-info">
    <div class="container">
        <div class="text-3">
            <p>Videos Every week <p>Watch a New Video Every Week</p> </p>
        </div>
        <div class="text-3">
            <p>Subscribe To The channel <p> Do not forget to turn on the notifications</p></p>
        </div>
        <div class="text-3">
            <p>A Chance To Win <p>Get a Chance to Win a Giveaway Every Week</p></p>
        </div>
    </div>
</section>
<!-- End More Info -->


<!-- Require footer -->
<?php  require './resources/templates/footer.php';?>