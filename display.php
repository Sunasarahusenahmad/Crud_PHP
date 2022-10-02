<?php include 'links.php' ?>
<?php include 'css/style.css' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Tutorial</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        .main-div {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .center-div {
            width: 90%;
            height: 80vh;
            background: -webkit-linear-gradient(left, #5DADE2, #00c6ff);
            padding: 20px 0 0 0;
            box-sizing: 0 10px 20px 0 rgba(0, 0, 0, .03);
            border-radius: 10px;
            margin: auto;
        }

        h1 {
            font-size: 30px;
            color: #000;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 10px 20px 0 rgba(0, 0, 0, .03);
            border-radius: 10px;
            margin: auto;
        }

        th,
        td {
            border: 1px solid #f2f2f2;
            padding: 8px 30px;
            text-align: center;
            color: gray;

        }

        th {
            text-transform: uppercase;
            font-weight: 500;
        }

        td {
            font-size: 13px;
        }

        .email-style {
            font-size: 14px;
            color: gray;
            display: inline-block;
            background: #f2f2f2;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            line-height: 30px;
            padding: 0 14px;
        }

        .post-class {
            text-transform: uppercase;
        }

        .fa {
            font-size: 18px;
        }

        .fa-edit {
            color: #63c76a;
        }

        .fa-trash {
            color: #ff0000;
        }

        a {
            text-decoration: none;
            display: flex;
            justify-content: center;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="main-div">
        <h1>List of candidates for web developer job</h1>

        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>degree</th>
                            <th>mobile</th>
                            <th>email</th>
                            <th>refer</th>
                            <th>post</th>
                            <th colspan="2">operation</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        include 'connection.php';

                        $selectquery = " select * from crud ";  //SELECT * FROM `crud`

                        $query = mysqli_query($con, $selectquery);

                        $nums = mysqli_num_rows($query);

                        while ($res = mysqli_fetch_array($query)) {   //fatch in all data

                        ?>

                            <tr>
                                <td><?php echo $res['id']; ?></td>
                                <td><?php echo $res['name']; ?></td>
                                <td><?php echo $res['degree']; ?></td>
                                <td><?php echo $res['mobile']; ?></td>
                                <td><span class="email-style"> <?php echo $res['email']; ?> </span></td>
                                <td><?php echo $res['refer']; ?></td>
                                <td><?php echo $res['jobpost']; ?></td>
                                <td><a href="update.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE"> <i class="fa fa-edit" aria-hidden="true"></i> </a></td>
                                <td><a href="delete.php?ids=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"> <i class="fa fa-trash" aria-hidden="true"></i> </a></td>
                            </tr>

                        <?php

                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

</body>

</html>