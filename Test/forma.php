<?php include "head.php" ?>
<body>    
    <form class="form" id="form-id" action="test.php" method="POST">
        <div class="row row-form">
            <div class="col-6">
                <div class="left-col">
                    <span>Summary</span>
                </div>
            </div>
            <div class="col-6">
                <div class="right-col">
                    <input type="text" id="summary" name="summary" required="required" maxlength="32">
                </div>
            </div>
        </div>
        <div class="row row-form">
            <div class="col-6">
                <div class="left-col">
                    <span>Description</span>
                </div>
            </div>
            <div class="col-6">
                <div class="right-col">
                    <input type="text" id="description" name="description" required="required" maxlength="32"><br>
                </div>
            </div>
        </div>
        <div class="row row-form">
            <div class="col-6">
                <div class="left-col">
                    <span>Priority</span>
                </div>
            </div>
            <div class="col-6">
                <div class="right-col">
                    <input type="text" id="priority" name="priority" required="required" maxlength="32"><br>
                </div>
            </div>
        </div>
        <div class="row row-form">
            <div class="col-6">
                <div class="left-col">
                    <span>Assignee</span>
                </div>
            </div>
            <div class="col-6">
                <div class="right-col">
                    <input type="text" id="assignee" name="assignee" required="required" maxlength="32"><br>
                </div>
            </div>
        </div>
        <div class="row row-form">
            <div class="col-6">
                <div class="left-col">
                    <span>Due date</span>
                </div>
            </div>
            <div class="col-6">
                <div class="right-col">
                    <input type="date" id="duedate" name="duedate" required="required" maxlength="32"><br>
                </div>
            </div>
        </div>
        <div class="row row-form">
            <div class="col-6">
                <div class="left-col">
                </div>
            </div>
            <div class="col-6">
                <div class="right-col">
                    <input name="isSubmit" type="submit" value="Submit">
                </div>
            </div>
        </div>
    </form>
</body>