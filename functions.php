<?php                
                
                function SeatName($seatType)
                {
                    if($seatType == "SA")
                        return "Standard Adult";
                    if($seatType == "SP")
                        return "Standard Concession";
                    if($seatType == "SC")
                        return "Standard Child";
                    if($seatType == "FA")
                        return "First Class Adult";
                    if($seatType == "FC")
                        return "First Class Child";
                    if($seatType == "B1")
                        return "Beanbag, One person";
                    if($seatType == "B2")
                        return "Beanbag, Upto 2 people";
                    if($seatType == "B3")
                        return "Beanbag, Upto 3 children";                                                                                            }

                function TicketCost($seatType, $i)
                {
                     if($seatType == "SA")
                    {
                        $x = 12;
                        $y = 18;
                    }
                    if($seatType == "SP")
                    {
                        $x = 10; $y = 15;
                    }
                    if($seatType == "SC")
                    {
                        $x = 8; $y = 12;
                    }
                    if($seatType == "FA")
                    {
                        $x = 25; $y = 30;
                    }
                    if($seatType == "FC")
                    {
                        $x = 20; $y = 25;
                    }
                    if($seatType == "B1")
                    {
                        $x = 20; $y = 30;
                    }
                    if($seatType == "B2")
                    {
                        $x = 20; $y = 30;
                    }
                    if($seatType == "B3")
                    {
                        $x = 20; $y = 30;
                    }
                    
                    if(($_SESSION['cart'][$i]['day'] == "M") ||  ($_SESSION['cart'][$i]['day'] == "T"))
                        return ($cost = $x);
                    
                    else if(($_SESSION['cart'][$i]['day'] == "W") ||     ($_SESSION['cart'][$i]['day'] == "Th") || ($_SESSION['cart'][$i]['day'] == "F"))
                        return ($cost = $x);

                    else
                        return ($cost = $y);
                
                }

                function MovieName($movieType)
                {
                    if($movieType == "AC")
                        return "\nMISSION IMPOSSIBLE: ROGUE NATION";
                    if($movieType == "RC")
                        return "\nTRAINWRECK";
                    if($movieType == "AF")
                        return "\nGIRLHOOD";
                    if($movieType == "CH")
                        return "\nINSIDE OUT";
                }

                function Day($day)
                {
                    if($day == "M")
                        return "Monday";
                    else if($day == "T")
                        return "Tuesday";
                    else if($day == "W")
                        return "Wednesday";
                    else if($day == "Th")
                        return "Thursday";
                    else if($day == "F")
                        return "Friday";
                    else if($day == "S")
                        return "Saturday";
                    else if($day == "Su")
                        return "Sunday";
                        
                }

                function Image($movie)
                {
                    if($movie == "AF")
                        return "https://jupiter.csit.rmit.edu.au/~e54061/wp/movie-service/AF.jpg";
                    if($movie == "CH")
                        return "https://jupiter.csit.rmit.edu.au/~e54061/wp/movie-service/CH.jpg";
                    if($movie == "AC")
                        return "https://jupiter.csit.rmit.edu.au/~e54061/wp/movie-service/AC.jpg";
                    if($movie == "RC")
                        return "https://jupiter.csit.rmit.edu.au/~e54061/wp/movie-service/AF.jpg";
                    
                    
                    
                }
?>                
