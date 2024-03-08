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
                        <a href="{{ url('/social-login/google') }}" class="btn btn-default btn-social d-block">
                            <img alt="googleLogo" loading="lazy" width="16" height="16" decoding="async"
                                data-nimg="1" src="{{ url('/') }}/assets/img/google.svg"
                                style="color: transparent;">
                            Sign up with google
                        </a>
                    </div>

                    <div class="d-flex flex-fill align-items-center">
                        <hr class="flex-grow-1">
                        <span class="px-3">OR</span>
                        <hr class="flex-grow-1">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Name<span class="required">*</span></label>
                        <input class="form-control" id="name" name="name" required minlength="3">
                        <div class="invalid-feedback" id="name-error"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email<span class="required">*</span></label>
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
