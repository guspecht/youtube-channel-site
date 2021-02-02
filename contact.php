<?php include('./addVisitor.php');?>

<!-- Require header -->
<?php  require './resources/templates/header.php';
?>

<!-- Start Contact -->
<section id="contact">
    <div class="container">
        <h1 class="to" >Contact Me</h1>
        <div class="block">
            <form action="processing_contact.php" method="POST">
                <label>Name:</label> <br>
                <input type="text" name="contactName" id="contactName" required> <br>
                <label>Email:</label> <br>
                <input type="email" name="contactEmail" id="contactEmail" required> <br>
                <label>Message:</label> <br>
                <textarea name="contactText" id="contactText" cols="46" rows="5" required></textarea> <br>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
</section>
<!-- End Contact -->

<?php
// Start Contact confirmation
    if(isset($_GET['contactEmail'])){
        if ($_GET['contactEmail'] == 't') {
            echo "<p class='emailok'></p>";
        }else if($_GET['contactEmail'] == 'f'){
            echo "<p class='emailerror'></p>";
        }
    } 
// End Contact confirmation
?>

<!-- Require footer -->
<?php  require './resources/templates/footer.php';?>