<?php
session_start();
if (!isset($_SESSION['name'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ./login.php');
    return;
}
?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title>

</head>

<body>
    <?php
    require './nav.php';
    navbarforcart();
    ?>

    <div class="view"
        style="background-image: url('./background.jpg');background-attachment: fixed; background-repeat: no-repeat; background-size: cover; background-position: center center;  ">
        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light align-items-center ">
            <div class="container">
                <div class="row">
                    <h1 class="display-4 ">Orders</h1>

                    <div class="dropdown ml-auto my-auto">
                        <button class="btn btn-default dropdown-toggle btn-outline-light" type="button"
                            id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Filter
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><button class="dropdown-item" data-value="action1" onclick="init();">All Orders</button>
                            </li>
                            <li><button class="dropdown-item" data-value="action2" onclick="placed();">Placed</button>
                            </li>
                            <li><button class="dropdown-item" data-value="action3" onclick="shiped();">Shiped</button>
                            </li>
                            <li><button class="dropdown-item" data-value="action4"
                                    onclick="delivered();">Delivered</button>
                            </li>
                            <li><button class="dropdown-item" data-value="action5"
                                    onclick="returned();">Returned</button>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <hr>

            <div class="container ">
                <ul class="list-group list-group-flush py-md-4 py-sm-1 " id="list">

                </ul>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script>
    $(".dropdown-menu li a").click(function() {
        $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
        $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
    });
    </script>
    <script>
    var text = "";
    var list = document.getElementById("list");
    var cartItems = [{
            id: 1,
            name: "random name",
            date: "22/11/19",
            price: "$22.3",
            status: "Placed"
        },
        {
            id: 2,
            name: "random name",
            date: "22/11/19",
            price: "$22.3",
            status: "Shiped"
        },
        {
            id: 3,
            name: "random name",
            date: "22/11/19",
            price: "$22.3",
            status: "Delivered"
        },
        {
            id: 4,
            name: "random name",
            date: "22/11/19",
            price: "$22.3",
            status: "Returned"
        },
        {
            id: 5,
            name: "random name",
            date: "22/11/19",
            price: "$22.3",
            status: "Placed"
        },
        {
            id: 6,
            name: "random name",
            date: "22/11/19",
            price: "$22.3",
            status: "Shiped"
        },
        {
            id: 7,
            name: "random name",
            date: "22/11/19",
            price: "$22.3",
            status: "Delivered"
        },
        {
            id: 8,
            name: "random name",
            date: "22/11/19",
            price: "$22.3",
            status: "Returned"
        },
        {
            id: 9,
            name: "random name",
            date: "22/11/19",
            price: "$22.3",
            status: "Placed"
        },
        {
            id: 10,
            name: "random name",
            date: "22/11/19",
            price: "$22.3",
            status: "Shiped"
        },
        {
            id: 11,
            name: "random name",
            date: "22/11/19",
            price: "$22.3",
            status: "Delivered"
        },
        {
            id: 12,
            name: "random name",
            date: "22/11/19",
            price: "$22.3",
            status: "Returned"
        },
        {
            id: 13,
            name: "random name",
            date: "22/11/19",
            price: "$22.3",
            status: "Placed"
        },
        {
            id: 14,
            name: "random name",
            date: "22/11/19",
            price: "$22.3",
            status: "Shiped"
        },
        {
            id: 15,
            name: "random name",
            date: "22/11/19",
            price: "$22.3",
            status: "Delivered"
        },
        {
            id: 16,
            name: "random name",
            date: "22/11/19",
            price: "$22.3",
            status: "Returned"
        },
        {
            id: 17,
            name: "random name",
            date: "22/11/19",
            price: "$22.3",
            status: "Placed"
        },
        {
            id: 18,
            name: "random name",
            date: "22/11/19",
            price: "$22.3",
            status: "Shiped"
        },
        {
            id: 19,
            name: "random name",
            date: "22/11/19",
            price: "$22.3",
            status: "Delivered"
        },

    ];
    var maintext = "";

    function order(item) {
        console.log(item);
        var text =
            " <li class='list-group-item animate__animated animate__fadeInLeft '><div class='row'><div class='col-md-2 pt-2 '>" +
            item.name +
            "</div><div class='col-md-4 pt-2 '></div><div class='col-md-2 pt-2 '>" + item.date +
            "</div><div class='col-md-2 pt-2  '>" + item.price + "</div><div class='col-md-2  pt-2 '>";
        if (item.status == "Placed") {
            text += "<div class='btn btn-primary btn-sm button'>Placed</div></div></div> </li>";
        }
        if (item.status == "Shiped") {
            text += "<div class='btn btn-info btn-sm button'>Shiped</div></div></div> </li>";
        }
        if (item.status == "Delivered") {
            text += "<div class='btn btn-success btn-sm button'>Delivered</div></div></div> </li>";
        }
        if (item.status == "Returned") {
            text += "<div class='btn btn-danger btn-sm button'>Returned</div></div></div> </li>";

        }
        maintext += text;
        return text;
    }

    function init() {
        maintext = "";
        cartItems.map(order)
        list.innerHTML = maintext;
    }

    function placed() {
        maintext = "";
        var placedItems = cartItems.filter((item) => item.status == "Placed");
        placedItems.map(order)
        list.innerHTML = maintext;
    }

    function shiped() {
        maintext = "";
        var shipedItems = cartItems.filter((item) => item.status == "Shiped");
        shipedItems.map(order)
        list.innerHTML = maintext;
    }

    function delivered() {
        maintext = "";
        var deliveredItems = cartItems.filter((item) => item.status == "Delivered");
        deliveredItems.map(order)
        list.innerHTML = maintext;
    }

    function returned() {
        maintext = "";
        var returnedItems = cartItems.filter((item) => item.status == "Returned");
        returnedItems.map(order)
        list.innerHTML = maintext;
    }



    init();
    </script>


</body>

</html>