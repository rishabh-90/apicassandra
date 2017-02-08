<?php
// Turn off all error reporting
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Assignment 2 Rishabh Vaishali </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
        <!-- (Optional) Latest compiled and minified JavaScript translation files -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/i18n/defaults-*.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#purpose').on('change', function () {
                    if (this.value == '0')
                    {
                        $("#business").show();
                    } else
                    {
                        $("#business").hide();
                    }
                    if (this.value == '2')
                    {
                        $("#particulartimecrime").show();
                    } else
                    {
                        $("#particulartimecrime").hide();
                    }
                    if (this.value == '1')
                    {
                        $("#timedateatdistrict").show();
                    } else
                    {
                        $("#timedateatdistrict").hide();
                    }
                    if (this.value == '3')
                    {
                        $("#countcrime").show();
                    } else
                    {
                        $("#countcrime").hide();
                    }
                });
            });
        </script>
        <style>
            body {
                padding: 20px; /* 60px to make the container go all the way to the bottom of the topbar */
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <h2 >Select Different Scenarios</h2>
                <div class ="col-md-12">

                    <select class="selectpicker" id="purpose" data-style="btn-success" style="display: none;">
                        <option>Please Select</option>
                        <option value="0">District and Crime</option>
                        <option value="1">Time Date at District</option>
                        <option value="2">Particular Time Crime</option>
                        <option value="3">Count Crime</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class ="row">
                <?php
                $district = $_GET['district'];
                $district1 = $_GET['district1'];
                $hour1 = $_GET['hour1'];
                $pas = $_GET['psa'];
                $category = $_GET['category'];
                $block = $_GET['block'];
                $block1 = $_GET['block1'];
                $date = $_GET['date'];
                $date1 = $_GET['date1'];
                $hour = $_GET['hour'];
                ?>
                <div class="col-md-12" style='display:none;margin-top: 20px' id="business">
                    <form class="form-inline" method="get" action="<?php $_SERVER['PHP_SELF']; ?>">
                        <div class="form-group">
                            <label for="district">District</label>
                            <input type="text" name="district" class="form-control" id="exampleInputName2" placeholder="15,20">
                        </div>
                        <div class="form-group">
                            <label for="hour">Hour</label>
                            <input type="text" name="hour" class="form-control" id="exampleInputEmail2" placeholder="1,2,4">
                        </div>
                        <button type="submit" class="btn btn-default">Query</button>
                    </form>
                </div>
                <!--This section is for timedateatdistrict-->
                <div class="col-md-12" style='display:none;margin-top: 20px' id="timedateatdistrict">
                    <form class="form-inline" method="get" action="<?php $_SERVER['PHP_SELF']; ?>">
                        <div class="form-group">
                            <label for="district1">District</label>
                            <input type="text" name="district1" class="form-control" id="exampleInputName2" placeholder="15,20">
                        </div>
                        <div class="form-group">
                            <label for="psa">PSA</label>
                            <input type="text" name="psa" class="form-control" id="exampleInputEmail2" placeholder="1,2,4">
                        </div>
                        <input type="submit" class="btn btn-default" value="Query" name="timedateatdristict"/>
                    </form>
                </div>
                <!--This section is for particulartimecrime-->
                <div class="col-md-12" style='display:none;margin-top: 20px' id="particulartimecrime">
                    <form class="form-inline" method="get" action="<?php $_SERVER['PHP_SELF']; ?>">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <input type="text" name="category" class="form-control" id="exampleInputName2" placeholder="Thefts">
                        </div>
                        <div class="form-group">
                            <label for="block">Block</label>
                            <input type="text" name="block" class="form-control" id="exampleInputEmail2" placeholder="200 Ave">
                        </div>
                        <button type="submit" class="btn btn-default">Query</button>
                    </form>
                </div>
                <!--This section is for Count Crime-->
                <div class="col-md-12" style='display:none;margin-top: 20px' id="countcrime">
                    <form class="form-inline" method="get" action="<?php $_SERVER['PHP_SELF']; ?>">
                        <div class="form-group">
                            <label for="hour1">Hour</label>
                            <input type="text" name="hour1" class="form-control" id="exampleInputName2" placeholder="15,20">
                        </div>
                        <div class="form-group">
                            <label for="date1">Date</label>
                            <input type="text" name="date1" class="form-control" id="exampleInputEmail2" placeholder="22/7/2017">
                        </div>
                        <div class="form-group">
                            <label for="block1">Block</label>
                            <input type="text" name="block1" class="form-control" id="exampleInputEmail2" placeholder="22/7/2017">
                        </div>
                        <input type="submit" class="btn btn-default" value="Query"/>
                    </form>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">

            </div>
        </div>
        <!-- Php with table for districtcriem-->
        <div class="container-fluid">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $service_url = "http://35.167.201.119/districtandcrime/?district=" . $district . "&hour=" . $hour . "";
                $curl = curl_init($service_url);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $curl_response = curl_exec($curl);
                $info = curl_getinfo($curl);
                $statuscode = str_replace('404', '400', $info['http_code']);
                $responsetime = $info['total_time'] * 1000;
                if ($curl_response === false) {
                    $info = curl_getinfo($curl);
                    curl_close($curl);
                    die('error occured during curl exec. Additioanl info: ' . var_export($info));
                }
                curl_close($curl);
                $decoded = json_decode($curl_response, true);
                if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
                    die('error occured: ' . $decoded->response->errormessage);
                }
                ?>
                <?php if (isset($district) or isset($hour)) { ?>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 style="margin-bottom:27px;">Query for District Crime  - Response time <span class="btn-info" style="padding:0 10px"><?php echo $responsetime; ?> ms</span> and Status Code <span class="btn-info" style="padding:0 10px"><?php echo $statuscode; ?></span></h2>
                            </div>
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table">

                                        <tr>
                                            <th>DC Number</th>
                                            <th>Dispatch Date</th>
                                            <th>District</th>
                                            <th>PSA</th>
                                            <th>Category</th>
                                            <th>Hour</th>
                                            <th>Block</th>
                                            <th>UCR Code</th>
                                        </tr>
                                    <?php } ?>
                                    <?php
                                    for ($x = 0; $x <= count($decoded['rows']); $x++) {
                                        ?>
                                        <tr>
                                            <td><?php echo $decoded['rows'][$x]['dc_number']; ?></td>
                                            <td><?php echo $decoded['rows'][$x]['dispatch_date']; ?></td>
                                            <td><?php echo $decoded['rows'][$x]['district']; ?></td>
                                            <td><?php echo $decoded['rows'][$x]['psa']; ?></td>
                                            <td><?php echo $decoded['rows'][$x]['general_crime_category']; ?></td>
                                            <td><?php echo $decoded['rows'][$x]['hour']; ?></td>
                                            <td><?php echo $decoded['rows'][$x]['location_block']; ?></td>
                                            <td><?php echo $decoded['rows'][$x]['ucr_code']; ?></td>
                                        </tr>
                                    <?php }
                                    ?>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>
        <!--End of first block-->
        <!--php and html for timedateatdistrict-->

        <div class="container-fluid">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'GET' and ! empty($_GET['timedateatdristict'])) {
                $service_url = "http://35.167.201.119/timedateatdistrict/?district=" . $district1 . "&psa=" . $pas . "";
                $curl = curl_init($service_url);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $curl_response = curl_exec($curl);
                $info = curl_getinfo($curl);
                $statuscode = str_replace('404', '400', $info['http_code']);
                $responsetime = $info['total_time'] * 1000;
                if ($curl_response === false) {
                    $info = curl_getinfo($curl);
                    curl_close($curl);
                    die('error occured during curl exec. Additioanl info: ' . var_export($info));
                }
                curl_close($curl);
                $decoded = json_decode($curl_response, true);
                if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
                    die('error occured: ' . $decoded->response->errormessage);
                }
                ?>

                <div class="container-fluid">
                    <div class="row">
                        <?php if (isset($district1) or isset($pas)) { ?>
                            <div class="col-md-12">
                                <h2 style="margin-bottom:27px;">Query for Time date at District - Response time <span class="btn-info" style="padding:0 10px"><?php echo $responsetime; ?> ms</span> and Status Code <span class="btn-info" style="padding:0 10px"><?php echo $statuscode; ?></span></h2>
                            </div>
                        <?php } ?>
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <?php if (isset($district1) or isset($pas)) { ?>
                                        <tr>
                                            <th>Hour</th>
                                            <th>Dispatch Date</th>
                                        </tr>
                                    <?php } ?>
                                    <?php
                                    for ($x = 0; $x <= count($decoded['rows']); $x++) {
                                        ?>
                                        <tr>
                                            <td><?php echo $decoded['rows'][$x]['hour']; ?></td>
                                            <td><?php echo $decoded['rows'][$x]['dispatch_date']; ?></td>
                                        </tr>
                                    <?php }
                                    ?>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>

        <!--end of that particular block-->
        <!-- Php and HTMl for particulartimecrime -->
        <div class="container-fluid">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                //$service_url = "http://35.167.201.119/particulartimecrime/?category=Thefts&block=2800 BLOCK W LEHIGH AVE";
                $service_url = str_replace(' ', '%20', "http://35.167.201.119/particulartimecrime/?category=" . $category . "&block=" . $block . "");

                $curl = curl_init($service_url);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $curl_response = curl_exec($curl);
                $info = curl_getinfo($curl);
                $statuscode = str_replace('404', '400', $info['http_code']);
                $responsetime = $info['total_time'] * 1000;
                if ($curl_response === false) {
                    $info = curl_getinfo($curl);
                    curl_close($curl);
                    die('error occured during curl exec. Additioanl info: ' . var_export($info));
                }
                curl_close($curl);
                $decoded = json_decode($curl_response, true);
                if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
                    die('error occured: ' . $decoded->response->errormessage);
                }
                ?>

                <div class="container-fluid">
                    <div class="row">
                        <?php if (isset($category) or isset($block)) { ?>
                            <div class="col-md-12">
                                <h2 style="margin-bottom:27px;">Query for Particular Time Crime - Response time <span class="btn-info" style="padding:0 10px"><?php echo $responsetime; ?> ms</span> and Status Code <span class="btn-info" style="padding:0 10px"><?php echo $statuscode; ?></span></h2>
                            </div>
                        <?php } ?>
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <?php if (isset($block) or isset($category)) { ?>
                                        <tr>
                                            <th>Hour</th>
                                            <th>Dispatch Date</th>
                                        </tr>
                                    <?php } ?>
                                    <?php
                                    for ($x = 0; $x <= count($decoded['rows']); $x++) {
                                        ?>
                                        <tr>
                                            <td><?php echo $decoded['rows'][$x]['hour']; ?></td>
                                            <td><?php echo $decoded['rows'][$x]['dispatch_date']; ?></td>
                                        </tr>
                                    <?php }
                                    ?>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>

        <!--end of the block-->
        <!-- PHP and HTML for countcrime-->
        <div class="container-fluid">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                //$service_url = "http://35.167.201.119/particulartimecrime/?category=Thefts&block=2800 BLOCK W LEHIGH AVE";
                $service_url = str_replace(' ', '%20', "http://35.167.201.119/countcrime/?hour=" . $hour1 . "&block=" . $block1 . "&date=" . $date1 . "");

                $curl = curl_init($service_url);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $curl_response = curl_exec($curl);
                $info = curl_getinfo($curl);
                $statuscode = str_replace('404', '400', $info['http_code']);
                $responsetime = $info['total_time'] * 1000;
                if ($curl_response === false) {
                    $info = curl_getinfo($curl);
                    curl_close($curl);
                    die('error occured during curl exec. Additioanl info: ' . var_export($info));
                }
                curl_close($curl);
                $decoded = json_decode($curl_response, true);
                if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
                    die('error occured: ' . $decoded->response->errormessage);
                }
                ?>

                <div class="container-fluid">
                    <div class="row">
                        <?php if (isset($hour1) or isset($block1)) { ?>
                            <div class="col-md-12">
                                <h2 style="margin-bottom:27px;">Query for Count Crime - Response time <span class="btn-info" style="padding:0 10px"><?php echo $responsetime; ?> ms</span> and Status Code <span class="btn-info" style="padding:0 10px"><?php echo $statuscode; ?></span></h2>
                            </div>
                        <?php } ?>
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <?php if (isset($hour1) or isset($block1)) { ?>
                                        <tr>
                                            <th>Count</th>

                                        </tr>
                                    <?php } ?>
                                    <?php
                                    for ($x = 0; $x <= count($decoded['rows']); $x++) {
                                        ?>
                                        <tr>
                                            <td><?php echo $decoded['rows'][$x]['count']; ?></td>

                                        </tr>
                                    <?php }
                                    ?>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>

        <!--End of block-->


    </body>
</html>
