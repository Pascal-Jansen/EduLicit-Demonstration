<?php
/*
 * ================
 * Error reporting.
 * ================
 */
error_reporting(E_ALL);
ini_set('display_errors', 0); // SET IT TO 0 ON A LIVE SERVER !!!

/*
 * ==================================================================
 * Execute operations upon form submit (store form data in date.csv).
 * ==================================================================
 */
include 'save_data.php';


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessing Automated Vehicle Capabilities</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        section{
            padding: 60px 0;
        }
    </style>
</head>
<body>


<section id="topics">
    <div class="container-md bg-light my-3 py-3">
        
        <div class="text-center">
            <h1 class="display-2 mb-5">Feedback</h1>
        </div>

            
        <!--
        <div class="text-center my-3">
            <a class="btn btn-primary btn-lg" href="survey_page_three.php" role="button">Next</a>
        </div>
        -->
        <form action="survey_page_end.php" method="post" class="row g-3 needs-validation" id="feedbackForm" name="feedbackForm" onsubmit="return validateForm()" novalidate style="display: inline">

            <input type="hidden" name="current_page" value="page3" />
            <input type="hidden" name="study_part" value="1" />
            

            <div class="container text-start">
                <div class="row justify-content-start">
                    <div class="col-1">
                    </div>
                    <div class="col-10">
                        <h4>
                        Here, you can give open feedback regarding concerns, improvement proposals and other thoughts.
                        If you have nothing to say, please write a single character like "a" or "-" in the textarea.
                        </h4>
                    </div>
                    <div class="col-1">
                    </div>
                </div>
                
            </div>
            <div class="row justify-content-start">
                <div class="col-1">
                </div>
                <div class="col-10">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" name="feedbackTextarea" id="feedbackTextarea" style="height: 300px" form="feedbackForm"></textarea>
                    <label for="feedbackTextarea">Leave a comment here</label>
                </div>
                </div>
                <div class="col-1">
                </div>
            </div>

            

            <div class="col-12 justify-content-center d-flex">
                <input class="btn btn-primary" type="submit" name="feedbackSubmit" id="feedbackSubmit">
            </div>

        </form>

        <div class="progress mt-3" style="height: 20px;">
            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script>
    function validateForm() {
        let feedback = document.forms["feedbackForm"]["feedbackTextarea"].value;
        
        if (feedback === "") {
            alert("Please write at least 1 character in the textarea.");
            return false;
        }
    }
</script>
</body>
</html>