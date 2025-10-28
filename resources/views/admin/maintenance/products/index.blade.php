@extends('admin.layout.app')
@section('content')
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="dashboard.php">Inicio</a></li>		  
			<li class="active">Productos</li>
		</ol>
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Listado de productos</div>
			</div> <!-- /panel-heading -->
			<div class="panel-body">
				<div class="remove-messages"></div>
				<div class="div-action pull pull-right" style="padding-bottom:20px;">
					<button class="btn btn-default button1" data-toggle="modal" id="addProductModalBtn" data-target="#addProductModal"> <i class="glyphicon glyphicon-plus-sign"></i> Agregar producto </button>
				</div> <!-- /div-action -->				
				<table class="table" id="manageProductTable">
					<thead>
						<tr>
							<th style="width:10%;">Imagen</th>							
							<th>Nombre del producto</th>
							<th>Precio</th>							
							<th>Stock</th>
							<th>Fabricante</th>
							<th>Categoría</th>
							<th>Estado</th>
							<th style="width:15%;">Opciones</th>
						</tr>
					</thead>
				</table>
				<!-- /table -->
			</div> <!-- /panel-body -->
		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->
<!-- add product -->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog">
  	<div class="modal-dialog">
    	<div class="modal-content">
    		<form class="form-horizontal" id="submitProductForm" method="POST" enctype="multipart/form-data">
                @csrf
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        		<h4 class="modal-title"><i class="fa fa-plus"></i> Agregar producto</h4>
	      		</div>
	      		<div class="modal-body" style="max-height:450px; overflow:auto;">
	      			<div id="add-product-messages"></div>
	      			<div class="form-group">
	        			<label for="image" class="col-sm-3 control-label">Imagen: </label>
	        			<label class="col-sm-1 control-label">: </label>
				    	<div class="col-sm-8">
					    	<!-- the avatar markup -->
							<div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div><div class="kv-avatar center-block">					        
					        	<input type="file" class="form-control" id="image" placeholder="Imagen del producto" name="image" class="file-loading" style="width:auto;">
					    	</div>
					    </div>
	        		</div> <!-- /form-group-->	     	           	       
	        		<div class="form-group">
	        			<label for="name" class="col-sm-3 control-label">Nombre: </label>
	        			<label class="col-sm-1 control-label">: </label>
				    	<div class="col-sm-8">
				      		<input type="text" class="form-control" id="name" placeholder="Nombre del producto" name="name" autocomplete="off">
				    	</div>
	        		</div> <!-- /form-group-->
                    <div class="form-group">
	        			<label for="description" class="col-sm-3 control-label">Descripción: </label>
	        			<label class="col-sm-1 control-label">: </label>
				    	<div class="col-sm-8">
				      		<input type="text" class="form-control" id="description" placeholder="Descripción del producto" name="description" autocomplete="off">
				    	</div>
	        		</div> <!-- /form-group-->
	        		<div class="form-group">
	        			<label for="quantity" class="col-sm-3 control-label">Stock: </label>
	        			<label class="col-sm-1 control-label">: </label>
				    	<div class="col-sm-8">
				    		<input type="text" class="form-control" id="quantity" placeholder="Stock" name="quantity" autocomplete="off">
				    	</div>
	        		</div> <!-- /form-group-->
	        		<div class="form-group">
	        			<label for="price_min" class="col-sm-3 control-label">Precio min: </label>
	        			<label class="col-sm-1 control-label">: </label>
				    	<div class="col-sm-8">
				    		<input type="text" class="form-control" id="price_min" placeholder="Precio min" name="price_min" step="0.01" autocomplete="off">
				    	</div>
	        		</div> <!-- /form-group-->
                    <div class="form-group">
	        			<label for="price_max" class="col-sm-3 control-label">Precio max: </label>
	        			<label class="col-sm-1 control-label">: </label>
				    	<div class="col-sm-8">
				    		<input type="text" class="form-control" id="price_max" placeholder="Precio max" name="price_max" step="0.01" autocomplete="off">
				    	</div>
	        		</div> <!-- /form-group-->
	        		<div class="form-group">
	        			<label for="brandName" class="col-sm-3 control-label">Fabricante: </label>
	        			<label class="col-sm-1 control-label">: </label>
				    	<div class="col-sm-8">
				      		<select class="form-control" id="brandName" name="brandName">
				      			<option value="">-- Selecciona --</option>
				      			@foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
				      		</select>
				    	</div>
	        		</div> <!-- /form-group-->
                    <div class="form-group">
	        			<label for="manofacturerName" class="col-sm-3 control-label">Fabricante: </label>
	        			<label class="col-sm-1 control-label">: </label>
				    	<div class="col-sm-8">
				      		<select class="form-control" id="manofacturerName" name="manofacturerName">
				      			<option value="">-- Selecciona --</option>
				      			@foreach ($manofacturers as $manofacturer)
                                    <option value="{{ $manofacturer->id }}">{{ $manofacturer->name }}</option>
                                @endforeach
				      		</select>
				    	</div>
	        		</div> <!-- /form-group-->
	        		<div class="form-group">
	        			<label for="category" class="col-sm-3 control-label">Categoría: </label>
	        			<label class="col-sm-1 control-label">: </label>
				    	<div class="col-sm-8">
				    		<select class="form-control" id="category" placeholder="Product Name" name="category" >
				      			<option value="">-- Selecciona --</option>
				      			@foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
				      		</select>
				    	</div>
	        		</div> <!-- /form-group-->
	        		<div class="form-group">
	        			<label for="productStatus" class="col-sm-3 control-label">Estado: </label>
	        			<label class="col-sm-1 control-label">: </label>
				    	<div class="col-sm-8">
				      		<select class="form-control" id="productStatus" name="productStatus">
				      			<option value="">-- Selecciona --</option>
				      			<option value="1">Disponible</option>
				      			<option value="2">No disponible</option>
				      		</select>
				    	</div>
	        		</div> <!-- /form-group-->	         	        
	      		</div> <!-- /modal-body -->
	      		<div class="modal-footer">
	        		<button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Cerrar</button>
	        		<button type="submit" class="btn btn-primary" id="createProductBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Guardar cambios</button>
	      		</div><!-- /modal-footer -->	      
     		</form> <!-- /.form -->	     
    	</div> <!-- /modal-content -->    
  	</div> <!-- /modal-dailog -->
