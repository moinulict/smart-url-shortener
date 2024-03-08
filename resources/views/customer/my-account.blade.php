  @extends('layouts.website')
  @section('meta')
      <title>My Account</title>
  @stop
  @section('contents')
      <main class="customerArea">
          <section>
              <div class="container">

                  <div class="d-flex justify-content-between content-header">
                      <h1>My Account</h1>
                  </div>

                  <div class="row">
                      <div class="col-lg-6">
                          <form action="{{ url('/customer/account') }}" method="post">
                            @csrf
                            <div id="change-password-errorContainer" class="alert alert-danger" style="display: none;">
                                <ul id="change-password-errorList"></ul>
                            </div>
                              <div class="mb-3">
                                  <label for="name" class="form-label">Name<span class="required">*</span></label>
                                  <input class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                                  <div class="invalid-feedback" id="name-error"></div>
                              </div>
                              <div class="mb-3">
                                  <label for="email" class="form-label">Email<span class="required">*</span></label>
                                  <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" disabled required >
                                  <div class="invalid-feedback" id="email-error"></div>
                              </div>
                              <div>
                                  <button type="submit" class="btn btn-primary">Update</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </section>
      </main>
  @stop
