

<?php $__env->startSection("title", "CNI Conseil &horbar; Annonce"); ?>

<?php $__env->startSection("content"); ?>
    <div id="content--container-annonce">
        <section id="annonce--section" class="cf">
            <div class="annonce--gallery-wrap">
                <div class="annonce--grid-item mdl-grid">
                    <div class="annonce--item-cell mdl-cell mdl-cell--12-col"></div>
                </div>

                <div class="annonce--grid-items mdl-grid">
                    <div class="annonce--items-cell mdl-cell mdl-cell--3-col">4</div>
                    <div class="annonce--items-cell mdl-cell mdl-cell--3-col">4</div>
                    <div class="annonce--items-cell mdl-cell mdl-cell--3-col">4</div>
                    <div class="annonce--items-cell mdl-cell mdl-cell--3-col">4</div>
                </div>
            </div>

             <div class="annonce--desc-wrap">
                 <h4>Description</h4>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.base", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>