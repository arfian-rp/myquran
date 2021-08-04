<?= $this->extend('templates/app'); ?>
<?= $this->section('konten'); ?>

<div class="container">
<table class="table mt-4" style="font-size: large;">
  <thead>
    <tr>
      <th scope="col"> </th>
      <th scope="col"> </th>
      <th scope="col"> </th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $k) : ?>
        <tr onclick="go_to('/public/surat/<?= $k->number; ?>')" id="<?= strtolower(filter_var($k->name->transliteration->id, FILTER_SANITIZE_URL)); ?>">
            
            <th scope="row"><?= $k->number; ?></th>
            <td>
                <div class="surat">
                    <div class="arabic">
                    <h1><b><?= $k->name->short; ?></b></h1>
                    </div>
                    <div class="latin">
                      <?= $k->name->transliteration->id; ?>
                    </div>
                </div>
            </td>
            <td> </td>
            <td> </td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>


<?= $this->endSection(); ?>