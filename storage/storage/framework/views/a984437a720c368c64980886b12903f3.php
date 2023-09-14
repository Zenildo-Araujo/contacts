<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="row">
            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-name">Contact</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-name"><?php echo e($contact->name); ?></h5>
                            <p class="card-text"><?php echo e($contact->contact); ?></p>
                            <p class="card-text"><?php echo e($contact->email); ?></p>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm">
                                    <a href="<?php echo e(route('contacts.edit', $contact->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                                </div>
                                <div class="col-sm">
                                    <form action="<?php echo e(route('contacts.destroy', $contact->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/auth/show.blade.php ENDPATH**/ ?>