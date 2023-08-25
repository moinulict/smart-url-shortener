  @extends('layouts.website')
  @section('meta')
  <title>Unlock the Power of a Free URL Shortener Tool: Streamline Your Links</title>
  <meta content="Discover the convenience of a free URL shortener tool. Effortlessly shrink and manage your links for improved online efficiency. Click to learn more!" name="description">
  <meta content="Free URL Shortener" name="keywords">
  @stop
  @section('contents')
      <!-- ======= Hero Section ======= -->
      <section class="d-flex align-items-center">
          <div class="container">
              <div class="row gy-4">
                  <div class="col-lg-6">
                    <div class="genBox">  
                    <h2 data-aos="fade-up">Free shorten URL generator</h2>
                      <p data-aos="fade-up" data-aos-delay="100">
                        Introducing URLGEN, your go-to solution for hassle-free link sharing. With URLGEN, you can instantly 
                        generate lengthy web URL into concise and shorten links. 
                        Simplify your URL sharing process and unlock the potential of your online presence with URLGEN.
                      </p>

                      <div class="alert alert-danger none errorMsg"></div>
                      <form action="" id="urlGenForm" class="form-search  mb-3" data-aos="fade-up"
                          data-aos-delay="200">
                          <div class="my-2">
                          <input type="text" class="form-control longUrl" placeholder="Enter your long link here">
                          </div>
                          <button type="submit" class="btn btn-primary btn-lg w-100">Generate Shorten URL</button>
                      </form>

                      <div class="urlGenResponse none pr"></div>

                  </div>
                </div>
              </div>
          </div>
      </section><!-- End Hero Section -->

  @stop
