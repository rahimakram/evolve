<!-- JAVASCRIPT -->

<script src="<?php echo e(URL::asset('dist/fontawesome/js/all.min.js')); ?>"></script>    
<script src="<?php echo e(URL::asset('dist/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('dist/js/jquery-3.7.1.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('dist/owl-carousel/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('dist/js/script.js')); ?>"></script>
<script src="<?php echo e(URL::asset('dist/animate/dist/wow.js')); ?>"></script>
<script>
    wow = new WOW(
    {
        boxClass:     'wow',      // default
        animateClass: 'animated', // default
        offset:       0          // default
    }
    )
    wow.init();
</script>
<script>
    $('#change-password').on('submit',function(event){
        event.preventDefault();
        var Id = $('#data_id').val();
        var current_password = $('#current-password').val();
        var password = $('#password').val();
        var password_confirm = $('#password-confirm').val();
        $('#current_passwordError').text('');
        $('#passwordError').text('');
        $('#password_confirmError').text('');
        $.ajax({
            url: "<?php echo e(url('update-password')); ?>" + "/" + Id,
            type:"POST",
            data:{
                "current_password": current_password,
                "password": password,
                "password_confirmation": password_confirm,
                "_token": "<?php echo e(csrf_token()); ?>",
            },
            success:function(response){
                $('#current_passwordError').text('');
                $('#passwordError').text('');
                $('#password_confirmError').text('');
                if(response.isSuccess == false){ 
                    $('#current_passwordError').text(response.Message);
                }else if(response.isSuccess == true){
                    setTimeout(function () {   
                        window.location.href = "<?php echo e(route('root')); ?>"; 
                    }, 1000);
                }
            },
            error: function(response) {
                $('#current_passwordError').text(response.responseJSON.errors.current_password);
                $('#passwordError').text(response.responseJSON.errors.password);
                $('#password_confirmError').text(response.responseJSON.errors.password_confirmation);
            }
        });
    });
</script>

<?php echo $__env->yieldContent('script'); ?>

<!-- App js -->
<!-- <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script> -->

<?php echo $__env->yieldContent('script-bottom'); ?><?php /**PATH E:\xampp\htdocs\evolve.com\resources\views\user\layouts\vendor-scripts.blade.php ENDPATH**/ ?>