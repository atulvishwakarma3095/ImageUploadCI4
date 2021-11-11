<?= $this->extend('layout/index');?>
<?= $this->section('content')?>

<div class="container mt-4">
	<div class="row justify-content-center">
		<div class="col-md-12">


			<?php if(session()->getFlashdata('status'))
					{
						echo "<h5>".session()->getFlashdata('status')."</h5>";
					}
			?>


			<div class="card">
			  <div class="card-header">
			    <h5>Products 
			    <a href="<?= base_url('addproduct');?>" class="btn btn-primary btn-sm float-end">Add Products</a></h5>
			  </div>
			  <div class="card-body">
				  <div class="row">
				  	<div class="col-md-12">
				  		<table class="table table-bordered">
				  			<thead>
				  				<tr>
				  					<th>ID</th>
				  					<th>Name</th>
				  					<th>Price</th>
				  					<th>Images</th>
				  					<th>Action</th>
				  				</tr>
				  			</thead>
				  			<tbody>
				  				<?php foreach ($products as $item) : ?>
				  				<tr>
				  					<td><?= $item['id']?></td>
				  					<td><?= $item['name']?></td>
				  					<td><?= $item['price']?></td>
				  					<td><img src="<?= base_url('/uploads/'.$item['img'])?>" height="100px" width="100px"></td>
				  					<td>
				  						<a href="<?= base_url('product/edit/'.$item['id'])?>" class="btn btn-success btn-sm">Edit</a>
				  						<a href="" class="btn btn-danger btn-sm">Delete</a>
				  					</td>
				  				</tr>
				  			<?php endforeach;?>
				  			</tbody>
				  		</table>
				  	</div>
				  </div>
			  </div>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection();?>