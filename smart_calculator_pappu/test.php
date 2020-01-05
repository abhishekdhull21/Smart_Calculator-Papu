<html> 
<head> 
   <title>jQuery AJAX Example</title> 
</head>  
<body>
 <p><strong>Click on button to view users</strong></p> 
 <div id = "container" > 
 
<div id="records"></div> 
<p>
    <input type=”button” id = "getusers" value = "Get Users" />
</p>
</div> 
<script src=”http://code.jquery.com/jquery-3.1.1.min.js”></script>
 
<script type=”text/javascript”> 
    $(function(){ $("#getusers").on(‘click’, function(){ 
      $.ajax({ method: "POST", url: "getrecords.php", })
    
        .done(function( data ) { 
          var result = $.parseJSON(data); 
          var string = '<table> 
               <tr>
                <th>#</th> 
                <th>Name</th> 
                <th>Email</th>
               <tr>';
 
       /* from result create a string of data and append to the div */
      
        $.each( result, function( key, value ) { 
             string += <tr> 
                    <td>”+value['id'] + "</td> 
                    <td> " +    value[‘first_name’]+' '+value['last_name']+'</td> 
                    <td> '+ value[’email’]+”</td> </tr>”; }); 
             string += '</table>'; 
 
          $("#records").html(string); 
       }); 
    }); 
}); 
</script> 
</body>
</html>