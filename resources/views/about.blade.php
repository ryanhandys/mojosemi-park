@extends('layouts.main')

@section('content')

    <!-- Visiting Hours Start -->
    <div
      class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
            <h1 class="display-6 text-white mb-5">Jam Berkunjung</h1>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <span>Senin</span>
                <span>08.00-16.00</span>
              </li>
              <li class="list-group-item">
                <span>Selasa</span>
                <span>08.00-16.00</span>
              </li>
              <li class="list-group-item">
                <span>Rabu</span>
                <span>08.00-16.00</span>
              </li>
              <li class="list-group-item">
                <span>Kamis</span>
                <span>08.00-16.00</span>
              </li>
              <li class="list-group-item">
                <span>Jumaat</span>
                <span>08.00-16.00</span>
              </li>
              <li class="list-group-item">
                <span>Sabtu</span>
                <span>08.00-16.00</span>
              </li>
              <li class="list-group-item">
                <span>Minggu</span>
                <span>08.00-16.00</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Visiting Hours End -->
@endsection
