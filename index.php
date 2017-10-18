<?php
require_once 'vendor/autoload.php';
use RepoList\SymfonyRepo;
$SymfonyRepos =  SymfonyRepo::getList('symfony');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>GitHub : Symfony</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Symfony : Repositories</h2>           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Full Name</th>
      </tr>
    </thead>
    <tbody>
	<?php
		foreach($SymfonyRepos as $repo){
	?>
      <tr>
        <td><a href="<?php echo $repo['html_url'];?>"><?php echo $repo['id'];?></a></td>
        <td><?php echo $repo['name'];?></td>
        <td><?php echo $repo['full_name'];?></td>
      </tr>	
	<?php		
		}
	?>
    </tbody>
  </table>
</div>

</body>
</html>

