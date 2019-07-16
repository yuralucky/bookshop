<!--/ Nav Star /-->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <a class="navbar-brand text-brand" href="/">Book<span class="color-b">Shop</span></a>
        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none"
                data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/books">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/delivery">Delivery</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/contactUs">Contact</a>
                </li>
                <li>
                    <a class="nav-link" href="/cart"><i class="fa fa-shopping-cart" aria-hidden="true"><span class="badge badge-light">{{Cart::getTotalQuantity()}}</span></i></a>
                </li>
            </ul>
        </div>
        <button type="submit" name="search" id="livesearch"
                class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block"
                data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>

    </div>
</nav>