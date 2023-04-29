
<div>
    <div class="modal fade" id="newproduct" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-5 px-sm-5 pt-50">
                    <div class="text-center mb-2">
                        <h1 class="mb-1">{{__('tran.newproduct')}}</h1>
                    </div>
                    <form id="newproductForm" class="row gy-1 pt-75" wire:submit.prevent="saveproduct">
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modelname">{{__('tran.name')}}</label>
                            <input type="text" wire:model.defer='name' id="modelname" name="modelname" class="form-control"   required />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modelbarcode">{{__('tran.barcod')}}</label>
                            <input type="text" wire:model.defer='barcode' id="modelbarcode" name="modelbarcode" class="form-control"   />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modelemail">{{__('tran.description')}}</label>
                            <input type="email" wire:model.defer='description' id="modeldescription" name="modeldescription" class="form-control" required />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modelmainunit">{{__('tran.mainunit')}}</label>
                            <input type="text" wire:model.defer='mainunit' id="modelmainunit" name="modelmainunit" class="form-control" required />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalperunit">{{__('tran.perunit')}}</label>
                            <input type="text" wire:model.defer='perunit' id="modalperunit" name="modalperunit" class="form-control " />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalsubunit">{{__('tran.subunit')}}</label>
                            <input type="text" wire:model.defer='subunit' id="modalsubunit" name="modalsubunit" class="form-control " />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalprice">{{__('tran.price')}}</label>
                            <input type="text" wire:model.defer='price' id="modalprice" name="modalprice" class="form-control " />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalqtyalert">{{__('tran.qtyalert')}}</label>
                            <input type="text" wire:model.defer='qtyalert' id="modalqtyalert" name="modalqtyalert" class="form-control " />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modelpricing">{{__('tran.pricing')}}</label>
                            <select id="modelpricing"  wire:model.defer='pricing' name="modelpricing" class="form-select" >
                                <option value="null">{{__('tran.default')}}</option>
                                <option value="1">{{__('tran.gomla')}}</option>
                                <option value="2">{{__('tran.pieces')}}</option>
                                <option value="3">{{__('tran.halfgomla')}}</option>
                                <option value="4">{{__('tran.gomlagomla')}}</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="modeladdress">{{__('tran.address')}}</label>
                            <input type="text" wire:model.defer='address' id="modeladdress" name="modeladdress" class="form-control" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalbirthday">{{__('tran.birthday')}}</label>
                            <input type="text" wire:model.defer='birthday' id="modalbirthday" name="modalbirthday" class="form-control " />
                        </div>

                        <div class="col-12 text-center mt-2 pt-50">
                            <button type="submit" class="btn btn-primary me-1">Save</button>
                            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    @push('jslive')
    <script>
        window.addEventListener('closeModal', event=> {
            var isRtl = $('html').attr('data-textdirection') === 'rtl';
            $("#newproduct").modal('hide');
                if(event.detail.message){
                    toastr['success']( event.detail.message, '',{
                        closeButton: true,
                        tapToDismiss: false,
                        progressBar: true,
                        rtl:  isRtl,
                    });
                }
        })
    </script>
    @endpush
