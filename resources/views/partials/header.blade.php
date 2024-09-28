<header>

    <section id="top_header" class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="offset-8 col-4 offset-md-6 col-md-6 d-flex justify-content-end align-items-center text-white py-1">
                    <span class="fw-semibold fs-10">DC POWER<span>&#8480;</span> VISA</span><i class="bi bi-r-circle fs-10"></i>
                    <select class="btn btn-primary fw-semibold ms-4 fs-10 text-start" name="other_sites" id="other-sites">
                        <option value="1" selected>ADDITIONAL DC SITES</option>
                        <option value="">Canada</option>
                        <option value="3">UK</option>
                        <option value="4">Australia</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <section id="bottom_header">
        <div class="container py-2">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <a href="{{ route('home') }}">
                        <img src="{{Vite::asset('../resources/img/dc-logo.png')}}" alt="dc-logo">
                    </a>
    
                    <ul class="list-unstyled d-flex align-items-center fw-bold m-0">

                        @foreach($header_menu as $item)
                            @if (isset($item['dropdown']))
                                <li id="dropdown_list"><div class="dropdown p-0 m-0">
                                    
                                    <button class="btn btn-white dropdown-toggle fw-bold" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      {{ $item['label'] }}
                                    </button>

                                    <ul class="dropdown-menu">

                                        @foreach($item['dropdown'] as $dropdown_item)

                                            <li><a class="dropdown-item" href="{{ $dropdown_item['url'] }}">{{ $dropdown_item['label'] }}</a></li>

                                        @endforeach

                                    </ul>
                                  </div>
                                </li>
                            @else

                                <li><a href="{{ $item['url'] }}">{{ $item['label'] }}</a></li>

                            @endif
                        
                        @endforeach

                    </ul>

                    <div class="border-bottom border-primary border-2">
                        <input type="text" class="text-dark fw-semibold border-0 text-end mb-1" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
                        <span class="fw-bold" id="basic-addon1"><i class="bi bi-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

</header>