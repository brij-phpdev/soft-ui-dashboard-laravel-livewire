<div class="main-content">
    <div class="page-header min-height-300 border-radius-xl mt-4 d-none"
        style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    
</div>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Add New Tenant</h6>
                </div>
                <div class="card-body">

                    <form wire:submit.prevent="tenant" action="#"  role="form text-left">
                                <div>
                                    <label for="tenant_name">{{ __('Tenant Name') }}</label>
                                    <div class="@error('tenant_name')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="tenant_name" id="tenant_name" type="text" class="form-control" required="required"
                                            placeholder="Tenant Name" aria-label="Tenant Name" aria-describedby="tenant_name-addon">
                                    </div>
                                    @error('tenant_name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div>
                                    <label for="tenant_photo">{{ __('Tenant Photo') }}</label>
                                    <div class="@error('tenant_photo')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="tenant_photo" id="tenant_photo" type="file" class="form-control"
                                            placeholder="Tenant Photo" aria-label="Tenant Photo" aria-describedby="tenant_photo-addon">
                                    </div>
                                    @if ($tenant_photo)
                                        Photo Preview:
                                        <img src="{{ $tenant_photo->temporaryUrl() }}">
                                    @endif
                                    @error('tenant_photo') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div>
                                    <label for="tenant_email">{{ __('Tenant Email') }}</label>
                                    <div class="@error('tenant_email')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="tenant_email" id="tenant_email" type="email" class="form-control"
                                            placeholder="Tenant Email" aria-label="Tenant Email" aria-describedby="tenant_email-addon">
                                    </div>
                                    @error('tenant_email') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div>
                                    <label for="tenant_phone">{{ __('Tenant Phone') }}</label>
                                    <div class="@error('tenant_phone')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="tenant_phone" id="tenant_phone" type="text" class="form-control"
                                            placeholder="Tenant Phone" aria-label="Tenant Phone" aria-describedby="tenant_phone-addon">
                                    </div>
                                    @error('tenant_phone') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div>
                                    <label for="tenant_dob">{{ __('Tenant Phone') }}</label>
                                    <div class="@error('tenant_dob')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="tenant_dob" id="tenant_dob" type="date" min="1950" class="form-control"
                                            placeholder="Tenant DOB" aria-label="Tenant DOB" aria-describedby="tenant_dob-addon">
                                    </div>
                                    @error('tenant_dob') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div>
                                    <label for="tenant_passport">{{ __('Tenant Passport #') }}</label>
                                    <div class="@error('tenant_passport')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="tenant_passport" id="tenant_passport" type="text" class="form-control"
                                            placeholder="Tenant Passport" aria-label="Tenant Passport" aria-describedby="tenant_dob-addon">
                                    </div>
                                    @error('tenant_passport') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                
                                <div>
                                    <label for="tenant_dl_number">{{ __('Tenant DL #') }}</label>
                                    <div class="@error('tenant_dl_number')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="tenant_dl_number" id="tenant_dl_number" type="text" class="form-control"
                                            placeholder="Tenant DL #" aria-label="Tenant DL #" aria-describedby="tenant_dob-addon">
                                    </div>
                                    @error('tenant_dl_number') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                
                                <div>
                                    <label for="tenant_ni_number">{{ __('Tenant NID') }}</label>
                                    <div class="@error('tenant_ni_number')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="tenant_ni_number" id="tenant_ni_number" type="text" class="form-control"
                                            placeholder="Tenant National ID" aria-label="Tenant NID" aria-describedby="tenant_dob-addon">
                                    </div>
                                    @error('tenant_ni_number') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-0">Review Information</h6>
                        </div>
                                <div>
                                    <label for="rating">{{ __('Rating') }}</label>
                                    <div class="@error('rating')border border-danger rounded-3 @enderror mb-3">
                                        <select wire:model="rating" class="form-control" required="required">
                <option value="" selected>Select Rating</option>
                @foreach($rating_categories as $rating_category)
                    <option value="{{ $rating_category['id'] }}">{{ $rating_category['name'] }}</option>
                @endforeach
            </select>
                                    </div>
                                    @error('rating') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn bg-gradient-info w-100 mt-4 mb-0">{{ __('Add Tenant') }}</button>
                                </div>
                            </form>

                            @if ($showSuccesNotification)
                                <div wire:model="showSuccesNotification"
                                    class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                                    <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                                    <span class="alert-text text-white">
                                        {{ __('Details for tenant has been successfuly saved!') }}</a></span>
                                    <button wire:click="$set('showSuccesNotification', false)" type="button"
                                        class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    </button>
                                </div>
                            @endif

                            @if ($showFailureNotification)
                                <div wire:model="showFailureNotification"
                                    class="mt-3 alert alert-light alert-dismissible fade show" role="alert">
                                    <span class="alert-text">{{ 'Please enter the correct email address!' }}</span>
                                    <button wire:click="$set('showFailureNotification', false)" type="button"
                                        class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    </button>
                                </div>
                            @endif
                        </div>
            </div>
        </div>
        
        
    </div>
</div>
</div>

