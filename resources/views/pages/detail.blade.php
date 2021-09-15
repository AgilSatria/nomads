@extends('layouts.app')
@section('title', 'Detail Travel')


@section('content')
<main class="details">
    <section class="section-details-header"></section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col p-0">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">Paket Travel</li>
                <li class="breadcrumb-item active">Details</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1>Nusa Panida</h1>
              <p>Republic of Indonesia Raya</p>
              <div class="gallery">
                <div class="xzoom-container">
                  <img
                    class="xzoom"
                    id="xzoom-default"
                    src="frontend/images/details-1.jpg"
                    xoriginal="frontend/images/details-1.jpg"
                  />
                  <div class="xzoom-thumbs">
                    <a href="frontend/images/details-1.jpg"
                      ><img
                        class="xzoom-gallery"
                        width="128"
                        src="frontend/images/details-1.jpg"
                        xpreview="frontend/images/details-1.jpg"
                    /></a>
                    <a href="frontend/images/details-1.jpg"
                      ><img
                        class="xzoom-gallery"
                        width="128"
                        src="frontend/images/details-1.jpg"
                        xpreview="frontend/images/details-1.jpg"
                    /></a>
                    <a href="frontend/images/details-1.jpg"
                      ><img
                        class="xzoom-gallery"
                        width="128"
                        src="frontend/images/details-1.jpg"
                        xpreview="frontend/images/details-1.jpg"
                    /></a>
                    <a href="frontend/images/details-1.jpg"
                      ><img
                        class="xzoom-gallery"
                        width="128"
                        src="frontend/images/details-1.jpg"
                        xpreview="frontend/images/details-1.jpg"
                    /></a>
                    <a href="frontend/images/details-1.jpg"
                      ><img
                        class="xzoom-gallery"
                        width="128"
                        src="frontend/images/details-1.jpg"
                        xpreview="frontend/images/details-1.jpg"
                    /></a>
                  </div>
                </div>
                <h2>Tentang Wisata</h2>
                <p>
                  The town of Ubud, in the uplands of Bali, Indonesia, is
                  known as a center for traditional crafts and dance. The
                  surrounding Ubud District’s rainforest and terraced rice
                  paddies, dotted with Hindu temples and shrines, are among
                  Bali’s most famous landscapes.
                </p>
                <p>
                  Terraced rice paddies, dotted with Hindu temples and
                  shrines, are among Bali’s most famous landscapes.
                </p>
                <div class="features row">
                  <div class="col-md-4 border-left">
                    <img
                      src="frontend/images/ic_event.png"
                      alt=""
                      class="features-image"
                    />
                    <div class="description">
                      <h3>Featured Event</h3>
                      <p>tari kecak</p>
                    </div>
                  </div>
                  <div class="col-md-4 border-left">
                    <img
                      src="frontend/images/ic_bahasa.png"
                      alt=""
                      class="features-image"
                    />
                    <div class="description">
                      <h3>Lenguage</h3>
                      <p>Bahasa Indonesia</p>
                    </div>
                  </div>
                  <div class="col-md-4 border-left">
                    <img
                      src="frontend/images/ic_foods.png"
                      alt=""
                      class="features-image"
                    />
                    <div class="description">
                      <h3>Foods</h3>
                      <p>local Foods</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Members are going</h2>
              <div class="members my-2">
                <img src="/frontend/images/members.png" alt="" />
              </div>
              <hr />
              <h2>Trip Information</h2>
              <table class="trip-information">
                <tr>
                  <th width="50%">Date of Deperture</th>
                  <td width="50%" class="text-right">22 Aug, 2019</td>
                </tr>

                <tr>
                  <th width="50%">Duration</th>
                  <td width="50%" class="text-right">4 night</td>
                </tr>

                <tr>
                  <th width="50%">Type</th>
                  <td width="50%" class="text-right">Open trip</td>
                </tr>

                <tr>
                  <th width="50%">Price</th>
                  <td width="50%" class="text-right">$80.00/Person</td>
                </tr>
              </table>
            </div>

            <div class="join-container">
              <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2">
                join now
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>
@endsection


@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}" />  
@endpush


@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>

    <script>
      $(document).ready(function () {
        $(".xzoom, .xzoom-gallery").xzoom({
          zoomWidth: 500,
          title: false,
          tint: "#333",
          Xoffset: 15,
        });
      });
    </script>
@endpush
