  @extends('layouts.website')
  @section('meta')
      <title>Contact</title>
      <meta
          content="Have questions or feedback? Contact us today for prompt assistance and support. Your voice matters to us!"
          name="description">
      <meta content="Contact" name="keywords">
  @stop
  @section('contents')
      <main id="main">

          <!-- ======= Featured Services Section ======= -->
          <section id="about" class="about">
              <div class="container content">


                  <div class="row pt-1 justify-content-center">


                      <!--Grid column-->
                      <div class="col-md-8 mb-md-0 mb-5">
                          <h2 class="mb-3 text-center">Contact URLGEN</h2>


                          <!--Section description-->
                          <p class="text-center w-responsive mx-auto mb-5 lead">
                              Please email us if you have any queries about the site, advertising, or anything else.
                          </p>
                          <hr class="mb-5">

                          @if(session('message'))
                          <div class="alert alert-info">{{ session('message') }}</div>
                          @endif

                          <form id="contact-form" action="{{ url('contact') }}" name="contact-form" method="post">
                            @csrf

                              <!--Grid row-->
                              <div class="row">

                                  <!--Grid column-->
                                  <div class="col-md-6">
                                      <div class="md-form mb-4">
                                        <label for="name" class="">Your name<span class="required">*</span></label>
                                          <input type="text" id="name" name="name" class="form-control"
                                              required="">
                                         
                                      </div>
                                  </div>
                                  <!--Grid column-->

                                  <!--Grid column-->
                                  <div class="col-md-6">
                                      <div class="md-form mb-4">
                                        <label for="email" class="">Your email<span class="required">*</span></label>
                                          <input type="email" id="email" name="email" class="form-control"
                                              required="">
                                        
                                      </div>
                                  </div>
                                  <!--Grid column-->

                              </div>
                              <!--Grid row-->

                              <!--Grid row-->
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="md-form mb-4">
                                        <label for="subject" class="">Subject<span class="required">*</span></label>
                                          <input type="text" id="subject" name="subject" class="form-control"
                                              required="">
                                          
                                      </div>
                                  </div>
                              </div>
                              <!--Grid row-->

                              <!--Grid row-->
                              <div class="row">

                                  <!--Grid column-->
                                  <div class="col-md-12">

                                      <div class="md-form">
                                        <label for="message">Your message<span class="required">*</span></label>
                                          <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required=""></textarea>
                                        
                                      </div>

                                  </div>
                              </div>
                              <!--Grid row-->

                              <div class="text-center my-3">
                                  <button type="submit" class="btn btn-primary">Send</button>
                              </div>
                          </form>
                      </div>
                      <!--Grid column-->


                  </div>
              </div>


              </div>
          </section><!-- End Featured Services Section -->


      </main>

  @stop
