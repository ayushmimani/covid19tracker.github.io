<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="utf-8" name="viewport"  content="width=device-width, inital-scale=1.0 ">
    <link rel="stylesheet" type="text/css" href="https://wwwww3schools.com/lib/w3.css">
	<link rel="stylesheet" type="text/css" href="jquery.js">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<style type="text/css">
        .header{
        	background-color:black;
        	margin: 4px;
        	padding:4px; 
        }
       
    th{
        	background-color: #29a3a3;
        }
        
        body{
        	   background-image:url("covid19.jpg");
             background-repeat: no-repeat;
             background-attachment: fixed;
        	   background-size:cover;
             color: white;
        	   width: 100%;
        	}
        
    @media screen and (max-width:900px){
      body{
           width: 100px;
           background-position: center;
      }
     
     }  
	</style>
   
    
   
</head>
<body>
	<div class="container-fluid">
	<div class="row"><div class="col-sm-12"> 
 	<span id="header">
     <h2 class="text-center text-danger header" >Live Covid-19 Tracker</h2></span>
 	 <div class="text-center">
 	 <div class="sub-header"><h3 >World Data</h3></div>  
 	<center >
 		<table  cellpadding="4px" cellspacing="4px" border="4px;" id="globaltable">
 			<tbody id="Globaldata"><tr></tr></tbody></center>
 		</table>
 	</div>
 	<hr>

 	<div class=" sub-header text-center"><h3>Countries Data</h3></div>
<div>
<center><table border="2px">
		<tbody id="countrytable">
	              <tr >
                     <th>S.No.</th>
	              	<th>Country</th>
	              	<th></th>
                    <th>NewConfirmed</th>
                    <th></th>
                    <th>NewDeaths</th>
                     <th></th>
                    <th>NewRecovered</th>
                    <th></th>
                    <th>TotalConfirmed</th>
                    <th></th>
                    <th>TotalDeaths</th>     
                    <th>TotalRecovered</th>
	              </tr></tbody>
	              <tbody id="Countrydata"></tbody>
                
            </table></center></div>

       
 </div></div>
</div>

<script type="text/javascript">
	$.ajax({
        url: "https://api.covid19api.com/summary",
        type: "GET",
        dataType: "JSON",
        success : function(data){
        	console.log(data);
    var sno=1;
        	$.each(data.Global, function(key, value){
       	$("#Globaldata").append("<tr><td>"+key+"</td><td>"+value+"</td><tr>");
       	    });
         $.each(data.Countries,function(key,value){
         $("#Countrydata").append("<tr><td>"+sno+"</td>"+         
         	                          "<td>"+value.Country+"<td>"+
                                      "<td>"+value.NewConfirmed+"<td>"+
                                      "<td>"+value.NewDeaths+"<td>"+
                                      "<td>"+value.NewRecovered+"<td>"+
                                      "<td>"+value.TotalConfirmed+"<td>"+
                                      "<td>"+value.TotalDeaths+"</td>"+
                                      "<td>"+value.TotalRecovered+"</td>"+
         	                       "</tr></table>");
         sno++;
                                       });

        }
	     });

</script>
</body>
</html>