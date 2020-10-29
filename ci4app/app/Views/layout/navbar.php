<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Avip Syaifulloh</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('/'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/pages/about'); ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/pages/contact'); ?>">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/komik'); ?>">Komik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/orang'); ?>">Orang</a>
                </li>
                <li class="nav-item">
                    <?php if (logged_in()) : ?>
                        <a class="nav-link" href="<?= base_url('/logout'); ?>">Log Out</a>
                    <?php else : ?>
                        <a class="nav-link" href="<?= base_url('/login'); ?>">Login</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</nav>