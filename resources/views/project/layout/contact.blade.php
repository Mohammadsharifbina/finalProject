@extends('project.layout.master')
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    .header-sec {
        width: 100%;
        padding: 0.8em;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        align-items: center;
        position: sticky;
        top: 0;
        z-index: 1;
        background-color: #f35b04;

    }

    nav ul {
        display: flex;
        width: 100%;
        justify-content: space-evenly;
        list-style-type: none;
        align-items: center;
    }

    nav ul li a {
        text-decoration: none;
        color: white;

        padding: 0.8em;
        font-size: 1.2em;
        font-weight: bold;
        transition: color 1.2s ease;

    }

    nav ul li a:hover {
        /* text-decoration: underline; */
        color: #20c997;
    }

    .navbar-brand {
        color: #f0ffff;

    }


    .search-bar .search .search__input {
        padding: 0.7em;
        padding-right: 10em;
        background: none;
        outline: none;
        border: none;
        border: 1px solid white;
        background-color: #f0ffff;
        align-self: flex-start;
        font-size: 1.1em;
        font-weight: 600;
        border-radius: 10px;
        text-align: left;
        color: #20c997;
    }














    body {
        /* font-family: 'Arial', sans-serif; Replace with your preferred font */
    }

    /* Contact section styles */
    .contact1 {
        background-color: #f9f9f9;
        padding: 50px 0;
    }

    .contacts .container {
        max-width: 1170px;
        margin: auto;
        /* padding: 0 15px; */
    }

    .contact-view {
        display: flex;
        flex-wrap: wrap;
        align-items: flex-start;
    }

    .cont-details,
    .map-content {
        flex-basis: 50%;
        padding: 15px;
    }

    .cont-details .text-left,
    .map-content .contactct-fm-text {
        margin-bottom: 30px;
    }

    .header-title .sub-title {
        color: #f35b04;
        /* Adjust subtitle color as needed */
        font-size: 18px;
        /* Adjust subtitle font size as needed */
        margin-bottom: 5px;
    }

    .header-title .hny-title {
        color: black;
        /* Adjust heading color as needed */
        font-size: 35px;
        /* Adjust heading font size as needed */
        margin-bottom: 46px;
        margin-top: 8px;
    }

    .cont-top {
        display: flex;
        align-items: center;
        margin-bottom: 40px;
        margin-top: 20px;
        color: black;

    }

    .cont-left {
        margin-right: 15px;
    }

    .cont-right h6 {
        color: black;
        /* Adjust title color as needed */
        font-size: 18px;
        /* Adjust title font size as needed */
        margin-bottom: 5px;
    }

    .cont-right p,
    .cont-right a {
        color: black;
        /* Ajust paragraph color as needed */
        font-size: 16px;
        text-decoration: none;
        /* Adjust paragraph font size as needed */
    }

    .para {
        color: #666;
        font-size: 21px;
    }

    #w3lName {
        display: inline-block;
        width: 47%;
    }

    #w3lSender {
        display: inline-block;
        width: 47%;
        margin-left: 15px;
    }

    #w3lSubject {
        width: 97.55%;
    }

    #w3lMessage {
        width: 97.55%;
        /* padding: 42px; */
    }

    .form-control {
        width: 60%;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #ccc;
        border: none;
        background-color: rgb(233, 233, 233);
        border-color: #f35b04;
        /* border: 2px solid black; */
    }

    .form-control:hover {
        border-color: #f35b04;
        /* background-color: #f9f9f9; */
    }

    .btn-primary {
        background-color: #f35b04;
        /* Adjust button color as needed */
        color: #ffffff;
        padding: 15px 35px;
        border: none;
        cursor: pointer;
        display: inline-block;
        text-align: center;
        border-radius: 6px;
        font-size: 15px;
        font-weight: bold;
        margin-left: 365px;
    }

    .btn-primary:hover {
        background-color: #3d348b;
    }

    /* Responsive styles */
    @media (max-width: 768px) {
        .contact-view {
            flex-direction: column;
        }

        .cont-details,
        .map-content {
            flex-basis: 100%;
        }
    }
</style>
@section('contents')
<section class="contact1" id="contact">
    <div class="contacts">
        <div class="container3">
            <div class="contact-view">
                <div class="cont-details">
                    <div class="text-left">
                        <div class="header-title">
                            <span class="sub-title">Find Us</span>
                            <h3 class="hny-title">{{__('nav.aditional')}}</h3>
                        </div>
                        <p class="para">{{__('nav.email and phone')}}</p>

                    </div>
                    <div class="cont-top">
                        <div class="cont-left">
                            <span class="fa fa-phone"></span>
                        </div>
                        <div class="cont-right">
                            <h6>{{__('nav.pn')}}</h6>
                            <p><a href="tel:+(93) 705 383 191">93774328349, 93780001212</a></p>
                        </div>
                    </div>
                    <div class="cont-top">
                        <div class="cont-left">
                            <span class="fa fa-envelope-o"></span>
                        </div>
                        <div class="cont-right">
                            <h6>{{__('nav.se')}}</h6>
                            <p><a href="mailto:muhammadnazirnaseri@gmail.com"
                                    class="mail">muhammadnazirnazeri@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="cont-top">
                        <div class="cont-left ">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="cont-right">
                            <h6>{{__('nav.oa')}}</h6>
                            <p class="add">Address here,Ningarhar ,Jalalabaad, Darrountta .</p>
                        </div>
                    </div>
                </div>
                <div class="map-content">
                    <div class="contactct-fm ">
                        <div class="contactct-fm-text ">
                            <div class="header-title">
                                <span class="sub-title">{{__('nav.2')}}</span>
                                <h3 class="hny-title ">{{__('nav.fill the form')}}</h3>

                            </div>
                            <p class="para">{{__('nav.fill the blank')}}</p>
                        </div>
                        <form action="/index" method="post">
                            @csrf
                            <div class="twice-two">
                                <input type="text" class="form-control" name="Name" id="w3lName" placeholder="Name">
                                
                                <input type="email" class="form-control" name="Sender" id="w3lSender"
                                placeholder="Email">
                                <span>@error('Name') {{$message}} @enderror</span>
                                <span>@error('email') {{$message}} @enderror</span>

                            </div>
                            <div class="twice">
                                <input type="text" class="form-control" name="w3lSubject" id="w3lSubject"
                                    placeholder="Subject">
                                <span>@error('w3lSubject') {{$message}} @enderror</span>

                            </div>
                            <textarea name="w3lMessage" class="form-control" id="w3lMessage" placeholder="Message"
                                cols="30" rows="5"></textarea>
                                <span>@error('w3lMessage') {{$message}} @enderror</span>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-style mt-4">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="map-iframe">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
                    width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
            </div>

        </div>
</section>
@endsection