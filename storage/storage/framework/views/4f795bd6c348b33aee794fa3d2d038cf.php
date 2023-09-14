<?php $__env->startSection('content'); ?>
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Add a Contact</h3>
                <form action="<?php echo e(url('/contacts')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                                <input placeholder="Your name" min="5" type="text" class="form-control" id="name" name="name" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input placeholder="Your Email Address" type="email" class="form-control" id="email" name="email" tabindex="2" required>
                                <?php if($errors->has('email')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Phone Number</label>
                            <input placeholder="Your Phone Number" id="contact" name="contact" class="form-control" type="tel" tabindex="3" required>
                        </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/auth/create.blade.php ENDPATH**/ ?>