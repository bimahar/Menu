<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu BentoKopi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container-lg">
                <a class="">Bento kopi</a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    <main>
        <section class="container-lg">
            <div class=" row row-cols-2 row-cols-md-6 g-4">
                <div class="col d-grid">
                    <button class="btn tablinks btnsemua px-4 py-1" data-tab="semua">Semua</button>
                </div>
                @foreach ($categories as $category)
                    <div class="col d-grid">
                        <button class="btn tablinks btn{{ strtolower($category) }} px-4 py-1"
                            data-tab="{{ strtolower($category) }}">{{ $category }}</button>
                    </div>
                @endforeach
                <div class="col-grid">
                    <select class="form-select" aria-label="Default select example ">
                        <option selected>Sort By</option>
                        <option value="1">Termurah</option>
                        <option value="2">Termahal</option>
                    </select>
                </div>

            </div>
        </section>
        {{-- <section class="tabcontent tabsemua">
            @foreach ($categories as $category)
                <div id="{{ $category }}" class="py-2">
                    <div class="container-lg">
                        <h2>{{ $category }}</h2>
                        <div class="row row-cols-2 row-cols-md-4 g-2 g-md-3">
                            @foreach ($menus->where('kategori', $category) as $menu)
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="{{ $menu->gambar }}"
                                            style="object-fit:cover;  width: 100%; object-position: 50%;  "
                                            class="card-img-top" alt="kopi">
                                        <div class="card-body">
                                            <h3 class="card-title">{{ $menu->nama }}</h3>
                                            <p class="card-text">{{ $menu->deskripsi }}</p>
                                            <div class="d-grid">
                                                <button class="btn btn-success" type="button">Tambah</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </section> --}}
        @foreach ($categories as $category)
            <section class="tabcontent tab{{ strtolower($category) }}">
                <div id="{{ $category }}" class="py-2">
                    <div class="container-lg">
                        <h2>{{ $category }}</h2>
                        <div class="row row-cols-2 row-cols-md-4 g-2 g-md-3">
                            @foreach ($menus->where('kategori', $category) as $menu)
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="{{ $menu->gambar }}"
                                            style="object-fit:cover;  width: 100%; object-position: 50%;  "
                                            class="card-img-top" alt="kopi">
                                        <div class="card-body">
                                            <h3 class="card-title">{{ $menu->nama }}</h3>
                                            <p class="card-text">{{ $menu->deskripsi }}</p>
                                            <div class="d-grid">
                                                <button class="btn btn-success" type="button">Tambah</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
        {{-- <section class="tabcontent tabcoffe">
            <div id="coffe" class="py-2">
                <div class="container-lg">
                    <h2>Coffe</h2>
                    <div class="row row-cols-2 row-cols-md-4 g-2 g-md-3">
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                    style="object-fit:cover;  width: 100%; object-position: 50%;  " class="card-img-top"
                                    alt="kopi">
                                <div class="card-body">
                                    <h3 class="card-title">Coffe Milk</h3>
                                    <p class="card-text">Kopi + Susu</p>
                                    <div class="d-grid">
                                        <button class="btn btn-success" type="button">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                    style="object-fit:cover;  width: 100%; object-position: 50%;  "
                                    class="card-img-top" alt="kopi">
                                <div class="card-body">
                                    <h3 class="card-title">Coffe Milk</h3>
                                    <p class="card-text">Kopi + Susu</p>
                                    <div class="d-grid">
                                        <button class="btn btn-success" type="button">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                    style="object-fit:cover;  width: 100%; object-position: 50%;  "
                                    class="card-img-top" alt="kopi">
                                <div class="card-body">
                                    <h3 class="card-title">Coffe Milk</h3>
                                    <p class="card-text">Kopi + Susu</p>
                                    <div class="d-grid">
                                        <button class="btn btn-success" type="button">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                    style="object-fit:cover;  width: 100%; object-position: 50%;  "
                                    class="card-img-top" alt="kopi">
                                <div class="card-body">
                                    <h3 class="card-title">Coffe Milk</h3>
                                    <p class="card-text">Kopi + Susu</p>
                                    <div class="d-grid">
                                        <button class="btn btn-success" type="button">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tabcontent tabmilk">
            <div id="milk" class="py-2">
                <div class="container-lg">
                    <h2>milk</h2>
                    <div class="row row-cols-2 row-cols-md-4 g-2 g-md-3">
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                    style="object-fit:cover;  width: 100%; object-position: 50%;  "
                                    class="card-img-top" alt="kopi">
                                <div class="card-body">
                                    <h3 class="card-title">Coffe Milk</h3>
                                    <p class="card-text">Kopi + Susu</p>
                                    <div class="d-grid">
                                        <button class="btn btn-success" type="button">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                    style="object-fit:cover;  width: 100%; object-position: 50%;  "
                                    class="card-img-top" alt="kopi">
                                <div class="card-body">
                                    <h3 class="card-title">Coffe Milk</h3>
                                    <p class="card-text">Kopi + Susu</p>
                                    <div class="d-grid">
                                        <button class="btn btn-success" type="button">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                    style="object-fit:cover;  width: 100%; object-position: 50%;  "
                                    class="card-img-top" alt="kopi">
                                <div class="card-body">
                                    <h3 class="card-title">Coffe Milk</h3>
                                    <p class="card-text">Kopi + Susu</p>
                                    <div class="d-grid">
                                        <button class="btn btn-success" type="button">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                    style="object-fit:cover;  width: 100%; object-position: 50%;  "
                                    class="card-img-top" alt="kopi">
                                <div class="card-body">
                                    <h3 class="card-title">Coffe Milk</h3>
                                    <p class="card-text">Kopi + Susu</p>
                                    <div class="d-grid">
                                        <button class="btn btn-success" type="button">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tabcontent tabtea">
            <div id="tea" class="py-2">
                <div class="container-lg">
                    <h2>Tea</h2>
                    <div class="row row-cols-2 row-cols-md-4 g-2 g-md-3">
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                    style="object-fit:cover;  width: 100%; object-position: 50%;  "
                                    class="card-img-top" alt="kopi">
                                <div class="card-body">
                                    <h3 class="card-title">Coffe Milk</h3>
                                    <p class="card-text">Kopi + Susu</p>
                                    <div class="d-grid">
                                        <button class="btn btn-success" type="button">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                    style="object-fit:cover;  width: 100%; object-position: 50%;  "
                                    class="card-img-top" alt="kopi">
                                <div class="card-body">
                                    <h3 class="card-title">Coffe Milk</h3>
                                    <p class="card-text">Kopi + Susu</p>
                                    <div class="d-grid">
                                        <button class="btn btn-success" type="button">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                    style="object-fit:cover;  width: 100%; object-position: 50%;  "
                                    class="card-img-top" alt="kopi">
                                <div class="card-body">
                                    <h3 class="card-title">Coffe Milk</h3>
                                    <p class="card-text">Kopi + Susu</p>
                                    <div class="d-grid">
                                        <button class="btn btn-success" type="button">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                    style="object-fit:cover;  width: 100%; object-position: 50%;  "
                                    class="card-img-top" alt="kopi">
                                <div class="card-body">
                                    <h3 class="card-title">Coffe Milk</h3>
                                    <p class="card-text">Kopi + Susu</p>
                                    <div class="d-grid">
                                        <button class="btn btn-success" type="button">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tabcontent tabnoodle">
            <div id="noodle" class="py-2">
                <div class="container-lg">
                    <h2>Noodle</h2>
                    <div class="row row-cols-2 row-cols-md-4 g-2 g-md-3">
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                    style="object-fit:cover;  width: 100%; object-position: 50%;  "
                                    class="card-img-top" alt="kopi">
                                <div class="card-body">
                                    <h3 class="card-title">Coffe Milk</h3>
                                    <p class="card-text">Kopi + Susu</p>
                                    <div class="d-grid">
                                        <button class="btn btn-success" type="button">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                    style="object-fit:cover;  width: 100%; object-position: 50%;  "
                                    class="card-img-top" alt="kopi">
                                <div class="card-body">
                                    <h3 class="card-title">Coffe Milk</h3>
                                    <p class="card-text">Kopi + Susu</p>
                                    <div class="d-grid">
                                        <button class="btn btn-success" type="button">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                    style="object-fit:cover;  width: 100%; object-position: 50%;  "
                                    class="card-img-top" alt="kopi">
                                <div class="card-body">
                                    <h3 class="card-title">Coffe Milk</h3>
                                    <p class="card-text">Kopi + Susu</p>
                                    <div class="d-grid">
                                        <button class="btn btn-success" type="button">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                    style="object-fit:cover;  width: 100%; object-position: 50%;  "
                                    class="card-img-top" alt="kopi">
                                <div class="card-body">
                                    <h3 class="card-title">Coffe Milk</h3>
                                    <p class="card-text">Kopi + Susu</p>
                                    <div class="d-grid">
                                        <button class="btn btn-success" type="button">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tabcontent tabbread">
            <div id="bread" class="py-2">
                <div class="container-lg">
                    <h2>Bread</h2>
                    <div class="row row-cols-2 row-cols-md-4 g-2 g-md-3">
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                    style="object-fit:cover;  width: 100%; object-position: 50%;  "
                                    class="card-img-top" alt="kopi">
                                <div class="card-body">
                                    <h3 class="card-title">Coffe Milk</h3>
                                    <p class="card-text">Kopi + Susu</p>
                                    <div class="d-grid">
                                        <button class="btn btn-success" type="button">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                    style="object-fit:cover;  width: 100%; object-position: 50%;  "
                                    class="card-img-top" alt="kopi">
                                <div class="card-body">
                                    <h3 class="card-title">Coffe Milk</h3>
                                    <p class="card-text">Kopi + Susu</p>
                                    <div class="d-grid">
                                        <button class="btn btn-success" type="button">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                    style="object-fit:cover;  width: 100%; object-position: 50%;  "
                                    class="card-img-top" alt="kopi">
                                <div class="card-body">
                                    <h3 class="card-title">Coffe Milk</h3>
                                    <p class="card-text">Kopi + Susu</p>
                                    <div class="d-grid">
                                        <button class="btn btn-success" type="button">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                    style="object-fit:cover;  width: 100%; object-position: 50%;  "
                                    class="card-img-top" alt="kopi">
                                <div class="card-body">
                                    <h3 class="card-title">Coffe Milk</h3>
                                    <p class="card-text">Kopi + Susu</p>
                                    <div class="d-grid">
                                        <button class="btn btn-success" type="button">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <div>
            <div class="d-flex container-lg gap-3 justify-content-end">
                <button class="btn btn-success">
                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 32px; height: 32px; color: white;"
                        fill="currentColor"
                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                    </svg>
                </button>
                <button class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg"
                        style="width: 32px; height: 32px; color: white;" fill="currentColor"
                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                    </svg></button>

            </div>
            </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('script/menu.js') }}"></script>
</body>

</html>
