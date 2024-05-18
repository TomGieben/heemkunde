<div class="row">
    @for ($i = 0; $i < 5; $i++)
        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card news-card text-dark card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
                <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
                <div class="card-img-overlay d-flex flex-column">
                    <div class="card-body">
                        <small class="card-meta mb-2">Thought Leadership</small>
                            <h4 class="card-title mt-0 ">
                                <a class="text-dark" herf="https://creativemanner.com">Web Developmet Lorem Ipsum Sit Amet Consectetur dipisi?</a>
                            </h4>
                        <small>
                        <i class="far fa-clock"></i> October 15, 2020</small>
                    </div>
                    <div class="card-footer">
                        <div class="media">
                            <div class="media-body">
                                <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
                                <small>Director of UI/UX</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endfor
</div>