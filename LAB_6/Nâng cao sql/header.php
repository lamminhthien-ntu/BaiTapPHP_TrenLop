<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap.min.css">
	<script src="vendor/bootstrap.min.js"></script>
</head>
<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
    * {
        text-align: center;
        color: red;
        text-shadow:5px 5px 10px #00FF00;
        border-radius: 10px;
        /*background-color: seashell;*/
        margin-left: auto;
        margin-right: auto;
        font-size: x-large;

    }
    disabled {
        background-color: gainsboro;
    }
    form {
        margin: auto;
        width: 50%;
        border: 3px solid green;
        padding: 10px;
        background-color: lightblue;
        margin-top: 5px;
        margin-bottom: 5px;
    }
    * {
        border-radius: 10px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
        margin: 0 0 40px 0
        width: 100%
        box-shadow: 0 1px 3px rgba(0,0,0,0.2)
        display: table
        @media screen and (max-width: 580px)
        display: block
    }

    td {
        border: 1px solid #dddddd;

        text-align: left;
        padding: 8px;
        width: 290px;
        height: 30px;
        margin: 5px auto;
        padding: 5px 5px 5px 50px;
        border: solid 1px #ccc;
        border-radius: 5px 5px 5px 5px;
        font-size: 14px;
    }
    th{
        font-size: 20px;
    }
    tr:nth-child(even) {background-color: #c7ddef;}


    h2{

        font-size: 30px;
        color: #ff8100;
    }


    * {
        box-sizing: border-box;
    }

    input[type=text], select, textarea{
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        resize: vertical;
    }

    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }

    input[type=button] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container {
        background-color: #f2f2f2;
        padding: 20px;
        margin: 0 auto
        padding: 40px
        max-width: 800px
    }

    .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
    }

    .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        clear: both;
        display: table-row
        background: #f6f6f6
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media (max-width: 600px) {
        .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    }
    button {
        color: #ff006a;
    }

    .avatar {
        vertical-align: middle;
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }
    .pancakes-text {
        font-family: Satisfy, cursive;
        font-size: 3em;
        margin: 1em 2em;
        color: SandyBrown;
        text-shadow: 0.02em 0.02em 0 Brown, 0 0 0.5em violet;
    }




</style>
<body>
	<div class="center text-center">
		<h3 class="pancakes-text">QUẢN LÝ NHÂN VIÊN</h3>
		<button type="button" class="btn-lg btn-outline-primary "><a href="index_nhanvien.php">nhân viên</a></button>
		<button type="button" class="btn-lg btn-outline-success "><a href="index_loainv.php">loại nhân viên</a></button>
		<button type="button" class="btn-lg  btn-outline-danger "><a href="index_phongban.php">phòng ban</a></button>

	</div>
</body>
</html>