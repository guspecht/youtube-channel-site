<!-- Start NewsLetter -->
<section id="newsletter">
    <div class="container">
        <form action="processing_newsLetter.php" method="post">
            <p class="title">Giveaways Every Week</p>
            <input id="email" type="email" name="email" placeholder="Enter Email..." required>
            <button type="submit">Subscribe</button>
        </form>
    </div>
</section>
<?php
// Start Email confirmation
    if(isset($_GET['email'])){
        if ($_GET['email'] == 't') {
            echo "<p class='confirmation'></p>";
        }else if($_GET['email'] == 'f'){
            echo "<p class='error'></p>";
        }
    } 
// End Email confirmation
?>
<!-- End Newsletter-->