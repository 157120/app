<!doctype html>
<html>
    <head>
        <title>MiStery - London School of Fotography</title>
        
        <style type="text/css">

            /*BACGROUND&SCROLL*/
            *{
                margin: 0px;
                padding: 0px;
            }
            #image {
                position: relative;
                z-index: -1
            }
            #content {
                height: auto;
                width: 100%;
                margin-top:-10px; 
                background-image: url(kwiaty.jpg);
                position: relative;
                z-index: 1;
                background-attachment:fixed;
            }

            /*MEDIA SPOŁECZNOŚCIOWE:*/
            #nav_social {
                float: right;
                width: 40px;}       

            /*PANEL REJESTRACJI:*/
            #panel, #reg /*tło*/ {                
                width: 320px;
                float: left;
                background: rgba(255, 255, 255, 0.5); /*półprzeźroczyste*/
                filter: alpha(opacity=50);            /*półprzeźroczyste*/
                margin: 15px;
                border: 2px solid silver;
                font: 18px calibri;
                color: black;
                letter-spacing: -1px;
                -webkit-box-shadow: 0 0 2px silver; 
                -moz-box-shadow: 0 0 2px silver; 
                box-shadow: 0 0 2px silver;}

            form  {
                margin-top: 0px;}

            label, td /*format etykiet rejesracji*/ {                   
                width: 200px;
                color: black;
                margin: 10px;
                font-size: 16px;
                text-shadow: 0 0 1px silver;}

            #first_name, #last_name, #email, #mobileno, #pincode, #personaladdress, #m_lang, #course, #expe{
                display: block;
                width: 200px; 
                margin: 10px;
                border: 1px solid silver;
                outline: 5px solid #ebebeb;
                font-size: 12px;}

            #username, #pass {
                width: 150px; 
                margin: 10px;
                border: 1px solid silver;
                outline: 5px solid #ebebeb;
                font-size: 12px;}

            #submit, #login, #login1 {
                background: #ecf2f5;
                width: 280px;
                padding: 5px 20px;
                margin-top: 20px;}


            input[type="submit"], input[type="reset"]{              /*guzik submit*/
                width: 100px;
                padding: 5px 20px;
                border: 1px solid #005f85;
                color: white;
                text-shadow: 0 0 1px black;
                background: indianred;
                position: relative;
                left: 40px;}

            /*BOXES*/  
            #newalumni, #newabout, #newlecturers, #newbox_right{ /*Displayed box below labels*/
                display: none;
                width: 300px;
                text-align: center;
                font-size: 16px;
                background: rgba(255, 255, 255, 0.5); /*półprzeźroczyste*/
                filter: alpha(opacity=50); 
                margin: 15px;
                padding: 10px;
                font: italic arial;}

            #boxes, #boxes1, #boxes2, #box_left, #box_right{
                width: 336px;
                height: 336px;
                text-align: center;
                font-weight: bold;
                font-size: 16px;
                margin: 10px}


            #boxes_table, #boxes_table_bottom{     /*Box in the middle of web*/
                margin: 0px auto;
                padding: 50px;
            }

            #top_font, #top_font1, #top_font2{     /*Font at the top of the box*/
                text-align: center;
                font-weight: bold;
                font-size: 16px;
                font-style: italic
            }

            #low_font, #low_font1, #low_font2 {    /*Font at the buttom of the box*/
                text-align: center;
                font-size: 16px;}

            /*SUBSCRIBE*/
            #sform, .subscribe:hover>div {
                display: none;}

            .subscribe:hover>#sform {
                margin: 0px auto;
                display: block;
                height: 70px;
                width: 400px;
                padding: 40px 0px 0px 0px;
                text-align: center;
                font-style: italic;
                font-size: 20px;
                background: rgba(255, 255, 255, 0.5); 
                filter: alpha(opacity=50);
                -webkit-border-radius: 5px; 
                -moz-border-radius: 5px; 
                border-radius: 5px; }

            .subscribe div {
                margin: 0px auto;
                padding: 40px 0px 0px 0px;
                height: 70px;
                width: 400px;
                text-align: center;
                font-style: italic;
                font-weight: bold;
                font-size: 25px;
                background: rgba(255, 255, 255, 0.5); 
                filter: alpha(opacity=50);
                -webkit-border-radius: 5px; 
                -moz-border-radius: 5px; 
                border-radius: 5px; ; }




        </style>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

        <script type="text/javascript">
            //PARALLEX - SCROLL THE PAGE	
            var ypos, image;
            function parallex() {
                image = document.getElementById('image');
                ypos = window.pageYOffset;
                image.style.top = ypos * .7 + 'px';
            }
            window.addEventListener('scroll', parallex), false;

            //SHOW BOXES      
            function showonlyone(thechosenone) {
                $('.newboxes').each(function (index) {
                    if ($(this).attr("id") === thechosenone)
                    {
                        $(this).show(200);
                    } else
                    {
                        $(this).hide(600);
                    }
                });
            }

            //VALIDATION - LOGIN FORM
            var count = 2;
            function validate() {
                var un = document.myform.username.value;
                var pw = document.myform.pword.value;
                var valid = false;

                var unArray = ["student", "lecturer"];  // login
                var pwArray = ["s_mistery", "l_mistery"];  // password

                for (var i = 0; i < unArray.length; i++) {
                    if ((un === unArray[i]) && (pw === pwArray[i])) {
                        valid = true;
                        break;
                    }
                }

                if (valid) {
                    alert("Login was successful");
                    return false;
                }

                var t = "no of tries";
                if (count === 1) {
                    t = " try";
                }

                if (count >= 1) {
                    alert("Invalid username and/or password!  You have " + count + t + " left.");
                    document.myform.username.value = "";
                    document.myform.pword.value = "";
                    setTimeout("document.myform.username.focus()", 25);
                    setTimeout("document.myform.username.select()", 25);
                    count--;
                } else {
                    alert("Incorrect! You have no more tries left! Bye.");
                    document.myform.username.value = "No more tries allowed!";
                    document.myform.pword.value = "";
                    document.myform.username.disabled = true;
                    document.myform.pword.disabled = true;
                    return false;
                }
            }

            //VALIDATION - REGISTRATION FORM
            function validation()
            {
                if (document.Registration.first_name.value === "") //First Name
                {
                    alert("Please provide your First Name!");
                    document.Registration.first_name.focus();
                    return false;
                }
                if (document.Registration.last_name.value === "") //Last Name
                {
                    alert("Please provide your Last Name!");
                    document.Registration.last_name.focus();
                    return false;
                }

                var email = document.Registration.email.value; //Email
                at = email.indexOf("@");
                dot = email.lastIndexOf(".");
                if (email === "" || at < 1 || (dot - at < 2))
                {
                    alert("Please enter correct Email Address");
                    document.Registration.email.focus();
                    return false;
                }

                if (document.Registration.mobileno.value === "" || isNaN(document.Registration.mobileno.value) || document.Registration.mobileno.value.length !== 9) //Mobile No //isNaN() function determines whether a value is an illegal number (Not-a-Number). 
                {
                    alert("Please provide a Mobile No (9 digits) in the format #########");
                    document.Registration.mobileno.focus();
                    return false;
                }

                if (document.Registration.pincode.value === "" || isNaN(document.Registration.pincode.value) || document.Registration.pincode.value.length !== 6) //PIN Code   
                {
                    alert("Please provide a pincode in the format ######.");
                    document.Registration.pincode.focus();
                    return false;
                }

                if (document.Registration.personaladdress.value === "") //Personal Addres
                {
                    alert("Please provide your Personal Address!");
                    document.Registration.personaladdress.focus();
                    return false;
                }

                if ((Registration.sex[0].checked === false) && (Registration.sex[1].checked === false)) //Gender
                {
                    alert("Please choose your Gender: Male or Female");
                    return false;
                }

                if (document.Registration.mother_language.value === "-1") //Mother Language
                {
                    alert("Please provide your Mother Language!");
                    document.Registration.mother_language.focus();
                    return false;
                }

                if (document.Registration.Course.value === "-1") //Course
                {
                    alert("Please provide your Course!");
                    return false;
                }

                if (document.Registration.Experience.value === "-1") //Experience
                {
                    alert("Please provide your Experience!");
                    return false;
                }
                alert("Your registration form has been submitted! We will contact you soon!"); //Return True Value
                return(true);
            }

            //CHECK
            function check() {
                var email = document.getElementById(email_field); //Email
                at = email.indexOf("@");
                dot = email.lastIndexOf(".");
                if (email === "" || at < 1 || (dot - at < 2))
                {
                    alert("Please enter correct Email Address");
                    return false;
                } else {
                    alert('You have successfully subscribed to our newsletter');
                    return(true)
                }
            }



        </script>
    </head>

    <body>
        <img id="image" src="top1.jpg" height="710px" width="100%" />
        <div id="content">

            <br><br><br>
            <!--SOCIAL MEDIA-->     
            <div id="nav_social"> 
                <a target="_blank" href="http://facebook.com"><img src="facebook_32.png" alt="Become a fan" width="32" height="32"></a><br>
                <a target="_blank" href="http://twitter.com"><img src="twitter_32.png" alt="Follows on Twitter"></a><br>
                <a target="_blank" href="http://linkedin.com"><img src="linkedin_32.png" alt="Linked in"></a><br>
                <a target="_blank" href="http://vimeo.com"><img src="vimeo_32.png" alt="Vimeo"></a><br>
                <a target="_blank" href="http://skype.com"><img src="skype_32.png" alt="Skype"></a><br>
            </div>
            <!--/SOCIAL MEDIA--> 


            <!--BOXES_top--> 
            <table id="boxes_table">
                <tr>
                    <td>
                        <div id="boxes"> <!--BOX_ALUMNI--> 
                            <a id="myHeader1" href="javascript:showonlyone('newalumni');" ><img src="Alumni.jpg" alt=""/></a>
                        </div>
                        <div class="newboxes" id="newalumni">  
                            <div id="top_font">'MiStery' London School of Photography alumni are shaping our visual culture through their work in all parts the world.</div>
                            <img src="alumni1.jpg" alt="" style='padding: 10px 0px 10px 0px'/><br>
                            <div id="low_font">Our Alumni - Christopher Luther - has worked in photojournalism, fashion, beauty and commercial advertising. His work appears in major publications like National Geographic, Time, The New York Times, The Washington Post and The Wall Street Journal. He is <br> an author and artist. He is based in London, Shanghai and Singapore.</div>
                        </div>
                    </td>
                    <td>
                        <div id="boxes1"> <!--BOX_ABOUT--> 
                            <a id="myHeader2" href="javascript:showonlyone('newabout');" ><img src="About.jpg" alt=""/> </a>
                        </div>
                        <div class="newboxes" id="newabout">
                            <div id=top_font1>About</div>
                            <img src="building.jpg" alt="" style='padding: 10px 0px 10px 0px'/>
                            <div id="low_font1">'MiStery' - The London School of Photography is the largest and longest running photography school in the world. For over 30 years, MiStery School has been educating and inspiring photographers of all levels with affordable photography classes across the country. Whether you’re a passionate enthusiast or pro, Nikon School lets you explore & expand your skills on any camera. Join experts and enthusiasts in discovering & sharing new techniques, smart tips, great fun and true passion.</div>
                        </div>
                    </td>
                    <td>
                        <div id="boxes2"> <!--BOX_LECTURERS--> 
                            <a id="myHeader3" href="javascript:showonlyone('newlecturers');" > <img src="Lecturers (2).jpg" alt=""/></a>
                        </div>
                        <div class="newboxes" id="newlecturers" >
                            <div id="top_font2">Lectrers</div>
                            <img src="lecturers.jpg" alt="" style='padding: 10px 0px 10px 0px'/><br>
                            <div id="low_font2">One of the reasons that many consider the Academy to be the best photography school is the fact that the Academy’s photography faculty in Los Angeles is comprised of award-winning photographers who have worked across the spectrum of photographic genres and remain active as professional photographers.</div>
                        </div>
                    </td>
                </tr>
            </table>
            <!--/BOXES_top--> 

            <!--BOXE_BOTTOM--> 
            <table id="boxes_table_bottom">
                <tr>
                    <td>
                        <div id="box_left"> <!--BOXE_REGISTRATION-->
                            <a id="box_left1" href="javascript:showonlyone('newbox_left');" ><img src="SignUp.jpg" alt=""/> </a>
                        </div>
                        <div class="newboxes" id="newbox_left" style="display: none;">

                            <!--REGISTRACION FORM--> 
                            <form action="#" id="reg" name="Registration" onsubmit="return(validation());">

                                <table>
                                    <tr><td>First Name</td><td><input type=text name=first_name id="first_name"></td></tr>
                                    <tr><td>Last Name</td><td><input type="text" name="last_name" id="last_name"></td></tr>
                                    <tr><td>Email Adress</td><td><input type="text" name="email" id="email"></td></tr>
                                    <tr><td>Mobile No</td><td><input type="text" name="mobileno" id="mobileno"></td></tr>
                                    <tr><td>Pin Code</td><td><input type="text" name="pincode" id="pincode"></td></tr>
                                    <tr><td>Personal Address</td><td><input type="text" name="personaladdress" id="personaladdress"></td></tr>
                                    <tr><td>Gender</td><td><input type="radio" name="sex" value="male">Male<input type="radio" name="sex" value="Female" style="margin-left: 10px">Female</td></tr>
                                    <tr><td>Mother Lang.</td><td>
                                            <select name="mother_language" id="m_lang">
                                                <option value="-1" selected>Select..</option>
                                                <option value="Arabic">Arabic</option>
                                                <option value="Chinese">Chinese</option>
                                                <option value="English">English</option>
                                                <option value="French">French</option>
                                                <option value="German">German</option>
                                                <option value="Hindi">Hindi</option>
                                                <option value="Japanese">Japanese</option>
                                                <option value="Polish">Polish</option>
                                                <option value="Portuguese">Portuguese</option>
                                                <option value="Russian">Russian</option>
                                                <option value="Spanish">Spanish</option>
                                                <option value="Turkish">Turkish</option>
                                            </select></td></tr>

                                    <tr><td>Course</td><td>
                                            <select name="Course" id="course">
                                                <option value="-1" selected>Select..</option>
                                                <option value="News">News Photography</option>
                                                <option value="Portrait">Portrait Photography</option>
                                                <option value="Sports">Sports Photography</option>
                                                <option value="Advertising">Advertising Photography</option>
                                                <option value="Editorial">Editorial Photography</option>
                                                <option value="Scientific">Scientific Photography</option>
                                            </select></td></tr>

                                    <tr><td>Experience</td><td>
                                            <select Name="Experience" id="expe">
                                                <option value="-1" selected>Select..</option>
                                                <option value="None">None</option>
                                                <option value="Begnner">Beginner</option>
                                                <option value="Pro">Pro</option>
                                            </select></td></tr>

                                    <tr><td><input type="reset" id="reset"></td><td colspan="2"><input type="submit" value="Submit" /></td></tr>
                                </table>
                            </form>

                            <!--/REGISTRACION FORM--> 

                            <!--LOGIN FORM--> 
                            <td>
                                <div id="box_right"> <!--BOX_LOGIN--> 
                                    <a id="box_right1" href="javascript:showonlyone('newbox_right');" > <img src="LogIn.jpg" alt=""/></a>
                              

                                </div>
                                <div class="newboxes" id="newbox_right" style="padding: 10px;">
                                    <form name = "myform">
                                        <br>
                                        <br>
                                        In order to Log In, please Sign Up first.
                                        <br>
                                        <br>
                                        <button id="login1" type="button"  value="Log In" name="Submit" class="btn btn-default btn-lg">
                                            <a href= http://app.isc/login >Log In</a> </button></form>
            </div>        
        </td>
<!--/LOGIN FORM--> 
   </tr>
       </table>
<!--/BOX_BOTTOM--> 

<br><br><br><br>

<!--SUBSCRIBE--> 
<div class="subscribe">
    <div>Subscribe to this website</div>
    <form id="sform" target="popupwindow" onsubmit="alert('You have successfully subscribed to our newsletter')" >
        <p>
            <input type="text" id="email_field" class="email_field" name="email" size="25" style="font-size: 18px; margin-left: -30px;" value="E-mail address"/>
            <input class="email_btn" name="submit" type="submit" value="Done" style="margin-left: -20px;" />
        </p>
    </form>
</div>
<!--/SUBSCRIBE--> 


<b><button type="button" style="background: rgba(255, 255, 255, 0.5); filter: alpha(opacity=50); " onclick="document.getElementById('demo').innerHTML = Date()">Click me to display Date and Time</button> <b id="demo" style="float: bottom"></b></b> 
       

</div>	
</body>