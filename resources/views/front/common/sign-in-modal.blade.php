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
                        <a href="{{ url('/social-login/google') }}" class="btn btn-default btn-social d-block">
                            <img alt="googleLogo" loading="lazy" width="16" height="16" decoding="async"
                                data-nimg="1" src="{{ url('/') }}/assets/img/google.svg"
                                style="color: transparent;">
                            Sign in with google
                        </a>
                    </div>

                    <div class="d-flex flex-fill align-items-center">
                        <hr class="flex-grow-1">
                        <span class="px-3">OR</span>
                        <hr class="flex-grow-1">
                    </div>

                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Email<span class="required">*</span></label>
                        <input type="email_" name="email" class="form-control" id="loginEmail"
                            aria-describedby="emailHelp" required_>
                        <div class="invalid-feedback" id="loginEmail-error"></div>
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Password<span class="required">*</span></label>
                        <input type="password" class="form-control" id="loginPassword" name="password" minlength="8"
                            required_>
                        <div class="invalid-feedback" id="loginPassword-error"></div>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>

                    <div class="text-left mt-3">
                        Don't have an account <a href="javascript:;" class="signUpBtn">Sign Up</a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
