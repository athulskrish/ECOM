<?php
include('s_header.php');

?>

<section class="w3l-newsletter">
		<div class="form-25-main py-5">
			<div class="container py-lg-5">
 <!-- <div class="w3l-content-1 w3l-progressblock py-5"> -->
    <div class="container py-lg-5 py-md-4 py-2">
          <div class="title-content text-center mx-0">

  <h6 class="title-subhny two mb-2"><span>Product View</span></h6>
</div>
<br>
<!-- style="border-collapse:collapse ;     background: black; border: chocolate 
	 style="color: chartreuse""
	  border="1"  cellpadding="10px"  -->
	<center><h2>Product View</h2>
	<table  class="table table-striped table-dark table-hover"">
		<thead >
			<tr>
			<th  scope="col">Product Name</th>
			<th  scope="col">Product Category</th>
			<th  scope="col">Product Sub-category</th>
			<th  scope="col">Quantity</th>
			<th  scope="col">Amount</th>
			<th  scope="col">Product Details</th>
			<th  scope="col">Update</th>
			<th  scope="col">Delete</th>

		</tr>
		</thead>
		<tbody style="color: white">
			{foreach from=$data item="d"}
			<tr>
				<td>{$d.name}</td>
				<td>{$d.category}</td>
				<td>{$d.subcategory}</td>
				<td>{$d.quantity}</td>
				<td>{$d.amount}</td>
				<td>{$d.details}</td>
				<td><a href="s_productupdate.php?key={$d.prokey}"><button style="background: green;color: white" class="from-control">Update</button></a></td>
				<td><a href="s_productdel.php?key={$d.prokey}"><button style="background: green;color: white" class="from-control">Delete</button></a></td>

			</tr>
			{/foreach}
		</tbody>

	</table>
	</center>
</div>
</div>
</div>
</section>


<?php
	include('s_footer.php');
?>