
<?php
require_once('config/db.php');
require_once('lip/pdo_db.php');
require_once('models/Customer.php');

//Instanite customer
$customer = new Customer();

//Get customer
$customers = $customer->getCustomers();
print_r($customers); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>View Customers</title>
</head>
<body>
  <div class="container mt-4">
  <div class="btn-group" role="group" ></div>
   <h2>Customers</h2>

   <table class="table table-striped">
<thead>

<tr>
<th>Customer ID</th>
<th>Name</th>
<th>Email</th>
<th>Date</th>
</tr>

</thead>

<tbody>
<?php  foreach($customers as $c):?>
<tr>
<td><?php echo $c->id; ?></td>
<td>
<?php echo $c->first_name; ?>
<?php echo $c->last_name; ?>
</td>
<td><?php echo $c->email; ?></td>
<td><?php echo $c->created_at; ?></td>
</tr>
<?php endforeach(); ?>
</tbody>
   </table>


  </div>
</body>
</html>