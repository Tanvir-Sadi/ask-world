<div class="sticky-top">
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
                <a>
                    <span><?= auth()->name ?></span>
                    <img
                            class="img-thumbnail img-avatar"
                            src='https://avataaars.io/?avatarStyle=Transparent&topType=ShortHairDreads01&accessoriesType=Kurt&hairColor=SilverGray&facialHairType=MoustacheFancy&facialHairColor=Red&clotheType=ShirtCrewNeck&clotheColor=Blue01&eyeType=Side&eyebrowType=SadConcernedNatural&mouthType=Disbelief&skinColor=Brown' />
                </a>


            </div>
        </div>
    </nav>

</div>