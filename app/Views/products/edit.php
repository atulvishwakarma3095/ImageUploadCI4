<?= $this->extend('layout/index');?>
<?= $this->section('content')?>

<div class="container mt-4">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card shadow">
			  <div class="card-header">
			    <h5>Edit Products & Update Product Details<a href="<?= base_url('products')?>" class="btn btn-danger btn-sm float-end">BACK</a></h5>
			  </div>
			  <div class="card-body">
			  	  <div class="row">
			  	  	<div class="col-md-7">
			  	  		<form action="<?= base_url('product/update/'.$product['id']);?>" method="POST" autocomplete="off" enctype="multipart/form-data">
			  	  		<div class="row">
			  	  			<div class="col-md-6">
			  	  				<div class="form-group mb-2">
									<label>Product Name:</label>
									<input type="text" name="txtname"  value="<?= $product['name']?>" class="form-control" placeholder="Enter Product Name">
								</div>
			  	  			</div>
			  	  			 <div class="col-md-6">
						  		<div class="form-group mb-2">
									<label>Price:</label>
									<input type="text" name="txtprice" class="form-control" value="<?= $product['price']?>" placeholder="Enter Product Price">
								</div>
							  </div>
							   
							   <div class="col-md-12">
						  		<div class="form-group mb-2">
									<label>Description:</label>
									<input type="text" name="txtdescription" value="<?= $product['description']?>" class="form-control" placeholder="Enter Product Description">
								</div>
							  </div>
							  <div class="col-md-6">
						  		<div class="form-group mb-2">
									<label>Image:</label>
									<input type="file" name="image" class="form-control">
								</div>
							  </div>
							  <div class="col-md-12">
						  		<div class="form-group mb-2">
									<hr>
									<button type="submit" class="btn btn-primary px-4 float-end">Update</button>
								</div>
							  </div>
			  	  		</div>
			  	  	</form>

			  	  	</div>
			  	  	<div class="col-md-5">
			  	  		<img src="<?= base_url('uploads/'.$product['img'])?>" class="w-100" alt="Product Iamges">
			  	  	</div>
			  	  </div>
			  </div>
			</div>
		</div>
		
		</div>
	</div>
	</div>
</div>
<?= $this->endSection();?>