  <div class="wrapper">
    <form class="form-signin" autocomplete="off" action="/login" method="post">       
      <h1 class="align-center">Login</h1>
        <hr>
   
        <div class="row pdg-t-sm">
          <div class="col-sm-12">
              <input type="email" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" value="<?= set_value('email')?>" />
          </div> 
        </div>
         <div class="row">
          <div class="col-sm-12">
              <input type="password" class="form-control" name="password" placeholder="Password" required=""/>  
          </div> 
        </div>
         <div class="row">
          <div class="col-sm-12">
               <button class="btn btn-md btn-primary btn-block" type="submit">Login</button> 
          </div> 
        </div> 


        <?php if (session()->get('success')): ?>
           <div class="row">
              <div class="col-sm-12 pdg-t-sm font-size-sm">
                  <div class="alert alert-success" role="alert">
                    <ul class="ul-alert">
                      <li>
                          <?= session()->get('success'); ?>
                      </li>
                    </ul>
                  </div>
              </div> 
            </div>  
        <?php endif ?>  
        <?php if (session()->get('illegal')): ?>
           <div class="row">
              <div class="col-sm-12 pdg-t-sm font-size-sm">
                  <div class="alert alert-danger" role="alert">
                    <ul class="ul-alert">
                      <li>
                          <?= session()->get('illegal'); ?>
                      </li>
                    </ul>
                  </div>
              </div> 
            </div>  
        <?php endif ?>  


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

    
<!-- 

        <div class="row">
          <div class="col-sm-12 pdg-t-sm font-size-sm">
              <div class="alert alert-danger" role="alert">
                <ul class="ul-alert">
                  <li>
                      Joharah Baboy
                  </li>
                </ul>
              </div>
          </div> 
        </div> 
 -->

    </form>
  </div>