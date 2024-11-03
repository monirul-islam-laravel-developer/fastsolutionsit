@extends('front.master.master')
@section('seo')
    <meta itemprop="name" content="{{$cat_id->name}}">
    <meta itemprop="description" content="{{\Illuminate\Support\Str::limit(strip_tags($cat_id->description), 300)}}">
    <meta itemprop="image" content="{{ asset($cat_id->image) }}">

    <meta name="keywords" content="Php Laravel Web Solution Bd, Laravel PHP framework, PHP Laravel project, PHP eCommerce website,PHP blog creation,PHP portfolio website,PHP website optimization,Laravel development in Bangladesh,Laravel web development BD,Learn Laravel in Bangladesh,Best Laravel developers in Bangladesh,Laravel project development Bangladesh,Laravel web application Bangladesh,Laravel solutions BD,Laravel expert services in BD,Laravel eCommerce development Bangladesh,Custom Laravel applications in BD,Laravel API development Bangladesh,Laravel website optimization services,Laravel mobile application development BD,Laravel consulting services in Bangladesh,Laravel MVC architecture in BD,Laravel deployment solutions in BD,Top Laravel developers in Dhaka,Affordable Laravel development BD,Local Laravel agencies in Bangladesh,Best Laravel projects in Bangladesh,Laravel support services in Bangladesh,Laravel digital solutions in Bangladesh,Laravel business solutions BD,Digital marketing for Laravel websites in Bangladesh,SEO for Laravel websites BD,Laravel news website,Latest news in Bangladesh,Online news portal Bangladesh,Laravel eCommerce,Laravel online store,Laravel eCommerce platform,Laravel eCommerce website,Laravel multi-vendor eCommerce,Laravel eCommerce themes,Building an eCommerce site with Laravel,Laravel front-end integration for eCommerce,Web development Bangladesh,Bangladesh web design services,SEO services in Bangladesh,Ecommerce website development BD,Content writing services BD,Website maintenance services BD,Ecommerce solutions for small businesses in Bangladesh,Custom software solutions Bangladesh,Best web development company,Affordable web development,Custom web development,Responsive web design,Ecommerce web development,Web application development,Website design and development,Freelance web developer,Full-stack web development,PHP web development,JavaScript web development,UI/UX design services,Mobile-friendly website development,SEO-friendly web development,Web development for startups,Vue.js web development, Vue.js developer Bangladesh, best Vue.js development company, Vue.js ecommerce development, Vue.js application development, Vue.js frontend framework, Vue.js services in Bangladesh, Vue.js consulting services, Vue.js development agency, affordable Vue.js development, custom Vue.js development, Vue.js UI design, Vue.js for startups, Vue.js web application, Vue.js component development, Vue.js SPA development, Vue.js for mobile apps, Vue.js integration services, hire Vue.js developer, professional Vue.js development, Vue.js for enterprise solutions, Vue.js web development tutorial, learn Vue.js in Bangladesh, Vue.js web solutions, Vue.js template design, Vue.js project management, Vue.js API integration, Vue.js and Laravel development, Vue.js with Node.js, Vue.js for frontend development, Vue.js responsive design, Vue.js development cost, Vue.js performance optimization, Vue.js for small businesses, Vue.js community in Bangladesh, Vue.js development trends, Vue.js user interface, Vue.js state management, Vue.js plugins and libraries, Vue.js for real-time applications, Vue.js development tools, Vue.js testing and debugging, Vue.js event handling, Vue.js lifecycle hooks, Vue.js routing with Vue Router, Vue.js state management with Vuex, Vue.js best practices, Vue.js security measures, Vue.js documentation, Vue.js for multi-page applications, Vue.js with Bootstrap, Vue.js with Tailwind CSS, Vue.js for SEO optimization, Vue.js and Firebase integration, Vue.js for data visualization, Vue.js performance metrics, Vue.js project showcase, Vue.js application architecture, Vue.js tutorial for beginners, Vue.js online courses, Vue.js training in Bangladesh, Vue.js freelancing, Vue.js remote work opportunities, Vue.js job openings in Bangladesh, Vue.js for responsive websites, Vue.js application security, Vue.js user experience design, Vue.js component libraries, Vue.js for content management systems, Vue.js for web portals, Vue.js integration with WordPress, Vue.js and RESTful APIs, Vue.js in the digital age, Vue.js and microservices architecture, Vue.js community events in Bangladesh, Vue.js for data-driven applications, Vue.js in mobile-first design, Vue.js for accessibility, Vue.js code splitting techniques, Vue.js with GraphQL, Vue.js performance enhancements, Vue.js user authentication, Vue.js and server-side rendering, Vue.js for social media applications, Vue.js for online marketplaces, Vue.js development workshops, Vue.js for interactive websites, Vue.js integration with payment gateways, Vue.js and responsive images, Vue.js for event-driven applications, Vue.js best UI libraries, Vue.js and agile development, Vue.js for building prototypes, Vue.js with Webpack, Vue.js state management patterns.
