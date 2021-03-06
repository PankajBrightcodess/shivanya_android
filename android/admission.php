<?php include 'header-links.php'; ?>
<?php include 'header.php'; ?>
<section class="blank-course "></section>
<section class="pages">
    <div class="container">
        <form method="post" action="action.php">
       <div class="row enqueryform">
        <div class="col-lg-12 col-12 mb-3">
            <h2 class="text-center text-info">Student Admission Enquiry Form</h2>
            <hr class="border-warning">
        </div>
        <div class="col-md-6 col-12 mb-2">
            <label>Name<span style="color: Red;">*</span></label>
            <input type="text" name="name" placeholder="Enter Your Name" class="form-control" required>
        </div>
        <div class="col-md-6 col-12 mb-2">
            <label>Mobile<span style="color: Red;">*</span></label>
            <input type="text" name="mobile" placeholder="Active Mobile Number" class="form-control" required>
        </div>
        <div class="col-md-6 col-12 mb-2">
            <label>Email<span style="color: Red;">*</span></label>
            <input type="mail" name="email" placeholder="Active Email" class="form-control" required>
        </div>
        <div class="col-md-6 col-12 mb-2">
            <label>Academic Qualification<span style="color: Red;">*</span></label>
            <input type="text" name="ac_qualify" placeholder="Enter Academic Qualification" class="form-control" required>
        </div>
        <div class="col-md-6 col-12  mb-5">
            <label>Course<span style="color: Red;">*</span></label>
            <select class="form-control" name="course">
                <option>---SELECT---</option>
                <option value="DNITC">Diploma in Nursery teacher training Course (DNITC)</option>
                <option value="DCITC">Diploma in Computer Teacher Training Course (DCITC)</option>
                <option value="PG-DCC">PG-Diploma in Computer Course (PG-DCC)</option>
                <option value="MDCC">Marter Diploma in Computer Course (MDCC)</option>
                <option value="ADCPC">Advance Diploma in Computer Programming Course (ADCPC)</option>
                <option value="DCOMPC">Diploma in Computer Office Management & Publishing Course (DCOMPC)</option>
                <option value="ADCC">Advance Diploma in Computer Course (ADCC)</option>
                <option value="DCOAC">Diploma in Computer Office & Accounting Course (DCOAC)</option>
                <option value="MCCC">Master Certificate in Computer Course (MCCC)</option>
                <option value="DCFAC">Diploma in Computer Financial Accounting Course (DCFAC)</option>
                <option value="DDTPC">Diploma in Desktop Publishing Course (DDTPC)</option>
                <option value="DWDC">Diploma in Web Designing Course (DWDC)</option>
                <option value="DCC">Diploma in Computer Course (DCC)</option>
                <option value="CCC">Certificate in Computer Course (CCC)</option>
                <option value="CBCC">Certificate in Basic Computer Course (CBCC)</option>
                <option value="CCFAC">Certificate in Computer Financial Accounting Course (CCFAC)</option>
                <option value="CCET">Certificate in Computer English Typing</option>
                <option value="CCHT">Certificate in Computer Hindi Typing</option>
                <option value="CCEHT">Certificate in Computer Eng/Hindi Typing</option>
                <option value="CBC">Certificate in Basic Computer</option>
                <option value="CESPD">Certificate in English Speaking & PD</option>
                <option value="CDTP">Certificate in DTP</option>
                <option value="CT">Certificate in Tally</option>
                <option value="CBP">Certificate in Basic Programming</option>
            </select>
        </div>
         <div class="col-md-6 col-12 mb-5">
            <label>Training Mode<span style="color: Red;">*</span></label>
            <select class="form-control" name="mode">
                <option>---SELECT---</option>
                <option value="ragular">Regular</option>
                <option value="online">Online</option>
                <option value="correspondence">Correspondence</option>
            </select>
        </div>
        <div class="col-md-4 col-4"></div>
        <div class="col-md-4 col-4"><input type="submit" name="student_enquiry" class="btn btn-sm btn-success form-control" value="Submit"></div>
        <div class="col-md-4 col-4"></div>

      </div> 
   </form>
    </div>
</section>
 <?php include 'footer.php';?>
<?php include 'footer-links.php';?>