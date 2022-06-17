@extends('layouts.dashboard', ['title' => 'Dashboard'])

@section('content')
  <div class="pagetitle mb-3">
    <h1>Dashboard</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <!-- User Balances -->
      @php
        // dd(Auth::user());
      @endphp
      <div class="col-12">

        <div class="card">
          <div class="card-body pt-2">
            <div
              style="height:560px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #fff; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #fff;padding:1px;padding: 0px; margin: 0px; width: 100%;">
              <div style="height:520px; padding:0px; margin:0px; width: 100%;"><iframe
                  src="https://widget.coinlib.io/widget?type=chart&theme=light&coin_id=859&pref_coin_id=1505" width="100%"
                  height="536px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0"
                  style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div>
            </div>
          </div>
        </div>
      </div>

  </section>
@endsection
