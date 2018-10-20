<!DOCTYPE html>
<?php
    include ('header_pages.php');
?>
<body class="header-sticky">
    <div class="boxed">
        <!-- Page title -->
            <div class="page-title parallax parallax1">             
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">                    
                            <div class="page-title-heading">
                                <h2 class="title">Posts with right sidebar</h2>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Pages</a></li>
                                    <li>Album Gallery 3 columns with title</li>
                                </ul>                   
                            </div><!-- /.breadcrumbs --> 
                        </div><!-- /.col-md-12 -->  
                    </div><!-- /.row -->  
                </div><!-- /.container -->                      
            </div><!-- /.page-title -->

        </div> <!-- /.wrap-slider -->        

        <section class="flat-row pad-top120px">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-content">
                            <div class="contact-address">
                                <div class="style1">                                    
                                   <img src="images/icon/c1.png" alt="image">
                                </div> 
                                <div class="details">
                                    <h5>Our Location</h5>
                                    <p>350 Fifth Avenue, 34th floor New York</p>
                                    <p>NY 10118-3299 USA</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-content">
                            <div class="contact-address">
                                <div class="style1">
                                    <img src="images/icon/c2.png" alt="image">
                                </div>
                                <div class="details">
                                    <h5>Contact us Anytime</h5>
                                    <p>Mobile: (+1) 800 555 888 </p>
                                    <p>Fax: (+1) 800 666 999</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-content">
                            <div class="contact-address">
                                <div class="style1">
                                    <img src="images/icon/c3.png" alt="image">
                                </div>
                                <div class="details">
                                    <h5>Write Some Words</h5>
                                    <p>Support24/7@domain.com </p>
                                    <p>Info@domain.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->

                <div class="row">
                    <div class="flat-divider d70px"></div>
                </div>

                <div id="respond" class="comment-respond contact style2">
                    <h4 class="title comment-title">Leave a Message</h4>
                    <form id="contactform" class="flat-contact-form style2 bg-dark height-small" method="post" action="./contact/contact-process.php">
                        <div class="field clearfix">      
                            <div class="wrap-type-input">                    
                                <div class="input-wrap name">
                                    <input type="text" value="" tabindex="1" placeholder="Name" name="name" id="name" required>
                                </div>
                                <div class="input-wrap email">
                                    <input type="email" value="" tabindex="2" placeholder="Email" name="email" id="email" required>
                                </div>
                                <div class="input-wrap last Subject">
                                    <input type="text" value="" placeholder="Subject (Optinal)" name="subject" id="subject" >
                                </div>  
                            </div>
                            <div class="textarea-wrap">
                                <textarea class="type-input" tabindex="3" placeholder="Message" name="message" id="message-contact" required></textarea>
                            </div>
                        </div>
                        <div class="submit-wrap">
                            <button class="flat-button bg-theme">Send Your Message</button>
                        </div>
                    </form><!-- /.comment-form -->                     
                </div><!-- /#respond -->
            </div><!-- /.container -->   
        </section>

        <!-- Map -->
        <section class="row-map">
            <div class="container-fluid">
                <div class="row">
                    <div id="map" style="width: 100%; height: 550px; "></div> 
                </div>
            </div><!-- /.container -->
        </section>

<?php
    include ('footer_pages.php');
?>
</body>
</html>