@extends('layouts.navbar')
@section('content')        

{{-- Utama --}}
<section id="utama">
	<div class="box" data-aos="fade-up" data-aos-duration="1000">
		<header>
		<div class="header-content">
			<h1>NAGORI NAGORITONGAH</h1>
			<div class="line"></div>
			<h2>Nagori Nagoritongah adalah sebuah desa di Sumatera Utara dengan keindahan alam dan masyarakat yang ramah. <br> Terdapat berbagai destinasi wisata seperti air terjun, hutan pinus, dan kebun teh yang menarik untuk dikunjungi.</h2>
		</div>
		</header>
	</div>
</section>

{{-- Fitur --}}
<section id="fitur">
	<div class="row d-flex flex-wrap">
		<div class="card-group">
		<div class="col-sm-2 mx-auto">
			<div class="box">
			<div class="card" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
				<div class="card-body text-center">
				<a href="login"><img src="img/4.png" class="card-img-top-1" alt="..."></a>
				<h5 class="card-title"><b>pengurusan berkas</b></h5>
				<p class="card-text">Keperluan pengurusan berkas seperti KTP, KK, dan lain sebagainya.</p>
				</div>
			</div>
			</div>
		</div>
		<div class="col-sm-2 mx-auto">
			<div class="box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
			<div class="card" >
				<div class="card-body text-center">
				<a href="login"><img src="img/1.png" class="card-img-top-1" alt="..."></a>
				<h5 class="card-title"><b>Forum Diskusi</b></h5>
				<p class="card-text">Untuk berbagi informasi, ide, pendapat, dan tempat pengaduan</p>
				</div>
			</div>
			</div>
		</div>
		<div class="col-sm-2 mx-auto">
			<div class="box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
			<div class="card">
				<div class="card-body text-center">
				<a href="umkm"><img src="img/3.png" class="card-img-top-1" alt="..."></a> 
				<h5 class="card-title"><b>UMKM Nagori</b></h5>
				<p class="card-text">Kumpulan UMKM yang terdapat di Nagori, daftarkan UKMK Anda!</p>
				</div>
			</div>
			</div>
		</div>
		<div class="col-sm-2 mx-auto">
			<div class="box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
			<div class="card">
				<div class="card-body text-center">
					<a href="#"><img src="img/4.png" class="card-img-top-1" alt="..."></a>
				<h5 class="card-title"><b>Transparansi Dana</b></h5>
				<p class="card-text">Informasi pendapatan dan pengeluaran Dana pertahun dan realisasinya.</p>
				</div>
			</div>
			</div>
		</div>
	</div>
	</div>
</section>

{{-- Visi Misi --}}
<section id=visimisi>
	<div class="container">
		<div class="row text-center mb-3">
		  <div class="col">
        <h1><b>Visi Misi</b></h1>
		  </div>
		</div>
		<div class="row justify-content-center fs-5 ">
		  <div class="col-md-4 mb-3 text-center">
			<img src="../img/component_4.png" class="card-img-top-2" alt="...">
		  </div>
		  <div class="col-md-4 text-center" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
			<div class="box">
			  <h2>VISI</h2>
			  <p>Meningkatkan kesejahteraan masyarakat yang bermartabat dan religius dengan mengembangkan potensi sumber daya. </p>
			</div>
		  </div>
		  <div class="col-md-4 text-center">
			<div class="box" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
			  <h2>MISI</h2>
			  <P>Memberikan pelayanan yang positif kepada masyarakat dan membuat rencana pembangunan diberbagai sektor baik pertanian maupun perekonomian</P>
			</div>
		  </div>
		</div>
	  </div>
</section>

