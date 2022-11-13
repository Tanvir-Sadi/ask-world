<main class="col-8">
    <div class="px-4 pt-3 border-end h-full">
        <div class="d-flex justify-content-between border-bottom pb-3">
            <h1 class="fw-normal">
                Ask Question
            </h1>
            <button type="button" class="btn btn-primary">Post</button>
        </div>

        <section class="border-bottom pb-2">
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Question Header</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Write the question in short">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Main Tag</label>
                    <select class="form-control select" id="question_tags">
                        <option>tag1</option>
                        <option>tag2</option>
                        <option>tag3</option>
                        <option>tag4</option>
                        <option>tag5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Related Tags</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Add tags related to question">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Describe</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <label class="label" for="">Add file/Images</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                </div>
            </form>
        </section>

    </div>
</main>
