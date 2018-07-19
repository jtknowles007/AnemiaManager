<?php
/****************************************************************************************
*EPO Algorithm
*@category          EPO Titration Calculator
*@package           Irvington Clinic EPO Calculator
*@author             John T. Knowles, RN john.knowles@fmc-na.com
*@copyright         2014 John T. Knowles, RN
*@source             FMC Wabash Valley Home #4236 Anemia Algorithm
*@version           1.0
*****************************************************************************************/
?>
<html>
    <head>
        <title>EPO Titration Calculator</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
        <link rel="stylesheet" type="text/css" href="mystyle.css">  
    </head>
    <body>
    <div>
    <h2>Anemia Management Algorithm</h2>
    <h3>EPO Titration Calculator</h3>
    <hr>
        <form method="post" action="">
        <!--Gather requested data from user-->
            <table>
                <tr><td width="200"><label for="hgb_current">Hgb:</label></td><td width="200"><input type="number" step=0.1 name="hgb_current">&nbsp;g/dl</td></tr>
                <tr><td><label for="epo_current">Current&nbsp;EPO&nbsp;dose:</label></td><td><input type="number" step=0.1 name="epo_current">&nbsp;Units</td></tr>
                <tr><td></td><td><input type="submit" name="submit" id="submit" value="Calculate"></td></tr>
            </table>
        </form>
        <p class="right"><hr width = "100%"><p>
