<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>E-Comm Project</title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make("header")}}
    @yield("content")
    {{View::make("footer")}}
</body>
<!--
<script>
        $(document).ready(function(){
            $("button").click(function(){
                alert("all set");
            })
        })
    </script>
    -->
    <style>
        .custom-login{
            height: 580px;
            padding-top: 100px;
        }
        img.slider_img{
            height: 650px !important;
        }
        .custom-product{
            padding-bottom: 90px;
        }
        .carousel-caption{
            background-color: #515558c4;
        }
        .trending-wrapper{
            margin-top:50px;
        }
        
        .trend-link{
            transition-duration: 1s;
        }
        .trend-link:hover{
            
            background-color: #007bff;
        }
        .product-img{
            margin-top: 20px;
            padding-bottom: 90px;
        }
        /*.search-img{
            width:500px !important
        }*/
        .footer{
            position:relative;
            bottom:0px;
        }
    </style>
</html>