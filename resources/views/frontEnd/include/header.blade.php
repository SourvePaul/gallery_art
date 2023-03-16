<div class="row">
    <!-- Portfolio Section Heading -->
    <div class="portfolio__heading text-center col-12">
        <h1 class="portfolio__title fw-bold mb-5">Our Portfolio</h1>
    </div>
    <!-- Portfolio Navigation Buttons List -->
    <div class="col-12">
        <ul class="portfolio__nav nav justify-content-center mb-4">

            <li class="nav-item">
                <button class="portfolio__nav__btn position-relative bg-transparent border-0 active" data-filter="*">All</button>
            </li>
            @foreach ( $categories as $category)
            <li class="nav-item">
                <button class="portfolio__nav__btn position-relative bg-transparent border-0" data-filter=".{{ strtolower(str_replace(' ', '', $category->category_name)) }}">{{ $category->category_name }}</button>
            </li>
            @endforeach
            
            {{-- <li class="nav-item">
                <button class="portfolio__nav__btn position-relative bg-transparent border-0" data-filter=".vehicle">Vehicle</button>
            </li>
            <li class="nav-item">
                <button class="portfolio__nav__btn position-relative bg-transparent border-0" data-filter=".animal">Animal</button>
            </li>
            <li class="nav-item">
                <button class="portfolio__nav__btn position-relative bg-transparent border-0" data-filter=".work-station">Work Station</button>
            </li> --}}
        </ul>
    </div>
</div>