</div> 
<!-- /add categories -->
<!-- edit categories brand -->
<div class="modal fade" id="editProductModal" tabindex="-1" role="dialog">
  	<div class="modal-dialog">
    	<div class="modal-content">
    	    <div class="modal-header">
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        	<h4 class="modal-title"><i class="fa fa-edit"></i> Editar producto</h4>
	      	</div>
	      	<div class="modal-body" style="max-height:450px; overflow:auto;">
	      		<div class="div-loading">
	      			<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
					<span class="sr-only">Cargando...</span>
	      		</div>
	      		<div class="div-result">
				  	<!-- Nav tabs -->
				  	<ul class="nav nav-tabs" role="tablist">
				    	<li role="presentation" class="active"><a href="#photo" aria-controls="home" role="tab" data-toggle="tab">Imagen</a></li>
				    	<li role="presentation"><a href="#productInfo" aria-controls="profile" role="tab" data-toggle="tab">Información del producto</a></li>    
				  	</ul>
				  	<!-- Tab panes -->
				  	<div class="tab-content">
				  		<div role="tabpanel" class="tab-pane active" id="photo">
				    		<form action="php_action/editProductImage.php" method="POST" id="updateProductImageForm" class="form-horizontal" enctype="multipart/form-data">
				    			<br>
				    			<div id="edit-productPhoto-messages"></div>
				    			<div class="form-group">
			        				<label for="editProductImage" class="col-sm-3 control-label">Imagen: </label>
			        				<label class="col-sm-1 control-label">: </label>
						    		<div class="col-sm-8">
						    			<img src="" id="getProductImage" class="thumbnail" style="width:250px; height:250px;" />
						    		</div>
			        			</div> <!-- /form-group-->
			        			<div class="form-group">
			        				<label for="editProductImage" class="col-sm-3 control-label">Selecciona imagen: </label>
			        				<label class="col-sm-1 control-label">: </label>
						    		<div class="col-sm-8">
							    		<!-- the avatar markup -->
										<div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div>							
							    		<div class="kv-avatar center-block">
							    			<input type="file" class="form-control" id="editProductImage" placeholder="Product Name" name="editProductImage" class="file-loading" style="width:auto;"/>
							    		</div>						      
						    		</div>
			        			</div> <!-- /form-group-->	     	           	       
			        			<div class="modal-footer editProductPhotoFooter">
				        			<button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Cerrar</button>
				        			<!-- <button type="submit" class="btn btn-success" id="editProductImageBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button> -->
				      			</div><!-- /modal-footer -->
				      		</form><!-- /form -->
				    	</div><!-- product image -->
				    	<div role="tabpanel" class="tab-pane" id="productInfo">
				    		<form class="form-horizontal" id="editProductForm" action="php_action/editProduct.php" method="POST">				    
				    			<br>
				    			<div id="edit-product-messages"></div>
				    			<div class="form-group">
			        				<label for="editProductName" class="col-sm-3 control-label">Nombre: </label>
			        				<label class="col-sm-1 control-label">: </label>
									<div class="col-sm-8">
						    			<input type="text" class="form-control" id="editProductName" placeholder="Nombre del producto" name="editProductName" autocomplete="off">
									</div>
			        			</div><!-- /form-group-->	    
			        			<div class="form-group">
			        				<label for="editQuantity" class="col-sm-3 control-label">Stock: </label>
			        				<label class="col-sm-1 control-label">: </label>
						    		<div class="col-sm-8">
						      			<input type="text" class="form-control" id="editQuantity" placeholder="Stock" name="editQuantity" autocomplete="off">
						    		</div>
			        			</div><!-- /form-group-->	        	 
			        			<div class="form-group">
			        				<label for="editRate" class="col-sm-3 control-label">Precio: </label>
			        				<label class="col-sm-1 control-label">: </label>
						    		<div class="col-sm-8">
						      			<input type="text" class="form-control" id="editRate" placeholder="Precio" name="editRate" autocomplete="off">
						    		</div>
			        			</div><!-- /form-group-->	     	        
			        			<div class="form-group">
			        				<label for="editBrandName" class="col-sm-3 control-label">Fabricante: </label>
			        				<label class="col-sm-1 control-label">: </label>
						    		<div class="col-sm-8">
						      			<select class="form-control" id="editBrandName" name="editBrandName">
						      				<option value="">-- Selecciona --</option>
						      				@foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->description }}</option>
                                            @endforeach
						      			</select>
						    		</div>
			        			</div><!-- /form-group-->	
			        			<div class="form-group">
			        				<label for="editCategoryName" class="col-sm-3 control-label">Categoría: </label>
			        				<label class="col-sm-1 control-label">: </label>
						    		<div class="col-sm-8">
						      			<select type="text" class="form-control" id="editCategoryName" name="editCategoryName" >
						      				<option value="">-- Selecciona --</option>
						      				@foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->description }}</option>
                                            @endforeach
						      			</select>
						    		</div>
			        			</div><!-- /form-group-->
			        			<div class="form-group">
			        				<label for="editProductStatus" class="col-sm-3 control-label">Estado: </label>
			        				<label class="col-sm-1 control-label">: </label>
						    		<div class="col-sm-8">
						      			<select class="form-control" id="editProductStatus" name="editProductStatus">
						      				<option value="">-- Selecciona -- </option>
						      				<option value="1">Disponible</option>
						      				<option value="2">No disponible</option>
						      			</select>
						    		</div>
			        			</div><!-- /form-group-->	         	        
			        			<div class="modal-footer editProductFooter">
				        			<button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Cerrar</button>
				        			<button type="submit" class="btn btn-success" id="editProductBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Guardar cambios</button>
				      			</div><!-- /modal-footer -->				     
			        		</form><!-- /.form -->				     	
				    	</div><!-- /product info -->
				  	</div>
				</div>
	      	</div><!-- /modal-body -->
    	</div><!-- /modal-content -->
  	</div><!-- /modal-dailog -->
</div>
<!-- /categories brand -->

<!-- categories brand -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeProductModal">
  	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> Eliminar producto</h4>
      		</div>
      		<div class="modal-body">
      			<div class="removeProductMessages"></div>
        		<p>Realmente deseas eliminar el producto?</p>
      		</div>
      		<div class="modal-footer removeProductFooter">
        		<button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Cancelar</button>
        		<button type="button" class="btn btn-primary" id="removeProductBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Eliminar</button>
      		</div>
    	</div><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="{{ asset('js/product.js') }}"></script>
@endsection