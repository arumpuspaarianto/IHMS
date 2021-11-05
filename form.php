
<?php
 $title="Hospital Management System";
?>
  <div class="content-wrapper">
    <!--**********************************
            Nulis LINK
        ***********************************-->
		<link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./vendor/chartist/css/chartist.min.css">
    <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
	<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">

       <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex mb-3 mb-md-5 align-items-start">
					<div class="mr-auto d-none d-lg-block">
						<h3 class="text-primary font-w600">Welcome to RS Bunda Surabaya</h3>
						<p class="mb-0">Hospital Admin Dashboard</p>
					</div>
					
					<div class="input-group search-area ml-auto d-inline-flex">
						<input type="text" class="form-control" placeholder="Search here">
						<div class="input-group-append">
							<span class="input-group-text"><i class="flaticon-381-search-2"></i></span>
						</div>
					</div>
					<a href="javascript:void(0);" class="btn btn-primary ml-3"><i class="flaticon-381-settings-2 mr-0"></i></a>
				</div>
   <!--**********************************
            Form
        ***********************************-->
        <h3> Input Data <h3>

<form action"" method="post">
    <table>
        <tr>
            <div class="form-group row">
                <div class="form-group col-md-3">
                    <label>Tag ID</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>12537547</option>
                            <option>12341353</option>
                            <option>15643652</option>
                        </select>
                    
                </div>
            </div>        
        </tr>
        <tr>
            <div class="form-group row">
                <td width="200">Tag ID</td>
                <div class="col-sm-9">
                    <td><input type="text" name="tag_id" class="form-control input-default"></td>
                </div>
            </div>
        </tr>        
        <tr>
            <div class="form-group row">
                <td width="200">Tanggal Masuk</td>
                <div class="col-sm-9">
                    <td><input type="text" name="tanggal_masuk" class="form-control input-default"></td>
                </div>
            </div>
        </tr>
        <tr>
            <div class="form-group row">
                <td width="200">Nama Pasien</td>
                <div class="col-sm-9">
                    <td><input type="text" name="nama_pasien" class="form-control input-default"></td>
                </div>
            </td>
        </tr>
        <tr>
            <div class="form-group row">
                <td width="200">Dokter</td>
                <div class="col-sm-9">
                    <td><input type="text" name="dokter" class="form-control input-default"></td>
                </div>
            </td>
        </tr>
        <tr>
            <div class="form-group row">
                <td width="200">Diagnosa</td>
                <div class="col-sm-9">
                    <td><input type="text" name="diagnosa" class="form-control input-default"></td>
                </div>
            </td>
            <tr>
            <div class="form-group row">
                <td width="200">Status</td>
                <div class="col-sm-9">
                    <td><input type="text" name="status" class="form-control input-default"></td>
                </div>
            </td>
        </tr>
        <tr>
            <div class="form-group row">
                <td width="200">Ruang</td>
                <div class="col-sm-9">
                    <td><input type="text" name="ruang" class="form-control input-default"></td>
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="input"</td>
        </tr>
    </table>
</form>

<?php
include "koneksi.php";

if(isset($_POST['input'])){
 mysqli_query($koneksi, "insert into tb_clinical_pasien set
tag_id = '$_POST[tag_id]',
tanggal_masuk = '$_POST[tanggal_masuk]',
nama_pasien = '$_POST[nama_pasien]',
dokter = '$_POST[dokter]',
diagnosa = '$_POST[diagnosa]',
status = '$_POST[status]',
ruang = '$_POST[ruang]'
");

echo "Data baru telah tersimpan";

}

?>




