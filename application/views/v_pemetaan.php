    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('') ?>drcare/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Persebaran Kasus Pandemi COVID-19 </h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('') ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Persebaran <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<!--  mulai codingan peta dunia --> 
  <section class="ftco-section ftco-no-pt ftc-no-pb">
    <h2 style="font-weight: bold" class="text-center">Persebaran Pandemi di Dunia</h2>
    <div class="row">
    <div class="col-md-11 ml-5 mb-5 ftco-animate ">
    <div class="pricing-entry">
    <div class="col-ml-5 ftco-animate">
      <div id="mapid" style=" height:500px;"></div>


<script>
  var mymap = L.map('mapid').setView([38.244969, 31.612492], 2);

  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
      '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
      'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
  }).addTo(mymap);

   <?php foreach ($lokasi as $key => $value) { ?>
     L.marker([<?= $value['attributes']['Lat'] ?>, <?= $value['attributes']['Long_']?>]).addTo(mymap)
     .bindPopup("<b> <?= $value['attributes']['Country_Region']?></b> <br>" + 
                "Positif   : <?= $value['attributes']['Confirmed']?> <br>" +
                "Sembuh    : <?= $value['attributes']['Recovered']?> <br>" +
                "Meninggal : <?= $value['attributes']['Deaths']?> <br>"
     
     );
   <?php } ?>
</script>
          </div>
        </div>
      </div>
    </div>
</section>
<!--  akhir codingan peta dunia --> 

<!-- START ADVERTISEMENT BEDENG -->

<section class="ftco-intro" style="background-image: url(drcare/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
      <h3>Hubungi nomor dibawah ini jika mendapatkan gejala Covid-19 </h3>
      <div class="dream-btn-group fadeInUp w-text" data-wow-delay="0.4s">
				<div class="row">
					<div class="col-md-3 d-flex align-items-center">
						<p class="mb-0 ml-4"><a href="tel:199" class="btn btn-light px-4 py-3 ">Hotline :119</a></p>
            <p class="mb-0 ml-4 mr-4"><a href="tel:081133399000" class="btn btn-light px-4 py-3 ">Indonesia : 081133399000</a></p>
            <p class="mb-0 ml-4 mr-4"><a href="tel:082154021119" class="btn btn-light px-4 py-3">SulSel :082 154 021 119 (24 Jam)</a></p>
            <p class="mb-0 ml-4 mr-4"><a href="tel:085299354451" class="btn btn-light px-4 py-3">SulSel :085 299 354 451</a></p>
            </div>
					</div>
				</div>
			</div>
    </section>

<!-- END ADVERTISEMENT -->

<!--  mulai codingan peta Indonesia --> 
<section class="ftco-section ftco-no-pt ftc-no-pb">
    <h2 style="font-weight: bold" class="text-center">Persebaran Pandemi di Indonesia</h2>
    <div class="row">
    <div class="col-md-11 ml-5 mb-5 ftco-animate ">
    <div class="pricing-entry">
    <div class="col-ml-5 ftco-animate">
      <div id="mapindo" style=" height:500px;"></div>
<script>
  var mymap = L.map('mapindo').setView([-1.521843, 120.603580], 5);

  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
      '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
      'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
  }).addTo(mymap);

   <?php foreach ($nasional['features'] as $key => $value) { ?>
     L.marker([<?= $value['geometry']['y'] ?>, <?= $value['geometry']['x']?>]).addTo(mymap)
     .bindPopup("<b> <?= $value['attributes']['Provinsi']?></b> <br>" + 
                "Positif   : <?= $value['attributes']['Kasus_Posi']?> <br>" +
                "Sembuh    : <?= $value['attributes']['Kasus_Semb']?> <br>" +
                "Meninggal : <?= $value['attributes']['Kasus_Meni']?> <br>"
               );
   <?php } ?>
</script>
          </div>
        </div>
      </div>
    </div>
</section>
<!--  akhir codingan peta Indonesia --> 