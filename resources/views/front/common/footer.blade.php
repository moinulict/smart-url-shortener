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



  @include('front.common.sign-up-modal')
  @include('front.common.sign-in-modal')


  {{-- Change Password --}}
  {{-- <div class="modal fade changePasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Change Password</h5>
              </div>
              <div class="modal-body">
                  <div id="change-password-errorContainer" class="alert alert-danger" style="display: none;">
                      <ul id="change-password-errorList"></ul>
                  </div>
                  <form class="changePasswordForm">
                      <div class="mb-3">
                          <label for="password" class="form-label">Password<span class="required">*</span></label>
                          <input type="password" class="form-control" id="password" name="password" minlength="8"
                              required_>
                          <div class="invalid-feedback" id="password-error"></div>
                      </div>
                      <div class="mb-3">
                          <label for="new_password" class="form-label">New Password<span
                                  class="required">*</span></label>
                          <input type="password" class="form-control" id="new_password" name="new_password"
                              minlength="8" required_>
                          <div class="invalid-feedback" id="new_password-error"></div>
                      </div>
                      <div class="mb-3">
                          <label for="confirm_password" class="form-label">Confirm New Password<span
                                  class="required">*</span></label>
                          <input type="password" class="form-control" id="confirm_password" name="confirm_password"
                              minlength="8" required_>
                          <div class="invalid-feedback" id="confirm_password-error"></div>
                      </div>
                      <div class="text-right">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal"
                              data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success">Change Password</button>
                      </div>
                  </form>
              </div>

          </div>
      </div>
  </div> --}}
  {{-- Change Password --}}

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
          class="fas fa-arrow-up"></i></a>

  {{-- <div id="preloader"></div> --}}
