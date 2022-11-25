<main class="col-8">
    <div class="px-4 pt-3 border-end h-full">
        <div class="d-flex justify-content-between border-bottom pb-3">
            <h1 class="fw-normal"> <?= $question->title ?> </h1>
        </div>

        <section name="question" class="border-bottom pb-3 w-100">

            <ul class="list-group list-group-flush">
                <li class="d-flex list-group-item py-4">
                    <div class="d-flex flex-column pe-3 fs-6 fw-light text-nowrap align-items-center gap-2">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11.25l-3-3m0 0l-3 3m3-3v7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                        <div class="border px-2">500</div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                    </div>
                    <pre class="d-block font-primary" style="white-space: pre-wrap; word-break: keep-all; font-family: system-ui;"><?= $question->problem_detail ?><br><br><?= $question->problem_result ?></pre>
                </li>
            </ul>

        </section>

        <section name="answer" class="pt-5">
            <div class="d-flex justify-content-between">
                <h3 class="fw-normal">Answers</h3>
                <form method="get" action="">
                    <?php $answerTab = $_GET['answertab'] ?? ''; ?>
                    <select name='answertab' class="form-select w-auto" aria-label="Default select example" onchange='this.form.submit();' >
                        <option value="scoredesc" <?= $answerTab=='scoredesc' ? 'selected':'' ?>>
                            Highest score (default)
                        </option>
                        <option value="trending" <?= $answerTab=='trending' ? 'selected':'' ?>>
                            Trending (recent votes count more)
                        </option>
                        <option value="modifieddesc" <?= $answerTab=='modifieddesc' ? 'selected':'' ?>>
                            Date modified (newest first)
                        </option>
                        <option value="createdasc" <?= $answerTab=='createdasc' ? 'selected':'' ?>>
                            Date created (oldest first)
                        </option>
                    </select>
                </form>

            </div>

            <ul class="list-group list-group-flush">
                <?php foreach ($question->answers ?: [] as $answer):?>
                <li class="d-flex list-group-item py-4">
                    <div class="d-flex flex-column pe-3 fs-6 fw-light text-nowrap align-items-center gap-2">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11.25l-3-3m0 0l-3 3m3-3v7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                        <div class="border px-2">500</div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                    </div>

                    <div class="">
                        <pre class="d-block font-primary" style="white-space: pre-wrap; word-break: keep-all; font-family: system-ui;"><?=$answer->description?></pre>
                    </div>
                </li>
                <?php endforeach;?>
            </ul>
        </section>

        <section class="my-3" name="reply">
            <h4 class="fw-normal">Your Answer</h4>
            <form class="mt-3" method="POST" action="/askWorld/question/<?= $question->id?>/answer">
                <div class="form-group mb-3">
                    <textarea name="description" class="form-control" id="description" rows="8" placeholder="Be nice..."></textarea>
                </div>

                <button type="submit" class="btn btn-success">Submit Your Answer</button>
            </form>
        </section>

    </div>
</main>