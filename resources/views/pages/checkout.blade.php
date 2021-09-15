@extends('layouts.checkout')
@section('title', 'checkout')




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
                <li class="breadcrumb-item">Details</li>
                <li class="breadcrumb-item active">Checkout</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details mb-3">
              <h1>Who is Going?</h1>
              <p>Trip to Ubud, Bali, Indonesia</p>
              <div class="attendee">
                <table class="table table-responsive-sm text-center">
                  <thead>
                    <tr>
                      <td scope="col">Picture</td>
                      <td scope="col">Name</td>
                      <td scope="col">Nationality</td>
                      <td scope="col">Visa</td>
                      <td scope="col">Passport</td>
                      <td scope="col"></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img
                          src="{{ url('frontend/images/avatar-1.png') }}"
                          class="rounded-circle"
                          height="60"
                        />
                      </td>
                      <td class="align-middle">Syahrizal As</td>
                      <td class="align-middle">Indonesia</td>
                      <td class="align-middle">N/A</td>
                      <td class="align-middle">Active</td>
                      <td class="align-middle">
                        <a href="" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img
                          src="{{ url('frontend/images/avatar-2.png') }}"
                          class="rounded-circle"
                          height="60"
                        />
                      </td>
                      <td class="align-middle">Samsul Arif</td>
                      <td class="align-middle">Brazil</td>
                      <td class="align-middle">N/A</td>
                      <td class="align-middle">Active</td>
                      <td class="align-middle">
                        <a href="" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="member mt-3">
                <h2>Add Members</h2>

                <form class="form-inline">
                  <label for="inputUsername" class="sr-only">Nama</label>
                  <input
                    type="text"
                    class="form-control mb-2 mr-sm-2"
                    id="inputUsername"
                    name="inputUsername"
                    placeholder="Username"
                  />
                  <label for="inputvisa" class="sr-only">Preference</label>
                  <select
                    class="custom-select mb-2 mr-sm-2"
                    id="inputvisa"
                    name="inputvisa"
                  >
                    <option value="visa">Visa</option>
                    <option value="days">30 Days</option>
                    <option value="N/A">N/A</option>
                  </select>
                  <label for="doepassport" class="sr-only"
                    >DOE Passport</label
                  >
                  <div class="input-group mb-2 mr-md-2">
                    <input
                      type="text"
                      class="form-control datepicker"
                      placeholder="Doe Passport"
                      id="doepassport"
                      name="doepassport"
                    />
                  </div>
                  <button type="submit" class="btn btn-add-now mb-2 px-4">
                    Add Now
                  </button>
                </form>
                <h3 class="mt-3 mb-0">Note</h3>
                <p class="disclaimer mb-0">
                  You are only able to invite member that has registered in
                  Nomads.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Checkout Informations</h2>
              <table class="trip-informations">
                <tr>
                  <th width="50%">Members</th>
                  <td class="text-right" width="50%">2 Person</td>
                </tr>
                <tr>
                  <th width="50%">Additional Visa</th>
                  <td class="text-right" width="50%">$ 190,00</td>
                </tr>
                <tr>
                  <th width="50%">Trip Price</th>
                  <td class="text-right" width="50%">$ 80,00 / Person</td>
                </tr>
                <tr>
                  <th width="50%">Sub Total</th>
                  <td class="text-right" width="50%">$ 280,00</td>
                </tr>
                <tr>
                  <th width="50%">Total (+Unique)</th>
                  <td class="text-right text-total" width="50%">
                    <span class="text-blue">$ 279,</span>
                    <span class="text-orange">33</span>
                  </td>
                </tr>
              </table>
              <hr />
              <h2>Payment Instructions</h2>
              <p class="payment-instructions">
                Please complete your payment before to continue the wonderful
                trip
              </p>
              <div class="bank">
                <div class="bank-item pb-3">
                  <img
                    src="{{ url('frontend/images/ic_bank.png') }}"
                    alt=""
                    class="bank-image"
                  />
                  <div class="descriptions">
                    <h3>PT Nomads ID</h3>
                    <p>
                      0896495 <br />
                      Bank Central Asia
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="bank-item">
                  <img
                    src="{{ url('frontend/images/ic_bank.png') }}"
                    alt=""
                    class="bank-image"
                  />
                  <div class="descriptions">
                    <h3>PT Nomads ID</h3>
                    <p>
                      089649566 <br />
                      Bank Rakyat Indonesia
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="join-container">
              <a
                href="{{ route('checkout-success') }}"
                class="btn btn-block btn-join-now mt-3 py-2"
                >I Have Made Payment</a
              >
            </div>
            <div class="text-center mt-3">
              <a href="{{ route('detail') }}" class="text-muted">Cancel Booking</a>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>
@endsection


@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}" />  
@endpush


@push('addon-script')
<script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>

    <script>
      $(document).ready(function () {
        $(".datepicker").datepicker({
          uiLibrary: "bootstrap4",
          icons: {
            rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" />'
          }
        });
      });
    </script>
@endpush

    
