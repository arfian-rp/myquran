<?= $this->extend('templates/app'); ?>
<?= $this->section('konten'); ?>

<div class="jumbotron jumbotron-fluid">
<div class="container">
    <h1 class="display-4"><b>My Quran</b></h1>
	<br>
    <h4>
		<i>Website Al-Quran gratis. berisi terjemahan, tafsir, dan download audio</i>
	</h4>
	<hr>
		<a href="/public/surat" class="btn btn-secondary">daftar surat</a><br><br>
		<h5>
        Created by <a target="_blank" href="https://www.instagram.com/arfian_rp__/" class="fw-bold"><i>Arfian</i></a>
        </h5>
</div>
</div>

<?= $this->endSection(); ?>