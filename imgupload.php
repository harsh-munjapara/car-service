<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-light bg-dark mt-4">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1 text-white"> Upload Image </span>
            </div>
        </nav>
    </div>
    <div class="container mt-5" style="width: 40%;">
        <form action="" method="POST">
            <div class="form-group mt-4">
                <label for="up_img">Uplaode Image Here </label>
                <div class="form-control mt-2 border-dark">
                    <input type="file" class="form-control-file p-1" name="img" id="up_img">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
            <button type="reset" class="btn btn-danger mt-4">Reset</button>
        </form>
    </div>
</body>

</html>