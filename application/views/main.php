<?php $this->load->view('templates/header'); ?>

<main>
    <section>
        <?php foreach ($posts as $post) { ?>
            <ul>
                <li><a href="<?= base_url() ?>posts/single/<?= $post['id'] ?>"><?= $post['title']; ?></a></li>
            </ul>
        <?php } ?>
    </section>
</main>

<?php $this->load->view('templates/footer'); ?>