<div class="p-2">
    <div class="flex justify-between items-center bg-white shadow-sm rounded p-3 my-2">
        <h1 class="text-2xl"> <?= $question->title ?> </h1>
        <a href="/question/create" class="shrink-0	bg-amber-500 rounded p-2 text-white font-semibold hover:bg-amber-600">Ask Questions</a>
    </div>

    <section name="question" class="mb-5">

        <ul>
            <li class="bg-white shadow-sm rounded p-3 my-2">
                <article class="prose prose-sm max-w-none prose-h2:font-normal prose-h1:font-normal prose-pre:bg-gray-200 prose-pre:text-black prose-pre:text-sm prose-pre:select-all"><?= $question->problem_detail ?><br><br><?= $question->problem_result ?></article>
                <div class="flex justify-between my-2 border-t pt-3 items-center">
                    <div class="flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-green-400 hover:text-slate-400">
                            <path d="M7.493 18.75c-.425 0-.82-.236-.975-.632A7.48 7.48 0 016 15.375c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75 2.25 2.25 0 012.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23h-.777zM2.331 10.977a11.969 11.969 0 00-.831 4.398 12 12 0 00.52 3.507c.26.85 1.084 1.368 1.973 1.368H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 01-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227z" />
                        </svg>

                        <div>500</div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path d="M15.73 5.25h1.035A7.465 7.465 0 0118 9.375a7.465 7.465 0 01-1.235 4.125h-.148c-.806 0-1.534.446-2.031 1.08a9.04 9.04 0 01-2.861 2.4c-.723.384-1.35.956-1.653 1.715a4.498 4.498 0 00-.322 1.672V21a.75.75 0 01-.75.75 2.25 2.25 0 01-2.25-2.25c0-1.152.26-2.243.723-3.218C7.74 15.724 7.366 15 6.748 15H3.622c-1.026 0-1.945-.694-2.054-1.715A12.134 12.134 0 011.5 12c0-2.848.992-5.464 2.649-7.521.388-.482.987-.729 1.605-.729H9.77a4.5 4.5 0 011.423.23l3.114 1.04a4.5 4.5 0 001.423.23zM21.669 13.773c.536-1.362.831-2.845.831-4.398 0-1.22-.182-2.398-.52-3.507-.26-.85-1.084-1.368-1.973-1.368H19.1c-.445 0-.72.498-.523.898.591 1.2.924 2.55.924 3.977a8.959 8.959 0 01-1.302 4.666c-.245.403.028.959.5.959h1.053c.832 0 1.612-.453 1.918-1.227z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm">Author: <?= $question->user->name?></p>
                    </div>
                </div>
                
            </li>
        </ul>

    </section>
    <hr>
    <section id="answer" name="answer" class="mt-5">
        <div class="flex justify-between bg-white shadow-sm rounded p-3 my-2">
            <h3 class="text-xl">Answers</h3>
            <form method="get" action="">
                <?php $answerTab = $_GET['answertab'] ?? ''; ?>
                <select name='answertab' class="rounded text-sm border-gray-200" aria-label="Default select example"
                    onchange='this.form.submit(); '>
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

        <ul class="bg-white shadow-sm rounded p-3 my-2 divide-y">
            <?php foreach ($question->answers ?: [] as $answer):?>
            <li class="py-5 flex flex-row">
                <div class="basis-1/12">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 11.25l-3-3m0 0l-3 3m3-3v7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    <div>500</div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                </div>
                <div class="basis-11/12">
                <article class="prose prose-sm max-w-none prose-h2:font-normal prose-h1:font-normal prose-pre:bg-gray-200 prose-pre:text-black prose-pre:text-sm prose-pre:select-all"><?=$answer->description?></article>

                </div>
            </li>
            <?php endforeach;?>
        </ul>
    </section>

    <hr>

    <section class="bg-white shadow-sm rounded p-3 my-2" name="reply">
        <h4 class="text-xl">Your Answer</h4>
        <form class="" method="POST" action="/question/<?= $question->id?>/answer">
            <div class="">
                <textarea name="description" class="w-full rounded border-gray-300 mt-2" id="description" rows="8"
                    placeholder="Be nice..."></textarea>
            </div>

            <button type="submit" class="bg-amber-500 rounded p-2 text-white font-semibold hover:bg-amber-600">Submit Your Answer</button>
        </form>
    </section>

</div>