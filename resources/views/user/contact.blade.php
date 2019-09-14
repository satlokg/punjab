@extends('layouts.user')
@section('banner')
<div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="#">Account Information</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="col-lg-9">
	
                <section class="contact-style-2 pt-30 pb-35">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="contact2-title text-center mb-65">
                        <h2>contact us</h2>
                        <p> Contact us For Suggestion /Feedbacks </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-single-info mb-30 text-center">
                        <div class="contact-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <h3>address </h3>
                        <p>JDC Office,PSRLM.<br>5th Floor Vikas Bhawan<br>Sec 62 ,Mohali</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-single-info mb-30 text-center">
                        <div class="contact-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <h3>number phone</h3>
                        <p>Phone :98880 09606 </p>
                    </div>
                </div>
               
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-single-info mb-30 text-center">
                        <div class="contact-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <h3>email</h3>
                        <p>makeinpunjab@yahoo.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact form two -->
    <div class="contact-two-area pt-60 pb-70">
       <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="contact2-title text-center mb-60">
                        <h2>tell us your Suggestions/Feedbacks</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="contact-message">
                        <form  action="sendmail.php" method="post" class="contact-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="n1" placeholder="Name *" type="text" required>    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="n2" placeholder="Phone *" type="number" required>   
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="n3" placeholder="Email *" type="email" required>    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="n4" placeholder="Subject *" type="text" required>   
                                </div>
                               <div class="col-12">
                                    <div class="contact2-textarea text-center">
                                        <textarea placeholder="Message *" name="n5"  class="form-control2" required=""></textarea>     
                                    </div>   
                                    <div class="contact-btn text-center">
                                        <input class="btn btn-secondary" type="submit"  name="submit" value="Send Message"> 
                                    </div> 
                                </div> 
                                <div class="col-12 d-flex justify-content-center">
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </form>    
                    </div> 
               </div>
           </div>
       </div>
   </div>
</div>


@endsection