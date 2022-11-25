<main class="col-8">
    <div class="px-4 pt-3 border-end h-full">
        <div class="d-flex justify-content-between border-bottom pb-3">
            <h1 class="fw-normal">
                Top Questions
            </h1>
            <a href="/askWorld/question/create" class="btn btn-primary my-0">Ask Questions</a>
        </div>

        <section>
            <ul class="list-group list-group-flush">
                <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" data-bs-title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
                <?php foreach ($questions as $question): ?>
                <li class="d-flex list-group-item py-4">
                    <div class="pe-3 fs-6 fw-light text-nowrap">
                        <p class="text-center">0 Votes</p>
                        <div class="border px-2 mb-3">1 Answer</div>
                        <p class="text-center">15 Views</p>
                    </div>
                    <div class="">
                        <a href="question/<?= $question->id ?>"><h6><?= $question->title ?></h6></a>
                        <div class="">
                            <?= $question->problem_detail ?><br><br><?= $question->problem_result ?>
                        </div>
                        <div class="">
                            <?php foreach ($question->tag ?: [] as $tag):?>
                            <span class="badge rounded-pill text-bg-dark"><?= $tag->name ?></span>
                            <?php endforeach;?>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>

        </section>

    </div>
</main>