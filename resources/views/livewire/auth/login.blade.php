<div class="page">
    <div class="content-row">
        <div class="d-table-cell text-top">
            <div class="container pt-6 pt-sm-10 pb-3">
                <div class="mb-6 mb-sm-12">
                    <div class="d-flex align-items-center justify-content-center pt-6 pt-lg-10">
                        <div>
                            <a href="/" class="focus-outline">
                                <img src="{{ URL::to('admin_panel/logo.png') }}" width="200" height=""
                                    alt="Fundraise Up" class="img-responsive mx-auto">
                            </a>
                        </div>
                    </div>
                    <h1
                        class="mx-auto mt-6 mt-sm-10 text-gray-85 text-center font-size-14 line-height-20 max-w-px-300 font-weight-400">
                        Unlocking the world's generosity potential</h1>
                </div>
                <div class="max-w-px-500 mx-auto">
                    <div class="panel mb-0 px-4 px-sm-12 py-4 py-sm-10 border-radius-8">
                        <p class="font-size-24 text-center mb-6 mb-sm-12">Log in</p>
                        <form wire:submit="doLogin">
                            @csrf
                            <label for="email" class="mb-2">Email</label>
                            <input id="email" type="email" autocomplete="off" wire:model="email"
                                placeholder="Enter email address" class="form-control mb-6">
                            @error('email')
                                <small class="form-text text-muted text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                            <label for="password" class="mb-2">Password</label>
                            <input id="password" type="password" autocomplete="off" wire:model="password"
                                placeholder="Enter password" class="form-control mb-3">
                            @error('password')
                                <small class="form-text text-muted text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                            <div class="text-right mb-12 font-size-14 line-height-20">
                                <a href="/forgot-password" wire:navigate class="font-weight-500 focus-outline"
                                    data-qa="forgot-password">
                                    Forgot your password?
                                </a>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mb-6">
                                Log in
                            </button>
                            <p class="text-center font-size-14 line-height-20 text-gray-85">
                                Don't have an account?
                                <a href="#" class="font-weight-500 focus-outline">Sign up</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
