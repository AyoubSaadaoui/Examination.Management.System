<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/all.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script >
        $(function(){
        var str = '#len'; //increment by 1 up to 1-nelemnts
        $(document).ready(function(){
        var i, stop;
        i = 1;
        stop = 9; //num elements
        setInterval(function(){
                if (i > stop){
                return;
                }
                $('#len'+(i++)).toggleClass('bounce');
        }, 500)
        });
        });
    </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik">
</head>
<body>
    <style>
        .fa{
            margin-right: 4px;
        }
        a{
            text-decoration: none !important;
        }
        .addquestion {
            color: black;
            text-decoration: none !important;
        }
        .addquestion:hover {
            color: whith;
            background-color: FireBrick;

        }

        /*  */
        .pdf {
            background: #1E90FF !important;
            position: absolute;
            right: -850px;
            background: #ffffff;
            border: solid 1px #e6e6e6;
            border-radius: 20px !important;
            display: inline-block;
            height: 100px;
            line-height: 100px;
            margin: 5px;
            position: relative;
            text-align: center;
            vertical-align: middle;
            width: 100px;
        }

        .pdf span {
                background: #f2594b;
                border-radius: 4px;
                color: #ffffff;
                display: inline-block;
                font-size: 12px;
                font-weight: 700;
                line-height: normal;
                padding: 5px 10px;
                position: relative;
                text-transform: uppercase;
                z-index: 1;
        }

        .pdf span:last-child {
                margin-left: -20px;
        }

        .pdf:before,
        .pdf:after {
                background: #ffffff;
                border: solid 3px #9fb4cc;
                border-radius: 4px;
                content: '';
                display: block;
                height: 55px;
                left: 40%;
                margin: -17px 0 0 -12px;
                position: absolute;
                top: 40%;
                /*transform:translate(-50%,-50%);*/

                width: 40px;
        }

        .pdf:hover:before,
        .pdf:hover:after {
                background: #e2e8f0;
        }
        /*a:before{transform:translate(-30%,-60%);}*/

        .pdf:before {
                margin: -23px 0 0 -5px;
        }

        .pdf:hover {
                background: #e2e8f0;
                border-color: #9fb4cc;
        }

        .pdf:active {
                background: #dae0e8;
                box-shadow: inset 0 2px 2px rgba(0, 0, 0, .25);
        }

        .pdf span:first-child {
                display: none;
        }

        .pdf:hover span:first-child {
                display: inline-block;
        }

        .pdf:hover span:last-child {
                display: none;
}
    </style>
    <div style="min-whidth:350 px;">