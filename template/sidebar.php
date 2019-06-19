<div class="col-sm-3" style="position: fixed;">


    <section class="panel">
        <div class="panel-body">
            <a href="compose.php" class="btn btn-compose">
                <i class="fa fa-pencil"></i> New Application
            </a>
            <ul class="nav nav-pills nav-stacked mail-nav" id="nav">
                <li><a href="profile.php"> <i class="fa fa-envelope-o"></i> Profile</a></li>
                <?php if ($_SESSION["role"] == "admin") { ?>
                    <li><a href="pending.php"> <i class="fa fa-inbox"></i> pending
                    application <?php include 'core/database.php';
                    $sql = "SELECT count(seen) as sum FROM (application natural join belongs_to) natural join users where status='pending'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        // output data of each row
                        while ($row = $result->fetch_assoc()){?>
                            <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];} ?></span></a></li>
                        <?php }
                    } ?>
                    <li><a href="approved.php"> <i class="fa fa-file-text-o"></i> Approved
                    application <?php include 'core/database.php';
                    $sql = "SELECT count(seen) as sum FROM (application natural join belongs_to) natural join users where status='approved'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) { ?>
                            <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];} ?></span></a></li>
                        <?php }
                    } ?>
                    <li><a href="rejected.php"> <i class="fa fa-trash-o"></i> Rejected application<?php include 'core/database.php';
                    $sql = "SELECT count(seen) as sum FROM (application natural join belongs_to) natural join users where status='rejected'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) { ?>
                            <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];} ?></span></a></li>
                        <?php }
                    } ?>

                    <li><a href="designation.php"> <i class="fa fa-envelope-o"></i> Add designation</a></li>
                    <li><a href="user.php"> <i class="fa fa-envelope-o"></i> Add colligue</a></li>
                <?php } else { ?>
                    <li><a href="pending.php"> <i class="fa fa-inbox"></i> pending
                    application <?php include 'core/database.php';
                    $sql = "SELECT count(seen) as sum FROM (application natural join belongs_to) natural join users where status='pending' and belongs_to.user_id=" . $_SESSION["userid"];
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) { ?>
                            <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];} ?></span></a></li>
                        <?php }
                    } ?>
                    <li><a href="approved.php"> <i class="fa fa-file-text-o"></i> Approved
                    application <?php include 'core/database.php';
                    $sql = "SELECT count(seen) as sum FROM (application natural join belongs_to) natural join users where status='approved' and belongs_to.user_id=" . $_SESSION["userid"];
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) { ?>
                            <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];} ?></span></a></li>
                        <?php }
                    } ?>
                    <li><a href="rejected.php"> <i class="fa fa-trash-o"></i> Rejected application<?php include 'core/database.php';
                    $sql = "SELECT count(seen) as sum FROM (application natural join belongs_to) natural join users where status='rejected' and belongs_to.user_id=" . $_SESSION["userid"];
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) { ?>
                            <span class="label label-theme pull-right inbox-notification"><?php if($row["sum"]>0){echo $row["sum"];} ?></span></a></li>
                        <?php }
                    } ?>
                <?php } ?>
            </ul>
        </div>
    </section>
    <section class="panel">
        <div class="panel-body">


            <div id="zabuto_calendar_1m6q">
                <div class="zabuto_calendar" id="zabuto_calendar_1m6q">
                    <table class="table">
                        <tbody>
                        <tr class="calendar-month-header">
                            <th>
                                <div class="calendar-month-navigation" id="zabuto_calendar_1m6q_nav-prev">
                                    <span><span class="fa fa-chevron-left text-transparent"></span></span>
                                </div>
                            </th>
                            <th colspan="5"><span>April 2019</span></th>
                            <th>
                                <div class="calendar-month-navigation" id="zabuto_calendar_1m6q_nav-next">
                                    <span><span class="fa fa-chevron-right text-transparent"></span></span>
                                </div>
                            </th>
                        </tr>
                        <tr class="calendar-dow-header">
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                            <th>Sun</th>
                        </tr>
                        <tr class="calendar-dow">
                            <td id="zabuto_calendar_1m6q_2019-04-01" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-01_day" class="day">1</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-02" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-02_day" class="day">2</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-03" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-03_day" class="day">3</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-04" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-04_day" class="day">4</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-05" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-05_day" class="day">5</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-06" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-06_day" class="day">6</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-07" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-07_day" class="day">7</div>
                            </td>
                        </tr>
                        <tr class="calendar-dow">
                            <td id="zabuto_calendar_1m6q_2019-04-08" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-08_day" class="day">8</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-09" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-09_day" class="day">9</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-10" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-10_day" class="day">10</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-11" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-11_day" class="day">11</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-12" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-12_day" class="day">12</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-13" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-13_day" class="day">13</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-14" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-14_day" class="day">14</div>
                            </td>
                        </tr>
                        <tr class="calendar-dow">
                            <td id="zabuto_calendar_1m6q_2019-04-15" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-15_day" class="day">15</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-16" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-16_day" class="day">16</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-17" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-17_day" class="day">17</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-18" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-18_day" class="day">18</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-19" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-19_day" class="day">19</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-20" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-20_day" class="day">20</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-21" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-21_day" class="day">21</div>
                            </td>
                        </tr>
                        <tr class="calendar-dow">
                            <td id="zabuto_calendar_1m6q_2019-04-22" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-22_day" class="day">22</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-23" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-23_day" class="day">23</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-24" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-24_day" class="day">24</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-25" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-25_day" class="day">25</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-26" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-26_day" class="day">26</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-27" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-27_day" class="day">27</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-28" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-28_day" class="day">28</div>
                            </td>
                        </tr>
                        <tr class="calendar-dow">
                            <td id="zabuto_calendar_1m6q_2019-04-29" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-29_day" class="day">29</div>
                            </td>
                            <td id="zabuto_calendar_1m6q_2019-04-30" class="dow-clickable">
                                <div id="zabuto_calendar_1m6q_2019-04-30_day" class="day">30</div>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="legend" id="zabuto_calendar_1m6q_legend"><span class="legend-text"><span
                                    class="badge badge-event">00</span> Special event</span><span
                                class="legend-block"><ul class="legend"><li
                                        class="event"></li><span>Regular event</span></ul></span>
                    </div>
                </div>
            </div>


        </div>
    </section>

</div>