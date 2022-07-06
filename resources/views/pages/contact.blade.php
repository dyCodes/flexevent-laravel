@extends('layouts.page', ['title' => 'Contact Us'])

@section('content')
  <main>
    <article id="contact" class="page">
      <div class="page_cover">
        <h1>Contact Us</h1>
        <p>Get in touch with us</p>
      </div>

      <!-- Content -->
      <div class="container mb-5">
        <div class="row info">
          <div class="col-md-4">
            <div class="info_box mb-4">
              <i class="bi bi-pin-map"></i>
              <h5>Our Address</h5>
              <p>{{ get_setting('site_address') }}</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info_box mb-4">
              <i class="bi bi-phone"></i>
              <h5>Call Us</h5>
              <p>{{ get_setting('site_phone_no') }}</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info_box mb-4">
              <i class="bi bi-envelope"></i>
              <h5>Email</h5>
              <p>{{ get_setting('site_email') }}</p>
            </div>
          </div>
        </div>
        <div id="booking" class="row contactBox">
          <div class="col-lg-6 order-1 order-lg-0 map">
            <!-- GOTO https://www.maps.ie/create-google-map/ to generate your location map iframe -->
            <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0"
                marginwidth="0"
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Lagos%20NG+(EventPlanner%20-%20dyCodes)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                href="https://www.maps.ie/draw-radius-circle-map/">Google radius map</a></div>
            <!-- END -->
          </div>

          <div class="col-lg-6 p-lg-5 form">
            <form>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                    required="" />
                </div>
                <div class="col-md-6 mt-md-0 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                    required="" />
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone Number"
                  required="" />
              </div>
              <div class="form-group">
                <select class="form-select" required>
                  <option selected="">Your Event Type</option>
                  <option value="wedding">Wedding</option>
                  <option value="2">Corporate Event</option>
                  <option value="2">Social Event</option>
                </select>
              </div>

              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
              </div>
              <!-- <div class="status">
                                                      <div class="alert alert-success" role="alert">
                                                        <div>Your message has been sent. Thank you!</div>
                                                      </div>
                                                      <div class="alert alert-danger" role="alert">
                                                        <div class="error-message">Error! Message not sent.</div>
                                                      </div>
                                                    </div> -->
              <div>
                <button type="submit" class="btn btn-dark">
                  Send Message
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </article>
  </main>
@endsection
