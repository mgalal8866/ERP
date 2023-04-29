<div>

        <div  class="row" id="basic-table">
                @livewire('customer.create-customer')
                        <div class="col-12">
                            <div class="card outline-success">
                                <div class="card-header">
                                    <h4 class="card-title">{{__('tran.customer')}}</h4>
                                    <button type="button" class="btn btn-gradient-success" data-bs-toggle="modal" data-bs-target="#newcustomer">{{__('tran.newcustomer')}}</button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>{{__('tran.name')}}</th>
                                                <th>{{__('tran.phone')}}</th>
                                                <th>{{__('tran.email')}}</th>
                                                <th>{{__('tran.brand')}}</th>
                                                <th>{{__('tran.birthday')}}</th>
                                                <th>{{__('tran.status')}}</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @forelse (  $customers  as $customer )
                                            <tr>
                                                <td>
                                                <span class="fw-bold">{{ $customer->name}}</span>
                                                </td>
                                                <td>{{ $customer->phone??'N/A'}}</td>
                                                <td>{{ $customer->email??'N/A'}}</td>
                                                <td>{{ $customer->brand??'N/A'}}</td>
                                                <td>{{ $customer->birthday??'N/A'}}</td>

                                                <td><span class="badge rounded-pill badge-light-{{ $customer->status == 1 ? 'primary' :'danger' }} me-1">{{ $customer->status == 1 ? __('tran.active')  : __('tran.inactive') }} </span></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button    type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 me-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                                <span>Edit</span>
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash me-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                                <span>Delete</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>


                                                    <td colspan="7" class="alert alert-danger text-center"> No Data Here</td>

                                            </tr>
                                        @endforelse


                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer  d-flex justify-content-center">
                                  {{$customers->links()}}
                                </div>
                            </div>
                        </div>
        </div>


</div>
