


<nav class="navbar navbar-expand-lg navbar-light bg-light pr-5">

    <a class="navbar-brand" href="#">Ms Access Project</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    
        
        

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          
          <ul class="navbar-nav mr-auto">
            <?php if(auth()->guard()->guest()): ?>
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(route('register.create')); ?>">Register <span class="sr-only">(current)</span></a>
              </li>
            <?php endif; ?>
            
            <?php if(auth()->guard()->check()): ?>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo e(route('home')); ?>">Home <span class="sr-only">(current)</span></a>
            </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Limited Authority
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo e(route('limited_authorities.create')); ?>">Create</a>
              <a class="dropdown-item" href="<?php echo e(route('limited_authorities.index')); ?>">See ALL in Limited Authority</a>
              </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Retirement Authority
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo e(route('retirement_authorities.create')); ?>">Create</a>
              <a class="dropdown-item" href="<?php echo e(route('retirement_authorities.index')); ?>">See ALL in Retirement Authority</a>
              </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Full Authority
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo e(route('full_authorities.create')); ?>">Create</a>
              <a class="dropdown-item" href="<?php echo e(route('full_authorities.index')); ?>">See ALL in Full Authority</a>
              </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Alive Statement
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo e(route('alive_statement.create')); ?>">Create</a>
              <a class="dropdown-item" href="<?php echo e(route('alive_statement.index')); ?>">See ALL in Alive Statement</a>
              </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              client
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo e(route('client.create')); ?>">Create</a>
              <a class="dropdown-item" href="<?php echo e(route('client.index')); ?>">See ALL in Client Statement</a>
              </div>
          </li>

          
        <?php endif; ?>
        
      
       
      </ul>
     
      <?php if(auth()->guard()->check()): ?>
      <ul class='navbar-nav mr-auto'>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo e(auth()->user()->Username); ?>

           
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <form class="dropdown-item" action="<?php echo e(route('logout')); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
        </form>
          </div>
        </li>
      </ul>
    <?php endif; ?>
      
    </div>
</nav>

<?php /**PATH F:\FiverrFolder\MsAccess\resources\views/layouts/nav.blade.php ENDPATH**/ ?>