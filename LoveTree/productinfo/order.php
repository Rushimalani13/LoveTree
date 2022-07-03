<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/slide.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">

    <style>
        .mySlides {
            display: none;
        }

        .slideshow {
            height: 500px;
        }

        .round {
            border-radius: 18px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">

    <title>LoveTree</title>
</head>

<body>
    <?php
    include '../component/nav.php';
    ?>

    <div class="container my-4">
        <button onclick="history.back()">Go Back</button>
    </div>
    <div class="container" style="margin-top:50px;">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>mobile</th>
                    <th>PlantName</th>
                    <th>Price</th>
                    <th>Zip(Pincode)</th>
                    <th>Address</th>
                    <th>Date</th>

                </tr>
            </thead>
            <tbody>
                <?php
                require '../database/dbconn.php';
                $user= $_SESSION['username'];
                $sql = "SELECT * FROM `orderdetails` WHERE `orderby` LIKE '$user'";
                $res = mysqli_query($conn, $sql);
                $i=1;
                while ($result = mysqli_fetch_array($res)) {
                ?>
                    <tr>
                        <td><?php echo $i; $i=$i+1;?></td>
                        <td><?php echo $result['name'];?></td>
                        <td><?php echo $result['mobile'];?></td>
                        <td><?php echo $result['plantname']; ?></td>
                        <td><?php echo $result['plantprice']; ?></td>
                        <td><?php echo $result['zip']; ?></td>
                        <td><?php echo $result['address']; ?></td>
                        <td><?php echo $result['time_dt']; ?></td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="my-4"></div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.table').DataTable();
        });
    </script>

    <?php include '../component/footer.php'; ?>
</body>

<script src="js/slideauto.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>

</html>