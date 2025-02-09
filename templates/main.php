<main>
    <hgroup>
        <h3><?= $title ?> - <?= $until_message ?></h3>
        <p>Fecha de estreno: <?= $release_date ?></p>
        <section>
            <img src="<?= $poster_url ?>" width="400" alt="Poster de <?= $title ?>" style="border-radius: 16px;" />
        </section>
        <p>Description: <br> <?= $overview ?></p>

        <br><br>
        <p>El siguiente estreno es "<?= $following_production["title"] ?>" y sera en <?= $following_production["days_until"] ?> días.</p>
        <section>
            <img src="<?= $following_production["poster_url"] ?>" width="200" alt="Poster de <?= $following_production["title"] ?>" style="border-radius: 16px;" />
        </section>
    </hgroup>
</main>
