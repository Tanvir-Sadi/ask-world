<div class="">
    <div class="bg-white shadow-sm rounded p-3 m-2">
        <h1 class="text-2xl">Ask a public question</h1>
    </div>

    <section class="bg-white shadow-sm rounded p-3 m-2">
        <form class="mt-3" method="POST" action="/question">
            <?php if(isset($errors)){ foreach ($errors as $key=>$values){?>
                <li>
                    <span class="fw-bold"><?= $key.': '?></span>
                    <ul>
                        <?php foreach ($values as $value){ ?>
                            <li><?= $value?></li>
                        <?php }?>
                    </ul>
                </li>
            <?php }}?>
            <div class="">
                <label for="title" class="mb-2">Title</label>
                <input class="w-full border-gray-300 rounded" name="title" type="text" class="form-control" id="title" placeholder="Be specific and imagine you’re asking a question to another person.">
            </div>

            <div class="mt-3">
                <label for="problem_detail" class="mb-1">What are the details of your problem?</label>
                <textarea class="w-full border-gray-300 rounded" name="problem_detail" class="form-control" id="problem_detail" rows="10" placeholder="Introduce the problem and expand on what you put in the title. Minimum 20 characters."></textarea>
            </div>

            <div class="mt-3">
                <label for="problem_result" class="mb-1">What did you tried and what are you expecting?</label>
                <textarea class="w-full border-gray-300 rounded" name="problem_result" class="form-control" id="problem_result" rows="10" placeholder="Describe what you tried, what you expected to happen, and what actually resulted. Minimum 20 characters."></textarea>
            </div>

            <div class="mt-3">
                <label for="tag" class="mb-1">Choose your tag from the list:</label>
                <div class="col-12">
                    <input class="w-full border-gray-300 rounded" type="text" name="tag" class="form-control" placeholder="          ">
                    <small class="form-text text-muted">Separate keywords with space</small>
                </div>
            </div>

            <button type="submit" class="mt-3 bg-amber-500 rounded p-2 text-white font-semibold hover:bg-amber-600">Submit Your Question</button>
        </form>
    </section>

</div>
