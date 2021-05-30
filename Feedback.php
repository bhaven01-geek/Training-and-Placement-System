<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tpo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,username, title, fdate,story FROM feedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {

    $datas[] = $row;
  }
} else {
  echo "0 results";
}
$conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Feedback Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./Feedback.css">
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">



<div class="container">

<div class="be-comment-block" id="block">
<form id='fform' method="POST" action="feed_detail.php">
	<input id="getfeed" type="hidden" name="fname">
		
	<h1 class="comments-title" id="numfeed"></h1>
	
	
	<script>
		
    var arr = <?php echo json_encode($datas) ?>;
    const board = document.getElementById("block");
	console.log(arr);
	const numfeed= document.getElementById('numfeed');
	numfeed.innerHTML=`Feedbacks (${arr.length})`;
    function creatediv(t,u,d) {
      var box = document.createElement("div");
      box.setAttribute('class', "be-comment");
		box.innerHTML=`<div class="be-img-comment"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="be-ava-comment"></div><div class="be-comment-content">
		
		<span class="be-comment-name">${u} </span><span class="be-comment-time"><i class="fa fa-clock-o"></i>${d}</span ><p class="ftitle be-comment-text">${t}</p></div>`;

	  board.appendChild(box);
      
    }

    function initiate() {
      for (let i = 0; i < arr.length; i++) {
        creatediv(arr[i].title, arr[i].username,arr[i].fdate);
      }
    }
    initiate();
    const openfeed=(e)=>{
      const getnotice=document.getElementById('getfeed');
      let val=e.target.innerHTML;
	  console.log(val);
      getnotice.value=val;
      document.getElementById("fform").submit();
      
    }
    const titles=document.querySelectorAll('.ftitle');
    for(var i=0;i<titles.length;i++)
        {
            let temp=titles[i];
            temp.addEventListener('click',openfeed);
        }

    
  </script>
</form>

</div>
</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>