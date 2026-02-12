    <div class="search__box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 m-auto col-md-8 col-sm-11">
                    <div class="search__content ">
                        <button type="button" class="search__box-btn-close">
                            <i class="bi bi-x-lg"></i>
                        </button>
                        <form class="search__form" action="{{ route('posts') }}" method="get">
                            <input type="search" class="search__form-input" value="" name="search"
                                placeholder="What are you looking for?">
                            <button type="submit" class="search__form-btn-search">search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
