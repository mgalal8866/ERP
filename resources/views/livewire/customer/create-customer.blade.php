
 <div>
                <div class="modal fade" id="newcustomer" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-5 px-sm-5 pt-50">
                                <div class="text-center mb-2">
                                    <h1 class="mb-1">{{__('tran.newcustomer')}}</h1>
                                </div>
                                <form id="newcustomerForm" class="row gy-1 pt-75" wire:submit.prevent="savecustomer">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modelname">{{__('tran.name')}}</label>
                                        <input type="text" wire:model.defer='name' id="modelname" name="modelname" class="form-control"   required />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modelcode">{{__('tran.code')}}</label>
                                        <input type="text" wire:model.defer='code' id="modelcode" name="modelcode" class="form-control"   />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modelemail">{{__('tran.email')}}</label>
                                        <input type="email" wire:model.defer='email' id="modelemail" name="modelemail" class="form-control" required />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modelphone">{{__('tran.phone')}}</label>
                                        <input type="text" wire:model.defer='phone' id="modelphone" name="modelphone" class="form-control" required />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalbrand">{{__('tran.brand')}}</label>
                                        <input type="text" wire:model.defer='brand' id="modalbrand" name="modalbrand" class="form-control " />
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
                        $("#newcustomer").modal('hide');
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
