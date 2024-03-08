  @extends('layouts.website')
  @section('meta')
      <title>Dashboard</title>
  @stop
  @section('contents')
      <main class="customerArea">
          <section>
              <div class="container">

                <div class="alert alert-danger mb-5">We are working hard to provide you a better dashboard. You will get soon. Stay connected. Thanks.</div>

                <div class="d-flex justify-content-between content-header">
                    <div>
                        <h3>Analytics for all your links</h3>
                        <h1>Dashboard</h1>
                    </div>
                    <div>
                        <a href="" class="btn btn-outline-primary"><i class="fa fa-refresh"></i> Refresh</a>
                    </div>
                </div>
               

                  <div class="row">

                    <div class="col-xl-3 col-sm-6 col-12 my-2"> 
                        <div class="card">
                          <div class="card-content">
                            <div class="card-body">
                              <div class="d-flex justify-content-between align-items-center">
                                <div>
                                  <i class="fa fa-link text-primary fa-2x"></i>
                                </div>
                                <div class="text-right">
                                  <h3 class="fwb text-primary">{{ $totalLinks }}</h3>
                                  <span>Total Generated Links</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-xl-3 col-sm-6 col-12 my-2">
                        <div class="card">
                          <div class="card-content">
                            <div class="card-body">
                              <div class="d-flex justify-content-between align-items-center">
                                <div>
                                  <i class="fa fa-users text-warning fa-2x"></i>
                                </div>
                                <div class="text-right">
                                  <h3 class="fwb text-warning">{{ $totalVisitors }}</h3>
                                  <span>Total Visitors</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-xl-3 col-sm-6 col-12 my-2">
                        <div class="card">
                          <div class="card-content">
                            <div class="card-body">
                              <div class="d-flex justify-content-between align-items-center">
                                <div>
                                  <i class="fa fa-user text-success fa-2x"></i>
                                </div>
                                <div class="text-right">
                                  <h3 class="fwb text-success">{{ $totalUniqueVisitors }}</h3>
                                  <span>Total Unique Visitors</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                  </div>
              </div>
          </section>
      </main>
  @stop
