  @extends('layouts.website')
  @section('meta')
  <title>Free shorten URL generator from long URL</title>
  <meta content="Free shorten URL generator from long URL." name="description">
  <meta content="Free shorten URL generator from long URL." name="keywords">
  @stop
  @section('contents')
      <!-- ======= Hero Section ======= -->
      <section id="hero" class="hero d-flex align-items-center">
          <div class="container">
              <div class="row gy-4 d-flex justify-content-between">
                  <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                      <h2 data-aos="fade-up">Free shorten URL generator</h2>
                      <p data-aos="fade-up" data-aos-delay="100">
                        Introducing URLGEN, your go-to solution for hassle-free link sharing. With URLGEN, you can instantly 
                        generate lengthy web URL into concise and shorten links. 
                        Simplify your URL sharing process and unlock the potential of your online presence with URLGEN.
                      </p>

                      <div class="alert alert-danger none errorMsg"></div>
                      <form action="" id="urlGenForm" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                          data-aos-delay="200">
                          <input type="text" class="form-control longUrl" placeholder="Please enter your long link here">
                          <button type="submit" class="btn btn-primary">Generate</button>
                      </form>

                      <div class="urlGenResponse none pr"></div>

                      {{-- <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

                          <div class="col-lg-3 col-6">
                              <div class="stats-item text-center w-100 h-100">
                                  <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                      class="purecounter"></span>
                                  <p>Clients</p>
                              </div>
                          </div><!-- End Stats Item -->

                          <div class="col-lg-3 col-6">
                              <div class="stats-item text-center w-100 h-100">
                                  <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                      class="purecounter"></span>
                                  <p>Projects</p>
                              </div>
                          </div><!-- End Stats Item -->

                          <div class="col-lg-3 col-6">
                              <div class="stats-item text-center w-100 h-100">
                                  <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                                      class="purecounter"></span>
                                  <p>Support</p>
                              </div>
                          </div><!-- End Stats Item -->

                          <div class="col-lg-3 col-6">
                              <div class="stats-item text-center w-100 h-100">
                                  <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                      class="purecounter"></span>
                                  <p>Workers</p>
                              </div>
                          </div><!-- End Stats Item -->

                      </div> --}}
                  </div>

                  <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                      <img src="assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="">
                  </div>

              </div>
          </div>
      </section><!-- End Hero Section -->

  @stop
