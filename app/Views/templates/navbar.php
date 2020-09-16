<?php $uri = service('uri'); ?>
<nav>
  <div class="container nav"> 
      <ul class="ul-nav">
        <li><a class="<?= ($uri->getSegment(1)=='' ? 'c-white' : null )?>" href="/">Home</a></li>  
        <li class="fr">
          <a class="<?= ($uri->getSegment(1)=='register' ? 'c-white' : null )?>" href="register"> Register </a>
        </li>
        <li class="fr pdg-r-sm c-white">|</li>
        <li class="fr pdg-r-sm">
          <a class="<?= ($uri->getSegment(1)=='login' ? 'c-white' : null )?>" href="login"> Log In </a>
        </li>
      </ul>  
  </div>
</nav>


 
 