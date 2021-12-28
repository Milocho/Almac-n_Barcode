<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename= archivo.xls");
/*Datos de conexion a la base de datos*/
	require_once('config.php');
	$conn=new Conexion();
	$link = $conn->conectarse();

    $query="SELECT products.id, products.name, products.barcode_p, products.quantity, categories.name, sales.qty, sales.date
    FROM products, sales, categories
    WHERE sales.product_id = products.id
    and products.categorie_id=categories.id
    order by sales.date ASC";

   $result=mysqli_query($link, $query);

?>
<table style='border: 1px solid black; border-collapse: collapse;'>
        <thead style='border: 1px solid black; border-collapse: collapse;'>
            <tr style='border: 1px solid black; border-collapse: collapse;'>
                <th style='background:#013ca6; color:#FFF; border: 1px solid black; border-collapse: collapse;'>#ID</th>
                <th style='background:#013ca6; color:#FFF; border: 1px solid black; border-collapse: collapse;'>Producto</th>
                <th style='background:#013ca6; color:#FFF; border: 1px solid black; border-collapse: collapse;'>Código de Barras</th>
                <th style='background:#013ca6; color:#FFF; border: 1px solid black; border-collapse: collapse;'>Aún en Stock</th>
                <th style='background:#013ca6; color:#FFF; border: 1px solid black; border-collapse: collapse;'>Categoria</th>
                <th style='background:#013ca6; color:#FFF; border: 1px solid black; border-collapse: collapse;'>Sale de Stock</th>
                <th style='background:#013ca6; color:#FFF; border: 1px solid black; border-collapse: collapse;'>Fecha</th>
                
            </tr>
        </thead>
        <?php
           while ($row=mysqli_fetch_assoc($result)) {
             ?>
               <tr>
               	   <td style='border: 1px solid black; border-collapse: collapse;'><?php echo $row['id'];?></td>
               	   <td style='border: 1px solid black; border-collapse: collapse;'><?php echo $row['name'];?></td>
               	   <td style='border: 1px solid black; border-collapse: collapse;'><?php echo $row['barcode_p'];?></td>
               	   <td style='border: 1px solid black; border-collapse: collapse;'><?php echo $row['quantity'];?></td>
               	   <td style='border: 1px solid black; border-collapse: collapse;'><?php echo $row['name'];?></td>
               	   <td style='border: 1px solid black; border-collapse: collapse;'><?php echo $row['qty'];?></td>
               	   <td style='border: 1px solid black; border-collapse: collapse;'><?php echo $row['date'];?></td>
               	   
               </tr>
 
            <?php
           }

        ?>
    </table>