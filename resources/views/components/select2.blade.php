@props(['for', 'value', 'required' => false, 'tooltip' => null])

{{-- @php
    $requiredClasses = 'text-danger';
    $requiredLabel = '*';
@endphp --}}

 <div wire:ignore class=" d-flex " style="flex-warp:nwrap !important">

    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
        <select class="select2 form-select" id="select2" >
            <option value="">Walk-In Customer</option>
            @foreach($customers as $customer)
                <option value="{{ $customer->uuid }}">{{ $customer->name }}</option>
            @endforeach
        </select>
    <button class="btn btn-outline-primary waves-effect" data-bs-target="#newcustomer"  data-bs-toggle="modal" id="button-addon2" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg></button>
</div>
