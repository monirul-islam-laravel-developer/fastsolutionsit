@extends('front.master.master')
<meta name="description" content="@yield('FirstSolutionsIT')">
<meta name="keywords" content="@yield('keyword', 'Laravel PHP framework, PHP Laravel project, PHP eCommerce website,PHP blog creation,PHP portfolio website,PHP website optimization,Laravel development in Bangladesh,Laravel web development BD,Learn Laravel in Bangladesh,Best Laravel developers in Bangladesh,Laravel project development Bangladesh,Laravel web application Bangladesh,Laravel solutions BD,Laravel expert services in BD,Laravel eCommerce development Bangladesh,Custom Laravel applications in BD,Laravel API development Bangladesh,Laravel website optimization services,Laravel mobile application development BD,Laravel consulting services in Bangladesh,Laravel MVC architecture in BD,Laravel deployment solutions in BD,Top Laravel developers in Dhaka,Affordable Laravel development BD,Local Laravel agencies in Bangladesh,Best Laravel projects in Bangladesh,Laravel support services in Bangladesh,Laravel digital solutions in Bangladesh,Laravel business solutions BD,Digital marketing for Laravel websites in Bangladesh,SEO for Laravel websites BD,Laravel news website,Latest news in Bangladesh,Online news portal Bangladesh,Laravel eCommerce,Laravel online store,Laravel eCommerce platform,Laravel eCommerce website,Laravel multi-vendor eCommerce,Laravel eCommerce themes,Building an eCommerce site with Laravel,Laravel front-end integration for eCommerce,Web development Bangladesh,Bangladesh web design services,SEO services in Bangladesh,Ecommerce website development BD,Content writing services BD,Website maintenance services BD,Ecommerce solutions for small businesses in Bangladesh,Custom software solutions Bangladesh,Best web development company,Affordable web development,Custom web development,Responsive web design,Ecommerce web development,Web application development,Website design and development,Freelance web developer,Full-stack web development,PHP web development,JavaScript web development,UI/UX design services,Mobile-friendly website development,SEO-friendly web development,Web development for startups,Vue.js web development, Vue.js developer Bangladesh, best Vue.js development company, Vue.js ecommerce development, Vue.js application development, Vue.js frontend framework, Vue.js services in Bangladesh, Vue.js consulting services, Vue.js development agency, affordable Vue.js development, custom Vue.js development, Vue.js UI design, Vue.js for startups, Vue.js web application, Vue.js component development, Vue.js SPA development, Vue.js for mobile apps, Vue.js integration services, hire Vue.js developer, professional Vue.js development, Vue.js for enterprise solutions, Vue.js web development tutorial, learn Vue.js in Bangladesh, Vue.js web solutions, Vue.js template design, Vue.js project management, Vue.js API integration, Vue.js and Laravel development, Vue.js with Node.js, Vue.js for frontend development, Vue.js responsive design, Vue.js development cost, Vue.js performance optimization, Vue.js for small businesses, Vue.js community in Bangladesh, Vue.js development trends, Vue.js user interface, Vue.js state management, Vue.js plugins and libraries, Vue.js for real-time applications, Vue.js development tools, Vue.js testing and debugging, Vue.js event handling, Vue.js lifecycle hooks, Vue.js routing with Vue Router, Vue.js state management with Vuex, Vue.js best practices, Vue.js security measures, Vue.js documentation, Vue.js for multi-page applications, Vue.js with Bootstrap, Vue.js with Tailwind CSS, Vue.js for SEO optimization, Vue.js and Firebase integration, Vue.js for data visualization, Vue.js performance metrics, Vue.js project showcase, Vue.js application architecture, Vue.js tutorial for beginners, Vue.js online courses, Vue.js training in Bangladesh, Vue.js freelancing, Vue.js remote work opportunities, Vue.js job openings in Bangladesh, Vue.js for responsive websites, Vue.js application security, Vue.js user experience design, Vue.js component libraries, Vue.js for content management systems, Vue.js for web portals, Vue.js integration with WordPress, Vue.js and RESTful APIs, Vue.js in the digital age, Vue.js and microservices architecture, Vue.js community events in Bangladesh, Vue.js for data-driven applications, Vue.js in mobile-first design, Vue.js for accessibility, Vue.js code splitting techniques, Vue.js with GraphQL, Vue.js performance enhancements, Vue.js user authentication, Vue.js and server-side rendering, Vue.js for social media applications, Vue.js for online marketplaces, Vue.js development workshops, Vue.js for interactive websites, Vue.js integration with payment gateways, Vue.js and responsive images, Vue.js for event-driven applications, Vue.js best UI libraries, Vue.js and agile development, Vue.js for building prototypes, Vue.js with Webpack, Vue.js state management patterns.
,Vue.js eCommerce development, eCommerce website Bangladesh, online shopping BD, best eCommerce platforms, Vue.js news website development, news portal Bangladesh, hospital management system BD, Vue.js hospital management, hospital software Bangladesh, school management system BD, Vue.js school management, educational website Bangladesh, blogging platform BD, Vue.js blog development, content management system Bangladesh, Vue.js content management, digital marketing services BD, web application development BD, custom web solutions, responsive web design Bangladesh, web development company BD, affordable web services, web hosting Bangladesh, SEO services BD, Vue.js mobile app development, social media integration BD, payment gateway integration, eCommerce SEO strategies, online store development BD, Vue.js for online marketplace, news aggregator website BD, online education platform Bangladesh, hospital information system BD, patient management system Bangladesh, Vue.js project management tools, interactive website design, user-friendly eCommerce site, website performance optimization, web analytics services, website maintenance services BD, web development trends in Bangladesh, Vue.js for real-time applications, data management solutions BD, digital transformation services, Vue.js project showcase, Vue.js with Laravel for eCommerce, Vue.js for healthcare applications, responsive design for eCommerce, Vue.js for news applications, online booking system BD, online food delivery website, real estate website development BD, Vue.js for property management, event management system BD, Vue.js for event ticketing, local business directory BD, website for non-profits Bangladesh, educational blog development, Vue.js for interactive learning, corporate website development BD, Vue.js for small businesses, eCommerce trends in Bangladesh, Vue.js with RESTful API, web security services BD, Vue.js for blogging platforms, project management software BD, cloud services for web applications, website accessibility solutions, online ticket booking system, Vue.js for online courses, Vue.js dashboard development, Vue.js for data visualization, Vue.js with Bootstrap for web design, web application security BD, Vue.js user interface design, customer relationship management BD, Vue.js for CRM applications, Vue.js for social media platforms, local eCommerce solutions BD, best CMS for eCommerce, Vue.js for affiliate marketing, online support ticket system, website localization services, Vue.js with GraphQL, online appointment scheduling BD, Vue.js for HR management systems, digital product sales platform BD, multi-vendor eCommerce website, news subscription website BD, Vue.js for online forums, web development workshops BD.
,Laravel eCommerce development, eCommerce website Bangladesh, online shopping BD, Laravel news website development, news portal Bangladesh, hospital management system BD, Laravel hospital management, hospital software Bangladesh, school management system BD, Laravel school management, educational website Bangladesh, blogging platform BD, Laravel blog development, content management system Bangladesh, Laravel content management, digital marketing services BD, web application development BD, custom web solutions, responsive web design Bangladesh, web development company BD, affordable web services, web hosting Bangladesh, SEO services BD, Laravel mobile app development, social media integration BD, payment gateway integration, eCommerce SEO strategies, online store development BD, Laravel for online marketplace, news aggregator website BD, online education platform Bangladesh, hospital information system BD, patient management system Bangladesh, Laravel project management tools, interactive website design, user-friendly eCommerce site, website performance optimization, web analytics services, website maintenance services BD, web development trends in Bangladesh, Laravel for real-time applications, data management solutions BD, digital transformation services, Laravel project showcase, Laravel with Vue.js for eCommerce, Laravel for healthcare applications, responsive design for eCommerce, Laravel for news applications, online booking system BD, online food delivery website, real estate website development BD, Laravel for property management, event management system BD, Laravel for event ticketing, local business directory BD, website for non-profits Bangladesh, educational blog development, Laravel for interactive learning, corporate website development BD, Laravel for small businesses, eCommerce trends in Bangladesh, Laravel with RESTful API, web security services BD, Laravel for blogging platforms, project management software BD, cloud services for web applications, website accessibility solutions, online ticket booking system, Laravel for online courses, Laravel dashboard development, Laravel for data visualization, Laravel with Bootstrap for web design, web application security BD, Laravel user interface design, customer relationship management BD, Laravel for CRM applications, Laravel for social media platforms, local eCommerce solutions BD, best CMS for eCommerce, Laravel for affiliate marketing, online support ticket system, website localization services, Laravel with GraphQL, online appointment scheduling BD, Laravel for HR management systems, digital product sales platform BD, multi-vendor eCommerce website, news subscription website BD, Laravel for online forums, web development workshops BD.
,Laravel 11 eCommerce development, Laravel 11 news website development, Laravel 11 hospital management system, Laravel 11 school management system, Laravel 11 blog development, Laravel 11 online shopping BD, Laravel 11 news portal Bangladesh, Laravel 11 healthcare software, Laravel 11 educational website, Laravel 11 content management system, Laravel 11 responsive web design, Laravel 11 digital marketing services, Laravel 11 web application development, Laravel 11 custom web solutions, Laravel 11 web hosting services, Laravel 11 SEO services BD, Laravel 11 payment gateway integration, Laravel 11 online store development, Laravel 11 eCommerce SEO strategies, Laravel 11 news aggregator website, Laravel 11 online education platform, Laravel 11 hospital information system, Laravel 11 patient management software, Laravel 11 project management tools, Laravel 11 interactive website design, Laravel 11 user-friendly eCommerce site, Laravel 11 website performance optimization, Laravel 11 web analytics services, Laravel 11 website maintenance services, Laravel 11 web development trends, Laravel 11 real-time applications, Laravel 11 data management solutions, Laravel 11 digital transformation services, Laravel 11 project showcase, Laravel 11 Vue.js integration, Laravel 11 healthcare applications, Laravel 11 responsive design, Laravel 11 news applications, Laravel 11 online booking system, Laravel 11 online food delivery website, Laravel 11 real estate website development, Laravel 11 property management software, Laravel 11 event management system, Laravel 11 event ticketing software, Laravel 11 local business directory, Laravel 11 non-profit website development, Laravel 11 educational blog platform, Laravel 11 interactive learning tools, Laravel 11 corporate website development, Laravel 11 solutions for small businesses, Laravel 11 eCommerce trends, Laravel 11 RESTful API development, Laravel 11 web security services, Laravel 11 blogging platforms, Laravel 11 project management software, Laravel 11 cloud services, Laravel 11 website accessibility solutions, Laravel 11 online ticket booking system, Laravel 11 online courses platform, Laravel 11 dashboard development, Laravel 11 data visualization tools, Laravel 11 Bootstrap integration, Laravel 11 application security measures, Laravel 11 user interface design, Laravel 11 CRM applications, Laravel 11 social media platforms, Laravel 11 local eCommerce solutions, Laravel 11 CMS for eCommerce, Laravel 11 affiliate marketing solutions, Laravel 11 online support ticket system, Laravel 11 website localization services, Laravel 11 online appointment scheduling, Laravel 11 HR management systems, Laravel 11 digital product sales platform, Laravel 11 multi-vendor eCommerce website, Laravel 11 news subscription website, Laravel 11 online forums, Laravel 11 web development workshops.
,PHP eCommerce development, PHP news website development, PHP hospital management system, PHP school management system, PHP blog development, PHP online shopping BD, PHP news portal Bangladesh, PHP healthcare software, PHP educational website, PHP content management system, PHP responsive web design, PHP digital marketing services, PHP web application development, PHP custom web solutions, PHP web hosting services, PHP SEO services BD, PHP payment gateway integration, PHP online store development, PHP eCommerce SEO strategies, PHP news aggregator website, PHP online education platform, PHP hospital information system, PHP patient management software, PHP project management tools, PHP interactive website design, PHP user-friendly eCommerce site, PHP website performance optimization, PHP web analytics services, PHP website maintenance services, PHP web development trends, PHP real-time applications, PHP data management solutions, PHP digital transformation services, PHP project showcase, PHP Vue.js integration, PHP healthcare applications, PHP responsive design, PHP news applications, PHP online booking system, PHP online food delivery website, PHP real estate website development, PHP property management software, PHP event management system, PHP event ticketing software, PHP local business directory, PHP non-profit website development, PHP educational blog platform, PHP interactive learning tools, PHP corporate website development, PHP solutions for small businesses, PHP eCommerce trends, PHP RESTful API development, PHP web security services, PHP blogging platforms, PHP project management software, PHP cloud services, PHP website accessibility solutions, PHP online ticket booking system, PHP online courses platform, PHP dashboard development, PHP data visualization tools, PHP Bootstrap integration, PHP application security measures, PHP user interface design, PHP CRM applications, PHP social media platforms, PHP local eCommerce solutions, PHP CMS for eCommerce, PHP affiliate marketing solutions, PHP online support ticket system, PHP website localization services, PHP online appointment scheduling, PHP HR management systems, PHP digital product sales platform, PHP multi-vendor eCommerce website, PHP news subscription website, PHP online forums, PHP web development workshops.
,latest eCommerce trends BD, latest news website development, hospital management system updates, school management system innovations, blog development trends BD, online shopping websites BD, news portal features Bangladesh, healthcare management software updates, educational website trends BD, latest content management systems, responsive web design techniques BD, digital marketing strategies BD, web application development advancements, custom web solutions BD, latest web hosting services, SEO best practices BD, new payment gateway solutions, innovative online store designs, eCommerce SEO techniques, news aggregator platforms BD, online education trends Bangladesh, hospital information system enhancements, patient management software improvements, project management tool advancements, interactive web design trends BD, user-friendly eCommerce solutions, website performance optimization tips, web analytics tools updates, website maintenance best practices BD, latest web development technologies, real-time application development trends, effective data management solutions, digital transformation strategies BD, project showcase websites, Vue.js eCommerce applications, healthcare application innovations, responsive design updates BD, new news application features, online booking system advancements, food delivery website innovations BD, real estate website trends, property management software improvements, event management system advancements, event ticketing platform updates, local business directory innovations, non-profit website enhancements, educational blog trends BD, interactive learning platform developments, corporate website updates, small business web solutions BD, current eCommerce trends, RESTful API developments, web security enhancements BD, blogging platform innovations, project management software updates, cloud service improvements, website accessibility advancements BD, online ticket booking innovations, online course platform updates, dashboard development trends, data visualization advancements BD, Bootstrap design updates, application security measures, user interface design trends, CRM software updates BD, social media platform integrations, local eCommerce innovations BD, best CMS for eCommerce, affiliate marketing advancements, online support ticket system improvements, website localization innovations, appointment scheduling system updates, HR management software trends BD, digital product sales platform advancements, multi-vendor eCommerce solutions, news subscription service updates, online forum developments, latest web development workshops BD.
,পিএইচপি ই-কমার্স সাইট, পিএইচপি ব্লগ সাইট, পিএইচপি নিউজ সাইট, পিএইচপি সোশ্যাল মিডিয়া প্ল্যাটফর্ম, পিএইচপি ফোরাম সাইট, পিএইচপি শিক্ষা সাইট, পিএইচপি হসপিটাল ম্যানেজমেন্ট সিস্টেম, পিএইচপি হোটেল ম্যানেজমেন্ট সিস্টেম, পিএইচপি রিয়েল এস্টেট সাইট, পিএইচপি বিজনেস ডিরেক্টরি, পিএইচপি পোর্টফোলিও সাইট, পিএইচপি কনফারেন্স ম্যানেজমেন্ট সিস্টেম, পিএইচপি ইভেন্ট ম্যানেজমেন্ট সিস্টেম, পিএইচপি পার্সোনাল ব্লগ, পিএইচপি এফিলিয়েট মার্কেটিং সাইট, পিএইচপি সার্ভিস বুকিং সাইট, পিএইচপি ফাইল শেয়ারিং সাইট, পিএইচপি ডিজিটাল মার্কেটিং সাইট, পিএইচপি কনটেন্ট ম্যানেজমেন্ট সিস্টেম, পিএইচপি ক্যাম্পেইন ম্যানেজমেন্ট সিস্টেম, পিএইচপি গ্রাফিক ডিজাইন সাইট, পিএইচপি স্টার্টআপ ওয়েবসাইট, পিএইচপি নিউজলেটার সিস্টেম, পিএইচপি ক্লাসিফাইড সাইট, পিএইচপি অনলাইন টেস্টিং সাইট, পিএইচপি প্রশ্নোত্তর সাইট, পিএইচপি রেসিপি শেয়ারিং সাইট, পিএইচপি ফটোগ্রাফি পোর্টফোলিও সাইট, পিএইচপি ভিডিও শেয়ারিং সাইট, পিএইচপি কর্পোরেট সাইট, পিএইচপি প্ল্যানিং টুলস, পিএইচপি অনলাইন গেম সাইট, পিএইচপি চ্যাট অ্যাপ্লিকেশন, পিএইচপি পণ্য প্রদর্শনী সাইট, পিএইচপি অফিস ম্যানেজমেন্ট সিস্টেম, পিএইচপি অনলাইন শিক্ষার প্ল্যাটফর্ম, পিএইচপি ই-লার্নিং সাইট, পিএইচপি ক্যারিয়ার পোর্টাল, পিএইচপি নিউজ অ্যাগ্রিগেটর, পিএইচপি সেলফ-কেয়ার সাইট, পিএইচপি টিম ম্যানেজমেন্ট সিস্টেম, পিএইচপি জনবল নিয়োগ সাইট, পিএইচপি পরিবহন ম্যানেজমেন্ট সিস্টেম, পিএইচপি অনলাইন শপিং প্ল্যাটফর্ম, পিএইচপি ইনভেন্টরি ম্যানেজমেন্ট সিস্টেম, পিএইচপি আর্থিক সিস্টেম, পিএইচপি স্টক ম্যানেজমেন্ট সিস্টেম, পিএইচপি রিসোর্স শেয়ারিং সাইট, পিএইচপি ফিনান্সিয়াল মার্কেট প্ল্যাটফর্ম, পিএইচপি কর্পোরেট ব্লগ, পিএইচপি গ্যালারি সাইট, পিএইচপি ব্যবসায়িক সাইট, পিএইচপি অনলাইন ক্যালেন্ডার, পিএইচপি অনলাইন পরীক্ষার প্ল্যাটফর্ম।
,লারাভেল ই-কমার্স সাইট, লারাভেল ব্লগ সাইট, লারাভেল নিউজ সাইট, লারাভেল সোশ্যাল মিডিয়া প্ল্যাটফর্ম, লারাভেল ফোরাম সাইট, লারাভেল শিক্ষা সাইট, লারাভেল হাসপাতাল ম্যানেজমেন্ট সিস্টেম, লারাভেল হোটেল ম্যানেজমেন্ট সিস্টেম, লারাভেল রিয়েল এস্টেট সাইট, লারাভেল বিজনেস ডিরেক্টরি, লারাভেল পোর্টফোলিও সাইট, লারাভেল কনফারেন্স ম্যানেজমেন্ট সিস্টেম, লারাভেল ইভেন্ট ম্যানেজমেন্ট সিস্টেম, লারাভেল পার্সোনাল ব্লগ, লারাভেল অ্যাফিলিয়েট মার্কেটিং সাইট, লারাভেল সার্ভিস বুকিং সাইট, লারাভেল ফাইল শেয়ারিং সাইট, লারাভেল ডিজিটাল মার্কেটিং সাইট, লারাভেল কনটেন্ট ম্যানেজমেন্ট সিস্টেম, লারাভেল ক্যাম্পেইন ম্যানেজমেন্ট সিস্টেম, লারাভেল গ্রাফিক ডিজাইন সাইট, লারাভেল স্টার্টআপ ওয়েবসাইট, লারাভেল নিউজলেটার সিস্টেম, লারাভেল ক্লাসিফাইড সাইট, লারাভেল অনলাইন টেস্টিং সাইট, লারাভেল প্রশ্নোত্তর সাইট, লারাভেল রেসিপি শেয়ারিং সাইট, লারাভেল ফটোগ্রাফি পোর্টফোলিও সাইট, লারাভেল ভিডিও শেয়ারিং সাইট, লারাভেল কর্পোরেট সাইট, লারাভেল প্ল্যানিং টুলস, লারাভেল অনলাইন গেম সাইট, লারাভেল চ্যাট অ্যাপ্লিকেশন, লারাভেল পণ্য প্রদর্শনী সাইট, লারাভেল অফিস ম্যানেজমেন্ট সিস্টেম, লারাভেল অনলাইন শিক্ষার প্ল্যাটফর্ম, লারাভেল ই-লার্নিং সাইট, লারাভেল ক্যারিয়ার পোর্টাল, লারাভেল নিউজ অ্যাগ্রিগেটর, লারাভেল সেলফ-কেয়ার সাইট, লারাভেল টিম ম্যানেজমেন্ট সিস্টেম, লারাভেল জনবল নিয়োগ সাইট, লারাভেল পরিবহন ম্যানেজমেন্ট সিস্টেম, লারাভেল অনলাইন শপিং প্ল্যাটফর্ম, লারাভেল ইনভেন্টরি ম্যানেজমেন্ট সিস্টেম, লারাভেল আর্থিক সিস্টেম, লারাভেল স্টক ম্যানেজমেন্ট সিস্টেম, লারাভেল রিসোর্স শেয়ারিং সাইট, লারাভেল ফিনান্সিয়াল মার্কেট প্ল্যাটফর্ম, লারাভেল কর্পোরেট ব্লগ, লারাভেল গ্যালারি সাইট, লারাভেল ব্যবসায়িক সাইট, লারাভেল অনলাইন ক্যালেন্ডার, লারাভেল অনলাইন পরীক্ষার প্ল্যাটফর্ম।
')">

