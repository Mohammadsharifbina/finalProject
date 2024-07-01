<style>
    @if (LaravelLocalization::getCurrentLocaleDirection()=="rtl")
   
    @endif
    @font-face {
        font-family: "bahijTiter";
        src: url('Bahij Badr-Bold.ttf');
    }
    #lang{
        background-color: #0A1D56;
        color: white;
        margin-right: 1px;
        padding: 0.3em 0.4em;
        width: 4em;
        display: inline-block;
        text-align: center;
        margin-top: 0.3em;
        border-radius: 25px;
        font-size: 0.8em;
        font-family: bahijTiter;

    }
</style>
<header>
		<h2>
		<label for="nav-toggle">
			<span class="las la-bars"></span>
		</label>

   
		@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

            <a  id="lang" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
       
    @endforeach
	</h2>

   <div class="search-wrapper">
   	 <span class="las la-search"></span>
   	 <input type="text" onkeyup="searchTheData()" id="mySearch" placeholder="{{__("nav.search")}}" / style="width:100%;">
   </div>

   <div class="user-wrapper">
   	 <td class="image"><img src="{{asset('bina.png')}}" alt=""></td>
   <div>
    

  </div>
</div>

</header>

