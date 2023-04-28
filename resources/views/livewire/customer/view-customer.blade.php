 <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                      @livewire('customer.create-customer')
                    <div class="col-12">
                        <div class="card outline-success">
                            <div class="card-header">
                                <h4 class="card-title">Customer</h4>
                                {{-- <button class="btn btn-gradient-success">New Customer</button> --}}
                                <button type="button" class="btn btn-gradient-success" data-bs-toggle="modal" data-bs-target="#editUser">New Customer</button>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>name</th>
                                            <th>phoe</th>
                                            <th>Users</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="../../../app-assets/images/icons/angular.svg" class="me-75" height="20" width="20" alt="Angular" />
                                                <span class="fw-bold">Angular Project</span>
                                            </td>
                                            <td>Peter Charls</td>
                                            <td>
                                                <div class="avatar-group">
                                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Lilian Nenez">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="26" width="26" />
                                                    </div>
                                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Alberto Glotzbach">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="26" width="26" />
                                                    </div>
                                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Alberto Glotzbach">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="26" width="26" />
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">
                                                            <i data-feather="edit-2" class="me-50"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i data-feather="trash" class="me-50"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Tables end -->

