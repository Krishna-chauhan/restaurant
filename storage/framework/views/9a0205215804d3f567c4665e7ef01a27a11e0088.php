<nav id="navbar-main" class="navbar navbar-light navbar-expand-lg fixed-top">


    <div class="container-fluid">
        <?php if(!env('HIDE_PROJECT_BRANDING',false)): ?>
          <a class="navbar-brand mr-lg-5" href="#">
            <img src="<?php echo e(asset('/')); ?>/images/parkoye_logo.png">
          </a>
        <?php else: ?>
        <a class="navbar-brand mr-lg-5" href="#">

        </a>
        <?php endif; ?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <?php if(!env('HIDE_PROJECT_BRANDING',true)): ?>
              <div class="col-6 collapse-brand">
                <a href="#">
                  <img src="<?php echo e(config('global.site_logo')); ?>">
                </a>
              </div>
              <?php else: ?>
              <div class="col-6 collapse-brand">
                <a href="#">

                </a>
              </div>
              <?php endif; ?>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>



































































































        </div>


      </div>

    </nav>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/qrmenu/resources/views/layouts/menu/top_justlogo.blade.php ENDPATH**/ ?>