  @extends('layouts.website')
  @section('meta')
      <title>Unlock the Power of a Free Smart URL: Shorten Your Links</title>
      <meta content="" name="description">
      <meta content="Smart URL" name="keywords">
      <meta property="og:title" content="" />
      <meta property="og:description" content="" />
  @stop
  @section('contents')
      <!-- ======= Hero Section ======= -->
      <section class="d-flex align-items-center mt-4">
          <div class="container">
              <div class="row gy-4 justify-content-center">
                  <div class="col-lg-7">
                      <div class="genBox text-center mb-3 px-5">
                          <h1 data-aos="fade-up">Free URL Shortener Generator</h1>
                          <p data-aos="fade-up" data-aos-delay="100" class="px-5">
                              Introducing Smart URL, your go-to solution for hassle-free link sharing. With Smart URL, you
                              can
                              instantly
                              generate lengthy web URL into concise and shorten links.
                              Simplify your URL sharing process and unlock the potential of your online presence with
                              Smart URL.
                          </p>

                          <div class="alert alert-danger none errorMsg"></div>
                          <form action="" id="urlGenForm" class="form-search  mb-3" data-aos="fade-up"
                              data-aos-delay="200">
                              <div class="my-2">
                                  <input type="text" class="form-control longUrl" placeholder="Enter your long link here"
                                      autofocus>
                              </div>
                              <button type="submit" class="btn btn-primary btn-lg w-100 urlGenBtn">
                                  <span class="btn-text">Generate Shorten URL</span>
                                  <span class="loader hidden"></span>
                              </button>
                          </form>

                          <div class="urlGenResponse none pr"></div>

                      </div>

                      <div class="whiteBox mt-5 text-center">
                          <div class="key-features px-5">
                              <h2 class="mb-3">Smart URL also provides below features without any cost</h2>
                              <p>
                                  Bulk short URLs generation, Link management features,
                                  Detailed link analytics, Simplifying complex URLs, Tracking and analytics,
                                  powerfull dashboard, API integration and support.
                              </p>

                              <div class="mt-3 ">
                                  <button class="btn btn-primary btn-lg btn-block signUpBtn">Create Account</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section><!-- End Hero Section -->

      <section id="featured-services" class="featured-services">
          <div class="container">

              <div class="row gy-4 justify-content-center">

                  <div class="col-lg-7">

                      <h3>Improved Aesthetics</h3>
                      <p>Long URLs can look messy and unattractive, especially in printed materials or on social media like
                          Youtube, Facebook, Linkedin, Twitter, Instragram e.t.c where space is limited.
                          Shortened URLs are more visually appealing and easier to incorporate into design elements.</p>

                      <h3>Space Efficiency</h3>
                      <p>On platforms with character limits, such as Twitter, Youtube, Facebook, Instragram using shorter
                          URLs leaves more room for your actual message or content.
                          This is particularly important for effective communication within these constraints.</p>

                      <h3>Enhanced Shareability</h3>
                      <p>Shortened URLs are easier to share verbally, in presentations, or in printed materials. They are
                          also more likely to be remembered by users,
                          increasing the chances of them visiting the link.</p>

                      <h3>Tracking and Analytics</h3>
                      <p>Free URL shortening service provided by Smart URL offer tracking features that provide valuable
                          insights into link performance.
                          Users can see how many times the link has been clicked, where the clicks came from, and other
                          useful data.
                          This information is valuable for marketing and promotional campaigns.</p>

                      <h3>Simplifying Complex URLs</h3>
                      <p>Long, complex URLs with numerous parameters or dynamic components can be challenging to share
                          accurately. Shortened URLs simplify these complex addresses, reducing the chances of errors when
                          sharing.</p>

                      <h3>Reducing Typos</h3>
                      <p>Long URLs are prone to typos when manually entered. Free URL Shortener minimize the likelihood of
                          errors when users type or paste them.</p>

                      <h3>Easier Tracking of Offline Campaigns</h3>
                      <p>
                          In print media such as flyers, brochures, or billboards, using shortened URLs makes it easier to
                          track the effectiveness of offline advertising campaigns by monitoring clicks and engagement
                          online.
                      </p>


                  </div>

              </div>

          </div>
      </section>


  @stop
