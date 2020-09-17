<?php $uri = service('uri'); ?>
<nav>
  <div class="container nav"> 
      <ul class="ul-nav">

          <li class="pdg-r-sm">
            <a class="<?= ($uri->getSegment(1)=='' ? 'c-white' : null )?>" href="/">Home</a>
          </li> 

        <?php if (session()->get('isLoggedIn')): ?>
          <li class="">
            <a class="<?= ($uri->getSegment(1)=='dashboard' ? 'c-white' : null )?>" href="/dashboard">Dashboard</a>
          </li> 

          <li class="fr">
            <a class="<?= ($uri->getSegment(1)=='logout' ? 'c-white' : null )?>" href="logout"> Logout </a>
          </li>

        <?php else: ?>
          <li class="fr">
            <a class="<?= ($uri->getSegment(1)=='register' ? 'c-white' : null )?>" href="register"> Register </a>
          </li>

          <li class="fr pdg-r-sm c-white">|</li>

          <li class="fr pdg-r-sm">
            <a class="<?= ($uri->getSegment(1)=='login' ? 'c-white' : null )?>" href="login"> Log In </a>
          </li> 
        <?php endif ?>

      

      </ul>  
  </div>
</nav>


 
 