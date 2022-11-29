@extends('layouts.main')

@section('content')
<!-- Video Modal Start -->
<div
class="modal modal-video fade"
id="videoModal"
tabindex="-1"
aria-labelledby="exampleModalLabel"
aria-hidden="true"
>
<div class="modal-dialog">
  <div class="modal-content rounded-0">
    <div class="modal-header">
      <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
      <button
        type="button"
        class="btn-close"
        data-bs-dismiss="modal"
        aria-label="Close"
      ></button>
    </div>
    <div class="modal-body">
      <!-- 16:9 aspect ratio -->
      <div class="ratio ratio-16x9">
        <iframe
          class="embed-responsive-item"
          src=""
          id="video"
          allowfullscreen
          allowscriptaccess="always"
          allow="autoplay"
        ></iframe>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Video Modal End -->

<!-- Facts Start -->
<div
class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp"
data-wow-delay="0.1s"
>
<div class="container py-5">
  <div class="row g-4">
    <div
      class="col-md-6 col-lg-3 text-center wow fadeIn"
      data-wow-delay="0.1s"
    >
      <i class="fa fa-paw fa-3x text-primary mb-3"></i>
      <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
      <p class="text-white mb-0">Satwa</p>
    </div>
    <div
      class="col-md-6 col-lg-3 text-center wow fadeIn"
      data-wow-delay="0.3s"
    >
      <i class="fa fa-users fa-3x text-primary mb-3"></i>
      <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
      <p class="text-white mb-0">Pengunjung Harian</p>
    </div>
    <div
      class="col-md-6 col-lg-3 text-center wow fadeIn"
      data-wow-delay="0.5s"
    >
      <i class="fa fa-certificate fa-3x text-primary mb-3"></i>
      <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
      <p class="text-white mb-0">Total Membership</p>
    </div>
    <div
      class="col-md-6 col-lg-3 text-center wow fadeIn"
      data-wow-delay="0.7s"
    >
      <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
      <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
      <p class="text-white mb-0">Paket Wisata</p>
    </div>
  </div>
</div>
</div>
<!-- Facts End -->


<!-- Animal Start -->
<div class="container-xxl py-5">
<div class="container">
  <div
    class="row g-5 mb-5 align-items-end wow fadeInUp"
    data-wow-delay="0.1s"
  >
    <div class="col-lg-6">

      <h1 class="display-6 mb-0">
       <span class="text-primary">MOJOSEMI FOREST PARK</span> 
       <br>Taman Hiburan Wisata Alam</br>
      </h1>
    </div>
   
  </div>
  <div class="row g-4">
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
      <div class="row g-4">
        <div class="col-12">
          <a
            class="animal-item"
            href="img/animal-md-1.jpg"
            data-lightbox="animal"
          >
            <div class="position-relative">
              <img class="img-fluid" src="img/animal-md-1.jpg" alt="" />
              <div class="animal-text p-4">
               
              </div>
            </div>
          </a>
        </div>
        <div class="col-12">
          <a
            class="animal-item"
            href="img/animal-lg-1.jpg"
            data-lightbox="animal"
          >
            <div class="position-relative">
              <img class="img-fluid" src="img/animal-lg-1.jpg" alt="" />
              <div class="animal-text p-4">
               
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
      <div class="row g-4">
        <div class="col-12">
          <a
            class="animal-item"
            href="img/animal-lg-2.jpg"
            data-lightbox="animal"
          >
            <div class="position-relative">
              <img class="img-fluid" src="img/animal-lg-2.jpg" alt="" />
              <div class="animal-text p-4">
               
              </div>
            </div>
          </a>
        </div>
        <div class="col-12">
          <a
            class="animal-item"
            href="img/animal-md-2.jpg"
            data-lightbox="animal"
          >
            <div class="position-relative">
              <img class="img-fluid" src="img/animal-md-2.png" alt="" />
              <div class="animal-text p-4">
               
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
      <div class="row g-4">
        <div class="col-12">
          <a
            class="animal-item"
            href="img/animal-md-3.jpg"
            data-lightbox="animal"
          >
            <div class="position-relative">
              <img class="img-fluid" src="img/animal-md-3.jpg" alt="" />
              <div class="animal-text p-4">
               
              </div>
            </div>
          </a>
        </div>
        <div class="col-12">
          <a
            class="animal-item"
            href="img/animal-lg-3.jpg"
            data-lightbox="animal"
          >
            <div class="position-relative">
              <img class="img-fluid" src="img/animal-lg-3.jpg" alt="" />
              <div class="animal-text p-4">
               
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Animal End -->
@endsection
