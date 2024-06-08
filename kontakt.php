<?php include 'partials/header.php'; ?>


    <!-- kontakt -->
    <h4 id="napisnam" name="napisnam"> Napíšte nám</h4>
    <form id="contact" method="post" action="db/spracovanieFormulara.php">
            <input type="text" placeholder="Vaše meno" name="meno" id ="meno" required><br>
            <input type="email" placeholder="Váš email" name="email" id="email" required><br>
            <textarea placeholder="Vaša správa" name="sprava" id="sprava"></textarea><br>
            <input type="checkbox" name="check1" id="check1" required>
            <label for=""> Súhlasím so spracovaním osobných údajov.</label><br>
            <input type="submit" value="Odoslať">


 <?php include 'partials/footer.php'; ?>
