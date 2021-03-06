<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Database</title>

    <link href="../Public/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../Public/css/style.css" rel="stylesheet" />
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Database</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse"></div>
        </div>
    </nav>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">
                        Database <small>Connect Database</small>
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form id="login" action="landing.php" class="well">
                        <div class="form-group">
                            <label>Host Name</label>
                            <input type="text" class="form-control" placeholder="Enter Hostname" />
                        </div>
                        <div class="form-group">
                            <label>Database Userame</label>
                            <input type="text" class="form-control" placeholder="Enter Username" />
                        </div>
                        <div class="form-group">
                            <label>Database Name</label>
                            <input type="text" class="form-control" placeholder="Enter Database name" />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" />
                        </div>
                        <button type="submit" class="btn btn-default btn-success">
                            Install
                        </button>
                        <button type="submit" class="btn btn-default btn-default">
                            Reset
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <p>Copyright VVVSH, &copy; 2019</p>
    </footer>

    <script>
        CKEDITOR.replace("editor1");
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../Public/js/bootstrap.min.js"></script>
</body>

</html>


