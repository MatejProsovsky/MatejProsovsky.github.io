
<?php /** @var Array $data */ ?>
<div class="box">
    <form method="post">
        <span class="text-center">Registrácia</span>
        <div class="input-container">
            <input type="text" required name="username"/>
            <label>Prihlasovacie meno</label>
        </div>
        <div class="input-container">
            <input type="email" required name="email" />
            <label>eMail</label>
        </div>
        <div class="input-container">
            <input type="password" required name="password"/>
            <label>Heslo</label>
        </div>
        <?php
        if ($data != null && $data['registered'] != 1){
            ?>
                <html> <div class="wrongInput" style="top: 60px; left: 3vw">
                    Používateľské meno alebo heslo je obsadené.
                </div>
            <?php
        } else {
            ?>
            <html> <p><br/ ></p> </html>
            <?php
        }
        ?>
        <button type="submit" class="btn">Registrovať</button>


    </form>

</div>