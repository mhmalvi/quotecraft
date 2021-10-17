<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap');
        body{
            margin: 0px !important;
            padding: 0px !important;
            font-size: 1rem !important;
            font-family: 'Open Sans', sans-serif;
        }
        .wrapper{
            width: 100% !important;
            background: #F2F3F5 !important;
        }
        .container{
            width: 776px !important;
            margin: 0px auto;
        }
        table{
            width: 100%;
            padding-bottom: 25px !important;
            border: none;
            border-spacing: 0; 
        }
        thead tr th{
            text-align: center;
        }
        tbody{
            background: #fff;
            border-radius: 10px !important;
        }
        tbody tr td{
            color: #1B1D21;
            padding: 25px;
        }
        tbody tr td:first-child{
            width: 35% !important;
        }
        tfoot tr td:first-child{
            width: 100% !important;
        }
        tfoot tr td{
            padding: 15px 5px;
        }
        tfoot tr td small{
            color: #6d6d6d;
        }
        .logo a img{
            display:block;
            width: 250px !important;
            padding: 35px 15px !important;
            margin: auto !important;
            vertical-align: middle !important;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <p style="display:none;">Hi there! There is a new request from you website. Your client is waiting for you response!</p>
            <table>
                <thead>
                    <tr>
                        <th align="center" colspan="2">
                            <div class="logo">
                                <a href="https://quadque.tech" target="_blank">
                                    <img src="https://quadque.tech/wp-content/uploads/2021/08/qq.png" alt="logo">
                                </a>
                            </div>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td colspan="2" align="center">
                            <h2 style="color: #895BFD;">Request to Get Price Quatation</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>Client Name</td>
                        <td>{{$data['first_name']}} {{$data['last_name']}}</td>
                    </tr>
                    <tr>
                        <td>Company Name</td>
                        <td>{{$data['business_name']}}</td>
                    </tr>
                    <tr>
                        <td>Email Address</td>
                        <td>{{$data['email']}}</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>{{$data['phone']}}</td>
                    </tr>
                    <tr>
                        <td>Country</td>
                        <td>{{$data['country']}}</td>
                    </tr>
                    <tr>
                        <td>Services Required</td>
                        <td>{{$data['services']}}</td>
                    </tr>
                    <tr>
                        <td>Currently Outsourcing</td>
                        <td>{{$data['outsourcing']}}</td>
                    </tr>
                    <tr>
                        <td>Contact Via</td>
                        <td>{{$data['contact']}}</td>
                    </tr>
                    <tr>
                        <td>Additional Informations</td>
                        <td>{{$data['info']}}</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr style="text-align: center">
                        <td colspan="2">
                            <small>
                                Quadque Technologies ltd.
                                Level 1, 7 Greenfield Pde Bankstown, NSW 2200, Sydney, Australia. 1300 535 922. info@quadque.tech
                            </small>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</body>
</html>