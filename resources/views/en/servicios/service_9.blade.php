@extends(Route::currentRouteName().'.layout.app')

<section id="about" class="light">
      <header class="title">
        <h2>WEB  <span>HOSTING</span></h2>
        <p class="text-left">

        </p>
      </header>

    <div class="container">

        <div class="row table-row">
            <div class="col-sm-6 hidden-xs">
                <div class="section-content">
                    <div class="big-image p-1" style="background-image:url({{ asset('images/hosting1.jpg') }})"></div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        
                        <div class="about-detail">
                            <h4>ACCESS AND ADMINISTRATION</h4>
                            <p>
                                
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        <div class="about-icon"><i class="fa fa-angle-right"></i></div>
                        <div class="about-detail">
                            <h4></h4>
                            <p>
                                CPanel control panel, in which you can manage everything related to your web hosting, as well as having applications to professionalize your site.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        <div class="about-icon"><i class="fa fa-angle-right"></i></div>
                        <div class="about-detail">
                            <h4></h4>
                            <p>
                                Access via FTP 24 hours a day, so that you can make any changes to your Website.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        <div class="about-icon"><i class="fa fa-angle-right"></i></div>
                        <div class="about-detail">
                            <h4></h4>
                            <p>
                                Complete compatibility to upload your Website with Dreamweaver, Flash, iWeb, among many others.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
    <div class="container">

        <div class="row table-row">
            

            <div class="col-sm-6">
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        
                        <div class="about-detail">
                            <h4>FUNCTIONS</h4>
                            <p>
                                
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        <div class="about-icon"><i class="fa fa-angle-right"></i></div>
                        <div class="about-detail">
                            <h4></h4>
                            <p>
                                Mobile email (via POP / IMAP / Webmail)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        <div class="about-icon"><i class="fa fa-angle-right"></i></div>
                        <div class="about-detail">
                            <h4></h4>
                            <p>
                                You can configure any email account in a mail client application such as: Microsoft Outlook, Mac Mail, Thunderbird, any Android smartphone, iPhone or BlackBerry. And if, for some reason, you are not in your office or you do not have your device at hand, you can check your mail from any computer with an internet connection and with a web browser.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        <div class="about-icon"><i class="fa fa-angle-right"></i></div>
                        <div class="about-detail">
                            <h4></h4>
                            <p>
                                Auto-reply: You can send an automatic reply to all the people who send you an email, when you are out of your office or when you cannot fully deal with your mail.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        <div class="about-icon"><i class="fa fa-angle-right"></i></div>
                        <div class="about-detail">
                            <h4></h4>
                            <p>
                                Mail Groups: Don't waste time sending an email to each of your collaborators. You can create a post group.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        <div class="about-icon"><i class="fa fa-angle-right"></i></div>
                        <div class="about-detail">
                            <h4></h4>
                            <p>
                                Anti-SPAM System: Your Email includes AntiSPAM, a powerful filter so that your mailbox is not saturated with unwanted emails (SPAM).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="section-content">
                    <div class="big-image p-1" style="background-image:url({{ asset('images/hosting2.png') }})"></div>
                </div>
            </div>

        </div>
        

    </div>

</section>

@section('header',view(Route::currentRouteName().'.sections.header'))
@section('servicios',view(Route::currentRouteName().'.sections.servicios'))
@section('proyectos',view(Route::currentRouteName().'.sections.proyectos'))
@section('clientes',view(Route::currentRouteName().'.sections.clientes'))

@section('contacto',view(Route::currentRouteName().'.sections.contacto'))
@section('mapa',view(Route::currentRouteName().'.sections.mapa'))

<style>
#header,#team,#portfolio,#info{
    display:none;
}
</style>

@section('footer',view(Route::currentRouteName().'.sections.footer'))