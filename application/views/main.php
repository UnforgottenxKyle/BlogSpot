<?php $this->load->view('templates/header'); ?>

<main>
    <section>
        <?php foreach ($posts as $post) { ?>
            <ul><?= $post['title']; ?></ul>
        <?php } ?>
    </section>
</main>

<?php $this->load->view('templates/footer'); ?>