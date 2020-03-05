<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .card {
            margin: 0;
        }
    </style>
    <title>formAss</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class = "col-md-3"></div>
            <div class = "col-md-6 ">
                <div class="card-header bg-primary text-center"><h1>Upload Your File Here</h1></div>
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                    Select Image:
                        <div class="text-center"><input type="file" name="files[]" multiple></div>
                        <div class="text-center"><button type="submit" name="submit">upload</button></div>
                        
                    </form>
            </div>
            <div class = "col-md-3"></div>
        </div>
    </div>
</body>
</html>