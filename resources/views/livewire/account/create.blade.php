<div class="content-row">
    <div class="d-table-cell text-top">
        <div qa="settings-page" class="container d-md-flex mt-6 mt-lg-10">
            @include('livewire.account.sidebar')
            <div class="flex-grow-1 min-w-0">
                <div qa="settings-personal">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Personal profile</h3>
                        </div>
                        <div class="panel-heading-divider"></div>
                        <form wire:submit="addAccount" data-hs-cf-bound="true">
                            <div class="panel-body pb-xl-10 mb-6 row">
                                <div class="max-w-px-600 col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="mb-2">Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" placeholder="Name"
                                            wire:model="name" style="max-width:100%">
                                        @error('name')
                                            <small class="form-text text-muted text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="max-w-px-600 col-md-6">
                                    <div class="form-group">
                                        <label for="accountId" class="mb-2">Account Id<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="accountId"
                                            placeholder="Account Id" wire:model="accountId" style="max-width:100%">
                                        @error('accountId')
                                            <small class="form-text text-muted text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                </div> --}}
                                <div class="max-w-px-600 col-md-6">
                                    <div class="form-group">
                                        <label for="accountName" class="mb-2">Account Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="accountName"
                                            placeholder="Account Name" wire:model="accountName" style="max-width:100%">
                                        @error('accountName')
                                            <small class="form-text text-muted text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="max-w-px-600 col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="mb-2">Email<span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" placeholder="Email"
                                            wire:model="email" style="max-width:100%">
                                        @error('email')
                                            <small class="form-text text-muted text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="max-w-px-600 col-md-6">
                                    <label for="defaultCurrency" class="mb-2">
                                        Roles
                                    <span class="text-danger">*</span></label>
                                    <select id="defaultCurrency" class="form-control custom-select"
                                        style="max-width:100%" wire:model="roles">
                                        @foreach (App\Enums\Roles::values() as $key => $value)
                                            <option {{ $roles == $key ? 'selected' : '' }} value="{{ $key }}">
                                                {{ ucwords(str_replace('_', ' ', $key)) }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('roles')
                                        <small class="form-text text-muted text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>

                                <div class="max-w-px-600 col-md-6">
                                    <div class="form-group">
                                        <label for="password" class="mb-2">Password<span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Password" wire:model="password" style="max-width:100%">
                                        @error('password')
                                            <small class="form-text text-muted text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="max-w-px-600 col-md-6">
                                    <div class="form-group">
                                        <label for="confirmPassword" class="mb-2">Confirm Password<span class="text-danger">*</span></label>
                                        <input type="confirmPassword" class="form-control" id="confirmPassword"
                                            placeholder="Confirm Password" wire:model="confirmPassword" style="max-width:100%">
                                        @error('confirmPassword')
                                            <small class="form-text text-muted text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
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
                </div>
            </div>
        </div>
    </div>
</div>
