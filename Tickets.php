<table id="calc">
                <tr>
                    <th> Ticket Type</th>
                    <th> Quantity</th>
                    <th>Subtotal Price</th>                    
                </tr>
                
                <tr>
                    <td>Adult</td>
                    <td><select id="SA" name="SA" onchange="subtotal(this)">
                        <?php include 'Options.php' ?>
                        </select>
                    </td>
                    <td id="inner1">  </td>
                </tr>
                
                <tr>
                    <td>Concession</td>
                    <td>
                        <select id="SP" name="SP" onchange="subtotal(this)">
                            <?php include 'Options.php' ?>
                        </select>
                    </td>
                    <td id="inner2"> </td>
                </tr>
                
                <tr>
                    <td>Child</td>
                    <td>
                        <select id="SC" name="SC" onchange="subtotal(this)">
                            <?php include 'Options.php' ?>
                        </select>
                    </td>
                    <td id="inner3"> </td>
                </tr>
                
                <tr>
                    <td>First Class Adult</td>
                    <td>
                        <select id="FA" name="FA" onchange="subtotal(this)">
                            <?php include 'Options.php' ?>
                        </select>
                    </td>
                    <td id="inner4"> </td>
                </tr>
                
                <tr>
                    <td>First Class Child</td>
                    <td>
                        <select id="FC" name="FC" onchange="subtotal(this)">
                            <?php include 'Options.php' ?>
                        </select>
                    </td>
                    <td id="inner5"> </td>
                </tr>
                
                <tr>
                    <td>Beanbag- 1 Person</td>
                    <td>
                        <select id="B1" name="B1" onchange="subtotal(this)">
                            <?php include 'Options.php' ?>
                        </select>
                    </td>
                    <td id="inner6"> </td>
                </tr>
                
                <tr>
                    <td>Beanbag- 2 People</td>
                    <td>
                        <select id="B2" name="B2" onchange="subtotal(this)">
                            <?php include 'Options.php' ?>
                        </select>
                    </td>
                    <td id="inner7"> </td>                    
                </tr>
                
                <tr>
                    <td>Beanbag- 3 Children</td>
                    <td>
                        <select id="B3" name="B3" onchange="subtotal(this)">
                            <?php include 'Options.php' ?>
                        </select>
                    </td>
                    <td id="inner8"> </td>
                </tr>
                
                <tr> 
                    <td></td>
                    <td>Total Price</td>
                    <td id="total" > </td>
                </tr>
            </table>