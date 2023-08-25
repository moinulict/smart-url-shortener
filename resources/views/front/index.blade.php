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
                    <h1 data-aos="fade-up">Free URL Shortener Generator</h1>
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
                          <button type="submit" class="btn btn-primary btn-lg w-100 urlGenBtn">
                            <span class="btn-text">Generate Shorten URL</span>
                            <span class="loader hidden"></span>
                          </button>
                      </form>

                      <div class="urlGenResponse none pr"></div>

                  </div>
                </div>


                <div class="col-lg-6">

                   
                </div>

              </div>

          </div>
      </section><!-- End Hero Section -->

      <section id="featured-services" class="featured-services">
        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-lg-12">
              <div class="text-center">
                <h1 class="my-3">
                  Experience the convenience of a free URL shortener to create compact and shareable links.
                </h1>
                <p>Using a URL shortener offers advantages for sharing links. <b>URLGEN</b> offering free shortening URL service, Why Use a URL Shortener?</p>
                 
              </div>
             
              <ul>
                <li>
                  <b>Convenience:</b> Shortened URLs are concise and easily shared, simplifying communication.
                </li>
                <li>
                  <b>Space:</b> Short URLs are great for character-limited platforms like social media.
                </li>
                <li>
                  <b>Memorability:</b> They're easy to remember and share verbally.
                </li>
                <li>
                  <b>Customization:</b> <b>URLGEN</b> lets you personalize short links for branding.
                </li>
                <li>
                  <b>QR Codes:</b> They're perfect for embedding in QR codes.
                </li>
                <li>
                  <b>Campaigns:</b> Ideal for tracking marketing campaign effectiveness.
                </li>
               </ul>
            </div>

          </div>
  
        </div>
      </section>

      <section id="faq" class="faq">
        <div class="container aos-init aos-animate" data-aos="fade-up">
  
          <div class="section-header">
            <span>Frequently Asked Questions</span>
            <h2>Frequently Asked Questions</h2>
  
          </div>
  
          <div class="row justify-content-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-10">
  
              <div class="accordion accordion-flush" id="faqlist">
  
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                      <i class="bi bi-question-circle question-icon"></i>
                      What is a URL shortener?
                    </button>
                  </h3>
                  <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      A URL shortener is an online tool that transforms long and complex URLs into shorter, more manageable links that redirect to the original webpage.
                    </div>
                  </div>
                </div><!-- # Faq item-->
  
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                      <i class="bi bi-question-circle question-icon"></i>
                      Why should I use a URL shortener?
                    </button>
                  </h3>
                  <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      URL shorteners are useful for simplifying long links, making them easier to share on social media, in messages, and presentations, while also providing tracking and analytics features.
                    </div>
                  </div>
                </div><!-- # Faq item-->
  
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                      <i class="bi bi-question-circle question-icon"></i>
                      Are shortened URLs through URLGEN safe to click on?
                    </button>
                  </h3>
                  <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      Yes, we are reputaed shorten URL service provider with free of cost. 
                    </div>
                  </div>
                </div><!-- # Faq item-->
  
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                      <i class="bi bi-question-circle question-icon"></i>
                      Can I customize shortened URLs?
                    </button>
                  </h3>
                  <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      <i class="bi bi-question-circle question-icon"></i>
                      URLGEN free URL shorteners offer customization options, allowing you to create branded or memorable short links that reflect your content or brand identity.
                    </div>
                  </div>
                </div><!-- # Faq item-->
  
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                      <i class="bi bi-question-circle question-icon"></i>
                      Do shortened links expire?
                    </button>
                  </h3>
                  <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      The lifespan of shortened links through URLGEN right now 365 days. We clear shortend URLs from our server which are more than 365 days old automatically. If you need more live long URL please contact us.
                    </div>
                  </div>
                </div><!-- # Faq item-->
  
              </div>
  
            </div>
          </div>
  
        </div>
      </section>
  @stop
