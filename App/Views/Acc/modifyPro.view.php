<?php /** @var Array $data */
/** @var \App\Models\acc $acc */

use App\Models\acc;

$acc = $data['Acc'];?>

<div class="box" style="top: 400px">
    <form method="post">
        <span class="text-center" >Zmeniť profil</span>
        <div class="input-container">
            <input type="text" required name="username" value="<?=$acc->getUsername()?>"/>
            <label>Prihlasovacie meno</label>
        </div>
        <div class="input-container">
            <input type="email" required name="email" value="<?=$acc->getEmail()?>"/>
            <label>eMail</label>
        </div>
        <div class="input-container">
            <input type="password" required name="password" value="<?=$acc->getPassword()?>"/>
            <label>Heslo</label>
        </div>

        <button type="submit" class="btn">Zmeniť profil</button>


    </form>
    <a class="btn" href="?c=acc&a=deleteAcc" style="font-size: 14.5px ; color: red">Zmazať účet</a>
</div>
