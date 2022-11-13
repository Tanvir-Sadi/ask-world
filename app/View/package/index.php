<main class="col-8">
    <?= json_encode($data) ?>
    <div class="px-4 pt-3 border-end h-full">
        <div class="d-flex justify-content-between border-bottom pb-3">
            <h1 class="fw-normal">
                Buy Package
            </h1>
        </div>

        <ol class="list-group list-group-numbered">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Silver Package
                    </div>
                    Content for list item
                </div>
                <span class="badge bg-primary rounded-pill">$14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Gold Package
                    </div>
                    Content for list item
                </div>
                <span class="badge bg-primary rounded-pill">$30</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Plutinum Package
                    </div>
                    Content for list item
                </div>
                <span class="badge bg-primary rounded-pill">$100</span>
            </li>
        </ol>
    </div>
</main>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card  rounded-3">
                    <div class="card-body">

                        <form class="">
                            <div class="form-outline form-white mb-4">
                                <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                                       placeholder="Cardholder's Name" />

                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                                       placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />

                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="form-outline form-white">
                                        <input type="text" id="typeExp" class="form-control form-control-lg"
                                               placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-outline form-white">
                                        <input type="password" id="typeText" class="form-control form-control-lg"
                                               placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />

                                    </div>
                                </div>
                            </div>

                        </form>

                        <hr class="my-4">

                        <div class="d-flex justify-content-between">
                            <p class="mb-2">Subtotal</p>
                            <p class="mb-2">$4798.00</p>
                        </div>

                        <div class="d-flex justify-content-between">
                            <p class="mb-2">Shipping</p>
                            <p class="mb-2">$20.00</p>
                        </div>

                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-2">Total(Incl. taxes)</p>
                            <p class="mb-2">$4818.00</p>
                        </div>


                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>