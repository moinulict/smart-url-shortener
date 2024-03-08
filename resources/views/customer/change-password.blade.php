  @extends('layouts.website')
  @section('meta')
      <title>Change Password</title>
  @stop
  @section('contents')
      <main class="customerArea">
          <section>
              <div class="container">

                  <div class="d-flex justify-content-between content-header">
                      <h1>Change Password</h1>
                  </div>

                  <div class="row">
                      <div class="col-lg-6">
                          <form class="changePasswordForm">
                            <div id="change-password-errorContainer" class="alert alert-danger" style="display: none;">
                                <ul id="change-password-errorList"></ul>
                            </div>
                              <div class="mb-3">
                                  <label for="password" class="form-label">Old Password<span class="required">*</span></label>
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
                              <div>
                                  <button type="submit" class="btn btn-primary">Update Password</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </section>
      </main>
  @stop
