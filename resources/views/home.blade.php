@extends('layouts.navbar')

<link rel="stylesheet" href="js/script.js"> 
{{-- <link rel="stylesheet" href="css\style.js">  --}}
{{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

@section('menuContainer')
    {{-- home section  --}}
    <section class="home section" id="home">
        <div class="container-fluid homeContainer mx-auto">
                <section class="mx-auto homeData col show-animate">
                    <h1 class="animate">Since 2018</h1>
                    <hr class="underlineStyle animate">
                    <p class="animate">Five years ago, in 2018, two talented and skilled young entrepreneurs 
                        started a photobooth and photo product business called Joyphotography. Despite facing 
                        numerous obstacles and challenges, in 2019 they recognized the potential in the 
                        digital and creative industry. In May 2019, they embarked on a new venture and 
                        established Prestige, specializing in photography, videography, design, and more. 
                        The name "Prestige" itself signifies status and reputation. With every service offered 
                        by Prestige, they aspire to compete and achieve a high level of prestige accompanied 
                        by the best quality in their respective fields</p>
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
                <img class="img-fluid animate" src="assets\menu2BG2.png" alt="Responsive image" >
            </section>
            <section class="text-center bg-text mx-auto menu2Data show-animate">
                <h1 class="contentTitle animate">ABOUT PRESTIGE</h1>
                <p class="animate">They began by managing the social media accounts of their closest business 
                    partners, starting with three accounts and as time goes by, Prestige has expanded its 
                    collaborations and now provides its services to dozens of national and international business 
                    brands. Prestige has dozens talented of employees, not only that Prestige also managing 
                    professional photography (Commercial Product Photo, etc) and videography (Reels, Commercial 
                    video like advertisement) Prestige also provided professional design that fitting with the 
                    client’s brand.</p>    
            </section>
        </div>
    </section>
        

    {{-- visimisi --}}
    <section class="visimisi section" id="visimisi">
        <div class="visimisiContainer"> 
            <section class="visiContainer show-animate">
                <img src="assets\visiBG.png" class="img-fluid visiBG animate" alt="Responsive image">
                <div class="visiData col animate">
                    <h1 class="animate">VISION</h1>
                    <p class="animate">to become the unrivaled branding consultancy and social mediaspecialist, with an excellent reputation both nationally and internationally.</p>
                </div>
            </section>
            <section class="misiContainer show-animate">
                <img src="assets\misiBG.png" class="img-fluid misiBG animate" alt="Responsive Img">
                <div class="misiData col animate">
                    <h1 class="animate">MISSION</h1>
                    <ul class="animate">
                        <li> <span>To assist SMEs and Business owners extensively</span>
                            <p>Our goal is to aid numerous SMEs and business owners in building and managing theirenterprises through digital and print platforms.</p>
                        </li>
                        <li> <span>Deliver Outstanding Results</span>
                            <p>We are dedicated to delivering exceptional results for our clients, going above and beyond toexceed their expectations.</p>
                        </li>
                        <li> <span>Foster Innovation and Creativity</span>
                            <p>We embrace innovation and creativity in our approaches, constantly exploring new strategiesand ideas to elevate our clients' brands in the ever-evolving digital landscape.</p>
                        </li>
                        <li> <span>Embrace Global Reach</span>
                            <p>We aspire to extend our expertise and services beyond national boundaries, becomingrecognized as a leading player in the global market.</p>
                        </li>
                        <li> <span>Cultivate a Talented Team</span>
                            <p>We prioritize attracting and retaining top talent in the industry. Our team consists of skilledprofessionals who are passionate about their work.</p>
                        </li>
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
                    <p>Our photographers are individuals who pursue the profession or hobby of capturing images or photographs 
                        using a camera. At Prestige, they work in a structured and professional manner.</p>
                </div>
            </div>
            <div class="prestigeTeamList animate">
                <img src="assets\prestigeTeam.png" class="prestigeTeamImg" alt="">
                <div class="prestigeTeamListData grid">
                    <h5>VIDEOGRAPHER</h5>
                    <p>Our videographer is an individual who pursues the profession or hobby of creating and producing videos 
                        using a camera. At Prestige, they work in a structured and professional manner.</p>
                </div>
            </div>
            <div class="prestigeTeamList animate">
                <img src="assets\prestigeTeam.png" class="prestigeTeamImg" alt="">
                <div class="prestigeTeamListData grid">
                    <h5>GRAPHIC DESIGNER</h5>
                    <p>Our graphic designer is a professional who creates visual designs using elements such as images, text, 
                        colors, and other graphics.</p>
                </div>
            </div>
            <div class="prestigeTeamList animate">
                <img src="assets\prestigeTeam.png" class="prestigeTeamImg" alt="">
                <div class="prestigeTeamListData grid">
                    <h5>CONTENT CREATOR</h5>
                    <p>Our content creator is an individual who creates and produces original content for various platforms, 
                        such as social media and others.</p>
                </div>
            </div>
        </section>
    </section>


    {{-- prestige equipment  --}}
    <section class="prestigeEquipment show-animate" id="prestigeEquipment">
        <h1 class="contentTitle">PRESTIGE EQUIPMENT</h1>
        <div class="prestigeEquipmentContainer grid animate">
            <section class="prestigeEquipmentList1">
                <img src="assets\prestigeEquipment1-cropped.png" class="prestigeEquipmentImg" alt="Responsive image">
                <div class="prestigeEquipmentData1" style="color: var(--white-grey)">
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
                <div class="prestigeEquipmentData3" style="color: var(--white-grey)">
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
                    <p class="">We provide comprehensive branding services to help your company build 
                        a strong brand image and stand out in a competitive market. With a strategic and 
                        creative approach, we design a brand identity that reflects the values, vision, 
                        and personality of your company. From creating an appealing logo to selecting 
                        consistent color palettes, typography, and visual styles, we ensure that every 
                        brand element creates a positive and memorable impression on customers.</p>
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
                    <p>We provide professional and effective social media management services to help 
                        your company optimize its online presence. With our expert team, we will design 
                        and implement the right social media strategies to enhance visibility, 
                        engagement, and business growth. We meticulously manage various social media 
                        platforms, creating compelling and relevant content while actively engaging with 
                        your audience.</p>
                    <button class="btn">Lorem ipsum</button>
                </div>                
            </section>
            <section class="sec3 grid col show-animate">
                <div class="menu3Data animate" >
                    <h1>PHOTOGRAPHY PORTOFOLIO</h1>
                    <p>With dedication and creativity, we have captured precious moments in various fields, 
                        ranging from individual portraits, weddings, travels, to commercial activities. 
                        Each photo we present tells a unique story and captures priceless beauty and emotions. 
                        We are committed to delivering stunning results with perfect lighting, skilled 
                        composition, and sharp details. Through our portfolio, you can witness our diverse 
                        expertise and styles, and entrust us to create impressive and unforgettable images 
                        for your company.</p>
                    <button class="btn">Lorem ipsum</button>    
                </div>
                <div class="menu3Img animate">
                    <img src="assets\Asset17@300x.png" alt="" >
                </div>
            </section>
            <section class="sec4 grid col show-animate">
                <div class="menu3Img animate">
                    <img src="assets\TiktokVideo.png" alt="" >
                </div>
                <div class="menu3Data animate">
                    <h1>DESIGN GRAPHIN PORTOFOLIO</h1>
                    <p>We have produced a diverse range of design projects, from iconic logo designs, 
                        attentiongrabbing brochures, captivating magazine layouts, to visually striking 
                        designs for social media. Each of our works is crafted with meticulous attention to 
                        detail, a strong aesthetic sense, and a deep understanding of brand and communication 
                        objectives. We skillfully combine typography, colors, and other visual elements to 
                        create designs that are both stunning and effective in conveying messages</p>
                    <button class="btn">Lorem ipsum</button>
                </div>                
            </section>
            <section class="sec5 grid col show-animate">
                <div class="menu3Data animate" >
                    <h1>DRONE PORTOFOLIO</h1>
                    <p>Our Drone Portfolio page showcases our ability to capture breathtaking aerial views, 
                        photograph hard-to-reach locations, and produce stunning imagery from high altitudes. 
                        From aerial photography for architectural projects, documenting sports activities, to 
                        capturing moments at special events, we bring a fresh and awe-inspiring perspective. 
                        With skilled piloting and high-quality photography capabilities, we create captivating 
                        photos and videos with unique angles and compositions</p>
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
                    <p>As a social media management and branding service provider, we conduct thorough analysis of 
                        our clients’ companies, target audiences, and competitors to identify opportunities and 
                        challenges. Based on this analysis, we formulate appropriate strategies to enhance brand 
                        visibility, audience engagement, and business growth.</p>
                </div>
                <div class="hwwDataContainer animate">
                    <span class="circle"></span>
                    <h5>Creativity in Design and Content</h5>
                    <p>Our team consists of creative and skilled designers who specialize in creating visually 
                        appealing designs and relevant content. We pay attention to elements such as images, text, 
                        colors, and graphics to produce content that grabs attention and reinforces our clients’ 
                        brand messages. Our creativity in design and content helps our clients stand out and 
                        capture attention in a competitive market.</p>
                </div>
                <div class="hwwDataContainer animate">
                    <span class="circle"></span>
                    <h5>Active Social Media Management</h5>
                    <p>We meticulously manage various social media platforms. We develop and execute wellplanned 
                        content strategies, promptly respond to comments and messages from the audience, and 
                        monitor trends and changes in social media algorithms. Through active social media 
                        management, we assist our clients in building strong customer relationships, increasing 
                        interaction, and effectively expanding their online presence.?</p>
                </div>
                <div class="hwwDataContainer animate">
                    <span class="circle"></span>
                    <h5>Collaboration and Communication with Clients</h5>
                    <p>We prioritize close collaboration with our clients. We listen to their needs and visions, 
                        and involve them in the decision-making process. Transparent and open communication 
                        ensures that clients stay engaged and informed about the progress of their campaigns. 
                        Through effective collaboration and communication, we deliver customized branding and 
                        social media management solutions that align with our clients’ needs and help them achieve 
                        their desired marketing goals.</p>
                </div>
            </section>
        </div>
    </section>


    {{-- why you should choose prestige  --}}
    <section class="chooseUs" id="chooseUs">
        <h1 class="contentTitle">WHY YOU SHOULD CHOOSE PRESTIGE</h1>
        <div class="chooseUsContainer grid">
            <div class="chooseUsContainer1">
                <h5 >5 YEARS OF EXPERIENCE AND EXPERTISE</h5>
                <p>We have extensive experience in this industry
                    and a team of dedicated experts. We have
                    successfully worked with various companies and
                    brands, helping them enhance their online
                    presence, strengthen their brand image, and
                    achieve their desired marketing goals. Our deep
                    expertise in branding and social media
                    management allows us to deliver high-quality
                    services and satisfying results.</p>
            </div>
            <div class="chooseUsContainer2">
                <h5>WE WORK WITH MANY INFLUENCERS AND MEDIA PARTNERS</h5>
                <p>We have established strong partnerships with
                    various influencers and media partners as
                    specialists in social media and branding.
                    Through these collaborations, we are able to
                    make a significant impact on our clients' brands.
                    We work with top influencers who hold
                    significant influence in their respective
                    industries. Our collaborations with them help to
                    enhance the visibility of our clients' brands on
                    social media platforms and reach a wider
                    audience.</p>
            </div>
            <div class="chooseUsContainer3">
                <h5>CREATIVITY AND INNOVATION</h5>
                <p>We highly value creativity and innovation in every aspect of
                    our work. We constantly seek new ways to differentiate our
                    clients’ brands in a crowded market. From captivating
                    graphic designs to unique and engaging content, we
                    prioritize creativity to create compelling experiences for the
                    audience. We stay updated with the latest trends and
                    innovate to ensure that our clients’ brands remain fresh,
                    relevant, and connected with their target audience.</p>
            </div>
        </div>
    </section>



    
    {{-- why you should choose prestige  --}}
    <section class="collab" id="collab">    
        <div class="brand">
            <h1 class="contentTitle">BRAND WE WORK WITH</h1>  
            <div class="logoContainer">
                <button class="LeftArrow" onclick="scrollLeft1()">
                    <i class="bi bi-caret-left-fill iconArrow"></i>
                </button>
                <div class="horizontalScroll" id="horizontalScroll">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                </div>
                <button class="rightArrow" onclick="scrollRight1()">
                    <i class="bi bi-caret-right-fill iconArrow"></i>
                </button>
            </div>
            <script>
                function scrollLeft1(){
                    var left = document.querySelector(".horizontalScroll");
                    left.scrollBy(-350, 0)
                    // const element = document.getElementById("myDIV");
                    // element.scrollLeft = 50;
                    // element.scrollTop = 10;
                }
                function scrollRight1(){
                    var right = document.querySelector(".horizontalScroll");
                    right.scrollBy(350, 0)
                }
            </script>
        </div>  
        <div class="influencer">
            <h1 class="contentTitle">INFLUENCER WE COLLAB WITH</h1>    
            <div class="influencerContainer">
                <button class="LeftArrow" onclick="scrollLeft2()">
                    <i class="bi bi-caret-left-fill iconArrow"></i>
                </button>
                <div class="horizontalScroll2" id="horizontalScroll2">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                </div>
                <button class="rightArrow" onclick="scrollRight2()">
                    <i class="bi bi-caret-right-fill iconArrow"></i>
                </button>
            </div>
            <script>
                function scrollLeft2(){
                    var left = document.querySelector(".horizontalScroll2");
                    left.scrollBy(-350, 0)
                }
                function scrollRight2(){
                    var right = document.querySelector(".horizontalScroll2");
                    right.scrollBy(350, 0)
                }
            </script>
        </div>  
        <div class="mediaPartner">
            <h1 class="contentTitle">MEDIA PARTNER</h1> 
            <div class="mediaPartnerContainer">
                <button class="LeftArrow" onclick="scrollLeft3()">
                    <i class="bi bi-caret-left-fill iconArrow"></i>
                </button>
                <div class="horizontalScroll3" id="horizontalScroll3">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                        <img src="assets_ex\stitch.jpg" class="brandImg" alt="Responsive image">
                </div>
                <button class="rightArrow" onclick="scrollRight3()">
                    <i class="bi bi-caret-right-fill iconArrow"></i>
                </button>
            </div>
            <script>
                function scrollLeft3(){
                    var left = document.querySelector(".horizontalScroll3");
                    left.scrollBy(-350, 0)
                }
                function scrollRight3(){
                    var right = document.querySelector(".horizontalScroll3");
                    right.scrollBy(350, 0)
                }
            </script>
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