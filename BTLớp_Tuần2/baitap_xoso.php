<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Xổ số kiến thiết khánh Hòa</title>
</head>

<body>
    <h1 style="text-align: center;">Kết quả xổ số kiến thiết ngày</h1>
    <h2><?php
// Prints the day
    echo date(" d \of M Y ") . "<br>";
?></h2>

<table>
    <tr>
        <td>Giải 8</td>
        <td>
            <?php 
            $lucky_num=rand(0,99);
            if($lucky_num<10)
            {
                echo "0".$lucky_num;
            }
            else
            echo $lucky_num;
            ?>
        </td>
    </tr>
    <tr>
        <td>Giải 7</td>
        <td>
            <?php 
            $lucky_num=rand(0,999);
            if($lucky_num<100)
            {
                echo "0".$lucky_num;
            }
            elseif ($lucky_num<10)
            {
                echo "00".$lucky_num;
            }
            else {
                echo $lucky_num;
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>Giải 6</td>
        <td>
         <?php 
         for ($i=1;$i<=3;$i++)
         {
            $lucky_num=rand(0,9999);
            if($lucky_num<1000)
            {
                echo "0".$lucky_num;
                echo " - ";
            }
            elseif ($lucky_num<100)
            {
                echo "00".$lucky_num;
                echo " - ";
            }
            elseif ($lucky_num<10)
            {
                echo "000".$lucky_num;
                echo " - ";
            }
            else {
                echo $lucky_num;
                echo " - ";
            }
        }
        ?>
    </td>
</tr>
<tr>
    <td>Giải 5</td>
    <td>
        <?php 

        $lucky_num=rand(0,9999);
        if($lucky_num<1000)
        {
            echo "0".$lucky_num;

        }
        elseif ($lucky_num<100)
        {
            echo "00".$lucky_num;

        }
        elseif ($lucky_num<10)
        {
            echo "000".$lucky_num;

        }
        else {
            echo $lucky_num;

        }
        ?>
    </td>
</tr>
<tr>
    <td>Giải 4</td>
    <td>
        <?php 
        for ($i=1;$i<=7;$i++)
        {
            $lucky_num=rand(0,99999);
            if($lucky_num<10000)
            {
                echo "0".$lucky_num;
                echo " - ";
            }
            if($lucky_num<1000)
            {
                echo "00".$lucky_num;
                echo " - ";
            }
            elseif ($lucky_num<100)
            {
                echo "000".$lucky_num;
                echo " - ";
            }
            elseif ($lucky_num<10)
            {
                echo "0000".$lucky_num;
                echo " - ";
            }
            else {
                echo $lucky_num;
                echo " - ";
            }
        }
        ?>
    </td>
</tr>
<tr>
    <td>Giải 3</td>
    <td>
       <?php 
       for ($i=1;$i<=2;$i++)
       {
        $lucky_num=rand(0,99999);
        if($lucky_num<10000)
        {
            echo "0".$lucky_num;
            echo " - ";
        }
        if($lucky_num<1000)
        {
            echo "00".$lucky_num;
            echo " - ";
        }
        elseif ($lucky_num<100)
        {
            echo "000".$lucky_num;
            echo " - ";
        }
        elseif ($lucky_num<10)
        {
            echo "0000".$lucky_num;
            echo " - ";
        }
        else {
            echo $lucky_num;
           echo " - ";
        }
    }
    ?>
</td>
</tr>
<tr>
    <td>Giải 2</td>
    <td>
        <?php 
        $lucky_num=rand(0,99999);
        if($lucky_num<10000)
        {
            echo "0".$lucky_num;

        }
        if($lucky_num<1000)
        {
            echo "00".$lucky_num;

        }
        elseif ($lucky_num<100)
        {
            echo "000".$lucky_num;

        }
        elseif ($lucky_num<10)
        {
            echo "0000".$lucky_num;

        }
        else {
            echo $lucky_num;

        }
        ?>
    </td>
</tr>
<tr>
    <td>Giải 1</td>
    <td>
      <?php 
      $lucky_num=rand(0,99999);
      if($lucky_num<10000)
      {
        echo "0".$lucky_num;

    }
    if($lucky_num<1000)
    {
        echo "00".$lucky_num;

    }
    elseif ($lucky_num<100)
    {
        echo "000".$lucky_num;

    }
    elseif ($lucky_num<10)
    {
        echo "0000".$lucky_num;

    }
    else {
        echo $lucky_num;

    }
    ?>
</td>
</tr>
<tr>
    <td>Giải đặc biệt</td>
    <td>
        <?php 
        $lucky_num=rand(0,999999);
        if($lucky_num<100000)
        {
            echo "0".$lucky_num;

        }
        if($lucky_num<10000)
        {
            echo "00".$lucky_num;

        }
        elseif ($lucky_num<1000)
        {
            echo "000".$lucky_num;

        }
        elseif ($lucky_num<100)
        {
            echo "0000".$lucky_num;

        }
        elseif ($lucky_num<10)
        {
            echo "00000".$lucky_num;

        }
        else {
            echo $lucky_num." ";

        }
        ?>
    </td>
</tr>
</table>
</body>

</html>