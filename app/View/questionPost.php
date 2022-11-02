<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ask World</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="line"></div>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-danger w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
                </svg>
Ask World
</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex w-75 me-auto" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>

                <ul class="navbar-nav mb-2 mb-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img
                                class="img-thumbnail img-avatar"
                                src='https://avataaars.io/?avatarStyle=Transparent&topType=ShortHairDreads01&accessoriesType=Kurt&hairColor=SilverGray&facialHairType=MoustacheFancy&facialHairColor=Red&clotheType=ShirtCrewNeck&clotheColor=Blue01&eyeType=Side&eyebrowType=SadConcernedNatural&mouthType=Disbelief&skinColor=Brown' />
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-between">
        <nav class="left-nav nav flex-column border-end list-group list-group-flush">
            <a class="nav-link list-group-item pe-5" aria-current="page" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
                </svg>
Questions
            </a>
            <a class="nav-link list-group-item pe-5" href="#">Link</a>
            <a class="nav-link list-group-item pe-5" href="#">Link</a>
            <a class="nav-link list-group-item  pe-5 disabled">Disabled</a>
        </nav>

        <main class="flex-grow-1">
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

        <section>
            <div class="px-4 pt-3">
Side Bar
</div>
        </section>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>