<!-- Open Graph -->
<!-- Open Graph Meta Tags -->
<meta property="og:title" content="@yield('meta_title', 'Software Company')">
<meta property="og:description" content="@yield('meta_description', 'Software Company In bd')">
<meta property="og:image" content="@yield('meta_image', asset($logo->mobile_logo))">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:url" content="@yield('url', request()->url())">
<meta property="og:type" content="website"> <!-- Adjusted to a more generic type -->

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="@yield('meta_twiter', 'summary_large_image')"> <!-- Changed to 'summary_large_image' for better display -->
<meta name="twitter:title" content="@yield('twitter-title', 'FirstSolutionsIT')">
<meta name="twitter:description" content="@yield('twitter-description', 'Software Company In bd')">
<meta name="twitter:image" content="@yield('twitter_image', asset($logo->mobile_logo))">

<!-- Canonical URL -->
<link rel="canonical" href="@yield('canonical_url', request()->url())">

@section('title')

    Home
@endsection
@section('body')
    <section class="banner section-bg z-index-1">
        <img src="{{asset('/')}}front/assets/images/gradients/banner-gradient.png" alt="" class="bg--gradient white-version">

        <img src="{{asset('/')}}front/assets/images/shapes/element-moon1.png" alt="" class="element one">
        <img src="{{asset('/')}}front/assets/images/shapes/element-moon2.png" alt="" class="element two">

        <div class="container container-two">
            <div class="row align-items-center gy-sm-5 gy-4">
                <div class="col-lg-6">
                    <div class="banner-inner position-relative pe-lg-5">
                        <div class="banner-content">
                            <h1 class="banner-content__title">Full Responsive Dinamic Web Service</h1>
                            <p class="banner-content__desc font-18">Explore the best premium Website available for sale.Our unique collection is hand-curated by experts. Find and buy the perfect premium theme today.</p>
                            <form action="{{ route('search-website') }}" method="GET" class="mb-3">
                                <div class="search-box">
                                    <input type="text" name="search" class="form-control" placeholder="Search themes" value="{{ request('search') }}">
                                    <button type="submit" class="btn btn-main btn-icon icon border-0">
                                        <img src="{{asset('/')}}front/assets/images/icons/search.svg" alt="">
                                    </button>
                                </div>
                            </form>


                            <!-- Tech List Start -->
                            <div class="tech-list">

                                <a href="all-product.html" class="tech-list__item" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Laravel">
                                    <img src="{{asset('/')}}front/assets/images/thumbs/tech-icon2.png" alt="">
                                </a>
                                <a href="all-product.html" class="tech-list__item" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PHP">
                                    <img src="{{asset('/')}}front/assets/images/thumbs/tech-icon3.png" alt="" class="white-version">
                                    <img src="{{asset('/')}}front/assets/images/thumbs/tech-icon-white3.png" alt="" class="dark-version">
                                </a>
                                <a href="all-product.html" class="tech-list__item" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="HTML">
                                    <img src="{{asset('/')}}front/assets/images/thumbs/tech-icon4.png" alt="">
                                </a>
                                <a href="all-product.html" class="tech-list__item" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Sketch">
                                    <img src="{{asset('/')}}front/assets/images/thumbs/tech-icon5.png" alt="">
                                </a>
                                <a href="all-product.html" class="tech-list__item" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Figma">
                                    <img src="{{asset('/')}}front/assets/images/thumbs/tech-icon6.png" alt="">
                                </a>
                                <a href="all-product.html" class="tech-list__item" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Bootstrap">
                                    <img src="{{asset('/')}}front/assets/images/thumbs/tech-icon7.png" alt="">
                                </a>
                                <a href="all-product.html" class="tech-list__item" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tailwind">
                                    <img src="{{asset('/')}}front/assets/images/thumbs/tech-icon8.png" alt="">
                                </a>
                                <a href="all-product.html" class="tech-list__item" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="React">
                                    <img src="{{asset('/')}}front/assets/images/thumbs/tech-icon9.png" alt="">
                                </a>
                            </div>
                            <!-- Tech List End -->

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-thumb">
                        <img src="{{asset('/')}}front/assets/images/thumbs/banner-img.png" alt="">
                        <img src="{{asset('/')}}front/assets/images/shapes/dots.png" alt="" class="dotted-img white-version">
                        <img src="{{asset('/')}}front/assets/images/shapes/dots-white.png" alt="" class="dotted-img dark-version">
                        <img src="{{asset('/')}}front/assets/images/shapes/element2.png" alt="" class="element two end-0">

                        <div class="statistics animation bg-main text-center">
                            <h5 class="statistics__amount text-white">100%</h5>
                            <span class="statistics__text text-white font-14">Happy</span>
                            <span class="statistics__text text-white font-14">Customers</span>
                        </div>

                        <div class="statistics style-two bg-white text-center">
                            <h5 class="statistics__amount statistics__amount-two text-heading">100%</h5>
                            <span class="statistics__text text-heading font-14">Full Responsive</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========================== Banner Section End ==========================-->

    <!-- ======================== popular Section Start =========================== -->
    <section class="popular padding-y-120 overflow-hidden">
        <div class="container container-two">
            <div class="section-heading style-left mb-64">
                <h4 class="section-heading__title">We Used Most Popular Technologi Our Project</h4>
            </div>
            <div class="popular-slider arrow-style-two row gy-4">
                <div class="col-lg-2">
                    <a class="popular-item w-100">
        <span class="popular-item__icon">
            <img src="{{asset('/')}}front/assets/images/icons/popular-icon3.svg" alt="">
        </span>
                        <h6 class="popular-item__title font-18">HTML</h6>
                        <span class="popular-item__qty text-body">5</span>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a class="popular-item w-100">
        <span class="popular-item__icon">
            <img src="{{asset('/')}}front/assets/images/icons/css.png" width="41" height="40" alt="">
        </span>
                        <h6 class="popular-item__title font-18">Css</h6>
                        <span class="popular-item__qty text-body">3</span>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a class="popular-item w-100">
        <span class="popular-item__icon">
            <img src="{{asset('/')}}front/assets/images/icons/bootstrap.png" alt="">
        </span>
                        <h6 class="popular-item__title font-18">Bootstrap</h6>
                        <span class="popular-item__qty text-body">5</span>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a class="popular-item w-100">
        <span class="popular-item__icon">
            <img src="{{asset('/')}}front/assets/images/icons/popular-icon4.svg" alt="">
        </span>
                        <h6 class="popular-item__title font-18">Java Script</h6>
                        <span class="popular-item__qty text-body"></span>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a  class="popular-item w-100">
        <span class="popular-item__icon">
            <img src="{{asset('/')}}front/assets/images/icons/popular-icon6.svg" alt="">
        </span>
                        <h6 class="popular-item__title font-18">PHP</h6>
                        <span class="popular-item__qty text-body"></span>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a class="popular-item w-100">
        <span class="popular-item__icon">
            <img src="{{asset('/')}}front/assets/images/icons/laravel.svg" width="41" height="40" alt="">
        </span>
                        <h6 class="popular-item__title font-18">Laravel</h6>
                        <span class="popular-item__qty text-body"></span>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a  class="popular-item w-100">
        <span class="popular-item__icon">
            <img src="{{asset('/')}}front/assets/images/icons/ecmascript6.webp" width="41" height="40" alt="">
        </span>
                        <h6 class="popular-item__title font-18">EcmaScript 6</h6>
                        <span class="popular-item__qty text-body"></span>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a class="popular-item w-100">
        <span class="popular-item__icon">
            <img src="{{asset('/')}}front/assets/images/icons/vuejs.webp" width="41" height="40" alt="">
        </span>
                        <h6 class="popular-item__title font-18">Vue js</h6>
                        <span class="popular-item__qty text-body"></span>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!-- ======================== popular Section End =========================== -->
    <!-- =========================== Arrival Product Section Start ========================== -->
{{--    <section class="arrival-product padding-y-120 section-bg position-relative z-index-1">--}}
{{--        <img src="{{asset('/')}}front/assets/images/gradients/product-gradient.png" alt="" class="bg--gradient white-version">--}}

