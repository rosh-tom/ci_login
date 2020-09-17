<br>
 
<div class="container">
    <div class="panel panel-default">    
        <div class="panel-heading">
            <center><h1>User List</h1></center> 
        </div> 
        <?php if (session()->get('failed')): ?>
                     <div class="row">
                        <div class="col-sm-12 pdg-t-sm font-size-sm">
                            <div class="alert alert-danger" role="alert">
                              <ul class="ul-alert">
                                <li>
                                    <?= session()->get('failed'); ?>
                                </li>
                              </ul>
                            </div>
                        </div> 
                      </div>  
                  <?php endif ?> 
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
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr> 
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Email</th>
                      <th>Created_at</th> 
                      <th>Action</th>
                    </tr>
                </thead>
                  <tbody>

                    <?php foreach ($users as $key => $user): ?> 

                    <tr>
                      <td><?= $user['firstname'] ?></td>
                      <td><?= $user['lastname'] ?></td>
                      <td><?= $user['email'] ?></td>
                      <td><?= $user['created_at']?></td>
                      <td><a href="userController/delete/<?= $user['user_id'] ?>" class="btn btn-danger btn-sm td-none">Delete</a></td> 
                    </tr>
                        <?php endforeach ?>
                  </tbody>
              </table> 
        </div> 
    </div> 
</div>