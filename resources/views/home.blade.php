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
            <section class="text-center bg-text mx-auto menu2Data show-animate">
                <h1 class="contentTitle animate">Lorem ipsum dolor sit amet.</h1>
                <p class="animate">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem perspiciatis consequuntur 
                    assumenda facilis id eos iusto voluptas eaque! Nam cumque, hic similique voluptates, nisi, iste 
                    corporis minima quasi tenetur ad unde esse illum? At, qui.</p>    
            </section>
        </div>
    </section>
        

    {{-- visimisi --}}
    <section class="visimisi section" id="visimisi">
        <div class="visimisiContainer"> 
            <section class="visiContainer show-animate">
                <img src="assets\visi.png" class="img-fluid visiBG animate" alt="Responsive image">
                <div class="visiData col animate">
                    <h1 class="animate">VISION</h1>
                    <p class="animate">to become the unrivaled branding consultancy and social mediaspecialist, with an excellent reputation both nationally and internationally.</p>
                </div>
            </section>
            <section class="misiContainer show-animate">
                <img src="assets\misi.png" class="img-fluid misiBG animate" alt="Responsive Img">
                <div class="misiData col animate">
                    <h1 class="animate">MISION</h1>
                    <ul class="animate">
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nobis minima quaerat deleniti? Dicta a alias aliquid, sit aut vitae temporibus inventore fugiat eligendi laboriosam ex earum ullam, numquam illum!</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam enim provident perspiciatis deserunt. Veniam, dolore?</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam enim provident perspiciatis deserunt. Veniam, dolore?</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam enim provident perspiciatis deserunt. Veniam, dolore?</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam enim provident perspiciatis deserunt. Veniam, dolore?</li>
                    </ul>
                </div>
            </section>
        </div>
    </section>


    {{-- prestige team --}}
    <section class="prestigeTeam section" id="prestigeTeam">
        <h1 class="contentTitle prestigeTeamTitle">PRESTIGE TEAM</h1>
        <section class="prestigeTeamContent container-fluid grid show-animate">
            <div class="prestigeTeamList animate">
                <img src="assets\prestigeTeam.png" class="prestigeTeamImg" alt="">
                <div class="prestigeTeamListData grid">
                    <h5>PHOTOGRAPHER</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia pariatur ad recusandae voluptatem quod odio incidunt quam deserunt, beatae ut.</p>
                </div>
            </div>
            <div class="prestigeTeamList animate">
                <img src="assets\prestigeTeam.png" class="prestigeTeamImg" alt="">
                <div class="prestigeTeamListData grid">
                    <h5>VIDEOGRAPHER</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia pariatur ad recusandae voluptatem quod odio incidunt quam deserunt, beatae ut.</p>
                </div>
            </div>
            <div class="prestigeTeamList animate">
                <img src="assets\prestigeTeam.png" class="prestigeTeamImg" alt="">
                <div class="prestigeTeamListData grid">
                    <h5>GRAPHIC DESIGNER</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia pariatur ad recusandae voluptatem quod odio incidunt quam deserunt, beatae ut.</p>
                </div>
            </div>
            <div class="prestigeTeamList animate">
                <img src="assets\prestigeTeam.png" class="prestigeTeamImg" alt="">
                <div class="prestigeTeamListData grid">
                    <h5>CONTENT CREATOR</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia pariatur ad recusandae voluptatem quod odio incidunt quam deserunt, beatae ut.</p>
                </div>
            </div>
        </section>
    </section>


    {{-- prestige equipment  --}}
    <section class="prestigeEquipment show-animate" id="prestigeEquipment">
        <h1 class="contentTitle">PRESTTIGE EQUIPMENT</h1>
        <div class="prestigeEquipmentContainer grid animate">
            <section class="prestigeEquipmentList1">
                <img src="assets\prestigeEquipment1-cropped.png" class="prestigeEquipmentImg" alt="Responsive image">
                <div class="prestigeEquipmentData" style="color: var(--white-grey)">
                    <h5>CAMERA</h5>
                    <p>Sony A7 Mark III</p>
                    <p>Sony A7 Mark IV</p>
                    <p>Fujifilm X-H1</p>
                    <p>Fujifilm X-T100</p>
                    <p>Fujifilm X-T30</p>
                </div>
            </section>
            <section class="prestigeEquipmentList2">
                <img src="assets\prestigeEquipment2-cropped.png" class="prestigeEquipmentImg" alt="Responsive image">
                <div class="prestigeEquipmentData" style="color: var(--dark-blue)">
                    <h5>DRONE</h5>
                    <p>Drone DJI Mavvic Pro</p>
                    <p>Drone DJI Air 2 Combo</p>
                </div>
            </section>
            <section class="prestigeEquipmentList3">
                <img src="assets\prestigeEquipment3-cropped.png" class="prestigeEquipmentImg" alt="Responsive image">
                <div class="prestigeEquipmentData" style="color: var(--white-grey)">
                    <h5>PC/LAPTOP</h5>
                    <p>Macbook Pro M2</p>
                    <p>Macbook Pro 2017</p>
                    <p>Macbook Pro Air 2015, 2016, 2017</p>
                    <p>Asus ROG G73JH</p>
                </div>
            </section>
            <section class="prestigeEquipmentList4">
                <img src="assets\prestigeEquipment4-cropped.png" class="prestigeEquipmentImg" alt="Responsive image">
                <div class="prestigeEquipmentData" style="color: var(--dark-blue)">
                    <h5>GADGET</h5>
                    <p>Ipad Pro 2022</p>
                    <p>Iphone  13</p>
                    <p>Iphone 8+</p>
                    <p>Iphone 11 Promax</p>
                <div>
            </section>
        </div>
    </section>


    
    {{-- prestige Office  --}}
    <section class="prestigeOffice" id="prestigeOffice">
        <h1 class="contentTitle">PRESTIGE OFFICE</h1>
        <section class="prestigeOfficeContainer show-animate">
            <img src="assets\maps.png" class="maps animate" alt="Responsive image">
            <img src="assets\arrowMapDown.png" class="arrowMapDown" alt="Responsive image">
            <img src="assets\arrowMapUp.png" class="arrowMapUp" alt="Responsive image">
            <img src="assets\officeBTM.png" class="officeBTM animate" alt="Responsive image">
            <img src="assets\officeSG.png" class="officeSG animate" alt="Responsive image">
        </section>
    </section>


    {{-- menu3 section  --}}
    <section class="menu3 Section" id="menu3">
        <h1 class="contentTitle">OUR SERVICES</h1>
        <div class="menu3Container grid">
            <section class="sec1 grid col show-animate">
                <div class= "menu3Data animate">
                    <h1 class="">Branding Solution</h1>
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
                    <h1>SOCIAL MEDIA MANAGEMENT</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis eius autem quos 
                        praesentium modi excepturi et, nihil doloremque laboriosam voluptate vero nostrum 
                        accusamus quam minima quae numquam! Dignissimos, doloremque perspiciatis!</p>
                    <button class="btn">Lorem ipsum</button>
                </div>                
            </section>
            <section class="sec3 grid col show-animate">
                <div class="menu3Data animate" >
                    <h1>PHOTOGRAPHY PORTOFOLIO</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis eius autem quos 
                        praesentium modi excepturi et, nihil doloremque laboriosam voluptate vero nostrum 
                        accusamus quam minima quae numquam! Dignissimos, doloremque perspiciatis!</p>
                    <button class="btn">Lorem ipsum</button>    
                </div>
                <div class="menu3Img animate">
                    <img src="assets\Asset17@300x.png" alt="" >
                </div>
            </section>
            <section class="sec2 grid col show-animate">
                <div class="menu3Img animate">
                    <img src="assets\TiktokVideo.png" alt="" >
                </div>
                <div class="menu3Data animate">
                    <h1>DESIGN GRAPHIN PORTOFOLIO</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis eius autem quos 
                        praesentium modi excepturi et, nihil doloremque laboriosam voluptate vero nostrum 
                        accusamus quam minima quae numquam! Dignissimos, doloremque perspiciatis!</p>
                    <button class="btn">Lorem ipsum</button>
                </div>                
            </section>
            <section class="sec3 grid col show-animate">
                <div class="menu3Data animate" >
                    <h1>DRONE PORTOFOLIO</h1>
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


    {{-- how we work  --}}
    <section class="howWeWork section" id="howWeWork">
        <div class="howWeWorkContainer">
            <h1 class="contentTitle"> HOW WE WORK</h1>
            <section class="hwwContent grid show-animate">
                <div class="hwwDataContainer animate">
                    <span class="circle"></span>
                    <h5>In-Depth Analysis and Strategy</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum harum et a quidem omnis 
                        voluptatum ullam cupiditate distinctio dolorem, aliquid quis facere rem, sit voluptatibus! 
                        Nostrum nobis repellendus veritatis, atque asperiores laborum maxime! Cupiditate fugiat 
                        commodi cumque aut, consectetur iusto ducimus nihil vel dignissimos eaque. Eos maiores 
                        voluptas sit et?</p>
                </div>
                <div class="hwwDataContainer animate">
                    <span class="circle"></span>
                    <h5>Creativity in Design and Content</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum harum et a quidem omnis 
                        voluptatum ullam cupiditate distinctio dolorem, aliquid quis facere rem, sit voluptatibus! 
                        Nostrum nobis repellendus veritatis, atque asperiores laborum maxime! Cupiditate fugiat 
                        commodi cumque aut, consectetur iusto ducimus nihil vel dignissimos eaque. Eos maiores 
                        voluptas sit et?</p>
                </div>
                <div class="hwwDataContainer animate">
                    <span class="circle"></span>
                    <h5>Active Social Media Management</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum harum et a quidem omnis 
                        voluptatum ullam cupiditate distinctio dolorem, aliquid quis facere rem, sit voluptatibus! 
                        Nostrum nobis repellendus veritatis, atque asperiores laborum maxime! Cupiditate fugiat 
                        commodi cumque aut, consectetur iusto ducimus nihil vel dignissimos eaque. Eos maiores 
                        voluptas sit et?</p>
                </div>
                <div class="hwwDataContainer animate">
                    <span class="circle"></span>
                    <h5>Collaboration and Communication with Clients</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium illum, odit nulla 
                        suscipit rem nam id magni maxime veritatis, voluptas libero ex autem eum. Quae facere 
                        veritatis minima deleniti necessitatibus? Magni molestias rem unde voluptates error 
                        nostrum ducimus esse beatae corporis, aperiam ipsam at, asperiores harum possimus 
                        recusandae est ratione laborum quidem iusto, numquam aliquid nam magnam vero. Reiciendis, 
                        quas! Praesentium quos repellat id sunt at explicabo molestias obcaecati autem dolores 
                        dignissimos! Nisi quam iure cumque ad et in perferendis.</p>
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