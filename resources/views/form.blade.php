<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src="https://kit.fontawesome.com/a4c00a89bc.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
        <link href='//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <title>Apply-SAGE CORPS</title>

    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
</head>

<body>
<header class="header">
    @include('navbar')
</header>
    <div>
        <img src="{{url('/img/navbar.PNG')}}" alt=""  width="100%">
    </div>

    <h1 class="text-center"
        style="padding: 20px; font-weight: 500;color: #4a4a4a;font-family: 'proxima-nova','Helvetica Neue',Helvetica,Arial,sans-serif;font-size: 32px;">
        START YOUR APPLICATION</h1>
    <div style="margin-right: 23%;margin-left:22% ; ">
        <p style="font-size: 29px;font-weight: 400; padding-top:40px; font-family: 'Open Sans', 'sans-serif';">
            Summer 2024 Program Application
        </p> <br>
        <p style="font-size: 16px;font-weight: 400;">Thank you for your interest in Sage Corps! We're excited you're
            here and can't wait to begin this journey with you. <br> <br>
            <strong>This application will take you about 10 minutes to complete.</strong> We recommend applying on a
            desktop so you can upload a copy of your resume. <br> <br> <span style="font-weight: 400;">Once you apply,
                we will review your application and you can expect to hear from us in 2-3 business days regarding next
                steps. If you have questions in the meantime or have questions before you apply, please reach out to us
                <a href="mailto:campusrelations@sagecorps.com" target="_blank"><span
                        style="font-weight: 400;">campusrelations@sagecorps.com</span></a></span>
        </p>
        <p style="padding-bottom: 0%; margin-bottom:0%"><strong>Application Deadlines:</strong></p> <br>
        <p style="padding-top: 0%; margin-top:0%">Early Bird Enrollment Deadline - Dec 20, 2023* <br>
            Priority<strong><span style="font-weight: 400;"> Application Deadline - Feb 1,
                    2024</span></strong> <br>
            <span style="font-weight: 400;">*Enroll and pay your program deposit to receive $500 off your program
                abroad.&nbsp;</span>
        </p>
        <hr style="height:1px">
        <p class="text-right" style="font-size: 12px"> <span style="color: red">*</span> Required</p>
    </div>
    <form method="post" id="data" enctype="multipart/form-data" action="/submit-application"
        style="margin-right: 23%;margin-left:22%;color:#666;font-size:14px ">
        @csrf
        <div class="form-group">
            <label for="first_name">First Name <span style="color: red">*</span></label>
            <input type="text" class="form-control" id="first_name" name="first_name" required
                style="width: 100%">
        </div>
        <div class="form-group">
            <label for="pref_first_name">Preferred First Name </label>
            <input type="text" class="form-control" id="pref_first_name" name="question_9828557004"
                style="width: 100%">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name <span style="color: red">*</span></label>
            <input type="text" class="form-control" id="last_name" name="last_name" Required
                style="width: 100%">
        </div>
        <div class="form-group">
            <label for="email">Email address <span style="color: red">*</span></label>
            <input type="email" class="form-control" id="email" name="email" Required style="width: 100%">
        </div>
        <div class="form-group">
            <label for="phone">Phone <span style="color: red">*</span></label>
            <input type="number" class="form-control" id="phone" name="phone" Required style="width: 100%">
        </div>

        <div class="form-group" id="cv-hide">
            <label for="file">Resume/CV <span style="color: red">*</span> </label> <br>
            <input type="file" name="resume" id="my-file" accept=".doc, .docx, .txt, .pdf, .rtf"
                style="visibility:hidden ;"> <br>
            <div class="row" style="margin-left: 3px">
                <input type="button" id="my-button" value="Attach,"
                    style="
            display: inline-block;
            outline: none;
            cursor: pointer;
            font-size: 13px;
            padding: 0;
            line-height: 20px;
            height: 19px;
            max-height: 30px;
            background: none;
            border: 0;
            border-radius: 0;
            color: #0942B0;
            transition-timing-function: ease-in-out;
            transition-property: background;
            transition-duration: 150ms;
            box-shadow: none;">
                <a href="#" id="dropbox" style="font-size: 13px;color: #95001a;;">Dropbox,</a>
                <div class="btn-group-toggle ">
                    <label class="btn"
                        style="
                display: inline-block;
                outline: none;
                cursor: pointer;
                font-size: 13px;
                color: #0942B0;
                padding: 0;
                line-height: 20px;
                height: 30px;
                max-height: 30px;
                background: none;
                border: 0;
                border-radius: 0;
                transition-timing-function: ease-in-out;
                transition-property: background;
                transition-duration: 150ms;
                box-shadow: none;">
                        <input type="checkbox" name="" id="button">or enter manually
                    </label>
                </div>
            </div>
            <br>
            <textarea name="cv" id="cv" cols="30" rows="6"
                style="width: 65%;display: inline-block; border-color:#DDD"></textarea>
        </div>
        <span id="f-name"></span>
        <div id="resume-allowable-file-types" class="file-types" style="font-size: 12px">
            (File types: pdf, doc, docx, txt, rtf)
        </div>
        <div class="form-group" id="append">
            <label for="school">School <span style="color: red">*</span></label> <br>
            <select class="form-control school" id="school" name="school" style="width: 100%">
                <option value="" disabled selected>select a school</option>
            </select>
        </div>
        <div id="d2"></div>
        <input type="button" id="cloneme" value="+ Add Another Education"
            style="
            display: inline-block;
            outline: none;
            cursor: pointer;
            font-size: 13px;
            padding: 0;
            line-height: 20px;
            height: 19px;
            max-height: 30px;
            background: none;
            border: 0;
            border-radius: 0;
            color: #0942B0;
            transition-timing-function: ease-in-out;
            transition-property: background;
            transition-duration: 150ms;
            box-shadow: none;">
        <hr style="height:1px">
        <div class="form-group">
            <label for="grad_year">Graduation Year <span style="color: red">*</span></label> <br>
            <select class="form-control" id="grad_year" name="question_9828550004" style="width: 100%">
                <option disabled selected>Please select</option>
            </select>
        </div>
        <div class="form-group">
            <label for="majors">Major(s) <span style="color: red">*</span></label>

            <textarea class="form-control" id="majors" name="question_9828551004" rows="1" Required
                style="width: 100%"></textarea>
        </div>
        <div class="form-group">
            <label for="minors">Minor(s)</label>
            <textarea class="form-control" id="minors" name="question_9828552004" rows="1" style="width: 100%"></textarea>
        </div>
        <div class="form-group">
            <label for="gpa">GPA <span style="color: red">*</span></label> <br>
            <select required class="form-control gpa" id="gpa" name="question_9828553004" style="width: 100%">
                <option disabled selected>Please select</option>
            </select>
        </div>
        <div class="form-group">
            <label for="reason">If your GPA is below 3.0, please use the space below to provide further information
                that you think would be helpful for us to know regarding your grades.</label>
            <textarea class="form-control reason" id="reason" name="question_9828554004" rows="3" Required
                style="width: 100%" disabled></textarea>
        </div>
        <div class="form-group">
            <label for="url">LinkedIn URL: <span style="color: red">*</span></label> <br>
            <label for="">If you don't have a LinkedIn profile, please mark N/A</label>
            <textarea class="form-control" id="url" name="question_9828555004" rows="1" Required
                style="width: 100%"></textarea>
        </div>
        <div class="form-group">
            <label for="roles">What clubs/organizations are you involved in on or off-campus? Please specify any
                leadership roles within those organizations.<span style="color: red">*</span></label>
            <textarea class="form-control" id="roles" name="question_9828556004" rows="5" Required
                style="width: 100%"></textarea>
        </div>
        <div class="form-group">
            <label for="b-day">Birthdate (mm/dd/yyyy) <span style="color: red">*</span></label>
            <input type="date" class="form-control" id="b-day" name="question_9828558004" Required
                style="width: 100%">
        </div>
        <div class="form-group">
            <label for="pronouns">Preferred Pronouns</label>
            <input type="text" class="form-control" id="pronouns" name="question_9828557004"
                style="width: 100%">
        </div>
        <div class="form-group">
            <label>Gender Identity <span style="color: red">*</span> <br> </label>
            <label for="" style="margin-top: 5px;font-style: italic;">Note: This question about gender
                identity is optional, and your response will not impact your candidacy for our programs. This
                information will be used to determine eligibility for demographically targeted scholarships. Sage Corps
                is proud of its Fellows' diversity, and under no circumstances, discriminates on the basis of gender,
                race, creed, color, national origin, or sex.</label>
            <label class="radio-inline"> <input value="31660249004" type="checkbox" name="question_9828560004[]">
                Woman</label><br>
            <label class="radio-inline"><input value="31660250004" type="checkbox" name="question_9828560004[]">
                Man</label> <br>
            <label class="radio-inline"><input value="31660251004" type="checkbox" name="question_9828560004[]">
                Transgender</label> <br>
            <label class="radio-inline"><input value="31660252004" type="checkbox" name="question_9828560004[]">
                Non-binary/Gender
                Non-conforming</label> <br>
            <label class="radio-inline"><input value="31660253004" type="checkbox" name="question_9828560004[]">
                Prefer not to share</label><br>
            <label class="radio-inline"><input value="31660254004" type="checkbox" name="question_9828560004[]">
                Other</label><br>
        </div>
        <div class="form-group">
            <label for="race">Race/Ethnicity <span style="color: red">*</span></label> <br>
            <label for="" style="margin-top: 5px;font-style: italic;"> Note: This question about race is
                optional, and your response will not impact your candidacy for our programs. This information will be
                used to determine eligibility for demographically targeted scholarships. Sage Corps is proud of its
                Fellows' diversity, and under no circumstances, discriminates on the basis of gender, race, creed,
                color, national origin, or sex.</label>
            <select class="form-control" id="race" name="question_9828561004" style="width: 100%">
                <option disabled selected>Please select</option>
            </select>
        </div>
        <div class="form-group">
            <label for="country-cit">Country of Citizenship <span style="color: red">*</span></label>
            <input type="text" class="form-control" id="country-cit" name="question_9828562004" Required
                style="width: 100%">
        </div>
        <div class="form-group">
            <label for="lang">Native Language <span style="color: red">*</span></label> <br>
            <select class="form-control" id="lang" name="question_9828563004" style="width: 100%; height:40px">
                <option disabled selected>Please select</option>

            </select>
        </div>
        <div class="form-group">
            <label for="other-lang">In what other languages are you comfortable conducting business? This should
                include reading/writing and conversation. </label>
            <input type="text" class="form-control" id="other-lang" name="question_9828564004"
                style="width: 100%">
        </div>
        <div class="form-group">
            <label for="prog-loc1">What is your first choice for program location?</label> <br>
            <label for="" style="margin-top: 5px;font-style: italic;">Please note that all program locations
                are subject to change.</label>
            <select class="form-control" id="prog-loc1" name="question_9828565004" style="width: 100%">
                <option selected>Please select</option>
            </select>
        </div>
        <div class="form-group">
            <label for="role1">What is your first choice role? <span style="color: red">*</span></label> <br>
            <select class="form-control" id="role1" name="question_9828566004" style="width: 100%">
                <option disabled selected>Please select</option>
            </select>
        </div>
        <div class="form-group">
            <label for="prog-loc2">What is your second choice for program location? (Optional)</label> <br>
            <label for="" style="margin-top: 5px;font-style: italic;">Please note that all program locations
                are subject to change.</label>
            <select class="form-control" id="prog-loc2" name="question_9828567004" style="width: 100%">
                <option disabled selected>Please select</option>
            </select>
        </div>
        <div class="form-group">
            <label for="choice-2">What is your second choice role? (If applicable) </label><br>
            <select class="form-control" id="choice-2" name="question_9828568004" style="width: 100%">
                <option disabled selected>Please select</option>

            </select>
        </div>
        <div class="form-group">
            <label for="start-up">In 2-4 sentences, what interests you about working with startup companies?<span
                    style="color: red">*</span></label>
            <textarea class="form-control" id="start-up" name="question_9828569004" rows="5" Required
                style="width: 100%"></textarea>
        </div>
        <div class="form-group">
            <label for="accept">I understand that if my application is successful and I’m accepted on a Sage Corps
                program there is a program fee. Visit our pricing page for more information on program costs. <span
                    style="color: red">*</span></label> <br>
            <select class="form-control" id="accept" name="question_9828570004" style="width: 100%">
                <option selected>Please select</option>
                <option value="31660335004">I understand</option>

            </select>
        </div>
        <div class="form-group">
            <label>If accepted, how do you plan to primarily finance your program? <span style="color: red">*</span>
                <br> </label>
            <label for="" style="margin-top: 5px;font-style: italic;">Note: Sage Corps offers a variety of
                funding options for participants. Answering this question will help our team advise you on some possible
                options to fund your program if needed. </label>
            <label class="radio-inline"> <input type="checkbox" value="31660336004" name="question_9828571004[]">
                Self Funded</label><br>
            <label class="radio-inline"><input type="checkbox" value="31660337004" name="question_9828571004[]">
                Parental Support</label> <br>
            <label class="radio-inline"><input type="checkbox" value="31660338004" name="question_9828571004[]">
                University Funding</label> <br>
            <label class="radio-inline"><input type="checkbox" value="31660339004" name="question_9828571004[]">
                Scholarship(s) </label> <br>
            <label class="radio-inline"><input type="checkbox" value="31660340004" name="question_9828571004[]">
                Unknown</label><br>
            <label class="radio-inline"><input type="checkbox" value="31660341004" name="question_9828571004[]">
                Other</label><br>
        </div>
        <div class="form-group">
            <label for="refer-contact">Please list a university contact (i.e. professor, advisor or coach) who can
                provide a reference on your behalf to support your application. We may reach-out to them for a reference
                as a part of your application evaluation. If you don't have a university reference, please leave blank.
            </label> <br>
            <label for="" style="margin-top: 5px">Reference Name </label>
            <input type="text" class="form-control" id="refer-name" name="question_9828572004"
                style="width: 100%">
        </div>
        <div class="form-group">
            <label for="refer-t">Reference Title </label>
            <input type="text" class="form-control" id="refer-t" name="question_9828573004"
                style="width: 100%">
        </div>
        <div class="form-group">
            <label for="refer-email">Reference Email </label>
            <input type="email" class="form-control" id="refer-email" name="question_9828574004"
                style="width: 100%">
        </div>
        <div class="form-group">
            <label for="about-us">How did you first hear about us? <span style="color: red">*</span></label> <br>
            <select class="form-control" id="about-us" name="question_9828575004" style="width: 100%">
                <option disabled selected>Please select</option>
            </select>
        </div>
        <div class="form-group">
            <label for="refer-by">If you were referred to our program by someone, please list their name here. </label>
            <input type="text" class="form-control" id="refer-by" name="question_9828576004"
                style="width: 100%">
        </div>
        <div class="form-group">
            <label for="nominate">You can refer a friend or peer if you think they would be a good fit for our
                programs. If they apply and successfully accept a spot on one of our programs, they will receive $100
                off their program and you will receive $100 off your program as well. Please nominate your friend or
                peer below by listing their first name, last name, email address, and graduation year.</label>
            <textarea class="form-control" name="question_9828577004" id="nominate" rows="5" style="width: 100%"></textarea>
        </div>
        <button type="submit" class=" btn btn-sm"
            style="margin-left: 40%; margin-bottom:1%;">Submit Application</button>
    </form>
    <section class="fotbag">
        <div class="overlaps"></div>
        <div class="content">
            <div class="txt">
                <h1><strong>GAIN THE GLOBAL EXPERIENCE TO STAND OUT</strong></h1>
            </div>
            <!-- You can add more content here, like additional text or other elements -->
        </div>
    </section>
    @include('footer')
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i style='font-size:30px' class='fas fa-arrow-up'></i></button>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs"
        data-app-key="w75idigtuug3clm"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script
        type="module"
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
      ></script>
      <script
        nomodule
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
      ></script>
</html>
    <script src="{{ asset('js/form.js') }}"></script>

    <script>
        // Get the button
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
        </script>

</body>

</html>
