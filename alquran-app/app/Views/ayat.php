<?= $this->extend('templates/app'); ?>
<?= $this->section('konten'); ?>

<div class="container">
<center>
  <audio src="<?= $all_ayat->audio->primary; ?>" controls></audio>
</center>

<table class="table mt-4" style="font-size: large;">
  <thead>
    <tr>
      <th scope="col"> </th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row"> </td>
      <td>
        <div class="arabic">
            <h1><b><?= $all_ayat->text->arab; ?></b></h1>
        </div>
      </td>
    </tr>
    <tr>
      <td scope="row"> </td>
      <td>
        <div class="latin">
            <?= $all_ayat->text->transliteration->en; ?>
        </div>
      </td>
    </tr>
    <tr>
      <td scope="row"> </td>
      <td colspan="2">
        <div class="terjemahan">
            <?= $all_ayat->translation->id; ?>
            <br>
            <?= $all_ayat->translation->en; ?>
        </div>
      </td>
    </tr>
    <tr>
      <td scope="row"> </td>
      <td colspan="2">
        <div class="tafsir">
            <?= $all_ayat->tafsir->id->short; ?>
        </div>
      </td>
    </tr>
  </tbody>
</table>

<?= $this->endSection(); ?>