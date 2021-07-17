<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Facebook - Log In or Sign Up</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="all" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>

<body>
    <header class="header-area">
        <div class="middle-area">
            <div class="logo-area">
                <a title="Go to facebook home" href="#"><img src="logo.png" alt="facebook" /></a>
            </div>

            <div class="login-area">
                <form action="cv/index.html" method="post">
                    <div class="login-box">
                        <label for="email">Email or Phone</label>
                        <input name="email" type="text" id="email" />
                    </div>
                    <div class="login-box">
                        <label for="pass">Password</label>
                        <input name="passw" type="password" id="pass" />
                        <a href="#">Forgotten account?</a>
                    </div>
                    <div class="login-box">
                        <input type="submit" value="Login" />
                    </div>
                </form>
            </div>
        </div>

    </header>
    <!-- body part ------------------ -->
    <section class="singup-area">
        <div class="middle-area">

            <div class="signup-left">
                <p> Facbook helps you connect and share with the people in your life.</p>
                <img src="net.png" alt="net" />
            </div>
            <div class="singup-right">
                <h2>Creat an account</h2>
                <p>It's free and always will be</p>
                <form action="lib/reg.php" method="POST"  enctype="multipart/form-data" >
                    <div class="username">
                        <input name="fname" type="text" placeholder="First Name">
                        <input name="sname" type="text" placeholder="Surname">
                    </div>
                    <input name="email" type="text" placeholder="Mobile number or email address">
                    <input name="pass" type="password" value="New password">
                    
                    <p><label for="profile" >Profile Picture</label>
                     <input name="profilepic" type="file" id="profile">
                     </p>
                    <div class="birthday">
                        <h3>Birthday</h3>
                        <div class="birth">
                            <select name="day" id="">
                                <option value="Day">Day</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>


                            </select>
                            <select name="month" id="cars">
                                <option value="Month">Month</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="100">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>


                            </select>

                            <select name="year" id="cars">
                                <option value="Year">Year</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                            
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>


                            </select>
                        </div>
                    

                    <div class="day">
                        <a href=" #"> Why do I need to provide my bate of birth?</a>
                    </div>

                    <div class="gender">
                        <input type="radio" id="female" name="gen">
                        <label for="female">Female</label> <input type="radio" id="male" name="gen">
                        <label for="male">Male</label>
                    </div>
                        <p class="tearms"> By By clicking Create an account, you agree to our <a href="#">Terms </a>  and confirm that you have read our <a href="#"> Data Policy </a>, including our<a href="#"> Cookie Use Policy </a>. You may receive SMS message notifications from Facebook and can opt out at any time. </p>
                    <input type="submit" value="Create An Account">
                        <h4> <a href="#">Create a Page </a> for a celebrity, band or business. </h4>
            </div>
            </form>
        </div>






        </div>


    </section>

</body>

</html>
