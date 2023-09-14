<?php $__env->startSection('content'); ?>
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
            <div class="col-sm">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-name">Contact</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-name">Name: <?php echo e($contact->name); ?></p>
                            <p class="card-name">Number: <?php echo e($contact->contact); ?></p>
                            <p class="card-name">Email: <?php echo e($contact->email); ?></p>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <a class="btn btn-danger" href=<?php echo e(route('contacts.index')); ?>>Back</a>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('contacts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/contacts/detail.blade.php ENDPATH**/ ?>