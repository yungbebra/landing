<!-- Header -->
<header class="header">
    <nav class="navbar navbar-padding navbar-expand-sm">
        <div class="container">
            <div class="row align-items-center w-100">
                <div class="col-6 col-lg-3">
                    <a class="navbar-brand transition <?php echo $bodyClass ?? ''; ?>" href="/">HOTEL</a>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="navbar-nav justify-content-center">
                        <a class="nav-link transition mx-3 <?php echo $bodyClass ?? ''; ?>" href="/">Главная</a>
                        <a class="nav-link transition mx-3 <?php echo $bodyClass ?? ''; ?>" href="/rooms/">Номера</a>
                        <a class="nav-link transition mx-3 <?php echo $bodyClass ?? ''; ?>" href="/about/">О нас</a>
                        <a class="nav-link transition mx-3 <?php echo $bodyClass ?? ''; ?>" href="/contacts/">Контакты</a>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="d-flex justify-content-end">
                        <a class="btn-main btn-sm white transition <?php echo $bodyClass ?? ''; ?>" href="/booking/" role="button">
                            Забронировать
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>