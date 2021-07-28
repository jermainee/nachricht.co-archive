<div class="container">
    <h2 class="headline">Verschicke sich selbstzerstörende Nachrichten anonym über einen Link!</h2>
</div>

<section class="bigbox what">
    <div class="container">
        <div class="cnt">
            <h3><?= $textContents['aboutHeadline'] ?></h3>
            <p><?= $textContents['aboutText'] ?></p>
        </div>

        <img src="img/illustrations/guy.svg" alt="Was ist Nachricht.co?" class="round"/>
        <div class="clear"></div>
    </div>
</section>

<div class="container spacee">
    <section class="features round shadow">
        <article class="left round">
            <img src="img/icons/delete.png" alt="Einmal geöffnet, für immer gelöscht"/>
            <h3><?= $textContents['deletionHeadline'] ?></h3>
            <p><?= $textContents['deletionText'] ?></p>
        </article>

        <article class="right round">
            <img src="img/icons/encryption.png" alt="Eine starke Verschlüsselung"/>
            <h3><?= $textContents['encryptionHeadline'] ?></h3>
            <p><?= $textContents['encryptionText'] ?></p>
        </article>

        <div class="clear"></div>

        <article class="left round">
            <img src="img/icons/anonymity.png" alt="Anonymität ist wichtig"/>
            <h3><?= $textContents['anonymityHeadline'] ?></h3>
            <p><?= $textContents['anonymityText'] ?></p>
        </article>

        <article class="right round">
            <img src="img/icons/smartphone.png" alt="Optimal für Smartphones und Tablets"/>
            <h3><?= $textContents['smartphoneHeadline'] ?></h3>
            <p><?= $textContents['smartphoneText'] ?></p>
        </article>

        <div class="clear"></div>

        <article class="left round">
            <img src="img/icons/development.png" alt="Weiterentwicklung des Projekts"/>
            <h3><?= $textContents['developmentHeadline'] ?></h3>
            <p><?= $textContents['developmentText'] ?></p>
        </article>

        <article class="right round">
            <img src="img/icons/userfriendly.png" alt="Benutzerfreundlichkeit bei Nachricht.co"/>
            <h3><?= $textContents['userfriendlyHeadline'] ?></h3>
            <p><?= $textContents['userfriendlyText'] ?></p>
        </article>
        <div class="clear"></div>
    </section>
</div>

<?php include( '../pages/misc.bekannt-aus.php' ); ?>
