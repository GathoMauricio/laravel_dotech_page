@if (Route::currentRouteName() == 'es')
<!-- Header ES-->
<header id="header" class="alt">
    <div class="logo">
        <a href="{{ route('/'); }}" style="font-weight:bold">
            <span style="color:#333333;font-weight:bold;font-size:25px;">DO</span><span style="color:#d30035;font-weight:bold;font-size:25px;">TECH</span>
            &nbsp;
            TUS ALIADOS TECNOLOGICOS
        </a>
    </div>
    <a href="#menu">Menú</a>
</header>
@endif

@if (Route::currentRouteName() == 'en')
<!-- Header EN-->
<header id="header" class="alt">
    <div class="logo">
        <a href="{{ route('/'); }}" style="font-weight:bold">
            <span style="color:#333333;font-weight:bold;font-size:25px;">DO</span><span style="color:#d30035;font-weight:bold;font-size:25px;">TECH</span>
            &nbsp;
            YOUR TECHNOLOGICAL ALLIES
        </a>
    </div>
    <a href="#menu">Menu</a>
</header>
@endif