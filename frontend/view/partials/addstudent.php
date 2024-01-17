<div class="student">
    <div>
    <a id="close">&#x2715 <span>Close</span></a>
    
    </div>
    <div class="add-head">
        <h1>Add Student</h1>
    </div>

    <div>
        <form action="backend\addstudent.php" method="post">
            <div class="fullname">
                <div class="block">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lname" class="addForm">
                </div>

                <div class="block">
                    <label for="firstname">First Name</label>
                    <input type="text" name="fname" class="addForm">
                </div>

                <div class="block">
                    <label for="middlename">Middle Name</label>
                    <input type="text" name="mname" class="addForm">
                </div>
            </div>


            <div class="details">
                <div class="block">
                    <label for="contactnumber">Contact Number</label>
                    <input type="number" name="contactNumber" class="addForm" id="contactnumber">
                </div>

                <div class="block">
                    <label for="sex">Sex:</label>
                    <div>
                    <input type="radio" id="male" name="sex" value="male">
                    <label for="male">male</label>
                    <input type="radio" id="female" name="sex" value="female"> 
                    <label for="female">Female</label>
                    </div>
                </div>
            </div>

            <div class="address">
                <label for="address">Address</label>
                <input type="text" name="address" class="addForm">
            </div>

            <div class="studentinfo">
                <div class="block">
                    <label for="grade">Grade</label>
                    <select name="grade" id="grade" class="select">
                        <option value="0"></option>
                        <option value="1">Grade 1</option>
                        <option value="2">Grade 2</option>
                        <option value="3">Grade 3</option>
                        <option value="4">Grade 4</option>
                        <option value="5">Grade 5</option>
                    </select>
                </div>

                <div class="block">
                    <label for="section">Section</label>
                    <select name="section" id="section" class="select">
                        <option value="0"></option>
                        <option value="1">Section 1</option>
                        <option value="2">Section 2</option>
                        <option value="3">Section 3</option>
                        <option value="4">Section 4</option>
                        <option value="5">Section 5</option>
                    </select>
                </div>

                <div class="block">
                    <label for="userkey">User Key</label>
                    <select name="user_key" id="user_key" class="select">
                        <option value="0"> </option>
                        <option value="a36faba1">a36faba1</option>
                        <option value="2f25e000">2f25e000</option>
                        <option value="2f92c100">2f92c100</option>
                        <option value="2f9d2f00">2f9d2f00</option>
                    </select>
                </div>
            </div>

            <div>
                <button type="submit" class="addButton" name="submit" value="Submit">Add Student</button>
            </div>
        </form>
    </div>
</div>