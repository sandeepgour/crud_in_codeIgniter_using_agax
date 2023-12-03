<!DOCTYPE html>
<html>
<head>
	<title>Add Products</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
<div class="col-sm-12">
	<div class="col-sm-8"><h1>Add product</h1></div>
	<div class="col-sm-4">
		<a href="<?php echo base_url('Cart_Controller');?>" class="btn btn-primary">Home</a>
	</div>
	
	
</div>		
<div class="col-sm-12">
				
 <form class="form-horizontal" action="<?php echo base_url('Cart_Controller/insert'); ?>" method="post" enctype="multipart/form-data" >
<fieldset>
  <?php if ($this->session->flashdata('message')) { ?>
           <div class="alert alert-success">
             <?php echo $this->session->flashdata('message'); ?>
           </div>
           
     <?php } ?>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="price">PRODUCT PRICE</label>  
  <div class="col-md-4">
  <input id="product_name" name="price" placeholder="Product Price." class="form-control input-md" required="" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="product_name_fr">PRODUCT DESCRIPTION FR</label>  
  <div class="col-md-4">
  <input id="product_name_fr" name="description" placeholder="PRODUCT DESCRIPTION FR" class="form-control input-md" required="" type="text">
    
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">product image</label>
  <div class="col-md-4">
    <input id="filebutton" name="userfile" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">submit</button>
  </div>
  </div>

</fieldset>
</form>
		</div>
	</div>
</div>
</body>
</html>