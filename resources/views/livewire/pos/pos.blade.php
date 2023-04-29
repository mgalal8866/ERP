<div>
             <!-- Add New Customer Sidebar -->
             <div class="modal modal-slide-in fade" id="add-new-customer-sidebar" aria-hidden="true">
                <div class="modal-dialog sidebar-lg">
                    <div class="modal-content p-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                        <div class="modal-header mb-1">
                            <h5 class="modal-title">
                                <span class="align-middle">Add Customer</span>
                            </h5>
                        </div>
                        <div class="modal-body flex-grow-1">
                            <form>
                                <div class="mb-1">
                                    <label for="customer-name" class="form-label">Customer Name</label>
                                    <input type="text" class="form-control" id="customer-name" placeholder="John Doe" />
                                </div>
                                <div class="mb-1">
                                    <label for="customer-email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="customer-email" placeholder="example@domain.com" />
                                </div>
                                <div class="mb-1">
                                    <label for="customer-address" class="form-label">Customer Address</label>
                                    <textarea class="form-control" id="customer-address" cols="2" rows="2" placeholder="1307 Lady Bug Drive New York"></textarea>
                                </div>
                                <div class="mb-1 position-relative">
                                    <label for="customer-country" class="form-label">Country</label>
                                    <select class="form-select" id="customer-country" name="customer-country">
                                        <option label="select country"></option>
                                        <option value="Australia">Australia</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United States of America">United States of America</option>
                                    </select>
                                </div>
                                <div class="mb-1">
                                    <label for="customer-contact" class="form-label">Contact</label>
                                    <input type="number" class="form-control" id="customer-contact" placeholder="763-242-9206" />
                                </div>
                                <div class="mb-1 d-flex flex-wrap mt-2">
                                    <button type="button" class="btn btn-primary me-1" data-bs-dismiss="modal">Add</button>
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    <div class="card outline-success">
        <div class="card-header">
            <h4 class="card-title">{{__('tran.pos')}}</h4>
        </div>
        <div class="card-body">
            <div class="row">

                <div   class="col-12 col-md-6 ">
                    <strong>{{__('tran.numinvoice')}}</strong>
                </div>
            </div>
            <div class="row">
                @livewire('customer.create-customer')
                <div   class="col-12 col-md-6 ">

                </div>
                <div   class="col-12 col-md-6 ">
                    <label class="form-label" for="first-name-icon">{{__('tran.customer')}}</label>
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

                </div>
                {{-- <div>
                    You have selected: <strong>{{ $selected }}</strong>
                </div> --}}
            </div>

        </div>
    </div>
</div>
@push('jslive')
<script>

  var select = $('.select2');
  $(document).on('click', '.add-new-customer', function () {
    select.select2('close');
  });

  select.on('select2:open', function () {
      if (!$(document).find('.add-new-customer').length) {
        $(document)
          .find('.select2-results__options')
          .before(
            '<div class="add-new-customer btn btn-flat-success cursor-pointer rounded-0 text-start mb-50 p-50 w-100" data-bs-toggle="modal" data-bs-target="#add-new-customer-sidebar">' +
              feather.icons['plus'].toSvg({ class: 'font-medium-1 me-50' }) +
              '<span class="align-middle">Add New Customer</span></div>'
          );
      }
    });
  select.each(function() {
        var $this = $(this)
        $this.wrap('<div style="width: 100%;" class="position-relative"></div>');
        // $this.wrap('<div class="position-relative"></div>');
        $this.select2({
            // the following code is used to disable x-scrollbar when click in select input and
            // take 100% width in responsive also
            dropdownAutoWidth: true,
            width: '100%',
            dropdownParent: $this.parent()
        });
        $('#select2').on('change', function (e) {
                var data = $('#select2').select2("val");
            @this.set('selected', data);
        });
    });
</script>
@endpush

