<?= $this->extend('Layout/template') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col">
           <h1><?= $title?></h1>
           <?php foreach ($contact as $key => $a) { ?>
          <ul>
            <li><?= $a['email']?></li>
            <li><?= $a['city']?></li>
          </ul>
           <?php } ?>
        </div>
    </div>
<?= $this->endSection() ?>
    