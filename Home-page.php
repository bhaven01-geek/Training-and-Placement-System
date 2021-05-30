<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logindb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title, ndate FROM notice";
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
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>HomePage </title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script> -->
   <link rel ="stylesheet" href = "Home-Page-Style.css">
   <link rel ="stylesheet" href = "NoticeShow.css">

</head>
<body>
  <?php
  include('NavBar.html');
  ?>
       
  <div class="bgimg">
    <h1>Welcome To CRCE</h1>
    <a href="./ContactUs.php" class="btn">CONTACT US<img src="images/arrow-right-circle-fill.svg"> </a>
  </div>



      <div class ="box">
  <form id='n-form' method="POST" action="noticeDetail.php">
    <input id="getnotice" type="hidden" name="n-name">
  <div id="nbox" class="n-box">
    <div class="n-tboard">
      Notice Board
    </div>
  </form>
  

  </div>
  <script>
    var arr = <?php echo json_encode($datas) ?>;
    const board = document.getElementById("nbox");

    function creatediv(d, t) {
      var box = document.createElement("div");
      box.setAttribute('class', "notice");
      var dater = document.createElement("div");
      dater.setAttribute('class', "n-date");
      var title = document.createElement("div");
      title.setAttribute('class', "n-title");
      title.innerHTML = t;
      dater.innerHTML = "📅" + d;
      box.appendChild(dater);
      box.appendChild(title);
      board.appendChild(box);
    }

    function initiate() {
      for (let i = 0; i < arr.length; i++) {
        creatediv(arr[i].ndate, arr[i].title);
      }
    }
    initiate();
    const opennotice=(e)=>{
      const getnotice=document.getElementById('getnotice');
      let val=e.target.innerHTML;
      getnotice.value=val;
      document.getElementById("n-form").submit();
      
    }
    const titles=document.querySelectorAll('.n-title');
    for(var i=0;i<titles.length;i++)
        {
            let temp=titles[i];
            temp.addEventListener('click',opennotice);
        }
  </script>
        <div class="Content-box">
          <h4>ABOUT US </h4>
          <p class ="content-about">Located in a picturesque environment in the heart of the Mumbai city, Fr.Conceicao Rodrigues College of Engineering (Fr.CRCE) is one of the renowned, premier and sought-after private Engineering colleges. The Institute is dedicated to making a difference in Engineering education, with its exclusive approach towards the ongoing momentum of trends in technology and holistic development.
          </p>
          <img src="images/college-photo.png" align ="right">
          <p>Beginning with an orphanage (BalBhavan) and a trade school in carpentry, the Agnel Ashram (set up in 1957 at Bandra, Mumbai) has today grown into a full-fledged Technical Complex. The Institute today proudly bears the founder's name as a fitting tribute to his impassioned faith in highly-qualified and fully-trained engineers and technicians in the service of the nation.</p>

          <p class ="content-about">
            The Institute started with only one programme in Production Engineering in 1984 with an intake capacity of 60 students. In 1987, the programme in Electronics Engineering was started with an intake capacity of 60 students followed by Computer Engineering in 1991 with an intake capacity of 60 students. In 2001, the programme in Information Technology was started with an intake capacity of 30 students which was later increased to 60 in 2010. The College started offering Master’s Degree in Electronics Engineering and Mechanical Engineering in the year 2005, each having an intake capacity of 18. Doctoral programs in Electronics Engineering and Mechanical Engineering commenced in 2014 and 2015 respectively. From the year 2019, a new Undergraduate degree programme in Mechanical Engineering has been started with an intake capacity of 60. Also, the BE undergraduate programme in Electronics Engineering has been changed to Electronics and Computer Science. The Undergraduate programme in Information Technology has been merged with Computer Engineering. From the year 2020, college is offering new undergraduate programme in the emerging area of ‘AI & Data Science’.
          </p>
          <p class ="content-about">
            Based on the Outcome-based Education (OBE) parameters and criteria, three programmes of the Institute have been accredited by National Board of Accreditation (NBA-India) for a period of three years valid until June 2022.

          </p>
          <p class ="content-about">The Institute has been consistently ranked highly in major surveys like the NIRF, TOI, INDIA TODAY to name a few. The college is ranked among the top 300 Engineering institutes of the country by NIRF 2020, conducted by MHRD. Based on the Outcome-Based Education (OBE) parameters and criteria, three programmes of the institute have been accredited by the National Board of Accreditation (NBA-India) form 2017. The current accreditation is valid until June 2023. The college is also a NAAC accredited. In addition, the Institute has been consistently ranked highly by reputed surveys like TOI, India Today, The Week, Education World to name a few.</p>
        </div>
      </div>

    </body>
    </html>
    <?php
    include_once("footer.html");
    ?>