
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Registration</title>
		<meta charset="utf-8">
		<!-- Bootstrap core CSS -->
		<!-- Used from https://www.getbootstrap.com, 29 January 2019 -->
	    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

		<!-- Custom CSS styles -->
		
	</head>
	<body>
		<header>
            


            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous">
			</script>


			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

          

            <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>




            
            
		</header>
		<main>

			<form>
				<div class='container'>
			    <div class="form-group">
					<label for="exampleFormControlInput1">Full Name</label>
					<input type="text" class="form-control" id="name">
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">Email address</label>
					<input type="email" class="form-control" id="exampleFormControlInput1">
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">Phone Number</label>
					<input type="number" class="form-control" id="phone">
				</div>
				<div class="form-group">
					<label for="exampleFormControlSelect1">Board of education:</label>
					<select class="form-control" id="exampleFormControlSelect1">
						<option>CBSE</option>
						<option>ICSE</option>
						<option>HSC</option>
						<option>IB</option>
						<option>A Levels</option>
						<option>IGCSE</option>
					</select>
				</div>

				<div class="form-group">
					<label for="exampleFormControlSelect1">Grade:</label>
					<select class="form-control" id="grade" onchange="changeList()">
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
					</select>
				</div>
				

				<div class="form-group">
					<label for="exampleFormControlSelect1">Subjects:</label>
					<div class="form-check">
						<div id="check">
						  
					    </div>
					</div>
				</div>
				<div class="form-group">
				
					<input value="View Total Tuition due"type="button" onclick="totalIt()">
					<input type="text" class="form-control" id="total">
				</div>



				
				<Button>Register</Button>
			<div>
			</form>
			

		</main>
		<footer>
	   
        </footer>

            <script type="text/javascript">
            	var counter=0;
            	var counter2=0;
            	function changeList(){
                     

                     var e = document.getElementById("grade");
                     var user = e.options[e.selectedIndex].text;

                    if(user==9||user==10||user==11||user==12){

                    	if(counter>=1||counter2>=1){
                    		var rem=document.getElementById("check").innerHTML="";
                    	}
                    	var check=document.createElement("input");
                    	check.setAttribute("type","checkbox");
                        check.setAttribute("name","product");
                    	document.getElementById("check").appendChild(check);
                    	var label=document.createElement("label");	
                    	label.innerHTML="Mathematics";
                    	label.setAttribute("value","math");
                    	document.getElementById("check").appendChild(label);

                    	var check=document.createElement("input");
                    	check.setAttribute("type","checkbox");
                    	check.setAttribute("name","product");
                    	document.getElementById("check").appendChild(check);
                    	var label=document.createElement("label");
                    	label.innerHTML="Physics";
                    	label.setAttribute("value","phys");
                    	document.getElementById("check").appendChild(label);

                    	var check=document.createElement("input");
                    	check.setAttribute("type","checkbox");
                    	check.setAttribute("name","product");
                    	document.getElementById("check").appendChild(check);
                    	var label=document.createElement("label");
                    	label.innerHTML="Chemistry";
                    	label.setAttribute("value","chem");
                    	document.getElementById("check").appendChild(label);

                    	var check=document.createElement("input");
                    	check.setAttribute("type","checkbox");
                    	check.setAttribute("name","product");
                    	document.getElementById("check").appendChild(check);
                    	var label=document.createElement("label");
                    	label.innerHTML="Biology";
                    	label.setAttribute("value","bio");
                    	document.getElementById("check").appendChild(label);

                    	counter2++;

                    }
                    else{

                    	if(counter2>=1||counter>=1){
                    		var rem=document.getElementById("check").innerHTML="";

                    	}
                    	//if(counter==0){
                        var check=document.createElement("input");
                    	check.setAttribute("type","checkbox");
                    	check.setAttribute("name","product");
                    	document.getElementById("check").appendChild(check);
                    	var label=document.createElement("label");	
                    	label.innerHTML="Mathematics";
                    	label.setAttribute("value","math");
                    	document.getElementById("check").appendChild(label);


                    	var check=document.createElement("input");
                    	check.setAttribute("type","checkbox");
                    	check.setAttribute("name","product");
                    	document.getElementById("check").appendChild(check);
                    	var label=document.createElement("label");	
                    	label.innerHTML="Science";
                    	label.setAttribute("value","sci");
                    	document.getElementById("check").appendChild(label);
                      // }
                    	counter++;
                    	
                    	//myobj.remove();
                    }

                }

                function totalIt(){

                    var total=0;
                	var input = document.getElementsByName("product");
                	for (var i = 0; i < input.length; i++) {
                		if (input[i].checked) {
                			total += 1000;
                		}
                	}
                	document.getElementById("total").value=total;


                }
            </script>

	</body>

</html>

    