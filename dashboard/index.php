

<?php include('header.php'); ?>
<?php include('./data/candidatesData.php'); ?>
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data</h1>
        </div>
      </div>
    </div>
</section>

<section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
              <table id="policy" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>Action</th>
          			<th><small>आयडी</small></th>
          			<th><small>विमेदाराचे नाव</small></th>
          			<th><small>वडिलांचे नाव</small></th>
          			<th><small>पत्ता</small></th>
          			<th><small>मोबाईल नं.</small></th>
          			<th><small>ईमेल आयडी</small></th>
          			<th><small>जन्म तारीख</small></th>
          			<th><small>जन्म ठिकाण</small></th>
          			<th><small>वय</small></th>
          			<th><small>शिक्षण</small></th>
          			<th><small>व्यवसाय / नोकरी</small></th>
          			<th><small>हुदा</small></th>
          			<th><small>उत्पन्न</small></th>
          			<th><small>वारसदाराचे नाव</small></th>
          			<th><small>जन्म तारीख वारसदार</small></th>
          			<th><small>नाते वारसदार सोबत</small></th>
          		</tr>
                </thead>
                <tbody>
                	<?php if(mysqli_num_rows($exec) > 0): ?>
	              		<?php while($data = mysqli_fetch_assoc($exec)): ?>
		              		<tr>
                        <td>
                          <button type="button" class="btn btn-success" onclick="updateRecord(<?php echo $data['id']; ?>)">   UPDATE
                          </button>
                          <button type="button" class="btn btn-danger" onclick="deleteRecord(<?php echo $data['id']; ?>)">
                            DELETE
                          </button>
                          <button type="button" class="btn btn-primary" onclick="getPDF(<?php echo $data['id']; ?>)">
                            GETPDF
                          </button>
                        </td>
		              			<td><?php echo $data['id']; ?></td>
		              			<td><?php echo $data['name']; ?></td>
		              			<td><?php echo $data['olders_name']; ?></td>
		              			<td><?php echo $data['address']; ?></td>
		              			<td><?php echo $data['mobile_no']; ?></td>
		              			<td><?php echo $data['email']; ?></td>
		              			<td><?php echo $data['birth_date']; ?></td>
		              			<td><?php echo $data['birth_place']; ?></td>
		              			<td><?php echo $data['age']; ?></td>
		              			<td><?php echo $data['qualification']; ?></td>
		              			<td><?php echo $data['occupation']; ?></td>
		              			<td><?php echo $data['profession']; ?></td>
		              			<td><?php echo $data['income']; ?></td>
		              			<td><?php echo $data['land_lord']; ?></td>
		              			<td><?php echo $data['birth_lord']; ?></td>
		              			<td><?php echo $data['nate_varas']; ?></td>    
		              		</tr>
	              		<?php endwhile; ?>
              		<?php endif; ?>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.col -->
    </div>
      <!-- /.row -->
</section>




<?php include('footer.php'); ?>