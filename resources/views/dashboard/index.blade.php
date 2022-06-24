@extends('layouts.dashboard', ['title' => 'Dashboard'])

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <h2 class="section_title mb-4">Dashboard</h2>

        {{-- STATS --}}
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card card-statistic-2">
              <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-users"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Total Visitors</h4>
                </div>
                <div class="card-body">
                  59
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-2">
              <div class="card-icon shadow-success bg-success">
                <i class="far fa-comments"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Testimonials</h4>
                </div>
                <div class="card-body">3</div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-2">
              <div class="card-icon shadow-danger bg-danger">
                <i class="far fa-images"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Gallery Images</h4>
                </div>
                <div class="card-body">8</div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4>Testimonials</h4>
                <div class="card-header-action">
                  <a href="#" class="btn btn-primary">View More <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>

              <div class="card-body p-0">
                <div class="table-responsive table-invoice">
                  <table class="table table-striped">
                    <tbody>
                      <tr>
                        <th>Invoice ID</th>
                        <th>Customer</th>
                        <th>Status</th>
                        <th>Due Date</th>
                      </tr>
                      <tr>
                        <td><a href="#">INV-87239</a></td>
                        <td class="font-weight-600">Kusnadi</td>
                        <td>
                          <div class="badge badge-warning">Unpaid</div>
                        </td>
                        <td>July 19, 2018</td>

                      </tr>
                      <tr>
                        <td><a href="#">INV-48574</a></td>
                        <td class="font-weight-600">Hasan Basri</td>
                        <td>
                          <div class="badge badge-success">Paid</div>
                        </td>
                        <td>July 21, 2018</td>

                      </tr>
                      <tr>
                        <td><a href="#">INV-76824</a></td>
                        <td class="font-weight-600">Muhamad Nuruzzaki</td>
                        <td>
                          <div class="badge badge-warning">Unpaid</div>
                        </td>
                        <td>July 22, 2018</td>

                      </tr>
                      <tr>
                        <td><a href="#">INV-84990</a></td>
                        <td class="font-weight-600">Agung Ardiansyah</td>
                        <td>
                          <div class="badge badge-warning">Unpaid</div>
                        </td>
                        <td>July 22, 2018</td>

                      </tr>
                      <tr>
                        <td><a href="#">INV-87320</a></td>
                        <td class="font-weight-600">Ardian Rahardiansyah</td>
                        <td>
                          <div class="badge badge-success">Paid</div>
                        </td>
                        <td>July 28, 2018</td>

                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
