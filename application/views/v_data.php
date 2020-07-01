


<section class="hero-wrap hero-wrap-2" style="background-image: url(<?= base_url('') ?>drcare/images/2.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">DATA COVID-19 Indonesia dan Dunia </h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('') ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>DATA <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
</section>

        <!-- DATA INDONESIA -->

<section class="ftco-section ftco-no-pt ftc-no-pb">
            <h2 style="font-weight: bold "class="text-center">DATA COVID-19 DI INDONESIA</h2>


    <div class="container mb-3 mt-3">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
     <thead>
      <tr>
        <th>No</th>
        <th>Nama Provinsi</th>
        <th>Jumlah Positif</th>
        <th>Jumlah Sembuh</th>
        <th >Jumlah Meninggal</th>
      </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach ($prop as $key => $value) {
        ?>
      <tr>

        <td><?= $no++ ?></td>
        <td class="text-center"><?= $value['attributes']['Provinsi']  ?> </td>
        <td class="text-center"><?= $value['attributes']['Kasus_Posi']  ?> </td>
        <td class="text-center"><?= $value['attributes']['Kasus_Semb']  ?> </td>
        <td class="text-center"><?= $value['attributes']['Kasus_Meni']  ?> </td>
      </tr>
    <?php } ?>

    </tbody>
  </table>
        </div>
</section>
<!-- END DATA COVID-19 INDONESIA -->


<!-- START ADVERTISEMENT BEDENG -->

    <section class="ftco-intro" style="background-image: url(drcare/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h2>Mengalami Gejala Mirip COVID-19?</h2>
						<p class="mb-0">Periksakan gejala yang Anda alami melalui self-assessment dari Dinas Kesehatan DKI Jakarta</p>
						<p></p>
					</div>
					<div class="col-md-3 d-flex align-items-center">
						<p class="mb-0"><a href="https://cekcorona-dinkes.jakarta.go.id/" class="btn btn-secondary px-4 py-3">Self-Check in This!</a></p>
					</div>
				</div>
			</div>
    </section>

<!-- END ADVERTISEMENT -->



<!--   START DATA COVID-19 DI DUNYA -->

		<section class="ftco-section ftco-no-pt ftc-no-pb">

            <h2 style="font-weight: bold " class="text-center">DATA COVID-19 DI DUNIA</h2>

    <div class="container mb-3 mt-3">
    <table id="contoh" class="table table-striped table-bordered" style="width:100%">

    <thead>
      <tr>
        <th>No </th>
        <th>Nama Negara </th>
        <th>Jumlah Kasus </th>
        <th>Jumlah Sembuh </th>
        <th>Jumlah Meninggal </th>
        <th>Jumlah Kasus yang Aktiv </th>
      </tr>
    </thead>
    <tbody>
   <?php $no=1; foreach ($dunia as $key =>$value ) {
        ?>
      <tr>
        <td><?= $no++ ?></td>
        <td> <?= $value['attributes']['Country_Region'] ?> </td>
        <td class="text-center"><?= $value['attributes']['Confirmed']  ?> </td>
        <td class="text-center"><?= $value['attributes']['Recovered']  ?> </td>
        <td class="text-center"><?= $value['attributes']['Deaths']  ?> </td>
        <td class="text-center"><?= $value['attributes']['Active']  ?> </td>

      </tr>
    <?php } ?>

    </tbody>
   </table>
 </div>
</section>
<!-- /.row -->

