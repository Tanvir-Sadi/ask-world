<main class="col-8">
    <div class="px-4 pt-3 border-end h-full">
        <div class="d-flex justify-content-between pb-3">
            <h1 class="fw-normal">Ask a public question</h1>
        </div>

        <section class="">
            <form class="mt-3" method="POST" action="/askWorld/question">
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
                <div class="form-group mb-3">
                    <label for="title" class="mb-1">Title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Be specific and imagine you’re asking a question to another person.">
                </div>

                <div class="form-group mb-3">
                    <label for="problem_detail" class="mb-1">What are the details of your problem?</label>
                    <textarea name="problem_detail" class="form-control" id="problem_detail" rows="10" placeholder="Introduce the problem and expand on what you put in the title. Minimum 20 characters."></textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="problem_result" class="mb-1">What did you tried and what are you expecting?</label>
                    <textarea name="problem_result" class="form-control" id="problem_result" rows="10" placeholder="Describe what you tried, what you expected to happen, and what actually resulted. Minimum 20 characters."></textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="tag" class="mb-1">Choose your tag from the list:</label>
                    <div class="col-12">
                        <input type="text" name="tag" class="form-control" placeholder="          ">
                        <small class="form-text text-muted">Separate keywords with space</small>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Submit Your Question</button>
            </form>
        </section>

    </div>
</main>
