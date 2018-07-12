<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .navbar {
            overflow: hidden;
            background-color: #dddddd;
            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar a {
            float: left;
            font-size: 16px;
            color: darkviolet;
            text-align:end;
            padding: 14px 16px;
            text-decoration: none;
        }

        .dropdown1 {
            float: left;
            overflow: hidden;
            touch-action:manipulation;
        }

        .dropdown2 {
            float: left;
            overflow: hidden;
        }
        .dropdown3 {
            float: left;
            overflow: hidden;
        }

        .dropdown4 {
            float: left;
            overflow: hidden;
        }
        .dropdown5 {
            float: left;
            overflow: hidden;
        }
        .dropdown6 {
            float: left;
            overflow: hidden;
        }
        .dropdown7 {
            float: left;
            overflow: hidden;
        }

        .dropdown1 .dropbtn1 {
            font-size: 16px;
            border: none;
            outline: none;
            color: darkviolet;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }
        .dropdown2 .dropbtn2 {
            font-size: 16px;
            border: none;
            outline: none;
            color: darkgreen;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .dropdown3 .dropbtn3 {
            font-size: 16px;
            border: none;
            outline: none;
            color: brown;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }
        .dropdown4 .dropbtn4 {
            font-size: 16px;
            border: none;
            outline: none;
            color: blue;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }
        .dropdown5 .dropbtn5 {
            font-size: 16px;
            border: none;
            outline: none;
            color: deeppink;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }
        .dropdown6 .dropbtn6 {
            font-size: 16px;
            border: none;
            outline: none;
            color: darkblue;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }
        .dropdown7 .dropbtn7 {
            font-size: 16px;
            border: none;
            outline: none;
            color: cadetblue;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .dropdown1:hover .dropbtn1 {
            background-color: crimson;
        }
        .dropdown2:hover .dropbtn2 {
            background-color: green;
        }
        .dropdown3:hover .dropbtn3 {
            background-color: greenyellow;
        }
        .dropdown4:hover .dropbtn4 {
            background-color: coral;
        }
        .dropdown5:hover .dropbtn5 {
            background-color: crimson;
        }
        .dropdown6:hover .dropbtn6 {
            background-color: chocolate;
        }
        .dropdown7:hover .dropbtn7 {
            background-color: darkslateblue;
        }

        .dropdown-content1 {
            display: none;
            position:absolute ;
            background-color: whitesmoke;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content2 {
            display: none;
            position: absolute;
            background-color: whitesmoke;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content3 {
            display: none;
            position: absolute;
            background-color: whitesmoke;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content4 {
            display: none;
            position: absolute;
            background-color: whitesmoke;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content5 {
            display: none;
            position: absolute;
            background-color: whitesmoke;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content6 {
            display: none;
            position: absolute;
            background-color: whitesmoke;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content7 {
            display: none;
            position: absolute;
            background-color: whitesmoke;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content1 a1 {
            float: none;
            color: blueviolet;
            padding: 12px 16px;
            text-decoration:  none;
            display: block;
            text-align: left;
        }

        .dropdown-content2 a2 {
            float: none;
            color: blueviolet;
            padding: 12px 16px;
            text-decoration:  none;
            display: block;
            text-align: left;
        }

        .dropdown-content3 a3 {
            float: none;
            color: blueviolet;
            padding: 12px 16px;
            text-decoration:  none;
            display: block;
            text-align: left;
        }

        .dropdown-content4 a4 {
            float: none;
            color: blueviolet;
            padding: 12px 16px;
            text-decoration:  none;
            display: block;
            text-align: left;
        }

        .dropdown-content5 a5 {
            float: none;
            color: blueviolet;
            padding: 12px 16px;
            text-decoration:  none;
            display: block;
            text-align: left;
        }

        .dropdown-content6 a6 {
            float: none;
            color: blueviolet;
            padding: 12px 16px;
            text-decoration:  none;
            display: block;
            text-align: left;
        }

        .dropdown-content7 a7 {
            float: none;
            color: blueviolet;
            padding: 12px 16px;
            text-decoration:  none;
            display: block;
            text-align: left;
        }


        .dropdown-content1 a1:hover {
            background-color: brown;
        }
        .dropdown-content2 a2:hover {
            background-color: brown;
        }
        .dropdown-content3 a3:hover {
            background-color: brown;
        }
        .dropdown-content4 a4:hover {
            background-color: brown;
        }
        .dropdown-content5 a5:hover {
            background-color: brown;
        }
        .dropdown-content6 a6:hover {
            background-color: brown;
        }
        .dropdown-content7 a7:hover {
            background-color: brown;
        }

        .dropdown1:hover .dropdown-content1 {
            display:  block;
        }
        .dropdown2:hover .dropdown-content2 {
            display:  block;
        }
        .dropdown3:hover .dropdown-content3 {
            display:  block;
        }
        .dropdown4:hover .dropdown-content4 {
            display:  block;
        }
        .dropdown5:hover .dropdown-content5 {
            display:  block;
        }
        .dropdown6:hover .dropdown-content6 {
            display:  block;
        }
        .dropdown7:hover .dropdown-content7 {
            display:  block;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="#home">Home</a>

    <div class="dropdown1">
        <button class="dropbtn1">About Upozella
        </button>
        <div class="dropdown-content1">

            <il style="color: deeppink; margin-right: 6px">Upozella Identity</il>

<ul>                                <a href="#">Glance</a></b>
                                     <a href="#">War</a></b>
                                     <a href="#">Area</a></b>



        </ul>

            <il style="color: deeppink; margin-right: 6px">Culture History</il>
                          <ul><a href="#">Language</a>
                          <a href="#">Place</a>
                              <a href="#">History</a></ul>

                     <il style="color: deeppink; margin-right: 6px">Economy and Global</il>
               <ul><a href="#">Identity</a>
                <a href="#">River</a>
                <a href="#">Buisness</a></ul>
                     <il style="color: deeppink">Others</il>
            <ul><a href="#">Leaders</a>
                <a href="#">Papers</a>
            </ul>


        </div>
    </div>

        <div class="dropdown2">
            <button class="dropbtn2">Upozella Porishod
            </button>
            <div class="dropdown-content2">
                <a href="#">Chairman</a>
                <a href="#">Vice Chairman</a>
                <a href="#">Women Vice Chairman</a>
            </div>
    </div>

        <div class="dropdown3">
            <button class="dropbtn3">Upozella Prosason

            </button>
            <div class="dropdown-content3">
            <il style="color: deeppink; margin-right: 6px">Officer</il>
            <ul><a href="#">Information</a>
                <a href="#">Profile</a>
                <a href="#">Contact</a></ul>

            <il style="color: deeppink; margin-right: 6px">Organizations</il>
            <ul><a href="#">Stuffs</a>
                <a href="#">Branches</a>
                <a href="#">Structures</a>
                 </ul>

            <il style="color: deeppink; margin-right: 6px">Work</il>
            <ul><a href="#">Monthly Work</a>
                <a href="#">Notice</a>
                <a href="#">Decision</a></ul>

            <il style="color: deeppink; margin-right: 6px">Services and Others</il>
            <ul><a href="#">Idea</a>
                <a href="#">Questions</a>
                <a href="#">Notics</a>
            </ul>
        </div>
        </div>
        <div class="dropdown4">
            <button class="dropbtn4">Pourosova

            </button>
            <div class="dropdown-content4">
                <a href="#">Words</a>
                <a href="#">Law</a>
                <a href="#">Officers</a>
            </div>
        </div>

        <div class="dropdown5">
            <button class="dropbtn5">Government Office

            </button>
            <div class="dropdown-content5">
                <il style="color: deeppink; margin-right: 6px">About Law And Regulations</il>
                <ul><a href="#">Savar Model Thana</a>
                    <a href="#">Asulia Thana</a>
                    <a href="#">Fire Service And Civil Defences</a>

                </ul><br><br><br>

                <il style="color: deeppink; margin-right: 6px">About Education and Culture</il>
                <ul><a href="#">Education office</a>
                    <a href="#">Secondary Education Office</a>
                    <a href="#">Resows Center  </a>
                </ul><br><br><br><br>

                <il style="color: deeppink; margin-right: 6px">About Agriculture and Food</il>
                <ul><a href="#">Agriculture Officres' Office</a>
                    <a href="#">Sub-Assistance Agricultural Officers' Lists</a>
                    <a href="#">Dealer List</a></ul>

                <il style="color: deeppink; margin-right: 6px">About Health</il>
                <ul><a href="#">Family Planning Office</a>
                    <a href="#">Health Complex</a>
                    <a href="#">Doctor Lists</a></ul>

            </div>
        </div>

        <div class="dropdown6">
            <button class="dropbtn6">Others Institution

            </button>
            <div class="dropdown-content6">
                <il style="color: deeppink; margin-right: 6px">Educational Institutions</il>
                <ul><a href="#">Universities</a>
                    <a href="#">Primary Schools</a>
                    <a href="#">Colleges</a></ul>

                <il style="color: deeppink; margin-right: 6px">Private Institutions</il>
                <ul><a href="#">NGOs</a>
                    <a href="#">Bank</a>
                    <a href="#">Bima</a></ul><br><br><br>

                <il style="color: deeppink; margin-right: 6px">Religious Institutions</il>
                <ul><a href="#">Masjids</a>
                    <a href="#">Tamples</a>
                    <a href="#">Orphanages</a>
                <a href="#">Graves</a> </ul>

            </div>
        </div>

        <div class="dropdown7">
            <button class="dropbtn7">E-Commerce

            </button>
            <div class="dropdown-content7">
                    <il style="color: deeppink; margin-right: 6px">National E-Services</il>
                <ul style="color-interpolation-filters: inherit"><a href="#">E-Book</a>
                    <a href="#">Bangladesh Form</a>
                    <a href="#">Online Applications</a>
                    <a href="#">E Dictionary</a>
                </ul><br><br><br><br><br>

                <il style="color: deeppink; margin-right: 6px">Mobile Application</il>
                <ul><a href="#">Android</a>
                    <a href="#">i-Phone</a>
                </ul>

            </div>
        </div>

</div>



</body>
</html>
