<!DOCTYPE html>
<html>
    <head>
        <title>PHP Form Handling</title>
        <style>
            .spacingTopElement {
                margin-top: 20px;
            }
            
            .spacingRightEl {
                margin-right: 20px;
            }
        </style>
    </head>
    <body>
    <form action="" method="post">
    <div>
        <label for="studentName">Enter name</label>
        <div>
            <input type="text" name="studentName" value="<?php 
                if (isset($_POST['studentName'])) {
                    echo $_POST['studentName'];
                }
            ?>" />
        </div>
    </div>
    <div class="spacingTopElement">
        <label for="subj[]">Favorite Subject</label>
        <div>
            <input id="subj1" type="checkbox" name="subj[]" value="EL" />
            <label class="spacingRightEl" for="subj1">English</label>
            <input id="subj2" type="checkbox" name="subj[]" value="MA" />
            <label class="spacingRightEl" for="subj2">Math</label>
            <input id="subj3" type="checkbox" name="subj[]" value="PG" />
            <label class="spacingRightEl" for="subj3">Programming</label>
        </div>
    </div>
    <div class="spacingTopElement">
        <label for="gender">Gender</label>
        <div>
            <input id="g1" type="radio" name="gender" value="M" />
            <label class="spacingRightEl" for="g1">Male</label>
            <input id="g2" type="radio" name="gender" value="F" />
            <label class="spacingRightEl" for="g2">Female</label>
        </div>
    </div>
    <div class="spacingTopElement">
        <input name="sm" type="submit" value="Submit Form" />
    </div>
    </form>
    </body>
</html>
<?php
 if (isset($_POST['sm'])) {
    print_r($_POST);
 }
?>
