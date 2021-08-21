<!doctype html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="./css/table.css">

    <title>Transaction history</title>  
</head>
<style>
    body{
        background-image:url("./img/back pink.jpg");
        background-repeat:no-repeat;
        background-size:100%;
    }
    </style>

<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="container">
   
        <h2 class="text-center pt-4" style="color : purple; font-weight : 600;">Transaction History</h2>   
       <br>
       <div class="table-responsive-sm">
        <table class="table table-hover table-striped">
            <thead style="color : red;" class="table-dark">
                <tr>
                    <th class="text-center">S.No.</th>
                    <th class="text-center">Sender</th>
                    <th class="text-center">Receiver</th>
                    <th class="text-center">Amount</th>
                </tr>
            </thead>
        <tbody>
        <?php
            include 'config.php';
            $sql ="SELECT * FROM transaction";
            $query =mysqli_query($conn, $sql);
            while($rows = mysqli_fetch_assoc($query))
            {
                ?>
                <tr style="color : black;">
                <td class="py-2"><?php echo $rows['sno']; ?></td>
                <td class="py-2"><?php echo $rows['sender']; ?></td>
                <td class="py-2"><?php echo $rows['receiver']; ?></td>
                <td class="py-2"><?php echo $rows['balance']; ?> </td>    
                <?php
            }
        ?>
        </tbody>
        </table>
    </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
