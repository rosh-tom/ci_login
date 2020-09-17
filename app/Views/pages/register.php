  <div class="wrapper">

    <form class="form-signin" autocomplete="off" action="/register" method="post">       
      <h1 class="align-center">Register New User</h1>
        <hr>
        <div class="row pdg-t-sm">
          <div class="col-sm-12">
              <input type="text" class="form-control" name="firstname" placeholder="First Name" required="" autofocus="" value="<?= set_value('firstname') ?>" />
          </div> 
        </div>

		<div class="row">
          <div class="col-sm-12">
              <input type="text" class="form-control" name="lastname" placeholder="Last Name" required="" value="<?= set_value('lastname') ?>" /> 
          </div> 
        </div>
        <div class="row">
          <div class="col-sm-12">
              <input type="email" class="form-control" name="email" placeholder="E-mail" required="" value="<?= set_value('email') ?>" /> 
          </div> 
        </div>  
         <div class="row">
          <div class="col-sm-12">
              <input type="password" class="form-control" name="password" placeholder="Password" required="" value="" />  
          </div> 
        </div>
        <div class="row">
          <div class="col-sm-12">
              <input type="password" class="form-control" name="password_confirm" placeholder="Confirm Password" required="" value="" />  
          </div> 
        </div>

         <div class="row">
          <div class="col-sm-12">
               <button class="btn btn-md btn-primary btn-block" type="submit">Register</button> 
          </div> 
        </div> 

        <?php if (isset($validation)): ?>
    	 <div class="row">
          <div class="col-sm-12 pdg-t-sm font-size-sm">
              <div class="alert alert-danger" role="alert">
                <ul class="ul-alert">
                  <li>
                      <?= $validation->listErrors(); ?>
                  </li>
                </ul>
              </div>
          </div> 
        </div>  
        <?php endif ?>


       
    </form>
  </div>