@extends('layouts.navbar')

<link rel="stylesheet" href="js/script.js"> 
{{-- <link rel="stylesheet" href="css\style.js">  --}}
{{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

@section('menuContainer')
    {{-- home section  --}}
    <section class="home section" id="home">
        <div class="container-fluid homeContainer mx-auto row">
                <section class="mx-auto homeData col show-animate">
                    <h1 class="animate">Lorem, ipsum dolor.</h1>
                    <hr class="underlineStyle animate">
                    <p class="animate">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis eius autem quos 
                        praesentium modi excepturi et, nihil doloremque laboriosam voluptate vero nostrum 
                        accusamus quam minima quae numquam! Dignissimos, doloremque perspiciatis!</p>
                </section>
                <section class="homeImg col show-animate">
                    <img src="assets\homeImage.png" alt="" class="img animate">
                </section>
        </div>
    </section>

    {{-- menu2 section  --}}
    {{-- ini section background  --}}
    {{-- <section class="menu2 section" id="menu2">
        <div class="container-fluid menu2Container grid">
            <div class="text-center bg-text menu2Data mx-auto">
                <h1>Lorem ipsum dolor sit amet.</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem perspiciatis consequuntur 
                    assumenda facilis id eos iusto voluptas eaque! Nam cumque, hic similique voluptates, nisi, iste 
                    corporis minima quasi tenetur ad unde esse illum? At, qui.</p>
            </div>
        </div>
    </section> --}}
    {{-- ini section timpa  --}}
    <section class="menu2 section" id="menu2">
        <div class="container-fluid menu2Container">
            <section class="menu2Img show-animate">
                <img class="img-fluid animate" src="assets\menu2BG.png" alt="Responsive image" >
            </section>
                <div class="text-center bg-text menu2Data mx-auto">
                    <section class="secMenu2Data show-animate">
                        <h1 class="animate">Lorem ipsum dolor sit amet.</h1>
                        <p class="animate">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem perspiciatis consequuntur 
                            assumenda facilis id eos iusto voluptas eaque! Nam cumque, hic similique voluptates, nisi, iste 
                            corporis minima quasi tenetur ad unde esse illum? At, qui.</p>
                    </section>
            </div>
        </div>
    </section>

    {{-- menu3 section  --}}
    <section class="menu3 Section" id="menu3">
        <div class="menu3Container grid">
            <section class="sec1 grid col show-animate">
                <div class= "menu3Data animate">
                    <h1 class="">Lorem, ipsum dolor.</h1>
                    <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis eius autem quos 
                        praesentium modi excepturi et, nihil doloremque laboriosam voluptate vero nostrum 
                        accusamus quam minima quae numquam! Dignissimos, doloremque perspiciatis!</p>
                    <button class="btn">Lorem ipsum</button>
                    </div>
                <div class="menu3Img animate">
                    <img src="assets\InstagramPost3D.png" alt="" >
                </div>
            </section>
            <section class="sec2 grid col show-animate">
                <div class="menu3Img animate">
                    <img src="assets\TiktokVideo.png" alt="" >
                </div>
                <div class="menu3Data animate">
                    <h1>Lorem, ipsum dolor.</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis eius autem quos 
                        praesentium modi excepturi et, nihil doloremque laboriosam voluptate vero nostrum 
                        accusamus quam minima quae numquam! Dignissimos, doloremque perspiciatis!</p>
                    <button class="btn">Lorem ipsum</button>
                </div>                
            </section>
            <section class="sec3 grid col show-animate">
                <div class="menu3Data animate" >
                    <h1>Lorem, ipsum dolor.</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis eius autem quos 
                        praesentium modi excepturi et, nihil doloremque laboriosam voluptate vero nostrum 
                        accusamus quam minima quae numquam! Dignissimos, doloremque perspiciatis!</p>
                    <button class="btn">Lorem ipsum</button>    
                </div>
                <div class="menu3Img animate">
                    <img src="assets\Asset17@300x.png" alt="" >
                </div>
            </section>
         </div>
    </section>

    {{-- Contact section  --}}
    {{-- ini bagian background --}}
    {{-- <section class="contact section" id="contact">
        <div class="container-fluid contactContainer">
            <div class="contactInnerBoard row">
                <div class="contactData col">                    
                    <h1>Lorem, ipsum dolor.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime repudiandae ad quaerat magnam. 
                        Harum ab accusamus voluptatum dolores, eos quaerat.</p>
                </div>
                <div class="contactInput col">
                    <form name="submit-to-google-sheet" action="" class="contactForm" id="contactForm">
                        <input type="text" id="name" name="name" placeholder="Name">
                        <input type="text" id="subject" name="subject" placeholder="Subject">
                        <input type="text" id="email" name="email" placeholder="Email">
                        <input class="submit" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- ini bagian timpa --}}
    <section class="contact Section" id="contact">
        <div class="contactContainer">    
            <section class="contactImg show-animate">
                <img class="img-fluid blankBoardImg animate" src="assets\Asset18@300x.png" alt="Responsive image" >
            </section> 
            <section class="contactInnerBoard row show-animate">
                <div class="contactData col animate">                    
                    <h1>Lorem, ipsum dolor.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime repudiandae ad quaerat magnam. 
                        Harum ab accusamus voluptatum dolores, eos quaerat.</p>
                </div>
                <div class="contactInput col animate">
                    <form name="submit-to-google-sheet" action="" class="contactForm" id="contactForm">
                        <input type="text" id="name" name="name" placeholder="Name">
                        <input type="text" id="subject" name="subject" placeholder="Subject">
                        <input type="text" id="email" name="email" placeholder="Email">
                        <input class="submit" type="submit" value="Submit">
                    </form>
                </div>
            </section>
        </div>
    </section>
@endsection


{{-- footer --}}
@section('footer')
    <section class="foooter section row" id="footer">
        <div class="container-fluid footerContainer row">
            <div class="aboutCompany col">
                <h5 class="footerTitle">About Company</h5>
                <p class="footerList">Lorem Ipsum</p>
                <p class="footerList">Lorem Ipsum</p>
                <p class="footerList">Lorem Ipsum</p>
                <p class="footerList">Lorem Ipsum</p>
            </div>
            <div class="services col">
                <h5 class="footerTitle">Services</h5>
                <p class="footerList">Lorem Ipsum</p>
                <p class="footerList">Lorem Ipsum</p>
                <p class="footerList">Lorem Ipsum</p>
                <p class="footerList">Lorem Ipsum</p>
            </div>
            <div class="socialMedia col">
                <div class="footerSocial row">
                    <h5 class="footerTitle">
                        Social Media
                    </h5>
                    <div class="socialIcon col">
                        <a href="https://www.facebook.com" target="_blank" class="footerSocialLink">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com" target="_blank" class="footerSocialLink">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.twitter.com" target="_blank" class="footerSocialLink">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="https://www.youtube.com" target="_blank" class="footerSocialLink">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="https://www.gmil.com" target="_blank" class="footerSocialLink">
                            <i class="bi bi-envelope-fill"></i>
                        </a>
                    </div>
                </div>
            </div>    
        </div>        
        <span class="footerCopyright">
            copyright Lorem ipsum, dolor sit amet consectetur adipisicing.
        </span>
    </section>
@endsection

<script>

</script>