,Vue.js eCommerce development, eCommerce website Bangladesh, online shopping BD, best eCommerce platforms, Vue.js news website development, news portal Bangladesh, hospital management system BD, Vue.js hospital management, hospital software Bangladesh, school management system BD, Vue.js school management, educational website Bangladesh, blogging platform BD, Vue.js blog development, content management system Bangladesh, Vue.js content management, digital marketing services BD, web application development BD, custom web solutions, responsive web design Bangladesh, web development company BD, affordable web services, web hosting Bangladesh, SEO services BD, Vue.js mobile app development, social media integration BD, payment gateway integration, eCommerce SEO strategies, online store development BD, Vue.js for online marketplace, news aggregator website BD, online education platform Bangladesh, hospital information system BD, patient management system Bangladesh, Vue.js project management tools, interactive website design, user-friendly eCommerce site, website performance optimization, web analytics services, website maintenance services BD, web development trends in Bangladesh, Vue.js for real-time applications, data management solutions BD, digital transformation services, Vue.js project showcase, Vue.js with Laravel for eCommerce, Vue.js for healthcare applications, responsive design for eCommerce, Vue.js for news applications, online booking system BD, online food delivery website, real estate website development BD, Vue.js for property management, event management system BD, Vue.js for event ticketing, local business directory BD, website for non-profits Bangladesh, educational blog development, Vue.js for interactive learning, corporate website development BD, Vue.js for small businesses, eCommerce trends in Bangladesh, Vue.js with RESTful API, web security services BD, Vue.js for blogging platforms, project management software BD, cloud services for web applications, website accessibility solutions, online ticket booking system, Vue.js for online courses, Vue.js dashboard development, Vue.js for data visualization, Vue.js with Bootstrap for web design, web application security BD, Vue.js user interface design, customer relationship management BD, Vue.js for CRM applications, Vue.js for social media platforms, local eCommerce solutions BD, best CMS for eCommerce, Vue.js for affiliate marketing, online support ticket system, website localization services, Vue.js with GraphQL, online appointment scheduling BD, Vue.js for HR management systems, digital product sales platform BD, multi-vendor eCommerce website, news subscription website BD, Vue.js for online forums, web development workshops BD.
,Laravel eCommerce development, eCommerce website Bangladesh, online shopping BD, Laravel news website development, news portal Bangladesh, hospital management system BD, Laravel hospital management, hospital software Bangladesh, school management system BD, Laravel school management, educational website Bangladesh, blogging platform BD, Laravel blog development, content management system Bangladesh, Laravel content management, digital marketing services BD, web application development BD, custom web solutions, responsive web design Bangladesh, web development company BD, affordable web services, web hosting Bangladesh, SEO services BD, Laravel mobile app development, social media integration BD, payment gateway integration, eCommerce SEO strategies, online store development BD, Laravel for online marketplace, news aggregator website BD, online education platform Bangladesh, hospital information system BD, patient management system Bangladesh, Laravel project management tools, interactive website design, user-friendly eCommerce site, website performance optimization, web analytics services, website maintenance services BD, web development trends in Bangladesh, Laravel for real-time applications, data management solutions BD, digital transformation services, Laravel project showcase, Laravel with Vue.js for eCommerce, Laravel for healthcare applications, responsive design for eCommerce, Laravel for news applications, online booking system BD, online food delivery website, real estate website development BD, Laravel for property management, event management system BD, Laravel for event ticketing, local business directory BD, website for non-profits Bangladesh, educational blog development, Laravel for interactive learning, corporate website development BD, Laravel for small businesses, eCommerce trends in Bangladesh, Laravel with RESTful API, web security services BD, Laravel for blogging platforms, project management software BD, cloud services for web applications, website accessibility solutions, online ticket booking system, Laravel for online courses, Laravel dashboard development, Laravel for data visualization, Laravel with Bootstrap for web design, web application security BD, Laravel user interface design, customer relationship management BD, Laravel for CRM applications, Laravel for social media platforms, local eCommerce solutions BD, best CMS for eCommerce, Laravel for affiliate marketing, online support ticket system, website localization services, Laravel with GraphQL, online appointment scheduling BD, Laravel for HR management systems, digital product sales platform BD, multi-vendor eCommerce website, news subscription website BD, Laravel for online forums, web development workshops BD.
,Laravel 11 eCommerce development, Laravel 11 news website development, Laravel 11 hospital management system, Laravel 11 school management system, Laravel 11 blog development, Laravel 11 online shopping BD, Laravel 11 news portal Bangladesh, Laravel 11 healthcare software, Laravel 11 educational website, Laravel 11 content management system, Laravel 11 responsive web design, Laravel 11 digital marketing services, Laravel 11 web application development, Laravel 11 custom web solutions, Laravel 11 web hosting services, Laravel 11 SEO services BD, Laravel 11 payment gateway integration, Laravel 11 online store development, Laravel 11 eCommerce SEO strategies, Laravel 11 news aggregator website, Laravel 11 online education platform, Laravel 11 hospital information system, Laravel 11 patient management software, Laravel 11 project management tools, Laravel 11 interactive website design, Laravel 11 user-friendly eCommerce site, Laravel 11 website performance optimization, Laravel 11 web analytics services, Laravel 11 website maintenance services, Laravel 11 web development trends, Laravel 11 real-time applications, Laravel 11 data management solutions, Laravel 11 digital transformation services, Laravel 11 project showcase, Laravel 11 Vue.js integration, Laravel 11 healthcare applications, Laravel 11 responsive design, Laravel 11 news applications, Laravel 11 online booking system, Laravel 11 online food delivery website, Laravel 11 real estate website development, Laravel 11 property management software, Laravel 11 event management system, Laravel 11 event ticketing software, Laravel 11 local business directory, Laravel 11 non-profit website development, Laravel 11 educational blog platform, Laravel 11 interactive learning tools, Laravel 11 corporate website development, Laravel 11 solutions for small businesses, Laravel 11 eCommerce trends, Laravel 11 RESTful API development, Laravel 11 web security services, Laravel 11 blogging platforms, Laravel 11 project management software, Laravel 11 cloud services, Laravel 11 website accessibility solutions, Laravel 11 online ticket booking system, Laravel 11 online courses platform, Laravel 11 dashboard development, Laravel 11 data visualization tools, Laravel 11 Bootstrap integration, Laravel 11 application security measures, Laravel 11 user interface design, Laravel 11 CRM applications, Laravel 11 social media platforms, Laravel 11 local eCommerce solutions, Laravel 11 CMS for eCommerce, Laravel 11 affiliate marketing solutions, Laravel 11 online support ticket system, Laravel 11 website localization services, Laravel 11 online appointment scheduling, Laravel 11 HR management systems, Laravel 11 digital product sales platform, Laravel 11 multi-vendor eCommerce website, Laravel 11 news subscription website, Laravel 11 online forums, Laravel 11 web development workshops.
,PHP eCommerce development, PHP news website development, PHP hospital management system, PHP school management system, PHP blog development, PHP online shopping BD, PHP news portal Bangladesh, PHP healthcare software, PHP educational website, PHP content management system, PHP responsive web design, PHP digital marketing services, PHP web application development, PHP custom web solutions, PHP web hosting services, PHP SEO services BD, PHP payment gateway integration, PHP online store development, PHP eCommerce SEO strategies, PHP news aggregator website, PHP online education platform, PHP hospital information system, PHP patient management software, PHP project management tools, PHP interactive website design, PHP user-friendly eCommerce site, PHP website performance optimization, PHP web analytics services, PHP website maintenance services, PHP web development trends, PHP real-time applications, PHP data management solutions, PHP digital transformation services, PHP project showcase, PHP Vue.js integration, PHP healthcare applications, PHP responsive design, PHP news applications, PHP online booking system, PHP online food delivery website, PHP real estate website development, PHP property management software, PHP event management system, PHP event ticketing software, PHP local business directory, PHP non-profit website development, PHP educational blog platform, PHP interactive learning tools, PHP corporate website development, PHP solutions for small businesses, PHP eCommerce trends, PHP RESTful API development, PHP web security services, PHP blogging platforms, PHP project management software, PHP cloud services, PHP website accessibility solutions, PHP online ticket booking system, PHP online courses platform, PHP dashboard development, PHP data visualization tools, PHP Bootstrap integration, PHP application security measures, PHP user interface design, PHP CRM applications, PHP social media platforms, PHP local eCommerce solutions, PHP CMS for eCommerce, PHP affiliate marketing solutions, PHP online support ticket system, PHP website localization services, PHP online appointment scheduling, PHP HR management systems, PHP digital product sales platform, PHP multi-vendor eCommerce website, PHP news subscription website, PHP online forums, PHP web development workshops.
,latest eCommerce trends BD, latest news website development, hospital management system updates, school management system innovations, blog development trends BD, online shopping websites BD, news portal features Bangladesh, healthcare management software updates, educational website trends BD, latest content management systems, responsive web design techniques BD, digital marketing strategies BD, web application development advancements, custom web solutions BD, latest web hosting services, SEO best practices BD, new payment gateway solutions, innovative online store designs, eCommerce SEO techniques, news aggregator platforms BD, online education trends Bangladesh, hospital information system enhancements, patient management software improvements, project management tool advancements, interactive web design trends BD, user-friendly eCommerce solutions, website performance optimization tips, web analytics tools updates, website maintenance best practices BD, latest web development technologies, real-time application development trends, effective data management solutions, digital transformation strategies BD, project showcase websites, Vue.js eCommerce applications, healthcare application innovations, responsive design updates BD, new news application features, online booking system advancements, food delivery website innovations BD, real estate website trends, property management software improvements, event management system advancements, event ticketing platform updates, local business directory innovations, non-profit website enhancements, educational blog trends BD, interactive learning platform developments, corporate website updates, small business web solutions BD, current eCommerce trends, RESTful API developments, web security enhancements BD, blogging platform innovations, project management software updates, cloud service improvements, website accessibility advancements BD, online ticket booking innovations, online course platform updates, dashboard development trends, data visualization advancements BD, Bootstrap design updates, application security measures, user interface design trends, CRM software updates BD, social media platform integrations, local eCommerce innovations BD, best CMS for eCommerce, affiliate marketing advancements, online support ticket system improvements, website localization innovations, appointment scheduling system updates, HR management software trends BD, digital product sales platform advancements, multi-vendor eCommerce solutions, news subscription service updates, online forum developments, latest web development workshops BD.
,পিএইচপি ই-কমার্স সাইট, পিএইচপি ব্লগ সাইট, পিএইচপি নিউজ সাইট, পিএইচপি সোশ্যাল মিডিয়া প্ল্যাটফর্ম, পিএইচপি ফোরাম সাইট, পিএইচপি শিক্ষা সাইট, পিএইচপি হসপিটাল ম্যানেজমেন্ট সিস্টেম, পিএইচপি হোটেল ম্যানেজমেন্ট সিস্টেম, পিএইচপি রিয়েল এস্টেট সাইট, পিএইচপি বিজনেস ডিরেক্টরি, পিএইচপি পোর্টফোলিও সাইট, পিএইচপি কনফারেন্স ম্যানেজমেন্ট সিস্টেম, পিএইচপি ইভেন্ট ম্যানেজমেন্ট সিস্টেম, পিএইচপি পার্সোনাল ব্লগ, পিএইচপি এফিলিয়েট মার্কেটিং সাইট, পিএইচপি সার্ভিস বুকিং সাইট, পিএইচপি ফাইল শেয়ারিং সাইট, পিএইচপি ডিজিটাল মার্কেটিং সাইট, পিএইচপি কনটেন্ট ম্যানেজমেন্ট সিস্টেম, পিএইচপি ক্যাম্পেইন ম্যানেজমেন্ট সিস্টেম, পিএইচপি গ্রাফিক ডিজাইন সাইট, পিএইচপি স্টার্টআপ ওয়েবসাইট, পিএইচপি নিউজলেটার সিস্টেম, পিএইচপি ক্লাসিফাইড সাইট, পিএইচপি অনলাইন টেস্টিং সাইট, পিএইচপি প্রশ্নোত্তর সাইট, পিএইচপি রেসিপি শেয়ারিং সাইট, পিএইচপি ফটোগ্রাফি পোর্টফোলিও সাইট, পিএইচপি ভিডিও শেয়ারিং সাইট, পিএইচপি কর্পোরেট সাইট, পিএইচপি প্ল্যানিং টুলস, পিএইচপি অনলাইন গেম সাইট, পিএইচপি চ্যাট অ্যাপ্লিকেশন, পিএইচপি পণ্য প্রদর্শনী সাইট, পিএইচপি অফিস ম্যানেজমেন্ট সিস্টেম, পিএইচপি অনলাইন শিক্ষার প্ল্যাটফর্ম, পিএইচপি ই-লার্নিং সাইট, পিএইচপি ক্যারিয়ার পোর্টাল, পিএইচপি নিউজ অ্যাগ্রিগেটর, পিএইচপি সেলফ-কেয়ার সাইট, পিএইচপি টিম ম্যানেজমেন্ট সিস্টেম, পিএইচপি জনবল নিয়োগ সাইট, পিএইচপি পরিবহন ম্যানেজমেন্ট সিস্টেম, পিএইচপি অনলাইন শপিং প্ল্যাটফর্ম, পিএইচপি ইনভেন্টরি ম্যানেজমেন্ট সিস্টেম, পিএইচপি আর্থিক সিস্টেম, পিএইচপি স্টক ম্যানেজমেন্ট সিস্টেম, পিএইচপি রিসোর্স শেয়ারিং সাইট, পিএইচপি ফিনান্সিয়াল মার্কেট প্ল্যাটফর্ম, পিএইচপি কর্পোরেট ব্লগ, পিএইচপি গ্যালারি সাইট, পিএইচপি ব্যবসায়িক সাইট, পিএইচপি অনলাইন ক্যালেন্ডার, পিএইচপি অনলাইন পরীক্ষার প্ল্যাটফর্ম।
,লারাভেল ই-কমার্স সাইট, লারাভেল ব্লগ সাইট, লারাভেল নিউজ সাইট, লারাভেল সোশ্যাল মিডিয়া প্ল্যাটফর্ম, লারাভেল ফোরাম সাইট, লারাভেল শিক্ষা সাইট, লারাভেল হাসপাতাল ম্যানেজমেন্ট সিস্টেম, লারাভেল হোটেল ম্যানেজমেন্ট সিস্টেম, লারাভেল রিয়েল এস্টেট সাইট, লারাভেল বিজনেস ডিরেক্টরি, লারাভেল পোর্টফোলিও সাইট, লারাভেল কনফারেন্স ম্যানেজমেন্ট সিস্টেম, লারাভেল ইভেন্ট ম্যানেজমেন্ট সিস্টেম, লারাভেল পার্সোনাল ব্লগ, লারাভেল অ্যাফিলিয়েট মার্কেটিং সাইট, লারাভেল সার্ভিস বুকিং সাইট, লারাভেল ফাইল শেয়ারিং সাইট, লারাভেল ডিজিটাল মার্কেটিং সাইট, লারাভেল কনটেন্ট ম্যানেজমেন্ট সিস্টেম, লারাভেল ক্যাম্পেইন ম্যানেজমেন্ট সিস্টেম, লারাভেল গ্রাফিক ডিজাইন সাইট, লারাভেল স্টার্টআপ ওয়েবসাইট, লারাভেল নিউজলেটার সিস্টেম, লারাভেল ক্লাসিফাইড সাইট, লারাভেল অনলাইন টেস্টিং সাইট, লারাভেল প্রশ্নোত্তর সাইট, লারাভেল রেসিপি শেয়ারিং সাইট, লারাভেল ফটোগ্রাফি পোর্টফোলিও সাইট, লারাভেল ভিডিও শেয়ারিং সাইট, লারাভেল কর্পোরেট সাইট, লারাভেল প্ল্যানিং টুলস, লারাভেল অনলাইন গেম সাইট, লারাভেল চ্যাট অ্যাপ্লিকেশন, লারাভেল পণ্য প্রদর্শনী সাইট, লারাভেল অফিস ম্যানেজমেন্ট সিস্টেম, লারাভেল অনলাইন শিক্ষার প্ল্যাটফর্ম, লারাভেল ই-লার্নিং সাইট, লারাভেল ক্যারিয়ার পোর্টাল, লারাভেল নিউজ অ্যাগ্রিগেটর, লারাভেল সেলফ-কেয়ার সাইট, লারাভেল টিম ম্যানেজমেন্ট সিস্টেম, লারাভেল জনবল নিয়োগ সাইট, লারাভেল পরিবহন ম্যানেজমেন্ট সিস্টেম, লারাভেল অনলাইন শপিং প্ল্যাটফর্ম, লারাভেল ইনভেন্টরি ম্যানেজমেন্ট সিস্টেম, লারাভেল আর্থিক সিস্টেম, লারাভেল স্টক ম্যানেজমেন্ট সিস্টেম, লারাভেল রিসোর্স শেয়ারিং সাইট, লারাভেল ফিনান্সিয়াল মার্কেট প্ল্যাটফর্ম, লারাভেল কর্পোরেট ব্লগ, লারাভেল গ্যালারি সাইট, লারাভেল ব্যবসায়িক সাইট, লারাভেল অনলাইন ক্যালেন্ডার, লারাভেল অনলাইন পরীক্ষার প্ল্যাটফর্ম।
Fast Solution,fast solutions,fast solu tions,fastsolutionsit web development,
IT support fastsolutionsit,fastsolutionsit reviews,best IT services fastsolutionsit,fastsolutionsit data management,cloud services fastsolutionsit,fastsolutionsit team,fastsolutionsit mobile app solutions,fastsolutionsit software solutions,fastsolutionsit SaaS services,top-rated fastsolutionsit,cybersecurity fastsolutionsit,
affordable IT solutions fastsolutionsit,fastsolutionsit app development,fastsolutionsit portfolio,fastsolutionsit login,fastsolutionsit near me,SEO services fastsolutionsit,fastsolutionsit for small business,trusted fastsolutionsit provider,fastsolutionsit company profile,fastsolutionsit cloud computing,fastsolutionsit consultation,fastsolutionsit machine learning,where is fastsolutionsit located,fastsolutionsit eCommerce solutions,fastsolutionsit workshops,top fastsolutionsit alternatives,web hosting fastsolutionsit,fastsolutionsit healthcare IT,fastsolutionsit expert team,fastsolutionsit digital marketing,fastsolutionsit affiliate program,fastsolutionsit high-quality services,fastsolutionsit partner program,fastsolutionsit contact,how fastsolutionsit works,fastsolutionsit education IT solutions,fastsolutionsit blockchain development,fastsolutionsit for startups,fastsolutionsit trusted services,fastsolutionsit client reviews,affordable fastsolutionsit,fastsolutionsit login portal,digital transformation fastsolutionsit,fastsolutionsit remote services,fastsolutionsit innovative technology,fastsolutionsit big data solutions,fastsolutionsit IT consultancy,fastsolutionsit events,why choose fastsolutionsit,fastsolutionsit customer support,fastsolutionsit for enterprises,fastsolutionsit success stories,custom software fastsolutionsit,fastsolutionsit feedback,fastsolutionsit office location,fastsolutionsit quick support,enterprise solutions fastsolutionsit,fastsolutionsit technology services,fastsolutionsit case studies,fastsolutionsit service offerings,fastsolutionsit workshops and training,best alternatives to fastsolutionsit,fastsolutionsit software maintenance,fastsolutionsit managed services,fastsolutionsit reseller program,fastsolutionsit network solutions,fastsolutionsit local services,fastsolutionsit finance technology,fastsolutionsit reviews and ratings,fastsolutionsit careers,is fastsolutionsit reliable,fastsolutionsit professional IT services,fastsolutionsit data security,fastsolutionsit consulting services,web design fastsolutionsit,fastsolutionsit local experts,who owns fastsolutionsit,fastsolutionsit team expertise,fastsolutionsit projects,fastsolutionsit IT solutions,IT automation fastsolutionsit,fastsolutionsit innovative IT services,fastsolutionsit client feedback,fastsolutionsit high-quality tech solutions,fastsolutionsit reliable IT services,fastsolutionsit corporate solutions,fastsolutionsit USA services,fastsolutionsit service pricing,fastsolutionsit member portal,fastsolutionsit cloud solutions,fastsolutionsit IT support team,fastsolutionsit success stories,fastsolutionsit for the healthcare industry,digital marketing fastsolutionsit,fastsolutionsit startup support,fastsolutionsit cybersecurity services,fastsolutionsit consulting,fastsolutionsit for manufacturing,fastsolutionsit client satisfaction,fastsolutionsit customer testimonials,fastsolutionsit pricing,fastsolutionsit best IT services,fastsolutionsit technology solutions." />
    <meta name="title" content="{{$cat_id->name}}"/>
    <meta name="description" content="Fast Solution It Web Software Company">

    <meta property="article:type" content="website">
    <meta property="article:title" content="{{$cat_id->name}}">
    <meta property="article:url" content="{{request()->url()}}">
    <meta property="article:description" content="Fast Solution It Web Software Company">
    <meta property="article:image" content="{{asset($cat_id->image)}}">
    <meta property="article:published_time" content="{{$cat_id->created_at->format('Y-m-d h:i:s A, F Y, l')}}" />
    <meta property="article:modified_time" content="{{$cat_id->updated_at->format('Y-m-d h:i:s A, F Y, l')}}" />


    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="Fast Solution It" />
    <meta property="og:title" content="{{$cat_id->name}}" />
    <meta property="og:description" content="Fast Solution It Web Software Company" />
    <meta property="og:image" content="{{ asset($cat_id->image) }}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:secure_url" content="{{ asset($cat_id->image) }}" />
    <meta property="og:image:alt" content="{{$cat_id->name}}" />
    <link rel="image_src" href="{{ asset($cat_id->image) }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="fastsolutionsit.com">
    <meta property="twitter:url" content="{{ request()->url() }}">
    <meta name="twitter:title" content="{{$cat_id->name}} | {{env('APP_NAME')}}">
    <meta name="twitter:hashtags" content="Fast Solution It Web Software Company,Laravel Developer, PHP Developer, HTML, CSS, Bootstrap, Vue.js Developer,">
    <meta name="twitter:description" content="Fast Solution It Web Software Company">
    <meta name="twitter:image" content="{{ asset($cat_id->image) }}">
    <meta name="twitter:creator" content="">
    <meta name="twitter:site" content="">

    <meta name="url" content="{{request()->url()}}" />
    <link rel="canonical" href="{{request()->url()}}" />
