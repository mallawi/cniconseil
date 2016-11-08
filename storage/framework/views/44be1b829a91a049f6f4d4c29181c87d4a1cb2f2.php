<header id="main--header" class="">
    <div class="logo--wrapper">
        <img src="http://placehold.it/200x100/fff/000">
    </div>

    <nav id="main--nav" class="header--nav">
        <ul class="nav--list">
            <li><a href="/">Accueil</a></li>
            <li><a href="<?php echo e(url('/annonces')); ?>">Annonces</a></li>
            <li><a href="<?php echo e(url('/services')); ?>">Services</a></li>
            <li class="sub--menu"><a href="/#apropos">A propos</a>
                <span><a href="/#partinaires">Partinaires</a></span>
            </li>
            <li><a href="/#contact">Contact</a></li>
        </ul>
    </nav>

    <div class="header--ham">
        <button id="ham--button" class="ham--btn" title="Menu" type="button">
            <svg fill="#eb8c00" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
            </svg>
        </button>
    </div>
</header>