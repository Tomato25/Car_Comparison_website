

function myAjaxFunction() {
    $(document).ready(function () {
        
        var selection = document.getElementById("manufacturer").value;


        var link = "https://udon.ads.ntu.ac.uk/web/itec30151/N0826071/process.php?manufacturer='" + selection + "'";
        $.ajax({
            url: link,
            method: "GET",
            success: function (data = this.responseText) {
                console.log(data);
                var AvgUsedPrice = [];
                var AvgNewPrice = [];
                var Model = [];
                for (var i in data) {
                    AvgUsedPrice.push(data[i].UsedAvgPrice);
                    AvgNewPrice.push(data[i].NewAvgPrice);
                    Model.push(data[i].Model);
                }
                var universalOptions = {
                    maintainAspectRatio: false,
                    responsice: false,
                    title: {
                        display: true,
                        text: "Average price for new and used cars (GBP)"
                    },
                    legend: { display: true },
                    scales: {
                        yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }

                var chartdata1 = {
                    labels: Model,
                    datasets: [{
                        label: "New car price",
                        data: AvgNewPrice,
                        backgroundColor: [
                            "rgba(255, 99, 132, 0.2)",
                            "rgba(255, 99, 132, 0.2)"
                        ],
                        borderWidth: "2",
                        borderColour: [
                            "rgba(255, 99, 132, 1)",
                            "rgba(255, 99, 132, 1)"],
                        hoverBorderColor: "black"
                    }, {
                            label: "Used car price",
                            data: AvgUsedPrice,
                            backgroundColor: [
                                "rgba(54, 162, 235, 0.2)",
                                "rgba(54, 162, 235, 0.2)"],
                            borderWidth: "2",
                            borderColour: [
                                "rgba(54, 162, 235, 1)",
                                "rgba(54, 162, 235, 1)"],
                            hoverBorderColor: "black"
                        }
                    ]
                }

                

                var ctx = document.getElementById("ChartNo2").getContext("2d");
                 barGraph = new Chart(ctx, {
                    type: "bar",
                    data: chartdata1,
                    options: universalOptions
                 });



            },
            error: function (data) {
                console.log(data);

            }
        });

    });

}


var BMW = [];
var MercedesBenz = [];
var Jaguar = [];
var LandRover = [];

function myAjaxFunction1() {
    $(document).ready(function () {
        var link = "https://udon.ads.ntu.ac.uk/web/itec30151/N0826071/process1.php";
        $.ajax({
            url: link,
            method: "GET",
            success: function (data = this.responseText) {
                console.log(data);
                BMW = [];
                MercedesBenz = [];
                Jaguar = [];
                LandRover = [];

                BMW.push(data[0].UnitsSold2015, data[0].UnitsSold2016, data[0].UnitsSold2017, data[0].UnitsSold2018, data[0].UnitsSold2019, data[0].UnitsSold2020);
                MercedesBenz.push(data[1].UnitsSold2015, data[1].UnitsSold2016, data[1].UnitsSold2017, data[1].UnitsSold2018, data[1].UnitsSold2019, data[1].UnitsSold2020);
                Jaguar.push(data[2].UnitsSold2015, data[2].UnitsSold2016, data[2].UnitsSold2017, data[2].UnitsSold2018, data[2].UnitsSold2019, data[2].UnitsSold2020);
                LandRover.push(data[3].UnitsSold2015, data[3].UnitsSold2016, data[3].UnitsSold2017, data[3].UnitsSold2018, data[3].UnitsSold2019, data[3].UnitsSold2020);

                var universalOptions = {
                    maintainAspectRatio: false,
                    responsice: false,
                    title: {
                        display: true,
                        text: "Sold cars per year"
                    },
                    legend: { display: true },
                    scales: {
                        xAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }

                var chartdata = {
                    labels: ["2015", "2016", "2017", "2018", "2019", "2020"],
                    datasets: [{
                        fill: false,
                        label: "BMW",
                        data: BMW,
                        borderWidth: "2",
                        borderColor: "rgba(255, 99, 132, 1)",
                        backgroundColor: "rgba(255, 99, 132, 0.2)",
                        hoverBorderColor: "black"
                    },
                    {
                        fill: false,
                        label: "Jaguar",
                        data: Jaguar,
                        borderWidth: "2",
                        borderColor: "rgba(255, 206, 86, 1)",
                        backgroundColor: "rgba(255, 206, 86, 0.2)",
                        hoverBorderColor: "black"
                    },
                    {
                        fill: false,
                        label: "Mercedes-Benz",
                        data: MercedesBenz,
                        borderWidth: "2",
                        borderColor: "rgba(54, 162, 235, 1)",
                        backgroundColor: "rgba(54, 162, 235, 0.2)",
                        hoverBorderColor: "black"
                        },
                        {
                            fill: false,
                            label: "Land Rover",
                            data: LandRover,
                            borderWidth: "2",
                            borderColor: "rgba(75, 192, 192, 1)",
                            backgroundColor: "rgba(75, 192, 192, 0.2)",
                            hoverBorderColor: "black"
                        },
                    ]
                }



                var ctx = document.getElementById("ChartNo3").getContext("2d");
                chart = new Chart(ctx, {
                    type: "line",
                    data: chartdata,
                    options: universalOptions
                });
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
}


function myAjaxFunction2() {
    $(document).ready(function () {
        var selection = document.getElementById("manufacturer1").value;
        var link = "https://udon.ads.ntu.ac.uk/web/itec30151/N0826071/process2.php?manufacturer1='" + selection + "'";
        $.ajax({
            url: link,
            method: "GET",
            success: function (data = this.responseText) {
                console.log(data);
                var PetrolMpg = [];
                var DieselMpg = [];
                var Model = [];
                for (var i in data) {
                    PetrolMpg.push(data[i].PetrolMpg);
                    DieselMpg.push(data[i].DieselMpg);
                    Model.push(data[i].Model);
                }
                var universalOptions = {
                    maintainAspectRatio: false,
                    responsive: true,
                    title: {
                        display: true,
                        text: "Miles per gallon"
                    },
                    legend: { display: true },
                    scales: {
                        yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }


                 chartdata = {
                    labels: Model,
                    datasets: [{
                        label: "Petrol",
                        data: PetrolMpg,
                        backgroundColor: [
                            "rgba(255, 99, 132, 0.2)",
                            "rgba(255, 99, 132, 0.2)"
                            ],
                        borderWidth: "2",
                        borderColour: [
                            "rgba(255, 99, 132, 1)",
                            "rgba(255, 99, 132, 1)"],
                        hoverBorderColor: "black"
                    },
                    {
                        label: "Diesel",
                        data: DieselMpg,
                        backgroundColor: [
                            "rgba(54, 162, 235, 0.2)",
                            "rgba(54, 162, 235, 0.2)"],
                        borderWidth: "2",
                        borderColour: [
                            "rgba(54, 162, 235, 1)",
                            "rgba(54, 162, 235, 1)"],
                        hoverBorderColor: "black"
                    }]
                }

                var ctx = document.getElementById("myChart").getContext("2d");
                var myChart = new Chart(ctx, {
                    type: "bar",
                    data: chartdata,
                    options: universalOptions
                });
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
}




function start() {
    myAjaxFunction();
    myAjaxFunction1();
    myAjaxFunction2();
}