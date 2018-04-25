@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gallery Thumbnail</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="css/thumbnail.css">

</head>
<body>

<div class="container gallery-container">

    <h1>Hour of Code</h1>

    <p class="page-description text-center">Thumbnails With Title And Description</p>
    
    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="images/1.jpg">
                        <img src="images/1.jpg" alt="Park">
                    </a>
                    <div class="caption">
                        <h3>Sample</h3>
                        <p>...</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="images/2.jpg">
                        <img src="images/2.jpg" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Sample</h3>
                        <p>...</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="images/3.jpg">
                        <img src="images/3.jpg" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Sample</h3>
                        <p>...</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="images/4.jpg">
                        <img src="images/4.jpg" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Sample</h3>
                        <p>...</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="images/5.jpg">
                        <img src="images/5.jpg" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Sample</h3>
                        <p>...</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="images/6.jpg">
                        <img src="images/6.jpg" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Sample</h3>
                        <p>...</p>
                    </div>
                </div>
            </div>
                        <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="images/7.jpg">
                        <img src="images/7.jpg" alt="Sample">
                    </a>
                    <div class="caption">
                        <h3>Sample</h3>
                        <p>...</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>
@endsection