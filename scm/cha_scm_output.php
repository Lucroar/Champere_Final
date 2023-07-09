<!DOCTYPE html>
<html>
  <head>
    <title>Form Output</title>
    <style>
   /* Container styles */
        .container-one,
        .container-two,
        .container-three {
        margin: 20px 0;
        }
        
        .container-three {
        text-align: center;
        }
      /* Table styles */
        table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        }
        
        table th {
        background-color: #f2f2f2;
        padding: 10px;
        text-align: left;
        }
        
        table td {
        padding: 10px;
        border: 1px solid black;
        }
      /* Button styles */
        .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4b4603;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        margin-right: 10px;
        background-color: #79472E;
        }
        
        .btn:hover {
        background-color: #FDCD93;
        }
    </style>
  </head>
  <body>
    
    <div class='container-one'>
    
<?php

if (isset($_POST['name']) && isset($_POST['address']) && isset($_POST['contactinfo']) && isset($_POST['email']) && isset($_POST['productname']) && isset($_POST['description']) && isset($_POST['units']) && isset($_POST['quantity']) && isset($_POST['amount']) && isset($_POST['paymentM']) && isset($_POST['termsPay']) && isset($_POST['orderedBy']) && isset($_POST['orderdate']))  {
  
  
$name = $_POST['name'];
$address = $_POST['address'];
$contactinfo = $_POST['contactinfo'];
$email = $_POST['email'];
$productname = $_POST['productname'];
$description = $_POST['description'];
$units = $_POST['units'];
$quantity = $_POST['quantity'];
$amount = $_POST['amount'];
$paymentM = $_POST['paymentM'];
$termsPay = $_POST['termsPay'];
$orderedby = $_POST['orderedBy'];
$orderdate = $_POST['orderdate'];
  
    echo "<table border='1'>" ;
  
    echo "<th colspan='2'> Supplier Information </th>" ;
    echo "<tr>
           <td> Supplier Name : </td>
			     <td> ". $name ." </td>
			   </tr>" ;
			   
		echo "<tr>
			     <td> Address : </td>
			     <td>". $address ."</td>
			    </tr>" ;
			    
		echo "<tr>
			     <td> Contact Information : </td>
			     <td>". $contactinfo ."</td>
			    </tr>" ;
                
    echo "<tr>
            <td> Email : </td>
            <td>". $email ."</td>
           </tr>" ;

			    
		echo "</table> <br>" ;
			    
		echo "<table border='1'>
		      <th colspan='2'> Transaction </th>" ;
		
		echo "<tr>
			     <td> Product Name: </td>
			     <td>". $productname ."</td>
			    </tr>" ;
			    
    echo "<tr>
            <td> Description : </td>
            <td>". $description ."</div></td>
          </tr>";

    echo "<tr>
            <td> Units : </td>
            <td>". $units ."</td>
             </tr>" ;  
			    
		echo "<tr>
			     <td> Quantity : </td>
			     <td>". $quantity ."</td>
			    </tr>" ;
			    
		echo "<tr>
			     <td> Amount : </td>
			     <td>". $amount ."</td>
			    </tr>" ;
			   
        echo "<tr>
                <td> Mode of Payment : </td>
                <td>". $paymentM ."</td>
               </tr>" ;

    echo "<tr>
           <td> Terms of Payment : </td>
           <td>". $termsPay ."</td>
          </tr>" ;

		echo "<tr>
			     <td> Ordered By : </td>
			     <td>". $orderedby ."</td>
			    </tr>" ;

    echo "<tr>
            <td> Order Date : </td>
            <td>". $orderdate ."</td>
           </tr>" ;

			    
		echo "</table>
		        </div>
            <br>
            
            <div class='container-two'>" ;
          
          include 'cha_scm_data.php';
          
		} 
		else {
          echo "<h1>No form data submitted.</h1>";
         }
    
  ?>

        <br> <br>
        </div>
        
        <div class="container-three">
          <a href='./scm_warehouse_inventory.html' class="btn" >Go Back</a> <br> <br>
          <a href='./cha_scm_results.php' class='btn'>View Entries</a>
          </div>
          
</body>
</html>
