


<style>
    
 .tabs {
    width: 7rem;
    display: flex;
    position: relative;
    background-color: #fff;
    box-shadow: 0 0 1px 0 rgba(24, 94, 224, 0.15), 0px 14px 12px 0 rgb(0 0 0 / 15%);
    padding: 0.25rem;
    border-radius: 99px;
}.tabs input[type="radio"] {
  display: none;
} .tabs * {
  z-index: 2;
}
.tab {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 30px;
  width: 50px;
  font-size: 1rem;
  color: black;
  font-weight: 500;
  border-radius: 99px;
  cursor: pointer;
  transition: color 0.15s ease-in;
}.glider {
  position: absolute;
  display: flex;
  height: 30px;
  width: 50px;
  background-color: #e6eef9;
  z-index: 1;
  border-radius: 99px;
  transition: 0.25s ease-out;
}
</style>
        <!-- main header -->
        <header class="main-header">
            <!-- header-lower -->
            <div class="header-lower">
                <div class="nav-btn nav-toggler navSidebar-button"><i class="icon-1"></i></div>
                <div class="outer-container">
                    <div class="outer-box">
                        <div class="logo-box" style="background-color: #e8fffe;">
                            <figure class="logo"><a href="{{route('index')}}"><img src="{{asset('images/logo.png')}}" alt=""></a></figure>
                        </div>
                        <div class="menu-area">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light clearfix">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current dropdown"><a href="{{route('index')}}">
                                            {{__('messages.nav_menu_1')}}
                                        </a></li>

                                        <li><a href="{{route('about')}}">
                                            {{__('messages.nav_menu_2')}}
                                        </a></li>

                                        <li><a href="{{route('treatments')}}">{{__('messages.nav_menu_3')}}</a></li>
                                        <li><a href="{{route('contact')}}">{{__('messages.nav_menu_4')}}</a></li>
                                        <li><a href="{{route('ayushmaan')}}">{{__('messages.nav_menu_5')}}</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-right-content">
                            <div class="support-box">
                                <div class="icon-box"><i class="icon-2"></i></div>
                                <p><span>Need help?</span> Call us</p>
                                <a href="tel:8702257682">8797215620</a>
                            </div>
                            <div class="btn-box"><a href="{{route('register')}}" class="theme-btn btn-two">Call Now</a></div>
                            <div class="">
                                @php $locale = app()->getLocale();  @endphp
                                <div class="tabs">
                                    <input type="radio" id="radio-1" name="tabs" {{ $locale =='en' ? 'checked' :'' }}>
                                    <label class="tab" for="radio-1" style="color:{{ $locale=='en'?'blue':''}}"> EN </label>
                                    <input type="radio" id="radio-2" name="tabs" {{ $locale =='h' ? 'checked' :'' }}>
                                    <label class="tab" for="radio-2" style="color:{{ $locale=='h'?'blue':''}}"> H </label>
                                    <span class="glider" style="transform: translateX({{$locale=='h'?'100%':'0%'}});"></span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="{{route('index')}}"><img src="{{asset('/images/logo.png')}}" alt=""></a></figure>
                        </div>
                        <div class="menu-area">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="menu-right-content">
                            <div class="support-box">
                                <div class="icon-box"><i class="icon-2"></i></div>
                                <p><span>Need help?</span> Call us</p>
                                <a href="tel:8797215620">8797215620</a>
                            </div>
                            <div class="btn-box"><a href="{{route('index')}}" class="theme-btn btn-two">Call Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

<script>
    $(function(){
        $('label.tab').click(function(){
            let locale = $(this).text().toLowerCase().trim()
            console.log(locale)
            localStorage.setItem('locale', locale )
            $.ajax({
                url:"{{ route('set-locale') }}",
                data: {locale},
                success:res => {
                    location.reload()
                },
                error:er => console.log(er)
            })
        })
    })
</script>