<?php /** @var Array $data */ ?>

<div class="box">
    <form method="post">
        <span class="text-center">Prihlásenie</span>
        <div class="input-container">
            <input type="text" required="" name="username"/>
            <label>Prihlasovacie meno</label>
        </div>
        <div class="input-container">
            <input type="password" required="" name="password"/>
            <label>Heslo</label>
        </div>
        <?php
        if ($data != null && $data['logged'] != 1){
            ?>
            <html> <div class="wrongInput" style="top: 60px">
                Nesprávne meno alebo heslo.
            </div>
            <?php
        } else {
            ?>
            <html> <p><br/ ></p> </html>
            <?php
        }
        ?>
        <button type="submit" class="btn">Prihlásiť</button>
    </form>
</div>



