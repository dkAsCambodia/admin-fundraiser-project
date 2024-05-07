<div class="page">
    <div class="content-row">
        <div data-qa="restore-password" class="d-table-cell text-top">
            <div class="container pt-6 pt-sm-10 pb-3">
                <div class="mb-6 mb-sm-12">
                    <div class="d-flex align-items-center justify-content-center pt-6 pt-lg-10">
                        <div>
                            <a href="/" class="focus-outline">
                                <img src="{{ URL::to('admin_panel/logo.png') }}" width="200" height="32"
                                    alt="Fundraise Up" class="img-responsive mx-auto">
                            </a>
                        </div>
                    </div>
                    <h1
                        class="mx-auto mt-6 mt-sm-10 text-gray-85 text-center font-size-14 line-height-20 max-w-px-300 font-weight-400">
                        Unlocking the world's generosity potential</h1>
                </div>
                <div class="panel max-w-px-500 mb-0 mx-auto px-4 px-sm-12 py-4 py-sm-10 border-radius-8">
                    <p class="font-size-24 text-center mb-6 mb-sm-9">Reset password</p>
                    <p class="mb-6 mb-sm-11">Enter the email address you use to log in to Fundraise&nbsp;Up and we’ll
                        send you a link to reset your password.</p>
                    <form id="restore-form" novalidate="novalidate">
                        <div class="form-group mb-10">
                            <input type="email" dir="auto" data-qa="restore-email" name="email"
                                placeholder="Email address" data-vv-name="email" class="form-control"
                                aria-required="true" aria-invalid="false">
                        </div>
                        <button type="submit" data-qa="restore-submit" class="btn btn-primary btn-block mb-6">Reset
                            password</button>
                        <div class="js-login-link text-center font-size-14 line-height-20">
                            <a href="/login" wire:navigate class="font-weight-500 focus-outline">Log in</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
