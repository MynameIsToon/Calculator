<?php  

// initialize or define some variables
$number1    = 0;// integer
$number2    = 0;// integer
$operator   ="";// integer
$result     = 0; //integer



function optellen ($a, $b)
{
    return $a + $b;
}

function checkInput ()
{
    
}



if(isset($_POST['mySubmit']))
{
    // is form sent?
    // then get posted values
    // values are stored in $_POST array!!!!
  
    $number1    = $_POST['number1'];
    $number2    = $_POST['number2'];
    $operator   = $_POST['operator']; // selected option

    if($operator == "add")
    {
        $result = $number1 + $number2;                              
    }
    if($operator == "subtract")
    {
        $result = $number1 - $number2;
    }
    if($operator == "multiply")
    {
        $result = $number1 * $number2;
    }
    if($operator == "divide")
    {
        if($number2 == "0")
        {
            $result = "Kan niet delen door NUL";
        }
        else
        {               
            $result = $number1 / $number2;
        }
    }   
    if($operator == "sqroot")
    {
        if($number1 < 0)
        {
            $result = "Kan niet wortel aftrekken van negatieve getallen";
        }
        else
        {
            $result = sqrt ($number1);    
        }       
    }
    if($operator == "power")
    {
        $result = sqrt ($number1); 
    }
    if($operator == "km2miles")
    {
    //km naar miles omrekenen
    $mile = 1.609344;
    
    $result = $number1 / $mile;
    }

    $result = round($result, 4);
}
?>

<html>
    <head>
        <meta charset="UTF-8"/>
       
        <meta name="description" content="My Calculator"/>

        <link rel="stylesheet" type="text/css" href="css/Rekenmachine.css">
                     
        <title> Rekenmachine </title>

    </head>
    <body>
        
        <div class="container">
            <div class="top-part">
                <?php
                    echo $result
            
                ?>            
            </div>
            
            <div class="bottom-part">
                <form action="index.php" method= "POST">            
                    <ul>
                        <li>
                        Number 1 : <input type="text" name="number1"/>
                           
                            
                        </li>    
                        <li>    
                            <label>Operator</label>
                            <select name="operator">
                            
                   
                                <option Value="add">+</option>
                                <option Value="subtract">-</option>
                                <option Value="multiply">*</option>
                                <option Value="divide">/</option>
                                <option Value="sqroot">wortel</option>
                                <option Value="power">power</option>
                                <option Value="km2miles">km2miles</option>
                            </select>
                        </li>
                        <li>
                           Number 2 : <input type="text" name="number2"/>
                        </li> 
                        <li>
                           
                            

                            <input type="submit" name="mySubmit" value="Calculate"/>
       
                            <input type="submit"  name="Clearall" value="Clear"/>
                        </li>           
                    </ul>
                    
                </form>
            </div>
        
        </div>
                   
    </body>

</html> 



