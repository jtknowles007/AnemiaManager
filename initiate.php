<html>
    <head>
        <title>EPO Initiation Calculator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        <script language="JavaScript">
        <!--
        function enable_text(status)
            {
            var row=document.getElementById("epo_row");
            if (row.style.display=='') row.style.display='none';
            else row.style.display='';
            }
        //->
        </script>
    </head>
    <body onload="enable_text(false);">
        <div>
            <h2>Anemia Management Algorithm</h2>
            <h3>EPO Initiation Calculator</h3>
            <hr>
            <form method="post" action="" name="f1">
            <!--Gather data from user-->
            <table>
                <tr>
                    <td width="200">
                        <label for ="hgb_current">Hgb:</label>
                    </td>
                    <td width="200">
                        <input type="number" step=0.1 name="hgb_current">&nbsp;g/dl
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="wt_kg">Weight:</label>
                    </td>
                    <td>
                        <input type="number" name="wt_kg" step=0.1>&nbsp;kg
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="hemoxfer">Hemo Transfer:</label>
                    </td>
                    <td><input type="checkbox" name="hemoxfer" value="1" onclick="enable_text(this.checked)">
                    </td>
                </tr>
                <tr id="epo_row">
                    <td>
                        <label for="epo_hemo">Weekly Hemo EPO Dose:</label>
                    </td>
                    <td>
                        <input type="number" name="epo_hemo">&nbsp;Units
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" name="submit" id="submit" value="Calculate">
                    </td>
                </tr>
            </table>
            <p>
            <hr width="100%">
            <p>
    <?php
            //Get data from form
            $hgb_current=($_POST['hgb_current']);
            $wt_kg=($POST['wt_kg']);
            $hemoxfer=($_POST['hemoxfer']);
            $epo_hemo=($_POST['epo_hemo']);

            //Is Hgb less than or equal to 8.0 and not 0?
            if ($hgb_current < 8.0 && $hgb_current !=0)
            {
            $epo_new=$wt_kg*300;
            $epo_new=((int)($epo_new/1000))*1000;
            echo "Hgb:<b>$hgb_current</b>&nbsp;g/dl.<p>";
            echo "Wt:<b>$wt_kg</b>&nbsp;kg.<p>";
            echo "Initial weekly EPO dose:<b>$epo_new</b>&nbsp;Units.";
            }

            //Is Hgb between 8.0 and 8.9?
            elseif ($hgb_current >= 8.0 && $hgb_current <=8.9)
            {
            $epo_new=$wt_kg*200;
            $epo_new=((int)($epo_new/1000))*1000;
            echo "Hgb:<b>$hgb_current</b>&nbsp;g/dl.<p>";
            echo "Wt:<b>$wt_kg</b>&nbsp;kg.<p>";
            echo "Initial weekly EPO dose:<b>$epo_new</b>&nbsp;Units.";
            }

            //Is Hgb between 9.0 and 9.7?
            elseif ($hgb_current >=9.00 && $hgb_current <=9.7)
            {
            $epo_new=$wt_kg*100;
            $epo_new=((int)($epo_new/1000))*1000;
            echo "Hgb:<b>$hgb_current</b>&nbsp;g/dl.<p>";
            echo "Wt:<b>$wt_kg</b>&nbsp;kg.<p>";
            echo "Initial weekly EPO dose:<b>$epo_new</b>&nbsp;Units.";
            }

            //Is Hgb between 9.8 and 9.9?
            elseif ($hgb_current >= 9.8 && $hgb_current <10.0)
            {
            $epo_new=$wt_kg*50;
            $epo_new=((int)($epo_new/1000))*1000;
            echo "Hgb:<b>$hgb_current</b>&nbsp;g/dl.<p>";
            echo "Wt:<b>$wt_kg</b>&nbsp;kg.<p>";
            echo "Initial weekly EPO dose:<b>$epo_new</b>&nbsp;Units.";
            }

            //Is Hgb between 10.0 and 11.0? Is Pt a hemo transfer?
            elseif ($hgb_current >=10.0 && $hgb_current <=11.0)
            {
                if ($hemoxfer==1)
                {
                $epo_new=$epo_hemo*0.70;
                $epo_new=((int)($epo_new/1000))*1000;
                echo "Hgb:<b>$hgb_current</b>&nbsp;g/dl.<p>";
                echo "Wt:<b>$wt_kg</b>&nbsp;kg.<p>";
                echo "Initial weekly EPO dose:<b>$epo_new</b>&nbsp;Units.";
                }
                else
                {
                echo "Hgb:<b>$hgb_current</b>&nbsp;g/dl.<p>";
                echo "Wt:<b>$wt_kg</b>&nbsp;kg.<p>";
                echo "Initial weekly EPO dose:<b>EPO NOT INDICATED</b>";
                }
            }

            //Is Hgb greater than 11?
            elseif ($hgb_current >=11.1)
            {
                echo "Hgb:<b>$hgb_current</b>&nbsp;g/dl.<p>";
                echo "Wt:<b>$wt_kg</b>&nbsp;kg.<p>";
                echo "Initial weekly EPO dose:<b>EPO NOT INDICATED</b>";
            }           
 
            //No data entered yet.
            else
            {
                echo "Hgb:<p>";
                echo "Wt:<p>";
                echo "Initial weekly EPO dose:";
            }
    ?>
        <hr>
        <p class="center"><input type="button" onClick="location.href='index.html'" value="Return" class="big_button">
        </div>
    </body>
</html>

