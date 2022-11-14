<main class="col-8">
    <div class="px-4 pt-3 border-end h-full">
        <div class="d-flex justify-content-start border-bottom pb-3 flex-md-row flex-column">
            <img class="img-thumbnail img-fluid"
                 src='https://avataaars.io/?avatarStyle=Transparent&topType=ShortHairDreads01&accessoriesType=Kurt&hairColor=SilverGray&facialHairType=MoustacheFancy&facialHairColor=Red&clotheType=ShirtCrewNeck&clotheColor=Blue01&eyeType=Side&eyebrowType=SadConcernedNatural&mouthType=Disbelief&skinColor=Brown' />
            <div class="p-2 w-100">
                <h1 class="mx-2"><?= auth()->name ?></h1>
                <h6 class="mx-2">Member for 1 year, 4 month</h6>
                <div class="d-flex justify-content-between flex-column flex-lg-row">
                    <div class="d-flex flex-column w-50 border-start flex-wrap">
                        <h5 class=""><span class="badge text-bg-warning mx-2">Email</span><?= auth()->email ?></h5>
                        <h5 class=""><span class="badge text-bg-warning mx-2">Date of birth</span>01 Jan 1990</h5>
                        <h5 class=""><span class="badge text-bg-warning mx-2">Website</span>aaaa.com</h5>
                        <h5 class=""><span class="badge text-bg-warning mx-2">Github</span>aaaa</h5>
                    </div>
                    <div class="d-flex flex-column w-50 border-start">
                        <h5 class=""><span class="badge text-bg-warning mx-2">Questions</span>50</h5>
                        <h5 class=""><span class="badge text-bg-warning mx-2">Answers</span>20</h5>
                        <h5 class=""><span class="badge text-bg-warning mx-2">Total Points</span>90</h5>
                        <h5 class=""><span class="badge text-bg-warning mx-2">Current Points</span>5</h5>
                    </div>
                </div>
            </div>
        </div>
        <section class="border-bottom p-2">
            <h3><span class="badge text-bg-warning">Posts</span></h3>

            <ul class="list-group list-group-flush">
                <li class="d-flex list-group-item py-4">
                    <div class="pe-3 fs-6 fw-light text-nowrap">
                        <p class="text-center">0 Votes</p>
                        <div class="border px-2 mb-3">1 Answer</div>
                        <p class="text-center">15 Views</p>
                    </div>
                    <div class="">
                        <h6>An item</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem rem ex quis enim laudantium ipsum maxime, nisi suscipit temporibus, eaque ea! Doloremque laboriosam expedita voluptate quae nihil voluptates, architecto possimus.
                        </p>
                        <div class="">
                            <span class="badge rounded-pill text-bg-dark">Dark</span>
                            <span class="badge rounded-pill text-bg-dark">Dark</span>
                            <span class="badge rounded-pill text-bg-dark">Dark</span>
                            <span class="badge rounded-pill text-bg-dark">Dark</span>
                        </div>

                    </div>
                </li>

                <li class="d-flex list-group-item py-4">
                    <div class="pe-3 fs-6 fw-light text-nowrap">
                        <p class="text-center">0 Votes</p>
                        <div class="border px-2 mb-3 bg-success text-light">1 Answer</div>
                        <p class="text-center">15 Views</p>
                    </div>
                    <div class="">
                        <h6>An item</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem rem ex quis enim laudantium ipsum maxime, nisi suscipit temporibus, eaque ea! Doloremque laboriosam expedita voluptate quae nihil voluptates, architecto possimus.
                        </p>
                        <div class="">
                            <span class="badge rounded-pill text-bg-dark">Dark</span>
                            <span class="badge rounded-pill text-bg-dark">Dark</span>
                            <span class="badge rounded-pill text-bg-dark">Dark</span>
                            <span class="badge rounded-pill text-bg-dark">Dark</span>
                        </div>

                    </div>
                </li>

                <li class="d-flex list-group-item py-4">
                    <div class="pe-3 fs-6 fw-light text-nowrap">
                        <p class="text-center">0 Votes</p>
                        <div class="border px-2 mb-3">1 Answer</div>
                        <p class="text-center">15 Views</p>
                    </div>
                    <div class="">
                        <h6>An item</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem rem ex quis enim laudantium ipsum maxime, nisi suscipit temporibus, eaque ea! Doloremque laboriosam expedita voluptate quae nihil voluptates, architecto possimus.
                        </p>
                        <div class="">
                            <span class="badge rounded-pill text-bg-dark">Dark</span>
                            <span class="badge rounded-pill text-bg-dark">Dark</span>
                            <span class="badge rounded-pill text-bg-dark">Dark</span>
                            <span class="badge rounded-pill text-bg-dark">Dark</span>
                        </div>

                    </div>
                </li>
            </ul>
        </section>
    </div>
</main>