{{--        <img src="{{asset('/')}}front/assets/images/shapes/element2.png" alt="" class="element one">--}}

{{--        <div class="container container-two">--}}
{{--            <div class="section-heading">--}}
{{--                <h3 class="section-heading__title">Latest Laravel Project</h3>--}}
{{--            </div>--}}

{{--            <ul class="nav common-tab justify-content-center nav-pills mb-48" id="pills-tab" role="tablist">--}}
{{--                <li class="nav-item" role="presentation">--}}
{{--                    <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All Item</button>--}}
{{--                </li>--}}
{{--                <li class="nav-item" role="presentation">--}}
{{--                    <button class="nav-link" id="pills-wordPress-tab" data-bs-toggle="pill" data-bs-target="#pills-wordPress" type="button" role="tab" aria-controls="pills-wordPress" aria-selected="false">wordPress</button>--}}
{{--                </li>--}}
{{--                <li class="nav-item" role="presentation">--}}
{{--                    <button class="nav-link" id="pills-php-tab" data-bs-toggle="pill" data-bs-target="#pills-php" type="button" role="tab" aria-controls="pills-php" aria-selected="false">php</button>--}}
{{--                </li>--}}
{{--                <li class="nav-item" role="presentation">--}}
{{--                    <button class="nav-link" id="pills-siteTemplate-tab" data-bs-toggle="pill" data-bs-target="#pills-siteTemplate" type="button" role="tab" aria-controls="pills-siteTemplate" aria-selected="false">site Template</button>--}}
{{--                </li>--}}
{{--                <li class="nav-item" role="presentation">--}}
{{--                    <button class="nav-link" id="pills-blogging-tab" data-bs-toggle="pill" data-bs-target="#pills-blogging" type="button" role="tab" aria-controls="pills-blogging" aria-selected="false">blogging</button>--}}
{{--                </li>--}}
{{--                <li class="nav-item" role="presentation">--}}
{{--                    <button class="nav-link" id="pills-marketing-tab" data-bs-toggle="pill" data-bs-target="#pills-marketing" type="button" role="tab" aria-controls="pills-marketing" aria-selected="false">marketing</button>--}}
{{--                </li>--}}
{{--                <li class="nav-item" role="presentation">--}}
{{--                    <button class="nav-link" id="pills-plugins-tab" data-bs-toggle="pill" data-bs-target="#pills-plugins" type="button" role="tab" aria-controls="pills-plugins" aria-selected="false">plugins</button>--}}
{{--                </li>--}}
{{--                <li class="nav-item" role="presentation">--}}
{{--                    <button class="nav-link" id="pills-uiTemplate-tab" data-bs-toggle="pill" data-bs-target="#pills-uiTemplate" type="button" role="tab" aria-controls="pills-uiTemplate" aria-selected="false">UI Template</button>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <div class="tab-content" id="pills-tabContent">--}}
{{--                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}

{{--                                                <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm ">Add To Cart</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-wordPress" role="tabpanel" aria-labelledby="pills-wordPress-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-php" role="tabpanel" aria-labelledby="pills-php-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-siteTemplate" role="tabpanel" aria-labelledby="pills-siteTemplate-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-blogging" role="tabpanel" aria-labelledby="pills-blogging-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-marketing" role="tabpanel" aria-labelledby="pills-marketing-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-plugins" role="tabpanel" aria-labelledby="pills-plugins-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-uiTemplate" role="tabpanel" aria-labelledby="pills-uiTemplate-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="text-center mt-64">--}}
{{--                <a href="all-product.html" class="btn btn-main btn-lg pill fw-300">--}}
{{--                    View All Products--}}
{{--                </a>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}
    <section class="arrival-product padding-y-120 section-bg position-relative z-index-1">
        <img src="{{asset('/')}}front/assets/images/gradients/product-gradient.png" alt="" class="bg--gradient white-version">

        <img src="{{asset('/')}}front/assets/images/shapes/element2.png" alt="" class="element one">

        <div class="container container-two">
            <div class="section-heading">
                <h3 class="section-heading__title">Laravel Latest Projet</h3>
            </div>

            <ul class="nav common-tab justify-content-center nav-pills mb-48" id="pills-tab" role="tablist">
                @foreach($subcategories as $subcategory)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="pills-{{ $subcategory->id }}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{ $subcategory->id }}" type="button" role="tab" aria-controls="pills-{{ $subcategory->id }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                            {{$subcategory->name }}
                        </button>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content" id="pills-tabContent">
                @foreach($subcategories as $subcategory)
                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="pills-{{ $subcategory->id }}" role="tabpanel" aria-labelledby="pills-{{ $subcategory->id }}-tab" tabindex="0">

                        <div class="row gy-4">
                            @foreach($subcategory->themes as $theme)
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-card ">
                                    <div class="product-card__thumb d-flex">
                                        <a href="{{route('detail',['categorySlug'=>$theme->sub_category->slug,'postSlug'=>$theme->slug]) }}" class="link w-100">
                                            <img src="{{asset($theme->image)}}" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="{{route('detail',['categorySlug'=>$theme->sub_category->slug,'postSlug'=>$theme->slug]) }}" class="link">{{$theme->name}}</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
                                            <span class="product-card__author">
{{--                                                by--}}
{{--                                                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">Tk.{{$theme->selling_price}}</h6>
                                                <span class="product-card__prevPrice text-decoration-line-through">Tk.{{$theme->regular_price}}</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
{{--                                                <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                                <div class="d-flex align-items-center gap-1">--}}
{{--                                                    <ul class="star-rating">--}}
{{--                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    </ul>--}}
{{--                                                    <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
                                                </div>
                                            </div>
                                            <a  target="_blank" href="{{$theme->link}}" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            <a href="{{route('detail',['categorySlug'=>$theme->sub_category->slug,'postSlug'=>$theme->slug]) }}" class="btn btn-outline-light btn-sm pill">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="text-center mt-64">
                        @if($subcategory->themes->isNotEmpty()) <!-- Check if there are websites in this category -->
                            <a href="{{ route('single-category', ['slug' => $subcategory->slug]) }}" class="btn btn-main btn-lg pill fw-300">
                                This Category All Website
                            </a>
                            @else
                                <p class="text-muted">This Category Has No Website Right Now</p>
                            @endif
                        </div>

                    </div>

                @endforeach

            </div>

            {{--                <div class="tab-pane fade" id="pills-wordPress" role="tabpanel" aria-labelledby="pills-wordPress-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-php" role="tabpanel" aria-labelledby="pills-php-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-siteTemplate" role="tabpanel" aria-labelledby="pills-siteTemplate-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-blogging" role="tabpanel" aria-labelledby="pills-blogging-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-marketing" role="tabpanel" aria-labelledby="pills-marketing-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-plugins" role="tabpanel" aria-labelledby="pills-plugins-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-uiTemplate" role="tabpanel" aria-labelledby="pills-uiTemplate-tab" tabindex="0">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img1.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$120</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img2.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$236</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img3.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">900 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img4.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$59</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1225 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img5.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$99</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$129</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">1300 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img6.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$256</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">200 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img7.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$129</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$259</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">500 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6">--}}
{{--                            <div class="product-card ">--}}
{{--                                <div class="product-card__thumb d-flex">--}}
{{--                                    <a href="product-details.html" class="link w-100">--}}
{{--                                        <img src="{{asset('/')}}front/assets/images/thumbs/product-img8.png" alt="" class="cover-img">--}}
{{--                                    </a>--}}
{{--                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>--}}
{{--                                </div>--}}
{{--                                <div class="product-card__content">--}}
{{--                                    <h6 class="product-card__title">--}}
{{--                                        <a href="product-details.html" class="link">SaaS dashboard digital products Title here</a>--}}
{{--                                    </h6>--}}
{{--                                    <div class="product-card__info flx-between gap-2">--}}
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
{{--                                        <div class="flx-align gap-2">--}}
{{--                                            <h6 class="product-card__price mb-0">$79</h6>--}}
{{--                                            <span class="product-card__prevPrice text-decoration-line-through">$99</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-card__bottom flx-between gap-2">--}}
{{--                                        <div>--}}
{{--                                            <span class="product-card__sales font-14 mb-2">2100 Sales</span>--}}
{{--                                            <div class="d-flex align-items-center gap-1">--}}
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Live Demo</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
            </div>



    </section>
    <!-- =========================== Arrival Product Section End ========================== -->
    <!-- ======================= Featured Products Start =============================== -->
    <section class="featured-product padding-y-120 position-relative z-index-1">
        <img src="{{asset('/')}}front/assets/images/gradients/featured-gradient.png" alt="" class="bg--gradient white-version">
        <img src="{{asset('/')}}front/assets/images/shapes/spider-net.png" alt="" class="spider-net position-absolute top-0 end-0 z-index--1 white-version">
        <img src="{{asset('/')}}front/assets/images/shapes/spider-net-white.png" alt="" class="spider-net position-absolute top-0 end-0 z-index--1 dark-version">

        <img src="{{asset('/')}}front/assets/images/shapes/element1.png" alt="" class="element two">

        <div class="container container-two">
            <div class="row gy-4 flex-wrap-reverse align-items-center">
                <div class="col-xl-6">
                    <div class="row gy-4 card-wrapper">
                        @foreach($news_templets1 as $newstemplet)
                        <div class="col-sm-6">
                            <div class="product-card box-shadow">
                                <div class="product-card__thumb d-flex">
                                    <a href="{{route('detail',['categorySlug'=>$newstemplet->sub_category->slug,'postSlug'=>$newstemplet->slug]) }}" class="link w-100">
                                        <img src="{{asset($newstemplet->image)}}" alt="" height="400" width="600" class="cover-img">
                                    </a>
                                    <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                </div>
                                <div class="product-card__content">
                                    <h6 class="product-card__title">
                                        <a href="{{route('detail',['categorySlug'=>$newstemplet->sub_category->slug,'postSlug'=>$newstemplet->slug]) }}" class="link">{{$newstemplet->name}}</a>
                                    </h6>
                                    <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
            </span>
                                        <div class="flx-align gap-2">
                                            <h6 class="product-card__price mb-0">Tk.{{$newstemplet->selling_price}}</h6>
                                            <span class="product-card__prevPrice text-decoration-line-through">Tk.{{$newstemplet->regular_price}}</span>
                                        </div>
                                    </div>
                                    <div class="product-card__bottom flx-between gap-2">
                                        <div>
{{--                                            <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
                                            <div class="d-flex align-items-center gap-1">
{{--                                                <ul class="star-rating">--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
                                            </div>
                                        </div>
                                        <a  target="_blank" href="{{$newstemplet->link}}" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        <a href="{{route('detail',['categorySlug'=>$newstemplet->sub_category->slug,'postSlug'=>$newstemplet->slug]) }}" class="btn btn-success btn-sm pill">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
                <div class="col-xl-1 d-xl-block d-none"></div>
                <div class="col-xl-5">
                    <div class="section-content">
                        <div class="section-heading style-left">
                            <h3 class="section-heading__title">Laravel News Project</h3>
                        </div>
                        <a href="{{route('single-category',['slug'=>$newstemplet->sub_category->slug])}}" class="btn btn-main btn-lg pill fw-300">
                            View All Items
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Featured Products End =============================== -->

    <!-- ======================= Selling Products Start ========================= -->
    <section class="selling-product padding-y-120 position-relative z-index-1 overflow-hidden">
        <img src="{{asset('/')}}front/assets/images/gradients/selling-gradient.png" alt="" class="bg--gradient">

        <img src="{{asset('/')}}front/assets/images/shapes/element2.png" alt="" class="element one">
        <img src="{{asset('/')}}front/assets/images/shapes/element1.png" alt="" class="element two">

        <img src="{{asset('/')}}front/assets/images/shapes/curve-pattern1.png" alt="" class="position-absolute start-0 top-0 z-index--1">
        <img src="{{asset('/')}}front/assets/images/shapes/curve-pattern2.png" alt="" class="position-absolute end-0 top-0 z-index--1">

        <div class="container container-two">
            <div class="section-heading style-left style-white flx-between max-w-unset gap-4">
                <div style="display: flex; justify-content: center; width: 100%;">
                    <h3 class="section-heading__title">Latest All Project</h3>
                </div>
            </div>
            <div class="selling-product-slider">
                @foreach($templetes8 as $templete8)
                <div class="product-card shadow-sm overlay-none">
                    <div class="product-card__thumb d-flex max-h-unset">
                        <a href="{{route('detail',['categorySlug'=>$templete8->sub_category->slug,'postSlug'=>$templete8->slug]) }}" class="link w-100">
                            <img src="{{asset($templete8->image)}}" alt="" class="cover-img">
                        </a>
                    </div>
                    <div class="product-card__content">
                        <h6 class="product-card__title">
                            <a href="{{route('detail',['categorySlug'=>$templete8->sub_category->slug,'postSlug'=>$templete8->slug]) }}" class="link">{{$templete8->name}}</a>
                        </h6>
                        <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
            </span>
                            <div class="flx-align gap-2">
                                <h6 class="product-card__price mb-0">Tk.{{$templete8->selling_price}}</h6>
                                <span class="product-card__prevPrice text-decoration-line-through">Tk.{{$templete8->regular_price}}</span>
                            </div>
                        </div>
                        <div class="product-card__bottom flx-between gap-2">
                            <div>
{{--                                <span class="product-card__sales font-16 mb-2">1230 Sales</span>--}}
{{--                                <ul class="star-rating gap-2">--}}
{{--                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>--}}
{{--                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>--}}
{{--                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>--}}
{{--                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>--}}
{{--                                    <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>--}}
{{--                                </ul>--}}
                            </div>
                            <div class="flx-align gap-2">
{{--                                <a href="product-details.html" class="btn btn-outline-light download-icon btn-icon btn-icon--sm pill">--}}
{{--                    <span class="icon">--}}
{{--                        <img src="{{asset('/')}}front/assets/images/icons/download.svg" alt="" class="white-version">--}}
{{--                        <img src="{{asset('/')}}front/assets/images/icons/download-white.svg" alt="" class="dark-version">--}}
{{--                    </span>--}}
{{--                                </a>--}}
                                <a target="_blank" href="{{$templete8->link}}" class="btn btn-outline-light pill">Live Demo</a>
                                <a href="{{route('detail',['categorySlug'=>$templete8->sub_category->slug,'postSlug'=>$templete8->slug]) }}" class="btn btn-success pill">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- ======================= Selling Products End ========================= -->

    <!-- ======================= To Featured Author Start =============================== -->
    <section class="top-author padding-y-120 section-bg position-relative z-index-1">
        <img src="{{asset('/')}}front/assets/images/gradients/featured-gradient.png" alt="" class="bg--gradient white-version">
        <img src="{{asset('/')}}front/assets/images/shapes/spider-net.png" alt="" class="spider-net position-absolute top-0 start-0 z-index--1 white-version">
        <img src="{{asset('/')}}front/assets/images/shapes/spider-net-white2.png" alt="" class="spider-net position-absolute top-0 start-0 z-index--1 dark-version">
        <img src="{{asset('/')}}front/assets/images/shapes/pattern-curve-three.png" alt="" class="position-absolute top-0 end-0 z-index--1">

        <img src="{{asset('/')}}front/assets/images/shapes/element1.png" alt="" class="element two">

        <div class="container container-two">
            <div class="row gy-4 align-items-center">
                <div class="col-xl-5">
                    <div class="section-content">
                        <div class="section-heading style-left">
                            <h3 class="section-heading__title">Laravel Ecommerce</h3>
{{--                            <p class="section-heading__desc font-18 w-sm">Every month we pick some best products for you. This month's best web themes & templates have arrived, chosen by our content specialists.</p>--}}
                        </div>
                        <div class="author-info d-flex align-items-center gap-3">
                            <div class="author-info__thumb">
                                <img src="{{asset($logo->fav_icon)}}" alt="">
                            </div>
                            <a target="_blank" href="https://facebook.com/fastsolutionit" class="btn btn-main btn-lg pill fw-300">Visit Facebook</a>
                            <div class="author-info__content">
{{--                                <h4 class="author-info__name mb-1">Amplify</h4>--}}
{{--                                <span class="author-info__text">Member Since 2021</span>--}}
                            </div>
                        </div>
{{--                        <div class="flx-align gap-2 mt-48">--}}
{{--                            <a target="_blank" href="https://facebook.com/fastsolutionit" class="btn btn-main btn-lg pill fw-300">Visit Facebook</a>--}}
{{--                            <button type="button" class="follow-btn btn btn-outline-light btn-lg pill">Follow</button>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="circle-content position-relative">
                        <div class="circle static-circle">
                            <div class="circle__badge">
                                <img src="{{asset('/')}}front/assets/images/icons/featured-badge.png" alt="">
                            </div>
                            <div class="circle__text">
                                <p>
                                    FastSolutionsIt Top Featured
                                </p>
                            </div>
                        </div>
                        <div class="row gy-4 card-wrapper">
                            @foreach($templetes4 as $templet4)
                            <div class="col-sm-6">
                                <div class="product-card box-shadow">
                                    <div class="product-card__thumb d-flex">
                                        <a href="{{route('detail',['categorySlug'=>$templet4->sub_category->slug,'postSlug'=>$templet4->slug])}}" class="link w-100">
                                            <img src="{{asset($templet4->image)}}" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-card__content">
                                        <h6 class="product-card__title">
                                            <a href="{{route('detail',['categorySlug'=>$templet4->sub_category->slug,'postSlug'=>$templet4->slug])}}" class="link">{{$templet4->name}}</a>
                                        </h6>
                                        <div class="product-card__info flx-between gap-2">
{{--            <span class="product-card__author">--}}
{{--                by--}}
{{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
{{--            </span>--}}
                                            <div class="flx-align gap-2">
                                                <h6 class="product-card__price mb-0">Tk.{{$templet4->selling_price}}</h6>
                                                <span class="product-card__prevPrice text-decoration-line-through">Tk.{{$templet4->regular_price}}</span>
                                            </div>
                                        </div>
                                        <div class="product-card__bottom flx-between gap-2">
                                            <div>
{{--                                                <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
                                                <div class="d-flex align-items-center gap-1">
{{--                                                    <ul class="star-rating">--}}
{{--                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                        <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
{{--                                                    </ul>--}}
{{--                                                    <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
                                                </div>
                                            </div>
                                            <a target="_blank" href="{{$templet4->link}}" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            <a href="{{route('detail',['categorySlug'=>$templet4->sub_category->slug,'postSlug'=>$templet4->slug])}}" class="btn btn-success btn-sm pill">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= To Featured Author End =============================== -->
    <!-- ======================= Top performance Author Start =============================== -->
{{--    <section class="top-performance overflow-hidden padding-y-120 position-relative z-index-1">--}}
{{--        <img src="{{asset('/')}}front/assets/images/shapes/spider-net.png" alt="" class="spider-net position-absolute top-0 end-0 z-index--1 white-version">--}}
{{--        <img src="{{asset('/')}}front/assets/images/shapes/spider-net-white.png" alt="" class="spider-net position-absolute top-0 end-0 z-index--1 dark-version">--}}
{{--        <img src="{{asset('/')}}front/assets/images/shapes/pattern-curve-four.png" alt="" class="position-absolute top-0 start-0 z-index--1">--}}

{{--        <img src="{{asset('/')}}front/assets/images/shapes/element2.png" alt="" class="element two">--}}

{{--        <div class="container container-two">--}}
{{--            <div class="row gy-4 align-items-center flex-wrap-reverse">--}}
{{--                <div class="col-lg-7 pe-lg-5">--}}
{{--                    <div class="position-relative">--}}
{{--                        <div class="circle style-two static-circle">--}}
{{--                            <div class="circle__badge">--}}
{{--                                <img src="{{asset('/')}}front/assets/images/icons/featured-badge.png" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="circle__desc circle__text">--}}
{{--                                <p>--}}
{{--                                    Our Top Performance--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="performance-content">--}}
{{--                            <div class="performance-content__item">--}}
{{--                                <span class="performance-content__text font-18">Email Subscription</span>--}}
{{--                                <h4 class="performance-content__count">49,000+</h4>--}}
{{--                            </div>--}}
{{--                            <div class="performance-content__item">--}}
{{--                                <span class="performance-content__text font-18"> Total Products</span>--}}
{{--                                <h4 class="performance-content__count">45,000+</h4>--}}
{{--                            </div>--}}
{{--                            <div class="performance-content__item">--}}
{{--                                <span class="performance-content__text font-18"> Total Download</span>--}}
{{--                                <h4 class="performance-content__count">48,000+</h4>--}}
{{--                            </div>--}}
{{--                            <div class="performance-content__item">--}}
{{--                                <span class="performance-content__text font-18"> Monthly Visitor</span>--}}
{{--                                <h4 class="performance-content__count">65,000+</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-5">--}}
{{--                    <div class="section-content">--}}
{{--                        <div class="section-heading style-left">--}}
{{--                            <h3 class="section-heading__title">Top Performance</h3>--}}
{{--                            <p class="section-heading__desc font-18 w-sm">Every month we pick some best products for you. This month's best web themes & templates have arrived, chosen by our content specialists.</p>--}}
{{--                        </div>--}}
{{--                        <a href="register.html" class="btn btn-main btn-lg pill fw-300"> Get Started </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- ======================= Top performance Author End =============================== -->
    <!-- =========================== Blog Section Start ========================== -->
    <section class="blog padding-y-120 section-bg position-relative z-index-1 overflow-hidden">
        <img src="{{asset('/')}}front/assets/images/shapes/pattern-five.png" class="position-absolute end-0 top-0 z-index--1" alt="">
        <div class="container container-two">
            <div class="section-heading style-left style-flex flx-between align-items-end gap-3">
{{--                <div class="section-heading__inner">--}}
{{--                    <h3 class="section-heading__title">Browse all latest blogs and articles</h3>--}}
{{--                </div>--}}
                <a href="{{route('front-allblogs')}}" class="btn btn-main btn-lg pill">Browse All Blogs </a>
            </div>
            <div class="row gy-4">
                @foreach($blogs3 as $blog3)
                <div class="col-lg-4 col-sm-6">
                    <div class="blog-item">
                        <div class="blog-item__thumb">
                            <a href="{{route('blogs-detail',['id'=>$blog3->id])}}" class="link">
                                <img src="{{ asset($blog3->image) }}" class="cover-img" alt="Blog Image" style="height: 300px; width: 500px;">

                            </a>
                        </div>
                        <div class="blog-item__content">
                            <div class="blog-item__top flx-align">
{{--                                <a href="blog.html" class="blog-item__tag pill font-14 text-heading fw-500 hover-text-main">Hiring</a>--}}
                                <div class="blog-item__date font-14 flx-align gap-2 font-14 text-heading fw-500">
                    <span class="icon">
                        <img src="{{asset('/')}}front/assets/images/icons/calendar.svg" alt="" class="white-version">
                        <img src="{{asset('/')}}front/assets/images/icons/calendar-white.svg" alt="" class="dark-version">
                    </span>
                                    <span class="text">{{ $blog3->created_at->format('F j, Y') }}</span>

                                </div>
                            </div>
                            <h5 class="title">
                                <a href="{{route('blogs-detail',['id'=>$blog3->id])}}" class="link">{{ $blog3->title}}</a>
                            </h5>
                            <a href="{{route('blogs-detail',['id'=>$blog3->id])}}" class="btn btn-outline-light pill fw-600">Read More </a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- =========================== Blog Section End ========================== -->

    <!-- ======================= Become seller section start ==================== -->
{{--    <section class="seller padding-y-120">--}}
{{--        <div class="container container-two">--}}
{{--            <div class="row gy-4">--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="seller-item position-relative z-index-1">--}}
{{--                        <img src="{{asset('/')}}front/assets/images/shapes/seller-bg.png" class="position-absolute--}}
{{--                    start-0 top-0 z-index--1" alt="">--}}
{{--                        <h3 class="seller-item__title">Earn 75% of the ItemD Price</h3>--}}
{{--                        <p class="seller-item__desc fw-500 text-heading">Sellers receive 75% of the Itemp Price for items Dsold exclusively and 50% for items sold non-exclusively. See detailed informationabout the fee structure on Market.</p>--}}
{{--                        <a href="register.html" class="btn btn-static-outline-black btn-xl pill fw-600">Become a Seller</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="seller-item bg-two position-relative z-index-1">--}}
{{--                        <img src="{{asset('/')}}front/assets/images/shapes/seller-bg-two.png" class="position-absolute--}}
{{--                    start-0 top-0 z-index--1" alt="">--}}
{{--                        <h3 class="seller-item__title">Earn until 40% commission</h3>--}}
{{--                        <p class="seller-item__desc fw-500 text-heading">Our Market is the world’s largest creative market place, selling millions of digital assets every year. With 30% affiliate commission, earning money has never been easier!</p>--}}
{{--                        <a href="register.html" class="btn btn-static-outline-black btn-xl pill fw-600">Become an Affiliate</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="support position-relative z-index-1">--}}
{{--                        <img src="{{asset('/')}}front/assets/images/shapes/spider-net-sm.png" alt="" class="spider-net position-absolute top-0 end-0 z-index--1">--}}
{{--                        <img src="{{asset('/')}}front/assets/images/shapes/arrow-shape.png" alt="" class="arrow-shape">--}}
{{--                        <div class="row align-items-center">--}}
{{--                            <div class="col-lg-1 d-lg-block d-none"></div>--}}
{{--                            <div class="col-lg-3 col-md-4 d-md-block d-none">--}}
{{--                                <div class="support-thumb text-center">--}}
{{--                                    <img src="{{asset('/')}}front/assets/images/thumbs/support-img.png" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 d-lg-block d-none"></div>--}}
{{--                            <div class="col-lg-5 col-md-8">--}}
{{--                                <div class="support-content">--}}
{{--                                    <h3 class="support-content__title mb-3">Support 24/7</h3>--}}
{{--                                    <p class="support-content__desc">Wanna talk? Send us a message</p>--}}
{{--                                    <a href="mailto:infomail@office.com" class="btn btn-static-black btn-lg fw-300 pill">infomail@office.com</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- ======================= Become seller section End ==================== -->

    <!-- ======================== Brand Section Start ========================= -->
{{--    <div class="brand ">--}}
{{--        <div class="container container">--}}
{{--            <div class="brand-slider">--}}
{{--                <div class="brand-item d-flex align-items-center justify-content-center">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-img1.png" alt="" class="white-version">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-white-img1.png" alt="" class="dark-version">--}}
{{--                </div>--}}
{{--                <div class="brand-item d-flex align-items-center justify-content-center">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-img2.png" alt="" class="white-version">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-white-img2.png" alt="" class="dark-version">--}}
{{--                </div>--}}
{{--                <div class="brand-item d-flex align-items-center justify-content-center">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-img3.png" alt="" class="white-version">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-white-img3.png" alt="" class="dark-version">--}}
{{--                </div>--}}
{{--                <div class="brand-item d-flex align-items-center justify-content-center">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-img4.png" alt="" class="white-version">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-white-img4.png" alt="" class="dark-version">--}}
{{--                </div>--}}
{{--                <div class="brand-item d-flex align-items-center justify-content-center">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-img5.png" alt="" class="white-version">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-white-img5.png" alt="" class="dark-version">--}}
{{--                </div>--}}
{{--                <div class="brand-item d-flex align-items-center justify-content-center">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-img3.png" alt="" class="white-version">--}}
{{--                    <img src="{{asset('/')}}front/assets/images/thumbs/brand-white-img3.png" alt="" class="dark-version">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection