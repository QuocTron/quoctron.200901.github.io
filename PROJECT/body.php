
<?php ob_start(); ?>
<?php 
    include('header.php');
    if(empty($_POST)){
        // $Name = $_POST['Name'];
        // $Email =$_POST['Email'];
    }
    $Name = $_POST['Name'];
     $Email =$_POST['Email'];
    if($Name=='tron'){
        header ('Location: test.php?Name='.$Name);
    }
    
    echo($Name);
    ?>
    
<?php ob_end_flush(); ?>
<div class="about-section">
        <h2>Story about us</h2>
        <div class="about-section__row" id="aboutus">
            <div class="col span-1-of-2 data">
                <b class="title">
                    From zero to hero
                </b>
                <p class="p-long">
                    Baby, now I'm gonna get my message to you
                    And I hope that you believe in it, 
                    too It maybe take some time But all that's in your mind 
                    You can make it come true.
                </p>
                <b class="title">
                    Master your skills
                </b>
                <p class="p-long">
                    And it's crazy
                    That the people wait for someone who's strong
                    Even though they could do it on their own
                </p>
                <a href="#" class="btn-text ">Learn more &#8594; </a>
            </div>
            <div class="col span-1-of-2 img">
                <div class="img-friend">
                    <img class ="img-friend1 anh" src="img/friend1.png" alt="img">
                    <img class ="img-friend2 anh" src="img/friend2.png" alt="img">
                    <img class ="img-friend3 anh" src="img/friend3.png" alt="img">
                </div>   
            </div>    
        </div>
    </div>
    <div class="social">
        <div class="social__row" id="social">
            <div class="social__row--col span-1-of-4 global">
                <i class="fas fa-globe-americas small-icon"></i>
                <b class="title">Global skill</b>
                <p class="paragraph">
                    We are focused building each client a custom tech talent pipeline. 
                </p>
            </div>
            <div class="social__row--col span-1-of-4 book">
                <i class="fas fa-book-open small-icon"></i>
                <b class="title">Google'sknowledge</b>
                <p class="paragraph">
                    The Knowledge Graph lets you find entities in the Google Knowledge.
                </p>
            </div>
            <div class="social__row--col span-1-of-4 people">
                <i class="fas fa-users small-icon"></i>
                <b class="title">Leader of your life</b>
                <p class="paragraph">
                    Every day, you’re setting an example for those around you–whether.
                </p>
            </div>
            <div class="social__row--col span-1-of-4 hourglass ">
                <i class="fas fa-hourglass-half small-icon"></i>
                <b class="title">Saving your time</b>
                <p class="paragraph">
                    Some links on this page clearly marked may take you to a partner website .
                </p>
            </div>
        </div>
    </div>
    <div class="courses-section" id="courses-section">
        <h2 class="courses-section-title">our courses</h2>
        <div class="courses-section__row">
            <div class="courses-section__row--col span-1-of-3">
                <div class="card">
                    <div class="card-slide slide-front">
                        <div class="card-picture card-picture1">
                            &nbsp; <!-- lệnh khi tệp trống -->
                        </div>
                        <h4 class="heading-courses">
                            <span class="card-heading card-heading1">
                                control <br>yourtime
                            </span>
                        </h4>
                        <div class="detail">
                            <ul>
                                <li>3 hours</li>
                                <li>1000 students</li>
                                <li>5 star rated</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-slide slide-back slide-back1">
                        <p class="title-small"> only <br><span>$16</span></p>
                        <a href="#popup"class ="btn btn--white btn--courses">enroll now</a>
                    </div> 
                </div>
            </div>
            <div class="courses-section__row--col span-1-of-3">
                <div class="card">
                    <div class="card-slide slide-front">
                        <div class="card-picture card-picture2">
                            &nbsp;
                        </div>
                        <h4 class="heading-courses">
                            <span class="card-heading card-heading2">
                                make <br> mindmap
                            </span>
                        </h4>
                        <div class="detail">
                            <ul>
                                <li>10 hours</li>
                                <li>5000 students</li>
                                <li>5 star rated</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-slide slide-back slide-back2">
                        <p class="title-small"> only <br><span>$20</span></p>
                         <a href="#"class ="btn btn--white btn--courses">enroll now</a>
                    </div> 
                 </div>
            </div>
            <div class="courses-section__row--col span-1-of-3">
                <div class="card">
                    <div class="card-slide slide-front">
                        <div class="card-picture card-picture3">
                            &nbsp;
                        </div>
                         <h4 class="heading-courses">
                            <span class="card-heading card-heading3">
                                make <br> your target <br>
                            </span>
                         </h4>
                         <div class="detail">
                             <ul>
                                 <li>15 hours</li>
                                 <li>5000 students</li>
                                 <li>5 star rated</li>
                             </ul>
                         </div>
                    </div>
                    <div class="card-slide slide-back slide-back3">
                         <p class="title-small"> only <br> <span>$25</span></p>
                         <a href="#import-user"class ="btn btn--white btn--courses">enroll now</a>
                    </div> 
                </div>
            </div>
        </div>
        <div class="btn__courses">
            <a href="#" class="btn btn--blue btn__courses-blue"> see all our courses</a>
        </div>
    </div>
    <div class="testimonials">
        <h2>testimonials</h2>
    <div class="test">     
        <div class="testimonials-cmt">
            <div class="infor">
                <img class="person-img" src="img/person1.png" alt="person-img">
                <figcaption class="caption"> 
                    Jonh Cary
                </figcaption>
            </div>
            <div class="data">
                <p class="text">
                    thank for your guide
                </p>
                <p class="paragraph paragraph-text">
                    Parents have a difficult time watching their children suffer.
                    So, use this as a starter to let your parents know that you appreciate the strength they showed when you needed it most.
                </p>
            </div>  
        </div>
        
        <div class="testimonials-cmt">
            <div class="infor">
                <img class ="person-img" src="img/person2.png" alt="person-img">    
                <figcaption class="caption"> 
                    Mary Chery
                </figcaption>
            </div>
            <div class="data">
                <p class="text">
                    very helpful courses
                </p>
                <p class="paragraph paragraph-text">
                    Learning Hub is the go-to destination for exam prep. The Learning Hub is more than an eLearning platform—it is a time-tested program that guides examinees through their exam prep from start to finish. 
                    Our philosophy has a simple framework
                </p>
            </div>
        </div>
    </div>
    <a href="#" class="btn-text">read all the testimonials &#8594; </a>   
    </div>
    <div class="import-user" id="import-user">
        <div class="emroll-now">
            <div class="data-user">
                <div class="form">
                    <h2 class="h2-enroll">enroll now</h2>
                    <form method ="POST" class="import-data">
                        <div class="form-import form-name">
                            <input type="text"  class="input-name input-import" name="Name" placeholder="Full name" required>
                            <label class ="input-data" for="text">Full name</label>
                        </div>
                        <div class="form-import form-email">
                            <input type="email" class="input-email input-import" name="Email" placeholder="Email" required>
                            <label class ="input-data"for="email">Email</label>
                        </div>
                        <div class="radio-genden">
                            <div class="radio-genden-radio">
                                <input class="radio-input" type="radio"  name="Genden" value="Male">
                                <label for="female" class="radio-label">
                                    <span class="btn-check"></span>
                                    <span >Male</span> 
                                </label>
                            </div>
                            <div class="radio-genden-radio">
                                <input class="radio-input" type="radio"  name="Genden" value="Female">
                                <label for="female" class="radio-label">
                                    <span class="btn-check"></span>
                                        Female
                                </label>
                            </div>
                        </div>
                        <!-- <div class="button">
                            <a href="#" class="btn btn--blue btn--animated btn-sub"> submit &rarr;</a>
                        </div> -->
                        <input type="submit"  class="btn btn--blue" value = "submit">
                    </form>
                </div>   
            </div>
        </div>    
    </div>
<?php 
    include('footer.php');
    ?>