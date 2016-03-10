<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>StockStalk</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/one-page-wonder.css">
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Stock Stalk</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#about">Search</a>
                    </li>
                    <li>
                        <a href="chart.php">Chart</a>
                    </li>
                    <li>
                        <a href="#contact">Portfolio</a>
                    </li>
                    <li class="dropdown right-login">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu pull-right">
                            <li>
                               <div class="row">
                                  <div class="col-md-12">
                                    Login via
                                    <div class="social-buttons">
                                      <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                      <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                        
                                    </div>
                                                    or
                                     <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group">
                                           <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                           <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                        </div>
                                        <div class="form-group">
                                           <label class="sr-only" for="exampleInputPassword2">Password</label>
                                           <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                                 <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                        </div>
                                        <div class="form-group">
                                           <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                        </div>
                                        <div class="checkbox">
                                           <label>
                                           <input type="checkbox"> keep me logged-in
                                           </label>
                                        </div>
                                    </form>
                                </div>
                            <div class="bottom text-center">
                            New here ? <a href="#"><b>Join Us</b></a>
                        </div>
                    </div>
                </li>
                </ul>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
     
    
    
    <div class="container">

        <!-- Heading Row -->
        <div class="row">
            <form action="#" id="search">
                 <!-- Search box -->
                <div id="custom-search-input">
                    <div class="input-group col-sm-5 col-sm-offset-3">
                        <input type="text" class="search-query form-control" name="searchbox" placeholder="Search"></input>
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>

                    </div>
                </div>
            </form>
            <br>
            <!-- dropdown -->
            <div class="input-group col-sm-5 col-sm-offset-3" form="search">
                <h4>Market Sector</h4>
                <select style="width:100%;height:25px; text-align: left;" name="sector" class="btn btn-default" type="button">
                    <option value="All">All</option>
                    <option value="Technology">Technology</option>
                    <option value="Finance">Finance</option>
                    <option value="Consumer">Consumer Goods</option>
                    <option value="Automotive">Automotive</option>
                    <option value="Conglomerates">Conglomerates</option>
                    <option value="Energy">Energy</option>
                    <option value="Utilities">Utilities</option>
                </select>
            </div>
            
        </div>
        <br><br><br>
        
        <div class="row">
            <!-- Search Table -->
<!--
            <div class="col-md-8 well">
                <h4 style="text-align:center;">Search Results</h4>
                <table class="table table-striped table-bordered">
                <thead class="thread-inverse">
                <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>
                </tbody>
                </table>
                
            </div>
-->
            <?php
            require 'yahoo-finance-api/lib/YahooFinance/YahooFinance.php';
            $yf = new YahooFinance;
            $quote = json_decode($yf->getQuotes(array('IDA', 'MCEP', 'UWTI')));
            ?>
            <table>
                <tr>
                    <td>Symbol</td>
                    <td>Price</td>
                    <td>Fifty Day</td>
                    <td>% Change</td>
                </tr>
            <?php
                foreach($quote->query->results->quote as $stock)
                {
                    if (substr($stock->PercentChange, 0, 1) === '+')
                    {
                        $color = "green";
                    }
                    else
                    {
                        $color = "red";
                    }
                    echo '<tr>';
                    echo '<td>' . $stock->symbol . '</td>';
                    echo '<td>' . number_format((float)$stock->LastTradePriceOnly, 2, '.', '') . '</td>';
                    echo '<td>' . number_format((float)$stock->FiftydayMovingAverage, 2, '.', '') . '</td>';
                    echo '<td style="color:'.$color.'">' . $stock->PercentChange . '</td>';
                    echo '</tr>';
                }
                ?>
            </table>
            <!-- Chart Table -->
            <div class="col-md-3 well" style="margin-left:20px;">
                <h4>Stock to Chart</h4>
                <table class="table table-striped table-bordered">
                <thead class="thread-inverse">
                <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>