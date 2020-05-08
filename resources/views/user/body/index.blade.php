@extends('user.layout.app')
@section('content')
<div class="hero-wrap">
      <div class="overlay"></div>
      <div class="circle-bg"></div>
      <div class="circle-bg-2"></div>
      <div class="container-fluid">
        <div class="slider-text d-md-flex align-items-center" data-scrollax-parent="true">

          <div class="one-forth pr-md-4 ftco-animate align-self-md-center" data-scrollax=" properties: { translateY: '70%' }">
          	<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Just Do It Now</h1>
            <p class="mb-md-5 mb-sm-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Permudah keperluan anda bersama kami, waktu yang cepat dengan hasil yang mantap.</p>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" class="btn btn-primary px-4 py-3">Get started</a></p>
          </div>
          <div class="one-half align-self-md-end align-self-sm-center">
          	<div class="slider-carousel owl-carousel">
          		<div class="item">
			          <img src="{{ asset('frontend/images/dashboard_full_1.png') }}" class="img-fluid img"alt="">
		          </div>
		          <div class="item">
			          <img src="{{ asset('frontend/images/dashboard_full_2.png') }}" class="img-fluid img"alt="">
		          </div>
		          <div class="item">
			          <img src="{{ asset('frontend/images/dashboard_full_3.png') }}" class="img-fluid img"alt="">
		          </div>
	          </div>
          </div>
        </div>
      </div>
    </div>
  
    <section class="ftco-section services-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Layanan</span>
            <h2 class="mb-4">Mengapa harus memilih kami</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-guarantee"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Garansi</h3>
                <p>Semua Pelayanan yang kami berikan mendapatkan garansi 100% hingga produk jadi.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-shield"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Kemudahan dan keamanan</h3>
                <p>Kemudahan untuk menyesuaikan kriteria sesuai kebutuhan konsumen. Dengan cara yang aman.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-support"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Profesionalitas</h3>
                <p>Projek akan di kerjakan oleh ahlinya dengan proses yang terstruktur.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
  
    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Layanan</span>
            <h2 class="mb-4">Pelayanan Terbaik Kami</h2>
          </div>
        </div>
    		<div class="row">
          @foreach($data_service as $data)
	        <div class="col-md-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            <h2 class="heading">{{$data->name}}</h2>
	            <span class="price"><?php echo  htmlspecialchars_decode($data->icon) ?></span>
	            <span class="excerpt d-block">100% free. Forever</span>
	            
	            <h3 class="heading-2 mb-3">{{$data->details}}</h3>
              
	            <a href="#" class="btn btn-primary d-block px-3 py-3 mb-4">Lihat detail</a>
	            </div>
	          </div>
          </div>
          @endforeach
    	</div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Data pengunjung</h2>
            <span class="subheading">Detail customer kami setiap harinya.</span>
          </div>
        </div>
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="2000">0</strong>
		                <span>Tahunan</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Bulanan</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="32000">0</strong>
		                <span>Mingguan</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="31998">0</strong>
		                <span>Harian</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Pendapat Pelanggan</span>
            <h2 class="mb-4">Bagaiamana Konsumen berpendapat ?</h2>
            <p>Semua Pendapat dari Pelanggan kami dapatkan ketika jasa yang kami tawarkan sudah siap 100%</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              @foreach($data_comment as $result)
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style='background-image: url({{ asset("frontend/images/$result->profil") }})'>
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">{{$result->comment }}</p>
                    <p class="name">{{$result->name}}</p>
                    <span class="position">{{$result->position }}</span>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-5">
    			<div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Services</span>
            <h2 class="mb-4">Bagaimana Kami Bekerja</h2>
          </div>
    		</div>
    		<div class="row">
          <div class="col-md-12 nav-link-wrap mb-5 pb-md-5 pb-sm-1 ftco-animate">
            <div class="nav ftco-animate nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-nextgen-tab" data-toggle="pill" href="#v-pills-nextgen" role="tab" aria-controls="v-pills-nextgen" aria-selected="true">Berdiskusi</a>

              <a class="nav-link" id="v-pills-performance-tab" data-toggle="pill" href="#v-pills-performance" role="tab" aria-controls="v-pills-performance" aria-selected="false">Pembagian TIM</a>

              <a class="nav-link" id="v-pills-effect-tab" data-toggle="pill" href="#v-pills-effect" role="tab" aria-controls="v-pills-effect" aria-selected="false">Evaluasi</a>
            </div>
          </div>
          <div class="col-md-12 align-items-center ftco-animate">
            
            <div class="tab-content ftco-animate" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-nextgen" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
              	<div class="d-md-flex">
	              	<div class="one-forth align-self-center">
	              		<img src="{{ asset('frontend/images/activity_1.jpg') }}" class="img-fluid border" alt="">
	              	</div>
	              	<div class="one-half ml-md-5 align-self-center">
		                <h2 class="mb-4">Berdiskusi</h2>
		              	<p>Tahap Awal dalam mengerjakan sebuah projek, kami akan melakukan diskusi dengan client, produk yang seperti apa yang akan dibuat mulai dari detail pengerjaan dan waktu pengerjaan. Semua akan dibicarakan secara rinci hingga jelas sejelas-jelasnya.</p>
		                <p>Hal itu kami lakukan agar tidak terjadi kesalahan dalam pengerjaan dan menghasilkan hasil yang maksimal.</p>
		              </div>
	              </div>
              </div>

              <div class="tab-pane fade" id="v-pills-performance" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                <div class="d-md-flex">
	              	<div class="one-forth order-last align-self-center">
	              		<img src="{{ asset('frontend/images/activity_2.jpg') }}" class="img-fluid border" alt="">
	              	</div>
	              	<div class="one-half order-first mr-md-5 align-self-center">
		                <h2 class="mb-4">Pembagian TIM</h2>
		              	<p>Setiap mengerjakan sebuah projek kami akan membagi tim untuk satu projek sehingga projek akan fokus di kerjakan dan tidak terbagi-bagi oleh projek yang lain. Tim terdiri dari Tim Lead dan senior jadi kepuasan pelanggan akan selalu terjaga.</p>
		                <p>Tujuan kami membuat tim untuk satu projek agar projek yang di kerjakan menjadi cepat dan hasil yang maksimal.</p>
		              </div>
	              </div>
              </div>

              <div class="tab-pane fade" id="v-pills-effect" role="tabpanel" aria-labelledby="v-pills-effect-tab">
                <div class="d-md-flex">
	              	<div class="one-forth align-self-center">
	              		<img src="{{ asset('frontend/images/activity_3.jpg')}}" class="img-fluid border" alt="">
	              	</div>
	              	<div class="one-half ml-md-5 align-self-center">
		                <h2 class="mb-4">Evaluasi Hasil</h2>
		              	<p>Setelah projek selesai di kerjakan kami akan mengevaluasi hasil tahap pertama kita evaluasi secara pribadi dari manager ke tim lead setelah itu kita evaluasi ke client sehingga setiap ada revisi akan langsung di kerjakan.</p>
		                <p>Evaluasi adalah hal terpenting untuk setiap projek yang di kerjakan agar konsumen puas dengan hasil yang maksimal</p>
		              </div>
	              </div>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section  ftco-animate">
              <h2>Selalu update informasi</h2>
              <p>Ikuti setiap kami update mulai dari teknologi,diskon,dan lain sebagainya.</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-6">
                  <form action="/email_post" method="post" class="subscribe-form" class="text-dark">
                    {{csrf_field()}}
                    <div class="form-group">
                      <span class="icon icon-paper-plane"></span>
                      <input type="text" name="email" class="form-control" placeholder="Enter email address">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection
