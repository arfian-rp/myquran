<?= $this->extend('templates/app'); ?>
<?= $this->section('konten'); ?>

<div class="container">
<center>
  <div class="title" onclick="go_to('/public/surat/info/<?= $all_ayat->number; ?>')">
    <h1 class="display-1"><b><?= $all_ayat->name->short; ?></b></h1>
    <h5 class="latin"><?= $all_ayat->name->transliteration->id; ?></h5>
  </div>
</center>
<center>
  <audio src="<?= $audio; ?>" controls></audio>
</center>
<table class="table mt-4">
  <thead>
    <tr>
      <th scope="col"> </th>
      <th scope="col"> </th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody>

    <?php if(isset($all_ayat->preBismillah->text->arab)) : ?>
        <tr>
            <th scope="row"></th>
            <td>
                <div class="surat">
                    <div class="arabic">
                    <h1><b><?= $all_ayat->preBismillah->text->arab; ?></b></h1>
                    </div>
                    <div class="terjemahan">
                    <?= $all_ayat->preBismillah->translation->id; ?>
                    </div>
                </div>
            </td>
            <td>
            </td>
        </tr>
    <?php endif; ?>
    <?php foreach ($all_ayat->verses as $k) : ?>
        <tr>
            <th scope="row"><?= $k->number->inSurah; ?></th>
            <td>
                <div class="surat">
                    <div class="arabic">
                    <h1><b><?= $k->text->arab; ?></b></h1>
                    </div>
                    <div class="terjemahan">
                    <?= $k->translation->id; ?>
                    </div>
                </div>
            </td>
            <td>
                <h2 onclick="go_to('/public/ayat/<?= $no_surat; ?>/<?= $k->number->inSurah; ?>')">
                  <i class="bi bi-info-circle-fill"></i>
                </h2>
            </td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>

<?= $this->endSection(); ?>