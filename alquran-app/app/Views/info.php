<?= $this->extend('templates/app'); ?>
<?= $this->section('konten'); ?>

<div class="container">

<table class="table mt-4" style="font-size: large;">
  <thead>
    <tr>
      <th scope="col"> </th>
      <th scope="col"> </th>
      <th scope="col"> </th>
    </tr>
  </thead>

  <tbody>

    <tr>
        <td></td>
      <td>
        <div class="arabic">
            <h1 class="display-1"><b><?= $all_ayat->name->short; ?></b></h1>
        </div>
      </td>
        <td></td>
    </tr>

    <tr>
    <td></td>
      <td>
        <div class="latin">
        <h5 class="latin"><?= $all_ayat->name->transliteration->id; ?></h5>
        </div>
      </td>
    <td></td>
    </tr>

    <tr>
        <td></td>
      <td>
        <div class="terjemahan">
            <?= $all_ayat->name->translation->id; ?>
            <hr>
            <?= $all_ayat->name->translation->en; ?>
        </div>
      </td>
      <td></td>
    </tr>

    <tr>
        <td></td>
      <td>
        <div class="diturunkan-di">
            <b>diturunkan di: </b><?= $all_ayat->revelation->id; ?>
        </div>
      </td>
      <td></td>
    </tr>

    <tr>
        <td></td>
      <td>
        <div class="jml-ayat">
            <b>jumlah ayat: </b><?= $all_ayat->numberOfVerses; ?>
        </div>
      </td>
      <td></td>
    </tr>

    <tr>
        <td></td>
      <td>
        <div class="tafsir">
            <b>tafsir: </b><?= $all_ayat->tafsir->id; ?>
        </div>
      </td>
      <td></td>
    </tr>

  </tbody>
</table>
<br>
<center>
  <audio src="<?= $audio; ?>" controls></audio>
</center>

<?= $this->endSection(); ?>