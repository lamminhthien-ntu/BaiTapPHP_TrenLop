<head>
   <style>
       table {
           font-family: arial, sans-serif;
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
   </style>
</head>


<?php
print_r($_POST);
?>
<form method="post" action="post multi_dimension_array.php">
    <input name="address[]" value="1313 Mockingbird Ln" />
    <input name="address[]" value="Appartment D" />
    <input name="airport[4]" value="DET" />
    <input name="airport[7]" value="JFK" />
    <input name="person[john]" value="man" />
    <input name="person[sue]" value="woman" />
    <input name="person[john][name]" value="Johnathan" />
    <input name="person[john][age]" value="39" />
    <input type="submit">
</form>

