@extends('admin.home.apps.dashboard')
@section('title', 'All Post')
@section('content')
    <div class="row mb-2 mt-5">
        <div class="col-sm-4">
            <a href="{{ route('home.create-new') }}" class="btn btn-danger btn-rounded mb-3">
                <i class="mdi mdi-plus"></i>
                New Post</a>
        </div>
        <div class="col-sm-8">
            <div class="text-sm-end">
                <div class="btn-group mb-3">
                    <button type="button" class="btn btn-primary">All</button>
                </div>
                <div class="btn-group mb-3 ms-1">
                    <button type="button" class="btn btn-light">Ongoing</button>
                    <button type="button" class="btn btn-light">Finished</button>
                </div>
                <div class="btn-group mb-3 ms-2 d-none d-sm-inline-block">
                    <button type="button" class="btn btn-secondary"><i class="dripicons-view-apps"></i></button>
                </div>
                <div class="btn-group mb-3 d-none d-sm-inline-block">
                    <button type="button" class="btn btn-link text-muted"><i class="dripicons-checklist"></i></button>
                </div>
            </div>
        </div><!-- end col-->
        <div class="row">
            <div class="col-lg-6 col-xxl-3">
                <!-- project card -->
                <div class="card d-block">
                    <div class="card-body">
                        <div class="dropdown card-widgets">
                            <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="dripicons-dots-3"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="mdi mdi-pencil me-1"></i>Edit</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="mdi mdi-delete me-1"></i>Delete</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="mdi mdi-email-outline me-1"></i>Invite</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                            </div>
                        </div>
                        <!-- project title-->
                        <h4 class="mt-0">
                            <a href="apps-projects-details.html" class="text-title">App design and development</a>
                        </h4>
                        <div class="badge bg-success mb-3">Finished</div>

                        <p class="text-muted font-13 mb-3">With supporting text below as a natural lead-in to additional
                            contenposuere erat a ante...<a href="javascript:void(0);" class="fw-bold text-muted">view
                                more</a>
                        </p>

                        <!-- project detail-->
                        <p class="mb-1">
                            <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                                <b>21</b> Tasks
                            </span>
                            <span class="text-nowrap mb-2 d-inline-block">
                                <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                <b>741</b> Comments
                            </span>
                        </p>
                        <div id="tooltip-container">
                            <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="" class="d-inline-block"
                                data-bs-original-title="Mat Helme">
                                <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="" class="d-inline-block"
                                data-bs-original-title="Michael Zenaty">
                                <img src="assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs" alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="James Anderson" class="d-inline-block">
                                <img src="assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="friend">
                            </a>
                            <a href="javascript:void(0);" class="d-inline-block text-muted fw-bold ms-2">
                                +7 more
                            </a>
                        </div>
                    </div> <!-- end card-body-->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <!-- project progress-->
                            <p class="mb-2 fw-bold">Progress <span class="float-end">100%</span></p>
                            <div class="progress progress-sm">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 100%;">
                                </div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </li>
                    </ul>
                </div> <!-- end card-->
            </div> <!-- end col -->

            <div class="col-md-6 col-xxl-3">
                <!-- project card -->
                <div class="card d-block">
                    <div class="card-body">
                        <div class="dropdown card-widgets">
                            <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="dripicons-dots-3"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="mdi mdi-pencil me-1"></i>Edit</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="mdi mdi-delete me-1"></i>Delete</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="mdi mdi-email-outline me-1"></i>Invite</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                            </div>
                        </div>
                        <!-- project title-->
                        <h4 class="mt-0">
                            <a href="apps-projects-details.html" class="text-title">Coffee detail page - Main Page</a>
                        </h4>
                        <div class="badge bg-secondary text-light mb-3">Ongoing</div>

                        <p class="text-muted font-13 mb-3">This card has supporting text below as a natural lead-in to
                            additional content is a little bit longer...<a href="javascript:void(0);"
                                class="fw-bold text-muted">view more</a>
                        </p>

                        <!-- project detail-->
                        <p class="mb-1">
                            <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                                <b>81</b> Tasks
                            </span>
                            <span class="text-nowrap mb-2 d-inline-block">
                                <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                <b>103</b> Comments
                            </span>
                        </p>
                        <div id="tooltip-container1">
                            <a href="javascript:void(0);" data-bs-container="#tooltip-container1"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme"
                                class="d-inline-block">
                                <img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-xs"
                                    alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-bs-container="#tooltip-container1"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty"
                                class="d-inline-block">
                                <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs"
                                    alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-bs-container="#tooltip-container1"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="James Anderson"
                                class="d-inline-block">
                                <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs"
                                    alt="friend">
                            </a>
                            <a href="javascript:void(0);" class="d-inline-block text-muted fw-bold ms-2">
                                +3 more
                            </a>
                        </div>
                    </div> <!-- end card-body-->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <!-- project progress-->
                            <p class="mb-2 fw-bold">Progress <span class="float-end">28%</span></p>
                            <div class="progress progress-sm">
                                <div class="progress-bar" role="progressbar" aria-valuenow="28" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 28%;">
                                </div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </li>
                    </ul>
                </div> <!-- end card-->
            </div> <!-- end col -->
            <div class="col-md-6 col-xxl-3">
                <!-- project card -->
                <div class="card d-block">
                    <div class="card-body">
                        <div class="dropdown card-widgets">
                            <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="dripicons-dots-3"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="mdi mdi-pencil me-1"></i>Edit</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="mdi mdi-delete me-1"></i>Delete</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="mdi mdi-email-outline me-1"></i>Invite</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                            </div>
                        </div>
                        <!-- project title-->
                        <h4 class="mt-0">
                            <a href="apps-projects-details.html" class="text-title">Poster illustation design</a>
                        </h4>
                        <div class="badge bg-secondary text-light mb-3">Ongoing</div>

                        <p class="text-muted font-13 mb-3">Anim pariatur cliche reprehenderit, enim eiusmod high life
                            accusamus terry richardson ad squid...<a href="javascript:void(0);"
                                class="fw-bold text-muted">view more</a>
                        </p>

                        <!-- project detail-->
                        <p class="mb-1">
                            <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                                <b>12</b> Tasks
                            </span>
                            <span class="text-nowrap mb-2 d-inline-block">
                                <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                <b>482</b> Comments
                            </span>
                        </p>
                        <div id="tooltip-container2">
                            <a href="javascript:void(0);" data-bs-container="#tooltip-container2"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme"
                                class="d-inline-block">
                                <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs"
                                    alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-bs-container="#tooltip-container2"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty"
                                class="d-inline-block">
                                <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs"
                                    alt="friend">
                            </a>
                        </div>
                    </div> <!-- end card-body-->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <!-- project progress-->
                            <p class="mb-2 fw-bold">Progress <span class="float-end">63%</span></p>
                            <div class="progress progress-sm">
                                <div class="progress-bar" role="progressbar" aria-valuenow="63" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 63%;">
                                </div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </li>
                    </ul>
                </div> <!-- end card-->
            </div> <!-- end col -->

            <div class="col-md-6 col-xxl-3">
                <!-- project card -->
                <div class="card d-block">
                    <div class="card-body">
                        <div class="dropdown card-widgets">
                            <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="dripicons-dots-3"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="mdi mdi-pencil me-1"></i>Edit</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="mdi mdi-delete me-1"></i>Delete</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="mdi mdi-email-outline me-1"></i>Invite</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                            </div>
                        </div>
                        <!-- project title-->
                        <h4 class="mt-0">
                            <a href="apps-projects-details.html" class="text-title">Drinking bottle graphics </a>
                        </h4>
                        <div class="badge bg-success mb-3">Finished</div>

                        <p class="text-muted font-13 mb-3">Some quick example text to build on the card title and make up
                            the bulk of the card's content...<a href="javascript:void(0);" class="fw-bold text-muted">view
                                more</a>
                        </p>

                        <!-- project detail-->
                        <p class="mb-1">
                            <span class="pe-2 mb-2 d-inline-block text-nowrap">
                                <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                                <b>50</b> Tasks
                            </span>
                            <span class="text-nowrap mb-2 d-inline-block">
                                <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                <b>208</b> Comments
                            </span>
                        </p>
                        <div id="tooltip-container3">
                            <a href="javascript:void(0);" data-bs-container="#tooltip-container3"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme"
                                class="d-inline-block">
                                <img src="assets/images/users/avatar-10.jpg" class="rounded-circle avatar-xs"
                                    alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-bs-container="#tooltip-container3"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty"
                                class="d-inline-block">
                                <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs"
                                    alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-bs-container="#tooltip-container3"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="James Anderson"
                                class="d-inline-block">
                                <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs"
                                    alt="friend">
                            </a>
                            <a href="javascript:void(0);" class="d-inline-block text-muted fw-bold ms-2">
                                +2 more
                            </a>
                        </div>
                    </div> <!-- end card-body-->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <!-- project progress-->
                            <p class="mb-2 fw-bold">Progress <span class="float-end">100%</span></p>
                            <div class="progress progress-sm">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 100%;">
                                </div><!-- /.progress-bar -->
                            </div><!-- /.progress -->
                        </li>
                    </ul>
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
    </div>
@endsection