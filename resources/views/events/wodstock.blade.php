<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <title>NFIT — El sistema de gestión definitivo para tu centro deportivo</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('/web/favicons/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('/web/favicons/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('/web/favicons/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('/web/favicons/apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ asset('/web/favicons/apple-touch-icon-60x60.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('/web/favicons/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ asset('/web/favicons/apple-touch-icon-76x76.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset('/web/favicons/apple-touch-icon-152x152.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('/web/favicons/favicon-196x196.png') }}" sizes="196x196" />
    <link rel="icon" type="image/png" href="{{ asset('/web/favicons/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/png" href="{{ asset('/web/favicons/favicon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ asset('/web/favicons/favicon-16x16.png') }}" sizes="16x16" />
    <link rel="icon" type="image/png" href="{{ asset('/web/favicons/favicon-128.png') }}" sizes="128x128" />
    <meta name="application-name" content="NFIT Web"/>
    <meta name="msapplication-TileColor" content="#01FFC2" />
    <meta name="msapplication-TileImage" content="{{ asset('/web/favicons/mstile-144x144.png') }}" />
    <meta name="msapplication-square70x70logo" content="{{ asset('/web/favicons/mstile-70x70.png') }}" />
    <meta name="msapplication-square150x150logo" content="{{ asset('/web/favicons/mstile-150x150.png') }}" />
    <meta name="msapplication-wide310x150logo" content="{{ asset('/web/favicons/mstile-310x150.png') }}" />
    <meta name="msapplication-square310x310logo" content="{{ asset('/web/favicons/mstile-310x310.png') }}" />
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5583ZSF');
    </script>

    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '543452846336792');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=543452846336792&ev=PageView&noscript=1"
    /></noscript>
    <!-- tailwindcdn -->
    <link href="{{ asset('/css/tailwind.min.css') }}" rel="stylesheet" />
	<style>
		body {
			background-color: #282C34;
		}
		.border-slate-500 {
			border-color: #4A5568;
		}
	</style>
</head>
<body class="text-gray-100 w-screen min-w-md">
	<div class="md:flex">
		<div class="md:w-3/6 xl:w-7/12 md:h-screen bg-center bg-no-repeat  "  style="background-image: url('{{ asset('/img/events/wodstock.jpg') }}')"></div>

    @if (session('success'))
      <div id="success-alert" class="flex flex-col h-screen items-center justify-center md:w-4/6 p-6 w-full xl:w-5/12" role="alert">
        <strong class="font-bold">Excelente!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
      </div>
    @else
		<div class="w-full p-6 md:w-4/6 xl:w-5/12">
			<div class="flex flex-col items-center gap-6">
        <img src="{{ asset('/img/logo_beta.svg') }}" class="w-28 mt-2">
        <h1 class="text-green-300 text-2xl">
					Sponsor oficial Wodstock
				</h1>
				<h2 class="text-green-300 ">
					Registrate para participar en nuestra promoción
				</h2>
			</div>
      <form action="{{ route('event.form', ['event' => 'wodstock']) }}" method="POST" id="contact-form">
        @csrf
        <input type="hidden" name="event" value="wodstock">
        {{-- alert for errors --}}
        @if ($errors->any())
          <div id="error-alert" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">Por favor corrige los siguientes errores.</span>
            {{-- if we click the close button, the alert will be hidden --}}
            <span id="error-alert-close-btn" class="absolute top-0 bottom-0 right-0 px-4 py-3">
              <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <title>Close</title>
                <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
              </svg>
            </span>
            {{-- show the errors --}}
            <ul class="mt-3 list-disc list-inside">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <div class="pt-9 space-y-8">
          {{-- input with errors --}}
            <input class="bg-transparent border border-gray-500 w-full h-10 focus:outline-none focus:border-green-300 px-2 rounded-sm transition ease-in duration-100 @if($errors->has('name')) border-red-500 @endif"
              type="text"
              placeholder="Ingresa tu Nombre"
              name="name"
              value="{{ old('name') }}"
              required
            />


          <input class="bg-transparent border border-gray-500 w-full h-10 focus:outline-none focus:border-green-300 px-2 rounded-sm transition ease-in duration-100 @if($errors->has('email')) border-red-500 @endif"
            type="text"
            placeholder="Ingresa tu Correo"
            name="email"
            value="{{ old('email') }}"
            required
          />

          <input class="bg-transparent border border-gray-500 w-full h-10 focus:outline-none focus:border-green-300 px-2 rounded-sm transition ease-in duration-100 @if($errors->has('box_center_name')) border-red-500 @endif"
            type="text"
            placeholder="Nombre del Centro Deportivo"
            name="box_center_name"
            value="{{ old('box_center_name') }}"
            required
          />
          <div class="flex gap-2">
            <!-- select for country -->
            <select class="bg-transparent border border-gray-500 w-1/2 h-10 focus:outline-none focus:border-green-300 px-2 rounded-sm transition ease-in duration-100 @if($errors->has('country')) border-red-500 @endif"
              name="country"
              id="country"
              value="{{ old('country') }}"
              required
            >
              <option class="bg-gray-700" value="">País</option>
              @foreach ($countries as $contry)
                <option  class="bg-gray-700" value="{{ $contry['code'] }}" @if ($contry['code'] === 'CL') selected @endif>{{ $contry['name'] }}</option>
              @endforeach
            </select>

            <input class="bg-transparent border border-gray-500 w-full h-10 focus:outline-none focus:border-green-300 px-2 rounded-sm transition ease-in duration-100 @if($errors->has('city')) border-red-500 @endif"
              type="text"
              name="city"
              placeholder="Ciudad"
              value="{{ old('city') }}"
              required
            />

          </div>
          <input class="bg-transparent border border-gray-500 w-full h-10 focus:outline-none focus:border-green-300 px-2 rounded-sm transition ease-in duration-100  @if($errors->has('students')) border-red-500 @endif"
            type="text"
            placeholder="Cantidad de alumnos (aproximado)"
            value="{{ old('students') }}"
            name="students"
            required
          />
          <div class="flex gap-2">
            <!-- we create a select for the prefix phone and an input for the phone number -->
            <select class=" bg-transparent border border-gray-500 w-1/4 h-10 focus:outline-none focus:border-green-300 px-2 rounded-sm transition ease-in duration-100 @if($errors->has('prefix')) border-red-500 @endif"
              name="prefix"
              id="prefix"
              required
            >
              <option class="bg-gray-700" value="">Prefijo</option>
              @foreach ($countries as $contry)
                <option class="bg-gray-700" value="{{ $contry['prefix'] }}">{{ $contry['prefix'] }}</option>
              @endforeach
            </select>
            <input class="bg-transparent border border-gray-500 w-3/4 h-10 focus:outline-none focus:border-green-300 px-2 rounded-sm transition ease-in duration-100  @if($errors->has('phone')) border-red-500 @endif"
              type="tel"
              placeholder="Teléfono"
              name="phone"
              value="{{ old('phone') }}"
              required
            />
          </div>

          {{-- we add two selects, one for the period and other for the plan --}}

				<button class="w-full h-11 bg-green-300 text-black text-xs font-bold uppercase rounded-sm flex justify-center items-center" id="form-btn">
          <svg id="loading-spinner" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
          </svg>
          Enviar
        </button>
      </form>
			</div>
		</div>

    @endif

	</div>
</body>

<script>
	// we create an array with the countries and the prefix phone
	const countries = @json($countries);

	// when the select a country we change the prefix phone
	const country = document.getElementById('country');
	const prefix = document.getElementById('prefix');

</script>

<script>
  // we import the plans from the controller

  let currency = 'CLP';




  //
  //  MOdule to change the currency
  //
  const options = document.querySelectorAll('.cursor-pointer');



</script>

<script>
  const loadingSpinner = document.getElementById('loading-spinner');
  const form = document.getElementById('contact-form');
  const formBtn = document.getElementById('form-btn');

  window.addEventListener('load', () => {
    hideLoadingSpinner();
  });

  function hideLoadingSpinner(isHidden = true) {
    if (isHidden) {
      loadingSpinner.classList.add('hidden');
    } else {
      loadingSpinner.classList.remove('hidden');
    }
  }

  formBtn.addEventListener('click', (e) => {
    e.preventDefault();

    makeButtonLoading();

    form.submit();
  });

  function makeButtonLoading() {
    formBtn.classList.add('bg-green-500', 'text-white');
    formBtn.classList.remove('bg-green-300', 'text-black');

    formBtn.innerHTML = 'Enviando...';
    formBtn.disabled = true;

    hideLoadingSpinner(false);
  }
</script>

<script>
  // we hide the error alert when the user click the close button
  const errorAlert = document.getElementById('error-alert');
  const errorAlertCloseBtn = document.getElementById('error-alert-close-btn');

  errorAlertCloseBtn.addEventListener('click', () => {
    errorAlert.classList.add('hidden');
  });

  // we remove the red border when the user start typing
  const inputs = document.querySelectorAll('input');

  inputs.forEach((input) => {
    input.addEventListener('input', () => {
      input.classList.remove('border-red-500');
    });
  });
</script>

</html>
