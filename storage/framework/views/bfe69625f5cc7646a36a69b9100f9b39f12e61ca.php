

<?php $__env->startSection("title", "CNI Conseil &horbar; Annonces"); ?>

<?php $__env->startSection("content"); ?>
    <div id="content--container-annonces">
        <section id="annonces--grid-section">
            <div class="mdl-grid">
                <?php for($i = 0; $i < 4; $i++): ?>
                <div class="annonces--grid-cell mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-cell--middle">
                    <figure class="annonces--fig">
                        <img src="http://placehold.it/900x300/fff/000">
                    </figure>
                    <div class="annonces--desc">
                        <h5>Description&colon;</h5>
                    </div>
                   <button type="button" class="annonces--link-btn mdl-button mdl-js-button mdl-button--raised">
                        <a href="<?php echo e(url('/annonces/annonce')); ?>">Voir annonce</a>
                    </button>
                </div>
                <?php endfor; ?>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.base", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>