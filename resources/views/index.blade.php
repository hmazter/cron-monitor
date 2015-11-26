@extends('app')

@section('content')
    <!-- ******PROMO****** -->
    <section id="promo" class="promo section offset-header">
        <div class="container text-center">
            <h2 class="title">Cron<span class="highlight">Monitor</span></h2>
            <p class="intro">A free Cron task monitor service</p>
            <div class="btns">
                <a class="btn btn-cta-primary" href="{{ route('auth.register') }}" target="_blank">Sign up</a>
            </div>
            <ul class="meta list-inline">
                <li><a href="https://github.com/hmazter/cron-monitor" target="_blank">View on GitHub</a></li>
                <li><a href="/docs" target="_blank">Full Documentation</a></li>
                <li>Created by <a href="http://hmazter.com" target="_blank">Kristoffer Högberg</a></li>
            </ul><!--//meta-->
        </div><!--//container-->


    </section><!--//promo-->
    
    <!-- ******ABOUT****** --> 
    <section id="about" class="about section">
        <div class="container">
            <h2 class="title text-center">What is CronMonitor?</h2>
            <p class="intro text-center">Explain your project in detail. Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
            <div class="row">
                <div class="item col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-holder">
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="content">
                        <h3 class="sub-title">Designed for developers</h3>
                        <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 400+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                    </div><!--//content-->
                </div><!--//item-->
                <div class="item col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-holder">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="content">
                        <h3 class="sub-title">Time saver</h3>
                        <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 400+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                    </div><!--//content-->
                </div><!--//item-->
                <div class="item col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-holder">
                        <i class="fa fa-crosshairs"></i>
                    </div>
                    <div class="content">
                        <h3 class="sub-title">UX-centred</h3>
                        <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 400+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                    </div><!--//content-->
                </div><!--//item-->           
                <div class="clearfix visible-md"></div>    
                <div class="item col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-holder">
                        <i class="fa fa-tablet"></i>
                    </div>
                    <div class="content">
                        <h3 class="sub-title">Mobile-friendly</h3>
                        <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 400+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                    </div><!--//content-->
                </div><!--//item-->                
                <div class="item col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-holder">
                        <i class="fa fa-code"></i>
                    </div>
                    <div class="content">
                        <h3 class="sub-title">Easy to customise</h3>
                        <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 400+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                    </div><!--//content-->
                </div><!--//item-->
                <div class="item col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-holder">
                        <i class="fa fa-coffee"></i>
                    </div>
                    <div class="content">
                        <h3 class="sub-title">LESS files included</h3>
                        <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 400+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                    </div><!--//content-->
                </div><!--//item-->               
            </div><!--//row-->            
        </div><!--//container-->
    </section><!--//about-->
    
    <!-- ******FEATURES****** --> 
    <section id="features" class="features section">
        <div class="container text-center">
            <h2 class="title">Features</h2>
            <ul class="feature-list list-unstyled">
                <li><i class="fa fa-check"></i> Fully responsive</li>
                <li><i class="fa fa-check"></i> HTML5 + CSS3</li>
                <li><i class="fa fa-check"></i> Built on <a href="http://getbootstrap.com/" target="_blank">Bootstrap 3.3</a></li>
                <li><i class="fa fa-check"></i> 400+ FontAwesome icons</li>
                <li><i class="fa fa-check"></i> 4 colour schemes</li>
                <li><i class="fa fa-check"></i> LESS files included</li>
                <li><i class="fa fa-check"></i> Compatible with all modern browsers</li>
            </ul>
        </div><!--//container-->
    </section><!--//features-->
    
    <!-- ******DOCS****** --> 
    <section id="docs" class="docs section">
        <div class="container">
            <div class="docs-inner">
            <h2 class="title text-center">Get Started</h2>            
            <div class="block">
                <h3 class="sub-title text-center">HTML</h3>
                <p><a href="http://prismjs.com/" target="_blank">PrismJS</a> is used as the syntax highlighter here.</p>
                <p>Below are the details of the custom PrismJS build used in this template. You can <a href="http://prismjs.com/download.html" target="_blank">build your own version</a> via their website should you need to.</p>
                <ul class="list-unstyled">
                    <li><strong>Compression level:</strong> Minified</li>
                    <li><strong>Theme:</strong> Okaidia</li>
                    <li><strong>Languages:</strong> Markup, CSS, C-like, JavaScript, PHP and Python</li>
                </ul>
                <div class="code-block">
                    <!--//Use Prismjs - http://prismjs.com/index.html#basic-usage -->
                    <pre><code class="language-markup">
    &ltp class="my-style"&gt
      Hello World!
    &lt/p&gt
                     </code></pre>
                </div><!--//code-block-->
            </div><!--//block-->
            
            <div class="block">
                <h3 class="sub-title text-center">CSS</h3>
                <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</p>
                
                <div class="code-block">
                    <!--//Use Prismjs - http://prismjs.com/index.html#basic-usage -->
                    <pre>
    <code class="language-css">
    body {
      font-family: 'Lato', arial, sans-serif;
      color: #444444;
      font-size: 16px;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
    </code></pre>
                </div><!--//code-block-->
            </div><!--//block-->
            
            <div class="block">
                <h3 class="sub-title text-center">JavaScript</h3>
                <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit ligula eget dolor.</p>
                <div class="code-block">
                    <pre><code class="language-javascript">
    if( awesome ){
        console.log('This is Awesome');
    }else{
        $('body').addClass('give-me-awesome');
    }
                    </code></pre>
                </div><!--//code-block-->
            </div><!--//block-->   
            <div class="block">
                <h3 class="sub-title text-center">Full Documentation</h3>
                <p>If your documentation is very long you can host the full docs page (including FAQ etc) on GitHub and provide a Call to Action button below to direct users there.</p>
                <p class="text-center">
                    <a class="btn btn-cta-primary" href="https://github.com/hmazter/cron-monitor" target="_blank">More on GitHub</a>
                </p>
            </div><!--//block-->
            
            </div><!--//docs-inner-->         
        </div><!--//container-->
    </section><!--//features-->
    
    <!-- ******LICENSE****** --> 
    <section id="license" class="license section">
        <div class="container">
            <div class="license-inner">
            <h2 class="title text-center">License</h2>
                <div class="info">
                    <h3>Project</h3>
                    <p>The project is released under MIT</p>
                </div>
                <div class="info">
                    <h3>Theme</h3>
                    <p>This Bootstrap theme is made by UX designer <a href="https://www.linkedin.com/in/xiaoying" target="_blank">Xiaoying Riley</a> at 3rd Wave Media for developers and is <strong>100% FREE</strong> under the <a href="https://creativecommons.org/licenses/by/3.0/" target="_blank">Creative Commons Attribution 3.0 License (CC BY 3.0)</a></p>
                </div><!--//info-->
            </div><!--//license-inner-->
        </div><!--//container-->
    </section><!--//how-->
    
    <!-- ******CONTACT****** --> 
    <section id="contact" class="contact section has-pattern">
        <div class="container">
            <div class="contact-inner">
                <h2 class="title  text-center">Contact</h2>
                <p class="intro  text-center">Feel free to get in touch if you have any questions or suggestions.</p>
                <div class="author-message">                      
                    <div class="profile">
                        <img class="img-responsive" src="http://graph.facebook.com/729470803/picture?type=large" alt="" />
                    </div><!--//profile-->
                    <div class="speech-bubble">
                        <h3 class="sub-title"><a href="#" target="_blank">Hmazter/Kristoffer Högberg</a></h3>
                        <p>Lorem ipsum</p>
                    </div><!--//speech-bubble-->
                </div><!--//author-message-->
                <div class="clearfix"></div>
                <div class="info text-center">
                    <h4 class="sub-title">Get Connected</h4>
                    <ul class="social-icons list-inline">
                        <li><a href="https://github.com/hmazter"><i class="fa fa-github"></i></a></li>
                        <li><a href="https://plus.google.com/+KristofferHögberg"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://twitter.com/hmazter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://se.linkedin.com/in/kristofferhogberg"><i class="fa fa-linkedin"></i></a></li>
                        <li class="last"><a href="mailto: kristoffer@hmazter.com"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div><!--//info-->
            </div><!--//contact-inner-->
        </div><!--//container-->
    </section><!--//contact-->  

@endsection
