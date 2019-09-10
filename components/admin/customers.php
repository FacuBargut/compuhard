
<?php  
    
    include "../../php/class/User.php";
    $Users = User::getUsers();

?>
<div class="container">
    <div class="table-wrapper">
       <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Usuarios</h2>
                </div>
                <col-sm-6>
                      <a class="btn btn-success" href=""><i class="material-icons"></i><span>Add New Employee</span></a>
                      <a class="btn btn-danger" href=""><i class="material-icons"></i><span>Delete</span></a>
                </col-sm-6>
            </div>
       </div>
       <table class="table table-striped table-hover">
          <thead>
            <tr>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Mail</th>
                  <th>Contraseña</th>
                  <th>Estado</th>
                  <th>Administrador</th>
                  <th>Activado</th>
            </tr>
          </thead>
          <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
          </tbody>
       </table>
  </div>
</div>

<style>
.table-wrapper{
background: #fff;
    padding: 20px 25px;
    margin: 30px 0;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
  }

  .table-title{
    padding-bottom: 15px;
    background: #435d7d;
    color: #fff;
    padding: 16px 30px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
  }
</style>