{{-- Perangkat Desa --}}
<section id="perangkat">
	 <div class="container2">
            <div class="row">
              <h1><b>STRUKTUR PERANGKAT DESA</b></h1>
              <div class="col-sm-3 mx-auto">
                <div class="card text-center">
					<div class="box" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                  		<img src="../img/gideon.jpg" class="card-img-top-3" alt="...">
					</div>
                  <div class="card-body">
                    <h5 class="card-title">Kepala Desa</h5>
                    <p class="card-text">Gideon Manurung</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3 mx-auto">
				<div class="box" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
					<div class="card text-center">
					<img src="../img/perangkat1.png" class="card-img-top-3" alt="...">
					<div class="card-body">
						<h5 class="card-title">Wakil Kepala Desa</h5>
						<p class="card-text">Putrija Malau</p>
					</div>
					</div>
				</div>
              </div>
              <div class="col-sm-3 mx-auto">
				<div class="box" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
					<div class="card text-center">
					<img src="../img/Perangkat1.png" class="card-img-top-3" alt="...">
					<div class="card-body">
						<h5 class="card-title">Sekretaris Desa</h5>
						<p class="card-text">Putri Anisa</p>
					</div>
					</div>
				</div>
              </div>
              <div class="col-sm-3 mx-auto">
				<div class="box" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
					<div class="card text-center">
					<img src="../img/Perangkat1.png" class="card-img-top-3" alt="...">
					<div class="card-body">
						<h5 class="card-title">Wakil Sekretaris Desa</h5>
						<p class="card-text">Agnes Tryani</p>
					</div>
					</div>
				</div>
              </div>
			  {{-- line baru --}}
			  <br>
			  <div class="row">
				<div class="col-sm-3 mx-auto">
					<div class="box" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
						<div class="card text-center">
							<img src="../img/Perangkat1.png" class="card-img-top-3" alt="...">
							<div class="card-body">
							<h5 class="card-title">Bendahara Desa</h5>
							<p class="card-text">Gabryelle Ninna</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 mx-auto">
					<div class="box" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
						<div class="card text-center">
							<img src="../img/Perangkat1.png" class="card-img-top-3" alt="...">
							<div class="card-body">
							<h5 class="card-title">Wakil Bendahara Desa</h5>
							<p class="card-text">Erli Gurning</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 mx-auto">
					<div class="box" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
						<div class="card text-center">
							<img src="../img/Perangkat1.png" class="card-img-top-3" alt="...">
							<div class="card-body">
							<h5 class="card-title">Kepala Desa</h5>
							<p class="card-text">Gideon Manurung.</p>
							</div>
						</div>
					</div>
				</div>
            </div>
          </div>
</section>

<hr>
{{-- berita --}}
<section id="berita">
	<div class="container3">
		<div class="row margin-buttom:20px">
		  <h1><b>BERITA</b></h1>
		  	<div class="col-sm-3 mx-auto">
				<div class="box" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="100">
					<div class="card-1">
						<img src="../img/1.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title-1">Petunjuk Teknis Pengurusan Surat Keterangan Untuk Dibawa Ke Kantor Camat</h5>
							<p class="card-text-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<p class="card-text-2">18 Mei 2023</p>
						</div>
					</div>
				</div>
			</div>
		  <div class="col-sm-3 mx-auto">
			<div class="box" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="100">
			  	<div class="card-1">
					<img src="../img/1.jpg" class="card-img-top" alt="...">
					<div class="card-body">
					<h5 class="card-title-1">Desa Nagori - Nagoritongah Mengadakan Ibadah Bersama Anak - Anak Setempat</h5>
					<p class="card-text-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<p class="card-text-2">24 Oktober 2023</p>
					</div>
			 	</div>
			</div>
		  </div>
		  <div class="col-sm-3 mx-auto">
			<div class="box" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="100">
				<div class="card-1">
				<img src="../img/1.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title-1">Pemilihan Pangulu Nagori Di 248 Nagori Nagoritongah Kabupaten Simalungun </h5>
					<p class="card-text-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<p class="card-text-2">30 Oktober 2023</p>
				</div>
				</div>
			</div>
		</div>
		<div class="d-grid gap-2 d-md-flex justify-content-md-center">
			<a href="#"><button class="btn btn-primary me-md-2" type="button" style="background-color:#3A655D;">Lihat Selengkapnya</button></a>
		  </div>
	  </div>
</section>

{{-- Footer --}}
<footer class="text-center-1 text-lg-start bg-light text-muted mt-5">
	<section class="">
	  <div class="container text-center1 text-md-start mt-5">
		<div class="row mt-3">
		  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 mt-5">
			<h6 class="text-uppercase fw-bold mb-4">
			  Website Resmi <br> Desa Nagori Nagoritongah
			</h6>
			<p>
			  Website resmi dari desa nagori nagoritongah sebagai perwujudan digitalisasi desa mahasiswa
			  Universitas Sumatera Utara Jurusan Teknologi Informasi
			</p>
		</div>
		  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 mt-5">
			<h6 class="text-uppercase fw-bold mb-4">Contact</h6>
			<p><i class="fas fa-home me-3"></i> Jl.Tuan Jahoensa Purba, Nagori NagoriTongah, Kec.Purba, Kabupaten Simalungun.
			</p>
			<p>
			  <i class="fas fa-envelope me-3"></i>
			  nagoritongah@gmail.com
			</p>
			<p><i class="fas fa-phone me-3"></i> 087823322113</p>
		  </div>
		</div>
	  </div>
	</section>
  </footer>
@endsection