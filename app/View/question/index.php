<div class="p-3">
    <div class="flex justify-between items-center bg-white shadow-sm rounded p-3">
        <h1 class="text-2xl">
            Top Questions
        </h1>
        <a href="/question/create" class="bg-amber-500 rounded p-2 text-white font-semibold hover:bg-amber-600">Ask Questions</a>
    </div>

    <section>
        <ul class="">
            <?php foreach ($questions as $question): ?>
            <li class="flex flex-row-reverse gap-2 justify-between items-center bg-white shadow-sm rounded p-3 my-2">
                
                <div class=" basis-5/6">
                    <a class="" href="question/<?= $question->id ?>">
                        <h6 class="font-semibold my-2"><?= $question->title ?></h6>
                    </a>
                    <article class="text-sm line-clamp-6 problem_detail">
                        <?= $question->problem_detail ?>
                    </article>
                    <div class="my-2">
                        <?php foreach ($question->tag ?: [] as $tag):?>
                        <span class="mr-1 text-xs text-center border rounded p-1 bg-green-50 font-mono"><?= $tag->name ?></span>
                        <?php endforeach;?>
                    </div>
                </div>

                <div class="text-sm basis-1/6 lg:p-3">
                    <p class="my-2 text-center">0 Votes</p>
                    <p class="my-2 text-center border rounded py-1 bg-green-600 text-white">1 Answer</p>
                    <p class="my-2 text-center">15 Views</p>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>

    </section>

</div>