<!-- Header -->
<?php require __DIR__ . "/components/header.php" ?>

<!-- Constant -->
<?php require __DIR__ . "/../config/constant.php" ?>

<!-- Container -->
<div class="container-fluid p-5">

    <div class="add-student mb-4">
        <a class="btn btn-primary btn-sm btn-rounded" href="src/views/student_form.php">Add Student</a>
    </div>

    <div class="card mx-3 mt-n5 shadow-lg" style="border-radius: 10px; border-left:8px #007bff solid; border-right: none; border-top:none; border-bottom:none">
        <div class="card-body">
            <nav class="navbar navbar-light">
                <div class="container-fluid">
                    <h4 class="card-title mb-3 text-primary text-uppercase">Students</h4>
                    <form class="d-flex mb-3">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>

            <div class="table-container col-lg-12">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>Sl No</th>
                            <th>Reg No</th>
                            <th>Name with Email</th>
                            <th>Department with Year</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p class="m-2">01</p>
                            </td>
                            <td>
                                <p class="mt-2">961420104025</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src=<?= true ? $male_avatar : $female_avatar ?> alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">John Doe</p>
                                        <p class="text-muted mb-0">john.doe@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Computer Science Engg.</p>
                                <p class="text-muted mb-0">Second Year</p>
                            </td>
                            <td>93765876987</td>
                            <td>
                                <span class="badge rounded-pill bg-success d-inline">Active</span>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm btn-rounded">
                                    View
                                </button>
                                <button type="button" class="btn btn-success btn-sm btn-rounded">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger btn-sm btn-rounded">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="sl-no m-2">02</p>
                            </td>
                            <td>
                                <p class="register-number mb-2">961420104035</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src=<?= false ? $male_avatar : $female_avatar ?> class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Alex Ray</p>
                                        <p class="text-muted mb-0">alex.ray@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">BE CSE</p>
                                <p class="text-muted mb-0">Third Year</p>
                            </td>
                            <td>87657765456</td>
                            <td>
                                <span class="badge bg-warning rounded-pill d-inline">Inactive</span>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm btn-rounded">
                                    View
                                </button>
                                <button type="button" class="btn btn-success btn-sm btn-rounded">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger btn-sm btn-rounded">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="sl-no m-2">01</p>
                            </td>
                            <td>
                                <p class="register-number mb-2">961420104045</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src=<?= true ? $male_avatar : $female_avatar ?> class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Kate Hunington</p>
                                        <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Computer Science Engg.</p>
                                <p class="text-muted mb-0">Fourth Year</p>
                            </td>
                            <td>93787658767</td>
                            <td>
                                <span class="badge rounded-pill bg-danger d-inline">Blocked</span>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm btn-rounded">
                                    View
                                </button>
                                <button type="button" class="btn btn-success btn-sm btn-rounded">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger btn-sm btn-rounded">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <nav aria-label="" class="mt-4">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link text-primary" href="#">1</a></li>
                    <li class="page-item"><a class="page-link text-primary" href="#">2</a></li>
                    <li class="page-item"><a class="page-link text-primary" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>