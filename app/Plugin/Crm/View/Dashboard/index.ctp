<h1>List of users</h1>
<hr />

<?php 
  echo $this->Form->create('users', array('type' => 'get', 'class' => 'form-search'));
  echo $this->Form->input('search', array('placeholder' => 'search here'));
  echo $this->Form->end();

?>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
		  	<th>Phone number</th>
		  	<th>Email</th>
        <th>Action</th>
		</tr>	
	</thead>
  <tr>
  	<td>Kaio</td>
  	<td>434343434</td>
  	<td>email@email.com</td>
    <td>
      <div class="btn-group">
        <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> User</a>
        <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
          <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
          <li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
          <li class="divider"></li>
          <li><a href="#"><i class="i"></i> Make admin</a></li>
        </ul>
      </div>      
    </td>
  </tr>
  <tr>
    <td>Bruna</td>
    <td>434343434</td>
    <td>email@email.com</td>
    <td>
      <div class="btn-group">
        <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> User</a>
        <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
          <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
          <li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
          <li class="divider"></li>
          <li><a href="#"><i class="i"></i> Make admin</a></li>
        </ul>
      </div>      
    </td>
  </tr>
  <tr>
    <td>Nilza</td>
    <td>434343434</td>
    <td>email@email.com</td>
    <td>
      <div class="btn-group">
        <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> User</a>
        <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
          <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
          <li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
          <li class="divider"></li>
          <li><a href="#"><i class="i"></i> Make admin</a></li>
        </ul>
      </div>      
    </td>
  </tr>
</table>





        

