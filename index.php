<?php
include('Crud.php');
$obj = new Crud;
?>
<html>

<head>
    <title>OOPS Concept in PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
        }

        .box {
            width: 1270px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container box">
        <h3 align="center">OOPS IN PHP</h3><br />
        <button type="button" name="add" class="btn btn-success" data-toggle="collapse" data-target="#user_collapse">Add</button>
        <br /><br />
        <div id="user_collapse" class="collapse">
            <form method="post" id="user_form">
                <label>Enter First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" />
                <br />
                <label>Enter Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" />
                <br />
                <label>Select User Image</label>
                <input type="file" name="user_image" id="user_image" />
                <input type="hidden" name="hidden_user_image" id="hidden_user_image" />
                <span id="uploaded_image"></span>
                <br />
                <div align="center">
                    <input type="hidden" name="action" id="action" />
                    <input type="hidden" name="user_id" id="user_id" />
                    <input type="submit" name="button_action" id="button_action" class="btn btn-default" value="Insert" />
                </div>
                <br />
            </form>
        </div>
        <br />
        <div class="table-responsive" id="user_table">

        </div>
    </div>
</body>
<script src="index.js"></script>

</html>