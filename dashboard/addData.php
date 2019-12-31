<?php include('header.php'); ?>


<section class="content">

      <!-- Default box -->
      <div class="card">
        <!-- <div class="card-header">
          

          
        </div> -->
        <form action="./data/addData.php" method="post" accept-charset="utf-8">
        <div class="card-body">
        	<div class="col-md-12">
        		
        	<div class="row">
        		
        	
          	<div class="col-md-6">
          		<div class="form-group">
               	<label for="name">विमेदाराचे नाव</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="विमेदाराचे नाव" required="required">
            </div>
            <div class="form-group">
               	<label for="older_name">वडिलांचे नाव</label>
                <!-- <input type="date" name="startdate" class="form-control" id="startDate" placeholder="Enter Start Date" required="required"> -->
                <input type="text" name="older_name" class="form-control" placeholder="वडिलांचे नाव" id="older_name" required="required">
            </div>
            <div class="form-group">
               	<label for="address">पत्ता</label>
                <!-- <input type="date" name="enddate" class="form-control" id="endDate" placeholder="Enter End Date" required="required"> -->
                <input type="text" name="address" class="form-control" placeholder="पत्ता" id="address" required="required">
            </div>
            <div class="form-group">
               	<label for="mobile">मोबाईल नं.</label>
                <input type="text" name="mobile" class="form-control" id="mobile" placeholder="मोबाईल नं" required="required">
            </div>
            	<div class="form-group">
               	<label for="email">ईमेल आयडी</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="ईमेल आयडी" required="required">
            </div>
            <div class="form-group">
               	<label for="birth_date">जन्म तारीख</label>
                <input type="text" name="birth_date" class="form-control" id="birth_date" placeholder="जन्म तारीख" required="required">
            </div>
            <div class="form-group">
               	<label for="birth_place">जन्म ठिकाण</label>
                <input type="text" name="birth_place" class="form-control" id="birth_place" placeholder="जन्म ठिकाण" required="required">
            </div>
            <div class="form-group">
               	<label for="age">वय</label>
                <input type="number" name="age" class="form-control" id="age" placeholder="वय">
            </div>
          	</div>
            <div class="col-md-6">
            <div class="form-group">
               	<label for="qualification">शिक्षण</label>
                <input type="text" name="qualification" class="form-control" id="qualification" placeholder="शिक्षण" required="required">
            </div>
            <div class="form-group">
               	<label for="occupation">व्यवसाय / नोकरी</label>
                <input type="text" name="occupation" class="form-control" id="occupation" placeholder="व्यवसाय / नोकरी" required="required">
            </div>
            <div class="form-group">
               	<label for="profession">हुदा</label>
                <input type="text" name="profession" class="form-control" id="profession" placeholder="हुदा" required="required">
            </div>
            <div class="form-group">
               	<label for="income">उत्पन्न</label>
                <input type="text" name="income" class="form-control" id="income" placeholder="उत्पन्न" required="required">
            </div>
            <div class="form-group">
               	<label for="land_lord">वारसदाराचे नाव</label>
                <input type="text" name="land_lord" class="form-control" id="land_lord" placeholder="वारसदाराचे नाव" required="required">
            </div>
            <div class="form-group">
               	<label for="birth_lord">जन्म तारीख वारसदार</label>
                <input type="text" name="birth_lord" class="form-control" id="birth_lord" placeholder="जन्म तारीख वारसदार" required="required">
            </div>
            <div class="form-group">
               	<label for="nate_varas">नाते वारसदार सोबत</label>
                <input type="text" name="nate_varas" class="form-control" id="nate_varas" placeholder="नाते वारसदार सोबत" required="required">
            </div>
            </div>
            </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" name="submit" class="btn btn-outline-success">Add Data</button>
        </div>
        </form>

        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>




<?php include('footer.php'); ?>