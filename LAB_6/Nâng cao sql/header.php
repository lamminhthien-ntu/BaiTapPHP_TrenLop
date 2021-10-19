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
        font-weight: bolder;
        color: red;
        font-weight: bolder;
        border-radius: 10px;
        background-color: beige;
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
    }
    * {
        border-radius: 10px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
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
        display: table;
        clear: both;
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
</style>
<body>
	<div class="jumbotron text-center">
		<h2 style="color: blueviolet;font-weight: 700;">QUẢN LÝ NHÂN VIÊN</h2>
		<button type="button" class="btn-lg"><a href="index_nhanvien.php">nhân viên</a></button>
		<button type="button" class="btn-lg"><a href="index_loainv.php">loại nhân viên</a></button>
		<button type="button" class="btn-lg"><a href="index_phongban.php">phòng ban</a></button>

	</div>
</body>
</html>