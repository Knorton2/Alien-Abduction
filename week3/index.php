<!-- InstanceBegin template="/Templates/alien.dwt.php" codeOutsideHTMLIsLocked="false" --><?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>



    <div id="main">

      <!-- InstanceBeginEditable name="content" -->
      <h2>Abductee Register</h2>



        <form action="record.php" method="get">
		<h3>Abduction data</h3>

        <fieldset>
           <legend>You</legend>

           <dl>
                <dt><label>First Name</label></dt>
                	<dd><input type="text" id="first_name" name="first_name" /></dd>
                <dt><label>Last Name</label></dt>
                	<dd><input type="text" id="last_name" name="last_name" /></dd>
                <dt><label>Your  Email</label></dt>
                	<dd><input type="text" id="email" name="email" /></dd>
                 <dt><label>Your Job</label></dt>
                	<dd><input type="text" id="job" name="job" /></dd>
        	</dl>
        </fieldset>

        <fieldset>
        	<legend>Your Abduction</legend>
             <label>Date</label><br/>
            <input type="text" id="date_taken" name="date_taken" /><br/>
            <label>Location</label><br/>
            <input type="text" id="location" name="location" /><br/>
            <label>Time Gone</label><br/>
            <input type="text" id="time_gone" name="time_gone" />
        </fieldset>
        <input type="submit" value="Report Abduction" name="submit"/>
        </form>


	  <!-- InstanceEndEditable -->
	  </div>

<?php include("includes/footer.php"); ?>
<!-- InstanceEnd -->
