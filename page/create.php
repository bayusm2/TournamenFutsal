<?php

$process = isset($_GET['process']) ? ($_GET['process']) : false;

?>

<?php if ($process == 'failed') : ?>
    <div class="alert alert-danger" role="alert">
        Semua formulir harus diisi
    </div>
<?php endif; ?>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h1 style="text-align: center; color: #185ADB;">Pendaftaran Tim</h1>
                </div>
                <form method="POST" action="<?= BASE_URL . 'process/process_add.php' ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Tim</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="prodi" class="form-label">Prodi</label>
                        <select id="prodi" name="prodi" required> ==$0
                            <option value="AB">AB</option>
                            <option value="BI">BI</option>
                            <option value="AK">AK</option>
                            <option value="AP">AP</option>
                            <option value="TKA">TKA</option>
                            <option value="TRO">TRO</option>
                            <option value="TL">TL</option>
                            <option value="TI">TI</option>
                            <option value="TKK">TKK</option>
                        </select>
                    </div>
                    <div class="mb-3">
                    <label for="semester" class="form-label">Semester</label>
                        <select id="semester" name="semester" required> ==$0
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                    <div class="mb-3">
                    <label for="jumlahPemain" class="form-label">Jumlah Pemain</label>
                        <select id="jumlahPemain" name="jumlahPemain" required> ==$0
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nowa" class="form-label">Nomor WA Official team</label>
                        <input type="number" class="form-control" id="nowa" name="nowa">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .row {
        display: flex;
        justify-content: center;
    }
</style>

<footer class="bg-opacity-100 py-3">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
				</div>
			</div>
		</div>
	</footer>