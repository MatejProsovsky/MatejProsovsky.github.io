
<?php /** @var Array $data */ ?>
<div class="box">
    <form method="post">
        <span class="text-center">Profil</span>
        <div class="prof">
            <label>Prihlasovacie meno : <?= $data['username'] ?></label>
        </div>
        <div class="prof">
            <label>eMail : <?= $data['email'] ?></label>
        </div>
        <div class="prof">
            <label>Heslo : <?= $data['password'] ?></label>
        </div>

        <a class="btn" href="?c=acc&a=modifyPro" style="top: 20px; border: 2px solid cyan">Upraviť profil</a>

    </form>

</div>