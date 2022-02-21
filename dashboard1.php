<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

    <?php
    include "C:\shares\student\web\ITEC30151\N0826071\Connection.php";
    
    $sql = 'SELECT * FROM manufacturers';
    $result=mysqli_query($con,$sql);

    $dataX = "";
    $dataY = "";
    $dataZ = "";

    while($row=mysqli_fetch_assoc($result)){

   $dataX = $dataX . "'". $row['Manufacturer']."',";

   $dataY = $dataY . "'". $row['AvgRating']."',";

   $dataZ = $dataZ . "'". $row['UnitsSold2015']."',";

    }

    $dataX=trim($dataX, ",");
    $dataY=trim($dataY, ",");
    $dataZ=trim($dataZ, ",");



    ?>

    <link rel="stylesheet" href="dashboardstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
    <title></title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="app.js"></script>

</head>
<body onload="start()">
    <nav>
        <div class="logo">
            <h3>Car compare</h3>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="dashboard1.php">Compare</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="report.php">Report</a></li>
        </ul>
        <div class="burger-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>

    </nav>
    
    <div class="wrapper" id="wrapper" >
        <div class="box1">
            <div class="bottombox">
				<div class="userInput">
                <form>
                 <?php
                 $sql="SELECT DISTINCT Manufacturer FROM cars";
                 $result=mysqli_query($con,$sql);
                 echo"<select id='manufacturer1' onchange=myAjaxFunction2();>";
                    while($row=mysqli_fetch_assoc($result)){
                        echo "<option value='".$row['Manufacturer']."'>".$row['Manufacturer']."</option>";
                    }					 
                  echo"</select>"; ?>
                </div>
			</div>
            </form>
            <div class="topbox">
                <canvas id="myChart"></canvas>
            </div>
        </div>

      


        <div class="box2">
            <div class="bottombox">
				<div class="userInput">
                 <?php
                 $sql="SELECT DISTINCT Manufacturer FROM cars";
                 $result=mysqli_query($con,$sql);
                 echo"<select id='manufacturer' onchange=myAjaxFunction();>";
                    while($row=mysqli_fetch_assoc($result)){
                        echo "<option value='".$row['Manufacturer']."'>".$row['Manufacturer']."</option>";
                    }					 
                  echo"</select>"; ?>
                </div>
			</div>
            <div class="topbox">
                <canvas id="ChartNo2"></canvas>
            </div>
        </div>
		

        <div class="box3">
             <div class="bottombox">
             <div class="userInput">
             </div>
			</div>
            <div class="topbox">
                <canvas id="ChartNo3"></canvas>
            </div>
        </div>

   
        <div class="box4">
            <div class="bottombox">
			</div>
            <div class="topbox">
                <canvas id="ChartNo4"></canvas>
            </div>
        </div>

        <script type="text/javascript">

        var ctx = document.getElementById('ChartNo4');
        var ChartNo4 = new Chart(ctx, {
	    type: 'bar',
	    data: {
		    labels: [<?php echo $dataX; ?>],
		    datasets: [{
			    label: "",
			    data: [<?php echo $dataY; ?>],
			    backgroundColor: [
				    "rgba(255, 99, 132, 0.2)",
				    "rgba(54, 162, 235, 0.2)",
				    "rgba(255, 206, 86, 0.2)",
				    "rgba(75, 192, 192, 0.2)",
				    "rgba(153, 102, 255, 0.2)"
			    ],
			    borderColor: [
				    "rgba(255, 99, 132, 1)",
				    "rgba(54, 162, 235, 1)",
				    "rgba(255, 206, 86, 1)",
				    "rgba(75, 192, 192, 1)",
				    "rgba(153, 102, 255, 1)",
			    ],
			    borderWidth: 1
		    }]
	    },
	        options: {
            
		        title: {
			        display: true,
			        text: "Average User Rating"
		        },
                legend: { display: false },
                scales: {
			        yAxes: [{
				    display: true,
				    ticks: {
				    	beginAtZero: true, steps: 10, stepvalue: 1, max: 5
                }

            }]
		},

		        maintainAspectRatio: false,
		        responsive: true
	        }
        }
)
        </script>




        <div class="box5"></div>
        <div class="box6"></div>



    </div>

</body>
</html>

