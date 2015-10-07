<?php include 'JScript.php' ?>
<table id="mname">
                <tr>
                    <th>MOVIE:</th>      
                    <td><select name="movie" id="movie" onchange="moviechange(this.form)">
                        <option> </option>
                        <option value="AC">MISSION IMPOSSIBLE: ROGUE NATION</option>
                        <option value="CH">ANT-MAN</option>
                        <option value="AF">WILD-TALES</option>
                        <option value="RC">TRAINWRECK</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>SESSION DAY:</th>
                    <td>
                        <select name="day" id="day" onchange="daychange()">
                            <option> </option>
                            <option value="M">MONDAY</option>
                            <option value="T">TUESDAY</option>
                            <option value="W">WEDNESDAY</option>
                            <option value="Th">THURSDAY</option>
                            <option value="F">FRIDAY</option>
                            <option value="S">SATURDAY</option>
                            <option value="Su">SUNDAY</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <th>SESSION TIME:</th>
                    <td>
                        <select name="time">
                            <option> </option>
                            <option value="12">12PM</option>
                            <option value="1">1PM</option>
                            <option value="3">3PM</option>
                            <option value="6">6PM</option>
                            <option value="9">9PM</option>                                             
                        </select>
                    </td>
                </tr>                                                
</table>