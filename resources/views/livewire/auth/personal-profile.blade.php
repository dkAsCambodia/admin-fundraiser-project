<div class="content-row">
    <div class="text-top">
        <div class="flex-shrink-0 min-w-0 ml-xl-minus-4 mr-0 mr-md-4"></div>
        <div qa="settings-page" class="container d-md-flex mt-6 mt-lg-10">
            <div class="flex-grow-1 min-w-0">
                <div qa="settings-personal">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Personal profile</h3>
                        </div>
                        <div class="panel-heading-divider"></div>
                        <form wire:submit="updateProfile" data-hs-cf-bound="true">
                            <div class="panel-body pb-xl-10">
                                <div class="d-md-flex align-items-center mb-6">
                                    <div class="flex-shrink-0 mb-2 mb-md-0 mr-4" style="flex-basis: 180px;">Name
                                    </div>
                                    <div style="flex-basis: 320px;">
                                        <div>
                                            <input type="text" dir="auto"
                                                wire:model="name" data-vv-scope="personal" data-vv-as="First Name"
                                                placeholder="Enter name" class="form-control" aria-required="true"
                                                aria-invalid="false">
                                            @error('name')
                                                <small class="form-text text-muted text-danger">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="d-md-flex align-items-center">
                                    <div class="flex-shrink-0 mb-2 mb-md-0 mr-4" style="flex-basis: 180px;">Account Name
                                    </div>
                                    <div style="flex-basis: 320px;">
                                        <div><input type="text" dir="auto"
                                                wire:model="accountName" data-vv-scope="personal" data-vv-as="Last Name"
                                                placeholder="Account Name" class="form-control" aria-required="true"
                                                aria-invalid="false">
                                            @error('accountName')
                                                <small class="form-text text-muted text-danger">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0">
                            <div class="panel-x-body py-5 border-bottom-radius-base bg-yellow-05">
                                <button type="submit" class="btn btn-color-transition btn-primary">
                                    Save changes
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Email &amp; password</h3>
                        </div>
                        <div class="panel-heading-divider"></div>
                        <div class="panel-body">
                            <form data-hs-cf-bound="true">
                                <div class="mb-2">Email address</div>
                                <div class="d-sm-flex font-size-14 line-height-20 text-gray-85 mb-6">
                                    <div>
                                        {{ $email }}
                                    </div>
                                    <div class="d-none d-sm-block mx-3 text-gray-70">·</div>
                                    <div><a qa="personal-change-email" tabindex="0"
                                            wire:click="openModalEmailPassword('email')"
                                            class="cursor-pointer focus-outline">
                                            Change email address
                                        </a></div>
                                </div>
                                <div class="mb-2">Password</div>
                                <div class="d-sm-flex font-size-14 line-height-20 text-gray-85">
                                    <div>••••••••</div>
                                    <div class="d-none d-sm-block mx-3 text-gray-70">·</div>
                                    <div><a tabindex="0" class="cursor-pointer focus-outline"
                                            wire:click="openModalEmailPassword('password')">
                                            Change password
                                        </a></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="model-email" class="modal" style="z-index: 1051; display: {{ $openModel['email'] ?? 'none' }};">
        <div tabindex="0" aria-hidden="true"></div>
        <div role="document" class="modal-dialog modal-400" style=""><!---->
            <div class="modal-content"><!---->
                <div qa="user-change-email-modal">
                    <div class="d-flex justify-content-between pl-6 pr-4 py-4">
                        <div class="font-size-16 line-height-24 font-weight-400 mr-3">Change email address</div>
                        <button type="button" onclick="closeModalEmailPassword('email')"
                            class="btn-reset-default flex-shrink-0 border-radius-2 focus-outline"><span
                                class="icon-slot d-block icon-slot-24"><span
                                    class="p-abs centered font-size-24 text-gray-85-hover-gray-70"><svg svg-inline=""
                                        focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.4" stroke-linecap="round"
                                        stroke-linejoin="round" class="icon-stroke d-block">
                                        <line x1="18" y1="6" x2="6" y2="18">
                                        </line>
                                        <line x1="6" y1="6" x2="18" y2="18">
                                        </line>
                                    </svg></span></span></button>
                    </div>
                    <hr class="my-0">
                    <form wire:submit="updateEmail">
                        <div class="px-6 px-xl-10 pt-6 pt-xl-8 pb-10">
                            <div>
                                <div class="mb-2">New email</div>
                                <input type="email" dir="auto" wire:model="email" qa="personal-email"
                                    data-vv-scope="modal" data-vv-as="Email Address" class="form-control"
                                    aria-required="true" aria-invalid="false"> <!---->
                                @error('email')
                                    <small class="form-text text-muted text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                        </div>
                        <hr class="my-0">
                        <div class="bg-yellow-05 border-bottom-radius-base px-6 py-4">
                            <div class="d-flex justify-content-end m-minus-2 flex-wrap"><button type="button"
                                    onclick="closeModalEmailPassword('email')" qa="personal-modal-close"
                                    class="btn btn-default m-2 flex-shrink-0">
                                    Cancel
                                </button> <button type="submit"
                                    class="btn btn-color-transition btn-primary m-2 flex-shrink-0"
                                    qa="personal-change-button">
                                    Change
                                </button></div>
                        </div>
                    </form>

                </div> <!---->
            </div>
        </div>
    </div>
    <div id="model-password" class="modal" style="z-index: 1051; display: {{ $openModel['password'] ?? 'none' }};">
        <div tabindex="0" aria-hidden="true"></div>
        <div role="document" class="modal-dialog modal-400" style=""><!---->
            <div class="modal-content"><!---->
                <div>
                    <div class="d-flex justify-content-between pl-6 pr-4 py-4">
                        <h4 class="font-size-16 line-height-24 font-weight-400 mr-3">Change password</h4> <button
                            onclick="closeModalEmailPassword('password')" type="button"
                            class="btn-reset-default flex-shrink-0 border-radius-2 focus-outline"><span
                                class="icon-slot d-block icon-slot-24"><span
                                    class="p-abs centered font-size-24 text-gray-85-hover-gray-70"><svg svg-inline=""
                                        focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.4" stroke-linecap="round"
                                        stroke-linejoin="round" class="icon-stroke d-block">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg></span></span></button>
                    </div>
                    <hr class="my-0">
                    <form wire:submit="updatePassword"><!---->
                        <div class="px-6 px-xl-10 pt-6 pt-xl-8 pb-10">
                            <p class="mb-8">
                                Your new password must be between 8 and 64 characters long, and must include all of the
                                following: lowercase
                                letters, uppercase letters, numbers, and special characters (!@#$%^&amp;*).
                            </p>
                            <div class="mb-6 p-rel">
                                <div class="mb-2">Current password</div> <input type="password" dir="auto"
                                    wire:model="currentPassword" class="form-control"
                                    aria-required="true" aria-invalid="false"> <!---->
                                @error('currentPassword')
                                    <small class="form-text text-muted text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="mb-6 p-rel">
                                <div class="mb-2">New password</div> <input type="password" dir="auto"
                                    wire:model="password"
                                    class="form-control" aria-required="false" aria-invalid="false"> <!---->
                                @error('password')
                                    <small class="form-text text-muted text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="p-rel">
                                <div class="mb-2">Confirm new password</div> <input type="password" dir="auto"
                                    wire:model="confirmPassword"
                                    class="form-control" aria-required="true" aria-invalid="false"> <!---->
                                @error('confirmPassword')
                                    <small class="form-text text-muted text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="bg-yellow-05 border-bottom-radius-base px-6 py-4">
                            <div class="d-flex justify-content-end m-minus-2 flex-wrap">
                                <button type="button" class="btn btn-default m-2 flex-shrink-0"
                                    onclick="closeModalEmailPassword('password')">
                                    Cancel
                                </button>
                                <button type="submit" class="btn btn-color-transition btn-primary m-2 flex-shrink-0">
                                    Change
                                </button>
                            </div>
                        </div>
                    </form>
                </div> <!---->
            </div>
        </div>
        <div tabindex="0" aria-hidden="true"></div>
    </div>
</div>
