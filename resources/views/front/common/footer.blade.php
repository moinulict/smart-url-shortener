  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">


      <div class="container">
          <div class="copyright">
              Copyright &copy; {{ date('Y') }} <strong><span>URLGEN</span></strong>. All Rights Reserved.
              <a href="{{ url('/terms') }}">Terms</a> | <a href="{{ url('/privacy-policy') }}">Privacy Policy</a> | <a
                  href="{{ url('/disclaimer') }}">Disclaimer</a>

              <a target="_blank" rel="nofollow"
                  href="https://www.dmca.com/Protection/Status.aspx?ID=595aa5ae-e928-427d-87c2-53792fa304c3&refurl=https://urlgen.io/"
                  title="DMCA.com Protection Status" class="dmca-badge float-end"> <img
                      src ="https://images.dmca.com/Badges/dmca_protected_sml_120l.png?ID=595aa5ae-e928-427d-87c2-53792fa304c3"
                      alt="DMCA.com Protection Status" /></a>

          </div>
      </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <div class="modal fade signUpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Create New Account</h5>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> --}}
              </div>
              <div class="modal-body">
                  <form class="createAccountForm">
                      <div class="mb-3">
                          <label for="name" class="form-label">Name<span class="required">*</span></label>
                          <input class="form-control" id="name" name="name" required minlength="3">
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email<span
                                  class="required">*</span></label>
                          <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                              aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password<span
                                  class="required">*</span></label>
                          <input type="password" class="form-control" id="exampleInputPassword1" minlength="8" required>
                      </div>
                      <div class="mb-3">
                          By clicking on “Create Account”, I agree to URLGen’s <a href="{{ url('/terms') }}">Terms &
                              Conditions</a> and <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>.
                      </div>
                      <div class="text-right">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal"
                              data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success">Create Account</button>
                      </div>
                      <div class="text-left">
                          Already have an account <a href="{{ url('/terms') }}">login</a>
                      </div>
                  </form>
              </div>

          </div>
      </div>
  </div>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
          class="fas fa-arrow-up"></i></a>

  <div id="preloader"></div>
