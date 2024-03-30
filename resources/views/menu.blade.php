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
        <section id="filter">
            <div class="container-lg d-flex gap-3 my-3">
                <button class="btn btn-success px-4 py-1">Semua</button>
                <button class="btn btn-grey px-4 py-1">Coffe</button>
                <button class="btn btn-grey px-4 py-1">Milk</button>
                <button class="btn btn-grey px-4 py-1">Tea</button>
                <button class="btn btn-grey px-4 py-1">Noodle</button>
                <button class="btn btn-grey px-4 py-1">Bread</button>
                <select name="sort" id="" class="border-success rounded">
                    <option value="">Sort By</option>
                    <option value="">Terpopuler</option>
                    <option value="">Termurah</option>
                </select>
            </div>
        </section>
        <section id="coffe" class="py-2">
            <div class="container-lg">
                <h2>Coffe</h2>
                <div class="row row-cols-4 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                style="object-fit:cover; height: 200px; width: 100%; object-position: 50%;  "
                                class="card-img-top" alt="...">
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
                                style="object-fit:cover; height: 200px; width: 100%; object-position: 50%;  "
                                class="card-img-top" alt="...">
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
                                style="object-fit:cover; height: 200px; width: 100%; object-position: 50%;  "
                                class="card-img-top" alt="...">
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
                                style="object-fit:cover; height: 200px; width: 100%; object-position: 50%;  "
                                class="card-img-top" alt="...">
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
        </section>
        <section id="Tea" class="py-2">
            <div class="container-lg">
                <h2>Tea</h2>
                <div class="row row-cols-4 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                style="object-fit:cover; height: 200px; width: 100%; object-position: 50%;  "
                                class="card-img-top" alt="...">
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
                                style="object-fit:cover; height: 200px; width: 100%; object-position: 50%;  "
                                class="card-img-top" alt="...">
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
                                style="object-fit:cover; height: 200px; width: 100%; object-position: 50%;  "
                                class="card-img-top" alt="...">
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
                                style="object-fit:cover; height: 200px; width: 100%; object-position: 50%;  "
                                class="card-img-top" alt="...">
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
        </section>
        <section id="Noodle" class="py-2">
            <div class="container-lg">
                <h2>Noodle</h2>
                <div class="row row-cols-4 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                style="object-fit:cover; height: 200px; width: 100%; object-position: 50%;  "
                                class="card-img-top" alt="...">
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
                                style="object-fit:cover; height: 200px; width: 100%; object-position: 50%;  "
                                class="card-img-top" alt="...">
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
                                style="object-fit:cover; height: 200px; width: 100%; object-position: 50%;  "
                                class="card-img-top" alt="...">
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
                                style="object-fit:cover; height: 200px; width: 100%; object-position: 50%;  "
                                class="card-img-top" alt="...">
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
        </section>
        <section id="Bread" class="py-2">
            <div class="container-lg">
                <h2>Bread</h2>
                <div class="row row-cols-4 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://assets.unileversolutions.com/v1/63465882.png"
                                style="object-fit:cover; height: 200px; width: 100%; object-position: 50%;  "
                                class="card-img-top" alt="...">
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
                                style="object-fit:cover; height: 200px; width: 100%; object-position: 50%;  "
                                class="card-img-top" alt="...">
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
                                style="object-fit:cover; height: 200px; width: 100%; object-position: 50%;  "
                                class="card-img-top" alt="...">
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
                                style="object-fit:cover; height: 200px; width: 100%; object-position: 50%;  "
                                class="card-img-top" alt="...">
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
        </section>
        <section>
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
</body>

</html>
