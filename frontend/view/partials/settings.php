<div class="set">

    <div>
    <a id="closed" >&#x2715 <span>Close</span></a>
    </div>
    <div class="sched-head">
        <h1>Set Schedule</h1>
    </div>

    <div>
        <form action="backend\schedule.php" method="get">
            <div class="fullname">
                <div class="block">
                    <label for="lastname">Date</label>
                    <input type="date" class="addForm-date" name="date" value="<?php $date = date("Y-m-d"); ?>">
                </div>
            </div>


            <div class="details">
                <div class="block">
                    <label for="timein">Time In</label>
                    <input type="time" name="timein" class="addForm" id="timein">
                </div>

                <div class="block">
                    <label for="timeout">Time Out</label>
                    <input type="time" name="timeout" class="addForm" id="timeout">
                </div>
            </div>

            <div class="block">
                <button type="submit" name="schedule_submit">Set Schedule</button>
                <a href="backend/reset.php" class="reset">Reset</a>
            </div>
            
        </form>
    </div>

</div>