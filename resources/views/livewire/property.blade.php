<div>
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
                    <h6 class="mb-0">Add New Property</h6>
                </div>
                <div class="card-body">

                    <form wire:submit.prevent="property" action="#"  role="form text-left">
                                <div>
                                    <label for="address">{{ __('Address') }}</label>
                                    <div class="@error('address')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="address" id="address" type="text" class="form-control" required="required"
                                            placeholder="Address" aria-label="Address" aria-describedby="address-addon">
                                    </div>
                                    @error('address') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div>
                                    <label for="address">{{ __('Latitude') }}</label>
                                    <div class="@error('latitude')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="latitude" id="latitude" type="text" class="form-control" required="required"
                                            placeholder="Latitude" aria-label="Latitude" aria-describedby="latitude-addon">
                                    </div>
                                    @error('latitude') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div>
                                    <label for="city">{{ __('City') }}</label>
                                    <div class="@error('city')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="city" id="city" type="text" class="form-control" required="required"
                                            placeholder="City" aria-label="City" aria-describedby="city-addon">
                                    </div>
                                    @error('city') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div>
                                    <label for="city">{{ __('Zip Code') }}</label>
                                    <div class="@error('zip_code')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="zip_code" id="zip_code" type="text" class="form-control" required="required"
                                            placeholder="Zip Code" aria-label="Zip Code" aria-describedby="zip_code-addon">
                                    </div>
                                    @error('zip_code') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div>
                                    <label for="city">{{ __('Country') }}</label>
                                    <div class="@error('country')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="country" id="country" type="text" class="form-control" required="required"
                                            placeholder="Country" aria-label="Country" aria-describedby="country-addon">
                                    </div>
                                    @error('country') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                               
                        
                                
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn bg-gradient-info w-100 mt-4 mb-0">{{ __('Add Property') }}</button>
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


</div>
