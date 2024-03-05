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
              </div>
              <div class="modal-body">
                  <div id="signUp-errorContainer" class="alert alert-danger" style="display: none;">
                      <ul id="signUp-errorList"></ul>
                  </div>
                  <form class="createAccountForm">
                      <div class="mb-3">
                          <label for="name" class="form-label">Name<span class="required">*</span></label>
                          <input class="form-control" id="name" name="name" required minlength="3">
                          <div class="invalid-feedback" id="name-error"></div>
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email<span
                                  class="required">*</span></label>
                          <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                              aria-describedby="emailHelp" required>
                          <div class="invalid-feedback" id="email-error"></div>
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password<span
                                  class="required">*</span></label>
                          <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                              minlength="8" required>
                          <div class="invalid-feedback" id="password-error"></div>
                      </div>
                      <div class="mb-3">
                          By clicking on “Create Account”, I agree to URLGen’s <a href="{{ url('/terms') }}">Terms &
                              Conditions</a> and
                          <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>.
                      </div>
                      <div class="text-right">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal"
                              data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success">Create Account</button>
                      </div>
                      <div class="text-left">
                          Already have an account <a href="javascript:;" class="loginBtn">Sign In</a>
                      </div>
                  </form>
              </div>

          </div>
      </div>
  </div>

  <div class="modal fade loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Sign In</h5>
              </div>
              <div class="modal-body">
                  <div id="login-errorContainer" class="alert alert-danger" style="display: none;">
                      <ul id="login-errorList"></ul>
                  </div>
                  <form class="loginForm">
                      <div class="mb-3">
                          <label for="loginEmail" class="form-label">Email<span class="required">*</span></label>
                          <input type="email_" name="email" class="form-control" id="loginEmail"
                              aria-describedby="emailHelp" required_>
                          <div class="invalid-feedback" id="loginEmail-error"></div>
                      </div>
                      <div class="mb-3">
                          <label for="loginPassword" class="form-label">Password<span
                                  class="required">*</span></label>
                          <input type="password" class="form-control" id="loginPassword" name="password"
                              minlength="8" required_>
                          <div class="invalid-feedback" id="loginPassword-error"></div>
                      </div>
                      <div class="text-right">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal"
                              data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success">Sign In</button>
                      </div>
                      <div class="text-left">
                          Don't have an account <a href="javascript:;" class="signUpBtn">Sign Up</a>
                      </div>
                  </form>
              </div>

          </div>
      </div>
  </div>

  {{-- Change Password --}}
  <div class="modal fade changePasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
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
                          <label for="new_password" class="form-label">New Password<span class="required">*</span></label>
                          <input type="password" class="form-control" id="new_password" name="new_password" minlength="8"
                              required_>
                          <div class="invalid-feedback" id="new_password-error"></div>
                      </div>
                      <div class="mb-3">
                          <label for="confirm_password" class="form-label">Confirm New Password<span class="required">*</span></label>
                          <input type="password" class="form-control" id="confirm_password" name="confirm_password" minlength="8"
                              required_>
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
  </div>
  {{-- Change Password --}}

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
          class="fas fa-arrow-up"></i></a>

  {{-- <div id="preloader"></div> --}}
