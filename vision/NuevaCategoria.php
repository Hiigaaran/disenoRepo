<!DOCTYPE html>
<html>
	<?php
		include('Master.php');
	?>
	<body>
		<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Ingreso de Categorias
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-calculator"></i> Ingreso de Categorias
                    </li>
                </ol>
                
               <form action='../Control/TCategoria.php' method='post'> 
                <div class="col-lg-6">
                <h3>Ingrese datos:</h3>
                <div class="table-responsive">
                    <table class="table table-hover table-striped">                        
                        <tbody>
                            <tr>
                                <td>Codigo de Categoria</td>
                                <td><input type=text name=id_cat   /* Apply this selector to the element on which this effects needs to be applied*/



.blurryText{

   color: transparent;

   text-shadow: 0 0 5px rgba(131,246,228,0.8);

}></td></td>                          
                            </tr>
                            <tr>
                                <td>Nombre</td>
                                <td><input type=text name=nombre></td></td>                                
                            </tr>
                            <tr>
                                <td><input type=submit name=OK value='Insertar'></td>
                                <td><input type=submit name=OK1 value='Modificar'></td>
                                <td><input type=submit name=OK2 value='Eliminar'></td>
                                
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
                
                
                
                </form>
                
            </div>
        </div>
    </body>
</html>