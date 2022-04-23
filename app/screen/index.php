<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../styles/styles.css">
    <title>Produk</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-light py-2 px-2">
            <div class="container-fluid row">
                <div class="title1 col-12 col-sm-3 col-md-5 col-lg-7">
                    <a class="navbar-brand" href="#"><span class="logo" style="color: white;">Hi</span><span class="logo" style="color: #059BE5">Tech</span></a>
                    <button class="navbar-toggler" style="filter: grayscale(1) invert(1);" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="title2 col-12 col-sm-9 col-md-7 col-lg-5 mx-5">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex align-items-center justify-content-end">
                            <form class="mx-4">
                                <div class="input-group">
                                    <span class="input-group-text px-2" id="basic-addon1" style="background-color: white;"><img src="../assets/icons/search.svg" alt="" height="20"></span>
                                    <input class="form-control ms-auto p-1 bd-highlight me-2" size="25" type="search" placeholder="Search" aria-label="Search">
                                </div>
                            </form>
                            <img height="24" src="../assets/icons/favorite.svg" alt="favorite">
                            <img class="mx-4" height="26" src="../assets/icons/cart.svg" alt="cart">
                            <img height="32" src="../assets/icons/person.svg" alt="person">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="mycontainer">
            <div class="row banner my-3">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-banner">
                    <span id="banner-title">All Your Style</span>
                    <br>
                    <span id="banner-slogan">Are Here</span>
                    <br>
                    <span id="banner-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor molestias sit iusto, eum, incidunt fugiat sapiente corrupti ipsum doloremque sequi voluptatum nesciunt, voluptas officiis in enim mollitia corporis ut laboriosam sunt quos eius! Earum laborum sint rem, nihil ipsa dolorum.</span>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4" id="banner1-position">
                    <img src="../assets/images/laptop1.svg" height="50%" alt="">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4" id="banner2-position">
                    <img src="../assets/images/laptop2.svg" height="50%" alt="">
                </div>
            </div>
            <div class="row content">
                <div class="filter col col-md-2">
                    <div class="row">
                        <div class="col-2 mt-3">
                            <img src="../assets/icons/filter.svg" alt="" height="80%">
                        </div>
                        <div class="col-9 mt-2">
                            <span id="filter-text">Filter By</span>
                        </div>
                    </div>
                    <div class="row filter-items mt-3">
                        <div class="col-8">
                            <span class="filter-item-text">Rating</span>
                        </div>
                        <div class="col-2">
                            <img src="../assets/icons/arrow.svg" alt="" height="50%">
                        </div>
                    </div>
                    <div class="row filter-items mt-3">
                        <div class="col-8">
                            <span class="filter-item-text">Brand</span>
                        </div>
                        <div class="col-2">
                            <img src="../assets/icons/arrow.svg" alt="" height="50%">
                        </div>
                    </div>
                    <div class="row filter-items mt-3">
                        <div class="col-8">
                            <span class="filter-item-text">Price</span>
                        </div>
                        <div class="col-2">
                            <img src="../assets/icons/arrow.svg" alt="" height="50%">
                        </div>
                    </div>
                    <div class="row filter-items mt-3">
                        <div class="col-8">
                            <span class="filter-item-text">Location</span>
                        </div>
                        <div class="col-2">
                            <img src="../assets/icons/arrow.svg" alt="" height="50%">
                        </div>
                    </div>
                </div>
                <div class="items col col-md-10">
                    <div class="px-3 items-category d-flex align-items-center justify-content-between">
                        <div class="d-flex">
                            <div class="box d-flex align-items-center py-1">
                                <div class="p1">All</div>
                                <div class="p1">Best Seller</div>
                                <div class="p1">Discount</div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mx-2">
                                <div class="p2"><span style="color: red;">1</span>/100</div>
                            </div>
                            <div class="d-flex ">
                                <div class="p3 d-flex align-items-center px-2 py-1">
                                    <img src="../assets/icons/left-arrow.png" style="width: 1rem; height : 1rem;" alt="">
                                </div>
                                <div class="p4 d-flex align-items-center px-2 py-1">
                                    <img src="../assets/icons/right-arrow.png" style="width: 1rem; height : 1rem;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="items-data row mx-1 py-3">
                        <?php for ($i = 0; $i < 9; $i++) : ?>
                            <div class='col-md-4'>
                                <div class="card" style="width: 16rem; height : 22rem;">
                                    <img src="../assets/images/laptop1.jpg" class="card-img-top" alt="gambar.">
                                    <div class="card-body">
                                        <h5 class="card-title">Laptop ASUS ROG</h5>
                                        <p class="price">Rp 19.800.000</p>

                                        <div class="d-flex flex-row mt-4">
                                            <div class="col-3 discount">10%</div>
                                            <div class="col-9 real-price">22.000.000</div>
                                        </div>

                                        <div class="d-flex flex-row mt-3">
                                            <img src="../assets/icons/location.svg" class="maps" alt="icon maps">
                                            <div class="col-9 kota">Kota Semarang</div>
                                            <img src="../assets/icons/love.svg" class="love" alt="icon maps">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>