<?php

        //Get data from Form
        $hgb_current = ( $_POST['hgb_current']);
        $epo_current = ($_POST['epo_current']);
        
        
        //Is Hgb less than or equal to 9.5 AND not 0?
	    if ($hgb_current <= 9.5 && $hgb_current !=0)
	        {
	        $epo_new = ($epo_current*1.5);
	        $epo_round = ((int) ($epo_new/1000))*1000;
	            if ($epo_round ==$epo_current)
	                {
	                $epo_round=((int)(($epo_new+500)/1000))*1000;
	                }
	            else
	                {
	                $epo_round=$epo_round;
	                }
	    echo "Hgb: <b>$hgb_current</b>&nbsp;g/dl.<p>";
	    echo "Current EPO dose: <b>$epo_current</b>&nbsp;Units.<p>";
	    echo "New EPO dose: <b>$epo_round</b>&nbsp;Units.<p><p class='alert'><img src='alert.png' height='24px' width='24px'><br>Contact MD for further orders.<p>";
	    }
	    
	   //Is Hgb between 9.6 and 9.9? 
	    elseif ($hgb_current >9.5 && $hgb_current <10.0)
	    {
	    $epo_new = ($epo_current*1.25);
	    $epo_round = ((int) ($epo_new/1000))*1000;
	        if ($epo_round ==$epo_current)
	            {
	            $epo_round=((int)(($epo_new+1000)/1000))*1000;
	            }
	        else
	            {
	            $epo_round=$epo_round;
	            }
        echo "Hgb: <b>$hgb_current</b>&nbsp;g/dl.<p>";
	    echo "Current EPO dose: <b>$epo_current</b>&nbsp;Units.<p>";
	        if ($epo_round==0)
	            {
	            echo "New EPO dose: <b>DISCONTINUE EPO.</b><p><p class='alert'><img src='alert.png' height='24px' width='24px'><br>Recheck Hgb in 2 weeks.<p>";
	            }
	        else
	            {
	            echo "New EPO dose: <b>$epo_round</b>&nbsp;Units.<p>";
	            }

	    }
	    
	    //Is Hgb between 10.0 and 10.3?
	    elseif ($hgb_current >9.9 && $hgb_current <10.4)
	    {
	    $epo_new = ($epo_current*1.10);
	    $epo_round = ((int) ($epo_new/1000))*1000;
	        if ($epo_round ==$epo_current)
	            {
	            $epo_round=((int)(($epo_new+1000)/1000))*1000;
	            }
	        else
	            {
	            $epo_round=$epo_round;
	            }
	    echo "Hgb: <b>$hgb_current</b>&nbsp;g/dl.<p>";
	    echo "Current EPO dose: <b>$epo_current</b>&nbsp;Units.<p>";
	        if ($epo_round==0)
	            {
	            echo "New EPO dose: <b>DISCONTINUE EPO.</b><p><p class='alert'><img src='alert.png' height='24px' width='24px'><br>Recheck Hgb in 2 weeks.<p>";
	            }
	        else
	            {
	            echo "New EPO dose: <b>$epo_round</b>&nbsp;Units.<p>";
	            }
	    }
	 
	    //Is Hgb bewteen 10.4 and 10.7?
	    elseif ($hgb_current >10.3 && $hgb_current <10.8)
	    {
	    echo "Hgb: <b>$hgb_current</b>&nbsp;g/dl.<p>";
	    echo "Current EPO dose: <b>$epo_current</b>&nbsp;Units.<p>";	
	    echo "New EPO dose: <b>NO CHANGE<p>";
	    }
	    
	    //Is Hgb between 10.8 and 11.1?
	    elseif ($hgb_current >10.7 && $hgb_current <11.2)
	    {
	    $epo_new = ($epo_current*0.9);
	    $epo_round = ((int) ($epo_new/1000))*1000;
	        if ($epo_round ==$epo_current)
	            {
	            $epo_round=((int)(($epo_new+1000)/1000))*1000;
	            }
	        else
	            {
	            $epo_round=$epo_round;
	            }
        echo "Hgb: <b>$hgb_current</b>&nbsp;g/dl.<p>";
	    echo "Current EPO dose: <b>$epo_current</b>&nbsp;Units.<p>";
	        if ($epo_round==0)
	            {
	            echo "New EPO dose: <b>DISCONTINUE EPO.</b><p><p class='alert'><img src='alert.png' height='24px' width='24px'><br>Recheck Hgb in 2 weeks.<p>";
	            }
	        else
	            {
	            echo "New EPO dose: <b>$epo_round</b>&nbsp;Units.<p>";
	            }	
	    }
	    
	    //Is Hgb between 11.2 and 11.4?
	    elseif ($hgb_current >11.1 && $hgb_current <11.5)
	    {
	    $epo_new = ($epo_current*0.75);
	    $epo_round = ((int) ($epo_new/1000))*1000;
	        if ($epo_round ==$epo_current)
	            {
	            $epo_round=((int)(($epo_new+1000)/1000))*1000;
	            }
	        else
	            {
	            $epo_round=$epo_round;
	            }
	    echo "Hgb: <b>$hgb_current</b>&nbsp;g/dl.<p>";
	    echo "Current EPO dose: <b>$epo_current</b>&nbsp;Units.<p>";
	        if ($epo_round==0)
	            {
	            echo "New EPO dose: <b>DISCONTINUE EPO.</b><p><p class='alert'><img src='alert.png' height='24px' width='24px'><br>Recheck Hgb in 2 weeks.<p>";
	            }
	        else
	            {
	            echo "New EPO dose: <b>$epo_round</b>&nbsp;Units.<p>";
	            }
	    }
	    
	    //Is Hgb greater than or equal to 11.5 AND not 0?
	    elseif ($hgb_current>=11.5 && $hgb_current !=0)
	    {
	    echo "Hgb: <b>$hgb_current</b>&nbsp;g/dl.<p>";
	    echo "Current EPO dose: <b>$epo_current</b>&nbsp;Units.<p>";
	    echo "New EPO dose: <b>DISCONTINUE EPO.</b><p><p class='alert'><img src='alert.png' height='24px' width='24px'><br>Recheck Hgb in 2 weeks.<p>";
	    }
	    
	    //No data entered yet.  Display empty fields.
	    else 
	    {
	    echo "Hgb:<p>";
	    echo "Current EPO dose:<p>";
	    echo "New EPO dose:";
	    }
?>
<hr>
<p class="center"><input type="button" onClick="location.href='index.html'" value="Return" class="big_button">
</div>
    </body>
</html>

