<script>
            var sum = 0;
            var price;
            var prices = []; 
            
            for(var j = 1; j < 9; j++)
                prices[j] = 0;
            
            function clearfunc()
            {                                
                document.getElementById("inner1").innerHTML = " ";
                document.getElementById("inner2").innerHTML = " ";
                document.getElementById("inner3").innerHTML = " ";
                document.getElementById("inner4").innerHTML = " ";
                document.getElementById("inner5").innerHTML = " ";
                document.getElementById("inner6").innerHTML = " ";
                document.getElementById("inner7").innerHTML = " ";
                document.getElementById("inner8").innerHTML = " "; 
                
                document.forms[0].SA.selectedIndex = 0;
                document.forms[0].SP.selectedIndex = 0;
                document.forms[0].SC.selectedIndex = 0;
                document.forms[0].FA.selectedIndex = 0;
                document.forms[0].FC.selectedIndex = 0;
                document.forms[0].B1.selectedIndex = 0;
                document.forms[0].B2.selectedIndex = 0;
                document.forms[0].B3.selectedIndex = 0;
                
                document.getElementById("total").innerHTML = " "; 
                
            }
            
            function daychange()
            {           
                clearfunc();
                
                document.forms[0].time.selectedIndex = 0;
                document.forms[0].time.options.length = 0;
            
                                                
                var mid = document.getElementById("movie");
                var mval = mid.options[mid.selectedIndex].value;
                
                var did = document.getElementById("day");
                var dval = did.options[did.selectedIndex].value;
                
                if(mval == "AC" && ((dval == "W") || (dval == "Th") || (dval == "F") || (dval == "S") || (dval == "Su")))
                {                    
                    document.forms[0].time.options[0] = new Option("9 PM", "9", false, false);                   }
                
                if(mval == "CH" && ((dval == "M") || (dval == "T")))
                {
                    document.forms[0].time.options[0] = new Option("1 PM", "1", false, false);
                }
                
                if(mval == "CH" && ((dval == "W") || (dval == "Th") || (dval == "F")))
                {
                    document.forms[0].time.options[0] = new Option("6 PM", "6", false, false);                   
                }
                
                if(mval == "CH" && ((dval == "S") || (dval == "Su")))
                {
                    document.forms[0].time.options[0] = new Option("12 PM", "12", false, false);
                }
                   
                if(mval == "AF" && ((dval == "M") || (dval == "T")))
                    document.forms[0].time.options[0] = new Option("6 PM", "6", false, false);
                
                if(mval == "AF" && ((dval == "S") || (dval == "Su")))
                    document.forms[0].time.options[0] = new Option("3 PM", "3", false, false);
                
                if(mval == "RC" && ((dval == "M") || (dval == "T")))
                    document.forms[0].time.options[0] = new Option("9 PM", "9", false, false);

                if(mval == "RC" && ((dval == "W") || (dval == "Th") || (dval == "F")))
                    document.forms[0].time.options[0] = new Option("1 PM", "1", false, false);
                                    
                if(mval == "RC" && ((dval == "S") || (dval == "Su")))
                    document.forms[0].time.options[0] = new Option("6 PM", "6", false, false);
                    
                
                
                
                
            }
            
            function moviechange(form)
            {               
                clearfunc();
                
                document.forms[0].day.selectedIndex = 0;
                document.forms[0].time.selectedIndex = 0;
                document.forms[0].time.options.length = 0;
                document.forms[0].day.options.length = 0;                                
                
                var sid = document.getElementById("movie");
                var mtext = sid.options[sid.selectedIndex].text;
                                
                
                if(mtext == "MISSION IMPOSSIBLE: ROGUE NATION")
                {                    
                    document.forms[0].day.options[1] = new Option("WEDNESDAY", "W", false, false);
                    document.forms[0].day.options[2] = new Option("THURSDAY", "Th", false, false);
                    document.forms[0].day.options[3] = new Option("FRIDAY", "F", false, false);
                    document.forms[0].day.options[4] = new Option("SATURDAY", "S", false, false);
                    document.forms[0].day.options[5] = new Option("SUNDAY", "Su", false, false);                  }
                
                if(mtext == "ANT-MAN")
                {                    
                    document.forms[0].day.options[1] = new Option("MONDAY", "M", false, false);
                    document.forms[0].day.options[2] = new Option("TUESDAY", "T", false, false);
                    document.forms[0].day.options[3] = new Option("WEDNESDAY", "W", false, false);
                    
                    document.forms[0].day.options[4] = new Option("THURSDAY", "Th", false, false);
                    document.forms[0].day.options[5] = new Option("FRIDAY", "F", false, false);
                    document.forms[0].day.options[6] = new Option("SATURDAY", "S", false, false);
                    document.forms[0].day.options[7] = new Option("SUNDAY", "Su", false, false);                  }
                
                if(mtext == "WILD-TALES")
                {
                                     
                    document.forms[0].day.options[1] = new Option("MONDAY", "M", false, false);
                    document.forms[0].day.options[2] = new Option("TUESDAY", "T", false, false);
                    document.forms[0].day.options[3] = new Option("SATURDAY", "S", false, false);
                    document.forms[0].day.options[4] = new Option("SUNDAY", "Su", false, false);
                }
                
                if(mtext == "TRAINWRECK")
                {                    
                    document.forms[0].day.options[1] = new Option("MONDAY", "M", false, false);
                    document.forms[0].day.options[2] = new Option("TUESDAY", "T", false, false);
                    document.forms[0].day.options[3] = new Option("WEDNESDAY", "W", false, false);
                    
                    document.forms[0].day.options[4] = new Option("THURSDAY", "Th", false, false);
                    document.forms[0].day.options[5] = new Option("FRIDAY", "F", false, false);
                    document.forms[0].day.options[6] = new Option("SATURDAY", "S", false, false);
                    document.forms[0].day.options[7] = new Option("SUNDAY", "Su", false, false);                  }
              
                
            }
            
            
            function subtotal(s)
            {                                   
                var e = document.getElementById(s.id);
                var val = e[e.selectedIndex].value;
                var x, y, z;
                var i;
                var sum = 0;                
            
                if(s.id == "SA")
                {        
                    x = 12;
                    y = 18;
                    z = "inner1"; i = 1;
                }
                
                if(s.id == "SP")
                {
                    x = 10;
                    y = 15;
                    z = "inner2"; i = 2;
                }
                
                if(s.id == "SC")
                {
                    x = 8; y = 12;
                    z = "inner3"; i = 3;                
                }
                
                if(s.id == "FA")
                {
                    x = 25; y = 30;
                    z = "inner4"; i = 4;
                }
                
                if(s.id == "FC")
                {
                    x = 20; y = 25;
                    z = "inner5"; i = 5;
                }
                
                if(s.id == "B1")
                {
                    x = 20; y = 30;
                    z = "inner6"; i = 6;
                }
                
                if(s.id == "B2") 
                {
                    x = 20; y = 30;
                    z = "inner7"; i = 7;
                }
                
                if(s.id == "B3")
                {
                    x = 20; y = 30;
                    z = "inner8"; i = 8;
                }
                
                    if((document.forms[0].day.value == "Monday") ||( document.forms[0].day.value == "Tuesday")) 
                        price = x * e[e.selectedIndex].value;
                    
                    else if(((document.forms[0].day.value == "Wednesday")||(document.forms[0].day.value == "Thursday")||(document.forms[0].day.value == "Friday")) && (document.forms[0].time.value == "1"))
                        price = x * e[e.selectedIndex].value;
                    
                    else
                        price = y * e[e.selectedIndex].value;
                                                                        

                document.getElementById(z).innerHTML = "$ " + price.toFixed(2);                  
                prices[i] = price;
                
                
                for(var c=1; c<9; c++)
                {
                    sum = sum + prices[c];
                }
                                           
                document.getElementById("total").innerHTML = "$ " + sum.toFixed(2);
                document.getElementById("price").value = sum.toFixed(2);

                
            }
            
            
        </script>