@endsection
@section('title')
    Theme Page
@endsection
@section('body')
    <section class="breadcrumb breadcrumb-one padding-y-60 section-bg position-relative z-index-1 overflow-hidden">

        <img src="{{ asset('/') }}front/assets/images/gradients/breadcrumb-gradient-bg.png" alt="" class="bg--gradient">

        <img src="{{ asset('/') }}front/assets/images/shapes/element-moon3.png" alt="" class="element one">
        <img src="{{ asset('/') }}front/assets/images/shapes/element-moon1.png" alt="" class="element three">

        <div class="container container-two">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="breadcrumb-one-content">
                        <h3 class="breadcrumb-one-content__title text-center mb-3 text-capitalize">Laravel And Vue js Project available for purchase</h3>
                        <p class="breadcrumb-one-content__desc text-center text-black-three">Explore the best premium Project available for sale. Our unique collection is hand-curated by experts. Find and buy the perfect premium Project.</p>

                        <form action="{{ route('search-website') }}" class="search-box">
                            <input type="text" name="search" value="{{ request('search') }}" class="common-input common-input--lg pill shadow-sm" placeholder="Search theme, plugins &amp; more...">
                            <button type="submit" class="btn btn-main btn-icon icon border-0">
                                <img src="{{ asset('/') }}front/assets/images/icons/search.svg" alt="">
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="all-product padding-y-120">
        <div class="container container-two">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-tab gap-3 flx-between">
                        <button type="button" class="filter-tab__button btn btn-outline-light pill d-flex align-items-center">
                            <span class="icon icon-left"><img src="{{ asset('/') }}front/assets/images/icons/filter.svg" alt=""></span>
                            <span class="font-18 fw-500">Filters </span>
                        </button>

                        <div class="list-grid d-flex align-items-center gap-2">
                            <button class="list-grid__button list-button d-sm-flex d-none text-body"><i class="las la-list"></i></button>
                            <button class="list-grid__button grid-button d-sm-flex d-none active text-body"><i class="las la-border-all"></i></button>
                            <button class="list-grid__button sidebar-btn text-body d-lg-none d-flex"><i class="las la-bars"></i></button>
                        </div>
                    </div>

                </div>
                <div class="col-xl-3 col-lg-4">
                    <!-- ===================== Filter Sidebar Start ============================= -->
                    <div class="filter-sidebar">
                        <button type="button" class="filter-sidebar__close p-2 position-absolute end-0 top-0 z-index-1 text-body hover-text-main font-20 d-lg-none d-block"><i class="las la-times"></i></button>
                        @foreach($categories as $category)
                            <div class="filter-sidebar__item">
                                <button type="button" class="filter-sidebar__button font-16 text-capitalize fw-500">{{$category->name}}</button>
                                <div class="filter-sidebar__content">
                                    @php
                                        // Load subcategories with product count for the given category
                                        $subcategories = $category->subcategories()->withCount('themes')->get();
                                    @endphp

                                    <ul class="filter-sidebar-list">
                                        @foreach($subcategories as $subcategory)
                                            <li class="filter-sidebar-list__item">
                                                <a href="{{ route('single-category', ['slug' => $subcategory->slug]) }}" class="filter-sidebar-list__text">
                                                    {{ $subcategory->name }}<span class="qty">{{ $subcategory->themes_count }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- ===================== Filter Sidebar End ============================= -->
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-product" role="tabpanel" aria-labelledby="pills-product-tab" tabindex="0">
                            <div class="row gy-4 list-grid-wrapper">

                                @if($themess->isEmpty())
                                    <div class="no-projects-message d-flex justify-content-center align-items-center my-5 p-4">
                                        <p class="text-muted m-0">No available Website in this category right now.</p>
                                    </div>
                                @else
                                @foreach($themess as $themes)
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="product-card section-bg">
                                            <div class="product-card__thumb d-flex">
                                                <a href="{{route('detail',['categorySlug'=>$themes->sub_category->slug,'postSlug'=>$themes->slug])}}" class="link w-100">
                                                    <img src="{{ asset($themes->image) }}" alt="" class="cover-img">
                                                </a>
                                                <button type="button" class="product-card__wishlist"><i class="fas fa-heart"></i></button>
                                            </div>
                                            <div class="product-card__content">
                                                <h6 class="product-card__title">
                                                    <a href="{{route('detail',['categorySlug'=>$themes->sub_category->slug,'postSlug'=>$themes->slug])}}" class="link">{{$themes->name}}</a>
                                                </h6>
                                                <div class="product-card__info flx-between gap-2">
            <span class="product-card__author">
{{--                by--}}
                {{--                <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>--}}
            </span>
                                                    <div class="flx-align gap-2">
                                                        <h6 class="product-card__price mb-0">Tk.{{$themes->selling_price}}</h6>
                                                        <span class="product-card__prevPrice text-decoration-line-through">Tk.{{$themes->regular_price}}</span>
                                                    </div>
                                                </div>
                                                <div class="product-card__bottom flx-between gap-2">
                                                    <div>
                                                        {{--                                                    <span class="product-card__sales font-14 mb-2">1200 Sales</span>--}}
                                                        <div class="d-flex align-items-center gap-1">
                                                            {{--                                                        <ul class="star-rating">--}}
                                                            {{--                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
                                                            {{--                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
                                                            {{--                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
                                                            {{--                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
                                                            {{--                                                            <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>--}}
                                                            {{--                                                        </ul>--}}
                                                            {{--                                                        <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>--}}
                                                        </div>
                                                    </div>
                                                    <a target="_blank" href="{{$themes->link}}" class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                                    <a href="{{route('detail',['categorySlug'=>$themes->sub_category->slug,'postSlug'=>$themes->slug])}}" class="btn btn-success btn-sm pill">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                    @endif

                            </div>
                            <!-- Pagination Start -->
                            <nav aria-label="Page navigation">
                                <ul class="pagination common-pagination">
                                    <li class="page-item">  {{ $themess->links() }}</a></li>
                                </ul>
                            </nav>
                            <!-- Pagination End -->

                        </div>


                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
