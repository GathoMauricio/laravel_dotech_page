@extends(Route::currentRouteName().'.layout.app')
@include(Route::currentRouteName().'.layout.link_nav')

<section id="about" class="light">
      <header class="title">
        <h2>ACCESS <span>CONTROL</span></h2>
        <p class="text-left">
            The digital attendance controls or also called fingerprint checker clock , 
            are devices that will help us by means of our fingerprint to keep records 
            which with a software we can organize by setting schedules and personnel.
        </p>
      </header>

    <div class="container">

        <div class="row table-row">
            <div class="col-sm-6 hidden-xs">
                <div class="section-content">
                    <div class="big-image p-1" style="background-image:url({{ asset('images/control1.png') }})"></div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        <div class="about-detail">
                            <h4></h4>
                            <p>
                                There are different types of access control with various levels of security. The most common are those that, through a Reader of any type, send the signal to an electromagnet, plate, bolt, pen and other items to provide or deny access
                                <br/>
                                The main use is security, necessary in the home, hospitals, offices, schools, shops, warehouses, etc.
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
                                At home, the entrance to the garage could be enabled by means of a proximity card. In case of having valuable objects, a biometric access control with an electromagnetic badge could be used.
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
                                In hospitals it is common to restrict the passage to the medicine area, in such a way that the date and time of the personnel who entered said place was recorded.
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
                                It would be helpful for schools to safeguard important, delicate, or expensive materials within laboratories.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        <div class="about-detail">
                            <h4></h4>
                            <p>
                                There are readers that when the identification is accepted either by fingerprint, eye, face, proximity card or other, triggers the opening or closing of the device that will control the door, for example.
                                <br/><br/>
                                Another type of access control is a biometric lock, which is installed on the door and controls the opening by accepting the fingerprint of the registered user.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        <div class="about-detail">
                            <h4></h4>
                            <p>
                                As the level of security and needs increases, the project grows. For this, panels that work in conjunction with readers and access accessories are recommended. In the event that it is required to control several doors with a single card, manage user levels, schedules and even enable or disable the access of a person in real time, a panel that controls all this is necessary, preferably connected to the local data network .
                            </p>
                        </div>
                    </div>
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