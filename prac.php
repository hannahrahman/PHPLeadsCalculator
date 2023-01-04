<!DOCTYPE html>
<html>
	<head>
		<title>PHP Calculations</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>
		<div class="container" style="margin-top: 50px">
		
			<?php
				// If the submit button has been pressed
				if(isset($_POST['submit']))
				{

				// Check  values
                if($_POST['monthSearchVolume'] && $_POST['averageCTR'] && $_POST['conversionRate'] && $_POST['leadstoSaleRate'])    
                
                {
                    $organicVisits = $_POST['monthSearchVolume'] * ($_POST['averageCTR']/100);
					
                    $conversions = $organicVisits * ($_POST['conversionRate']/100);

                    $leadsconverttoSales = $conversions * ($_POST['leadstoSaleRate']/100);

                    echo 
                        "<h4>
                          Estimated Organic Visits per month: {$organicVisits} <br>
                          Estimated Conversions per month:    {$conversions} <br>
                          Estimated Leads convert to Sales per month: {$leadsconverttoSales}% <br>
                        </h4>";
                }
				 else if ($_POST['monthSearchVolume'] && $_POST['averageCTR'] && $_POST['leadstoSaleRate']) {
						
					$organicVisits = $_POST['monthSearchVolume'] * ($_POST['averageCTR']/100);
					
                    $conversions = $organicVisits;

                    $leadsconverttoSales = $conversions * ($_POST['leadstoSaleRate']/100);

                    echo 
                        "<h4>
                          Estimated Organic Visits per month: {$organicVisits} <br>
                          Estimated Conversions per month:    {$conversions} <br>
                          Estimated Leads convert to Sales per month: {$leadsconverttoSales}% <br>
                        </h4>";
					
				}

                else if  ($_POST['monthSearchVolume'] && $_POST['conversionRate'] && $_POST['leadstoSaleRate']) {

                    $organicVisits = $_POST['monthSearchVolume'];
					
                    $conversions = $organicVisits * ($_POST['conversionRate']/100);

                    $leadsconverttoSales = $conversions * ($_POST['leadstoSaleRate']/100);

                    echo 
                        "<h4>
                          Estimated Organic Visits per month: {$organicVisits} <br>
                          Estimated Conversions per month:    {$conversions} <br>
                          Estimated Leads convert to Sales per month: {$leadsconverttoSales}% <br>
                        </h4>";
                }

                else if ($_POST['monthSearchVolume'] && $_POST['averageCTR'] && $_POST['conversionRate']){

                    $organicVisits = $_POST['monthSearchVolume'] * ($_POST['averageCTR']/100);
					
                    $conversions = $organicVisits * ($_POST['conversionRate']/100);

                    $leadsconverttoSales = $conversions;

                    echo 
                        "<h4>
                          Estimated Organic Visits per month: {$organicVisits} <br>
                          Estimated Conversions per month:    {$conversions} <br>
                          Estimated Leads convert to Sales per month: {$leadsconverttoSales}% <br>
                        </h4>";
                }

                else if($_POST['monthSearchVolume'] && $_POST['averageCTR']){

                    $organicVisits = $_POST['monthSearchVolume'] * ($_POST['averageCTR']/100);

                    echo 
                        "<h4>
                          Estimated Organic Visits per month: {$organicVisits} <br>
                          Estimated Conversions per month: - <br>
                          Estimated Leads convert to Sales per month: - <br>
                        </h4>";
                }

                else {
                    echo '<p style="color:white; border:1px solid #000;  background: #EC7063 ; padding: 10px;">Error: Try Again</p>';
                }
            }
				
			// end PHP. 
			?>
		    
		    <form method="post" action="prac.php">
                Total monthly search volume per month:*
                    <input name="monthSearchVolume" type="text" class="form-control" style="width: 100%; dpadding: 12px 20px;  margin: 8px 0; box-sizing: border-box" placeholder="Value"/>
                    <br><br>
                Estimated Average CTR per month:
                    <input name="averageCTR" type="text" class="form-control" style="width: 100%; dpadding: 12px 20px;  margin: 8px 0; box-sizing: border-box" placeholder="Value in %"/>
                    <br><br>
                Estimated Conversion Rate (leads) per month:
                    <input name="conversionRate" type="text" class="form-control" style="width: 100%; dpadding: 12px 20px;  margin: 8px 0; box-sizing: border-box" placeholder="Value in %" />
                    <br><br>
                Estimated Leads To Sale Rate per month:
                    <input name="leadstoSaleRate" type="text" class="form-control" style="width: 100%; dpadding: 12px 20px;  margin: 8px 0; box-sizing: border-box" placeholder="Value in %" />
                    <br><br>
            
		        <input name="submit" type="submit" value="Calculate" class="btn btn-success" />
		    </form>
	    
		</div>
	
	</body>
</html>