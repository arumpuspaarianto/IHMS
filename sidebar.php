<div class="deznav">
    <div class="deznav-scroll">
		<button type="button" class="btn btn-quick mb-2" data-toggle="modal" data-target=".bd-example-modal-lg">
      		+ Quick Add
    	</button>
		<ul class="metismenu" id="menu">
            <li>
				<a href="<?=url('dashboard')?>" aria-expanded="false">
					<i class="fas fa-home"></i>
					<span class="nav-text">Dashboard</span>
				</a>
			</li>
			<li>
				<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
					<i class="fas fa-procedures"></i>
					<span class="nav-text">Pasien</span>
				</a>
                <ul aria-expanded="false">
					<li><a href="<?=url('form')?>">Input</a></li>
					<li><a href="<?=url('pasien_dewasa')?>">Pasien Dewasa</a></li>
					<li><a href="<?=url('pasien_anak')?>">Pasien Anak - Anak</a></li>
					<li><a href="<?=url('pasien_bayi')?>">Pasien Bayi</a></li>
					<li><a href="<?=url('rekam_medis')?>">Rekam Medis</a></li>
					<li><a href="<?=url('log_aktivitas_pasien')?>">Log Aktivitas Pasien</a></li>
					<li><a href="<?=url('inputact')?>">Input Act</a></li>
				</ul>
            </li>
			<li>
				<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
					<i class="fas fa-user-md"></i>
					<span class="nav-text">Tenaga Medis</span>
				</a>
                <ul aria-expanded="false">
					<li><a href="<?=url('tenagamedis-dokter')?>">Dokter</a></li>
					<li><a href="<?=url('tenagamedis-perawat')?>">Perawat</a></li>
					<li><a href="<?=url('tenagamedis-karyawan')?>">Karyawan</a></li>
					<li><a href="<?=url('activity-report')?>">Activity Report</a></li>
					<li><a href="<?=url('datalog-tenagamedis')?>">Data Log Tenaga Medis</a></li>
				</ul>
            </li>
			<li>
				<a class="ai-icon" href="<?=url('inventory')?>" aria-expanded="false">
					<i class="flaticon-381-home-1"></i>
					<span class="nav-text">Inventory</span>
				</a>
            </li>
			<li>
				<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
					<i class="fas fa-hospital"></i>
					<span class="nav-text">Clinical Management</span>
				</a>
                <ul aria-expanded="false">
					<li><a href="<?=url('clinicalmng-nakes')?>">Tenaga Kesehatan</a></li>
					<li><a href="<?=url('clinicalmng-pasien')?>">Pasien</a></li>
					<li><a href="<?=url('clinicalmng-inventory')?>">Pasien 2</a></li>
				</ul>
            </li>
			<li>
				<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
					<i class="flaticon-381-networking"></i>
					<span class="nav-text">Asset Tracking</span>
				</a>
                <ul aria-expanded="false">
					<li><a href="index.html">Pasien</a></li>
					<li><a href="doctors.html">Peralatan Medis</a></li>
				</ul>
            </li>	
		</ul>
	</div>
</div>