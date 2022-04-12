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
                    echo htmlspecialchars($_POST['studentName']);
                }
            ?>" />
        </div>
    </div>
    <div class="spacingTopElement">
        <label for="subj[]">Favorite Subject</label>
        <div>
            <input id="subj1" type="checkbox" name="subj[]" value="EL"
            <?php
              if (isset($_POST['subj']) && in_array("EL", $_POST['subj'])) {
                echo 'checked';
              }
            ?>
            />
            <label class="spacingRightEl" for="subj1">English</label>
            <input id="subj2" type="checkbox" name="subj[]" value="MA"
            <?php
              if (isset($_POST['subj']) && in_array("MA", $_POST['subj'])) {
                echo 'checked';
              }
            ?>
            />
            <label class="spacingRightEl" for="subj2">Math</label>
            <input id="subj3" type="checkbox" name="subj[]" value="PG"
            <?php
              if (isset($_POST['subj']) && in_array("PG", $_POST['subj'])) {
                echo 'checked';
              }
            ?>
            />
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
    <?php
    if (isset($_POST['studentName'])) {
        echo 'You entered '.htmlspecialchars($_POST['studentName'])
        .' into the text field'.'<BR>';
    }
    ?>
    </body>
</html>
<?php
 if (isset($_POST['sm'])) {
    foreach($_POST as $key => $value) {
        echo gettype($value).'<BR>';
        if (gettype($value) === 'string') {
            echo "[$key]".' => '.htmlspecialchars($value).'<BR>';
        } else {
            print_r($value);
            echo '<BR>';
        }
    }
 }
 echo '<BR>';
 $num = '12.5abc';
 echo filter_var($num, FILTER_SANITIZE_NUMBER_INT).'<BR>';
 $email = 'son@gmail';
 var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
 echo '<BR>';
?>
