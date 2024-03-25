<x-guest-layout>
	<!-- Hero Banner starts -->
	<div id="hero_banner" class="splide">
		<div class="splide__track">
			<ul class="splide__list">
				<li class="splide__slide" data-splide-interval="15000">
					<img src="{{ asset ('storage/images/cv/el-chalten-fitz-roy-comprimida.webp')}}" alt="">
				</li>
				<li class="splide__slide" data-splide-interval="15000">
					<img src="{{ asset ('storage/images/cv/el-planetario-buenos-aires-comprimida.webp')}}" alt="">
				</li>
			</ul>
			<div id="hero_banner_caption">
				<div class="hero_banner_text">
					<div class="hero_banner_text_first">
						<h2 class="animated_title" data-value="Diseñador">Diseñador</h2>
						<h2 class="border_text animated_title" data-value="Gráfico">Gráfico</h2>
					</div>
					<div class="hero_banner_text_second">
						<h2 class="border_text animated_title" data-value="Desarrollador">Desarrollador</h2>
						<h2 class="animated_title" data-value="Web">Web</h2>
					</div>
				</div>
			</div>
			<div class="hero_banner_socials">
				<a href="https://wa.me/34623037048?text=Hola%20Nicolás!%20Te%20escribo%20desde%20tu%20web" target="blank">
                    <i class="fi fi-brands-whatsapp"></i>
                </a>
                <a href="mailto:nico.gelabert@gmail.com" target="blank">
                    <i class="fi fi-sr-envelope"></i>
                </a>
                <a href="https://www.behance.net/nicolasgelabert" target="blank">
                    <i class="fi fi-brands-behance"></i>
                </a>
                <a href="https://www.linkedin.com/in/nicolasgelabert/" target="blank" class="linkedin">
                    <i class="fi fi-brands-linkedin"></i>
                </a>
                <a href="https://www.instagram.com/nicolas.gelabert.dg/" target="blank">
                    <i class="fi fi-brands-instagram"></i>
                </a>
			</div>
		</div>
		<div class="splide__progress">
			<div class="splide__progress__bar">
		</div>
  </div>
	</div>
	<!-- Hero Banner ends -->
	<!-- Curriculum starts -->
	<div class="container pt-32" id="curriculum-vitae">
		<div class="carousel">
			<div class="carousel__wrapper">
				<div class="carousel__header">
					<h2 class="carousel__headline">{{__('Experiencia')}}</h2>
					<div class="carousel__controls"><button class="carousel__arrow disabled arrow-prev"></button><button class="carousel__arrow arrow-next"></button></div>
				</div>
				<ul class="carousel__content">
					@foreach($experiences as $experience)
						<li class="carousel__item">
							<div class="carousel-image">
								<img class="carousel__item__image" src="{{ $experience -> image}}" alt=""/>
							</div>
							<div class="carousel__description">
								<p class="small-text subtitle uppercase tracking-wider">{{ $experience -> timelapse}}</p>
								<h3 class="tracking-wider">{{ $experience -> title}}</h3>
								<div class="flex justify-between items-center">
									<p class="text-sm opacity-50">{{ $experience -> company}}</p>
									@if ( $experience -> site )
										<a href="{{ $experience -> site}}" target="blank">
										<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" class="w-5 opacity-50">
											<path d="m23.109,15.134l-8.812-3.999c-.91-.308-1.898-.079-2.575.598-.693.692-.903,1.69-.544,2.712l3.944,8.675c.238.523.763.868,1.347.879h.019c.571,0,1.085-.317,1.342-.829l1.776-3.553,3.554-1.776c.514-.258.839-.795.829-1.369-.01-.575-.355-1.101-.879-1.338Zm-.397,1.812l-3.851,1.925-1.925,3.851c-.086.171-.245.278-.436.278-.191-.003-.388-.119-.467-.294l-3.927-8.633c-.215-.617-.098-1.212.324-1.633.28-.281.65-.433,1.048-.433.177,0,.36.03.542.093l8.675,3.944c.174.079.289.254.292.445s-.105.371-.276.457ZM12,0c-.005,0-.01,0-.016,0,0,0,0,0-.001,0C5.374.009,0,5.389,0,12s5.383,12,12,12c.174,0,.348-.004.521-.011.276-.012.49-.245.479-.521-.012-.275-.25-.496-.52-.479-.092.004-.185.007-.277.008-.568-.57-2.737-2.87-4.089-5.998h1.387c.276,0,.5-.224.5-.5s-.224-.5-.5-.5h-1.778c-.437-1.245-.722-2.594-.722-4s.285-2.755.723-4h8.557c.182.518.338,1.055.457,1.605.051.234.258.395.488.395.035,0,.07-.003.106-.011.27-.058.441-.324.383-.594-.103-.477-.231-.942-.377-1.395h4.91c.486,1.24.753,2.59.753,4,0,.16-.003.319-.01.478-.012.276.202.509.478.521.282.026.51-.201.521-.478.008-.173.011-.347.011-.522C24,5.383,18.617,0,12,0ZM1,12c0-1.41.267-2.76.753-4h4.905c-.402,1.246-.658,2.591-.658,4s.256,2.754.658,4H1.753c-.486-1.24-.753-2.59-.753-4Zm6.019,5c1.066,2.669,2.723,4.785,3.743,5.93-3.737-.42-6.914-2.72-8.559-5.93h4.816Zm0-10H2.203C3.848,3.79,7.025,1.49,10.763,1.07c-1.02,1.145-2.677,3.261-3.743,5.93Zm1.096,0c1.224-2.829,3.117-4.984,3.885-5.79.77.807,2.665,2.963,3.888,5.79h-7.773Zm8.86,0c-1.068-2.672-2.722-4.786-3.74-5.93,3.738.42,6.915,2.72,8.561,5.93h-4.821Z"/>
										</svg>
										</a>
									@endif
								</div>
								<div class="mb-6" x-data="{ expanded: false }">
									<div
										x-show="expanded"
										x-collapse.min.120px
										class="text-gray-500 wysiwyg-content"
									>
										<p class="text-base md:text-sm font-light">{{ $experience->description }}</p>
									</div>

									<p class="text-right" x-show="{{ strlen($experience->description) }} > 235">
										<a
											@click="expanded = !expanded"
											href="javascript:void(0)"
										>
											<svg class="shrink-0 my-4" width="16" height="16" fill="#A8EB12" xmlns="http://www.w3.org/2000/svg">
												<rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
												<rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
											</svg>
										</a>
									</p>
								</div>
							</div>
						</li>
					@endforeach
				</ul>
			</div>
			
			<div class="carousel__wrapper">
				<div class="carousel__header">
					<h2 class="carousel__headline">{{__('Educación')}}</h2>
					<div class="carousel__controls"><button class="carousel__arrow disabled arrow-prev"></button><button class="carousel__arrow arrow-next"></button></div>
				</div>
				<ul class="carousel__content">
					@foreach($educations as $education)
						<li class="carousel__item">
							<div class="carousel-image">
								<img class="carousel__item__image" src="{{ $education -> image}}" alt=""/>
							</div>
							<div class="carousel__description">
								<p class="small-text subtitle uppercase tracking-wider">{{ $education -> timelapse}}</p>
								<h3 class="tracking-wider">{{ $education -> title}}</h3>
								<div class="flex justify-between items-center">
									<p class="text-sm opacity-50">{{ $education -> school}}</p>
									@if ( $education -> site )
										<a href="{{ $education -> site}}" target="blank">
										<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" class="w-5 opacity-50">
											<path d="m23.109,15.134l-8.812-3.999c-.91-.308-1.898-.079-2.575.598-.693.692-.903,1.69-.544,2.712l3.944,8.675c.238.523.763.868,1.347.879h.019c.571,0,1.085-.317,1.342-.829l1.776-3.553,3.554-1.776c.514-.258.839-.795.829-1.369-.01-.575-.355-1.101-.879-1.338Zm-.397,1.812l-3.851,1.925-1.925,3.851c-.086.171-.245.278-.436.278-.191-.003-.388-.119-.467-.294l-3.927-8.633c-.215-.617-.098-1.212.324-1.633.28-.281.65-.433,1.048-.433.177,0,.36.03.542.093l8.675,3.944c.174.079.289.254.292.445s-.105.371-.276.457ZM12,0c-.005,0-.01,0-.016,0,0,0,0,0-.001,0C5.374.009,0,5.389,0,12s5.383,12,12,12c.174,0,.348-.004.521-.011.276-.012.49-.245.479-.521-.012-.275-.25-.496-.52-.479-.092.004-.185.007-.277.008-.568-.57-2.737-2.87-4.089-5.998h1.387c.276,0,.5-.224.5-.5s-.224-.5-.5-.5h-1.778c-.437-1.245-.722-2.594-.722-4s.285-2.755.723-4h8.557c.182.518.338,1.055.457,1.605.051.234.258.395.488.395.035,0,.07-.003.106-.011.27-.058.441-.324.383-.594-.103-.477-.231-.942-.377-1.395h4.91c.486,1.24.753,2.59.753,4,0,.16-.003.319-.01.478-.012.276.202.509.478.521.282.026.51-.201.521-.478.008-.173.011-.347.011-.522C24,5.383,18.617,0,12,0ZM1,12c0-1.41.267-2.76.753-4h4.905c-.402,1.246-.658,2.591-.658,4s.256,2.754.658,4H1.753c-.486-1.24-.753-2.59-.753-4Zm6.019,5c1.066,2.669,2.723,4.785,3.743,5.93-3.737-.42-6.914-2.72-8.559-5.93h4.816Zm0-10H2.203C3.848,3.79,7.025,1.49,10.763,1.07c-1.02,1.145-2.677,3.261-3.743,5.93Zm1.096,0c1.224-2.829,3.117-4.984,3.885-5.79.77.807,2.665,2.963,3.888,5.79h-7.773Zm8.86,0c-1.068-2.672-2.722-4.786-3.74-5.93,3.738.42,6.915,2.72,8.561,5.93h-4.821Z"/>
										</svg>
										</a>
									@endif
								</div>
								<div class="mb-6" x-data="{expanded: false}">
									<div
										x-show="expanded"
										x-collapse.min.110px
										class="text-gray-500 wysiwyg-content"
									>
										<p class="text-base md:text-sm font-light">{{ $education -> description }}<br>
										</p>
									</div>
									@if ($education->certificate)
										<a href="{{ $education -> certificate }}" target="blank"><i class="fi fi-rs-diploma text-2xl"></i></a>
									@endif
									<p class="text-right tracking-wide" x-show="{{ strlen($education -> description) }} > 235">
										<a
											@click="expanded = !expanded"
											href="javascript:void(0)"
										>
											<svg class="shrink-0 my-4" width="16" height="16" fill="#A8EB12" xmlns="http://www.w3.org/2000/svg">
												<rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
												<rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
											</svg>
										</a>
									</p>
								</div>
							</div>
						</li>
					@endforeach
				</ul>
			</div>
			
			<div class="subtitle flex justify-end sticky bottom-8 right-0 -z-[3]">
				<h3 class="relative origin-center text-3xl sm:text-6xl md:text-7xl font-semibold opacity-10 uppercase">{{__('Curriculum')}}</h3>
			</div>
		</div>
		<div class="btns-port-web my-24">
			<a href="{{ asset('storage/files/cv.pdf') }}" download="01-curriculum-vitae-nicolas-gelabert" class="flex justify-center items-center">
				<div class="h-16 w-16 bg-black p-4 rounded-full absolute">
					<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" fill="#A8EB12">
						<path d="m22,16V3h-7v1h6v12h-5.707l-1,1h-4.586l-1-1H3V4h6v-1H2v13H0v2.5c0,1.379,1.122,2.5,2.5,2.5h19c1.379,0,2.5-1.121,2.5-2.5v-2.5h-2Zm1,2.5c0,.827-.673,1.5-1.5,1.5H2.5c-.827,0-1.5-.673-1.5-1.5v-1.5h7.293l1,1h5.414l1-1h7.293v1.5Zm-11.5-7.707V0h1v10.793l3.146-3.146.707.707-3.293,3.293c-.292.292-.676.438-1.061.438s-.768-.146-1.061-.438l-3.293-3.293.707-.707,3.146,3.146Z"/>
					</svg>
				</div>
				<div class="text-rotate">
					<svg viewBox="0 0 100 100">
						<path d="M 0,50 a 50,50 0 1,1 0,1 z" id="circle" />
						<text>
							<textPath xlink:href="#circle">
								Descargar Curriculum Vitae 
							</textPath>
						</text>
					</svg>
				</div>
			</a>
		</div>
	</div>
	<!-- Curriculum ends -->
	<!-- Portfolio starts -->
	<section id="portfolio" class="flex flex-col gap-16 mb-12 container mx-auto p-6">
		<div class="subtitle flex justify-end sticky top-8 right-0 -z-[3]">
			<h3 class="relative origin-center text-3xl sm:text-6xl md:text-7xl font-semibold opacity-10 uppercase">{{__('Portfolio')}}</h3>
		</div>
		<h2 class="section_headline">{{__('Diseño Gráfico')}}</h2>
		<div x-data="{ expanded: false }" class="flex flex-col">
			<div x-data="galleryItems()"
				@image-gallery-next.window="imageGalleryNext()"
				@image-gallery-prev.window="imageGalleryPrev()"
				@keyup.right.window="imageGalleryNext();"
				@keyup.left.window="imageGalleryPrev();"
				class="w-full h-full select-none pb-8"
				x-show="expanded" x-collapse.min.300px>
				<div class="max-w-6xl mx-auto duration-1000 delay-300 opacity-0 select-none ease animate-fade-in-view" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
					<ul x-ref="gallery" id="gallery" class="grid grid-cols-2 gap-5 mx-6 xl:mx-auto lg:grid-cols-5">
						<template x-for="(image, index) in imageGallery">
							<li>
								<div class="portfolio-card">
									<img x-on:click="imageGalleryOpen" :src="image.photo" :alt="image.alt" :data-index="index+1" 
									:data-caption="image.caption"
									:data-client="image.client"
									class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] ">
									<div class="portfolio-overlay">
										<p x-text="image.client" class="client font-semibold leading-tight pt-1 text-xs text-white uppercase relative z-[3]"></p>
										<p x-text="image.caption" class="caption leading-tight pt-1 text-white relative z-[3]"></p>
									</div>
								</div>
							</li>
						</template>
					</ul>
				</div>
				<template x-teleport="body">
					<div
						x-show="imageGalleryOpened"
						x-transition:enter="transition ease-in-out duration-300"
						x-transition:enter-start="opacity-0"
						x-transition:leave="transition ease-in-in duration-300"
						x-transition:leave-end="opacity-0"
						@click="imageGalleryClose"
						@keydown.window.escape="imageGalleryClose"
						x-trap.inert.noscroll="imageGalleryOpened"
						class="fixed inset-0 z-[99] flex items-center justify-center bg-black bg-opacity-50 select-none cursor-zoom-out" x-cloak>
						<div class="relative flex items-center justify-center w-11/12 xl:w-4/5 h-11/12">
							<div @click="$event.stopPropagation(); $dispatch('image-gallery-prev')" class="absolute left-0 flex items-center justify-center text-white translate-x-10 rounded-full cursor-pointer xl:-translate-x-24 2xl:-translate-x-32 bg-white/10 w-14 h-14 hover:bg-white/20">
								<svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>
							</div>
							<div class="flex flex-col justify-center items-center  py-16">
								<img
									x-show="imageGalleryOpened"
									x-transition:enter="transition ease-in-out duration-300"
									x-transition:enter-start="opacity-0 transform scale-50"
									x-transition:leave="transition ease-in-in duration-300"
									x-transition:leave-end="opacity-0 transform scale-50"
									class="object-contain object-center w-10/12 max-h-screen select-none cursor-zoom-out" :src="imageGalleryActiveUrl" :alt="imageGalleryActiveAlt"
									:data-caption="imageGalleryActiveCaption"
									style="display: none;">
									<p x-text="imageGalleryActiveCaption" class="text-white font-bold mt-2"></p>
									<p x-text="imageGalleryActiveClient" class="text-white font-bold mt-2 text-xs"></p>
							</div>
							<div @click="$event.stopPropagation(); $dispatch('image-gallery-next');" class="absolute right-0 flex items-center justify-center text-white -translate-x-10 rounded-full cursor-pointer xl:translate-x-24 2xl:translate-x-32 bg-white/10 w-14 h-14 hover:bg-white/20">
								<svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
							</div>
						</div>
					</div>
				</template>
			</div>
			<button 
				@click="expanded = ! expanded"
				class="btn-primary btn-icon mx-auto my-4"
				>
				<svg xmlns="http://www.w3.org/2000/svg" id="Bold" viewBox="0 0 24 24" width="16" height="16" >
					<path d="M1.51,6.079a1.492,1.492,0,0,1,1.06.44l7.673,7.672a2.5,2.5,0,0,0,3.536,0L21.44,6.529A1.5,1.5,0,1,1,23.561,8.65L15.9,16.312a5.505,5.505,0,0,1-7.778,0L.449,8.64A1.5,1.5,0,0,1,1.51,6.079Z" class="transform origin-center transition duration-200 ease-out" :class="{'!rotate-180': expanded}"/>
				</svg>
			</button>
		</div>
		<h2 class="section_headline">{{__('Desarrollo Web')}}</h2>
		<div class="flex justify-center gap-8">
			<a href="{{ route('welcome') }}" target="blank" class="btn-demo">Ver demo Vue</a>
			<a href="https://nifty-booth-702758.netlify.app/" target="blank" class="btn-demo">Ver demo React</a>
			<a href="" class="btn-demo hidden">Ver demo player</a>
		</div>
	</section>
	<!-- Portfolio ends -->
</x-guest-layout>

<style>
	.subtitle h3{
		font-family: "Lexend Zetta", sans-serif;
	}
	#gallery li .portfolio-card{
		position:relative;
		transition: 0.5s ease-in-out;
		display: flex;
		align-items: flex-end;
		background-color: #fff;
		box-shadow: 0px 7px 10px rgba(0, 0, 0, 0.5);
		transition: 0.5s ease-in-out;
	}
	#gallery li .portfolio-card:hover{
		transform: translateY(10px);
	}
	#gallery li .portfolio-card .portfolio-overlay{
		position: absolute;
		padding: 3rem 1rem 1rem;
		z-index: 3;
		color: #000;
		opacity: 0;
		transform: translateY(20px);
		transition: 0.5s all;
		width:100%;
	}
	#gallery li .portfolio-card .portfolio-overlay::before {
		content: '';
		display: block;
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
		z-index: 2;
		transition: 1s all;
		opacity: 0;
	}
	#gallery li .portfolio-card:hover .portfolio-overlay::before {
		opacity: 1;
	}
	#gallery li .portfolio-card:hover .portfolio-overlay{
		opacity: 1;
		transform: translateY(0px);
	}
	.btns-port-web .text-rotate svg {
		overflow: visible;
		animation: circular-text-rotate 5s linear paused infinite;
		width: 100px;
    	letter-spacing: 0.24rem;
		font-weight:bold;
	}
	.btns-port-web .text-rotate svg:hover {
		animation-play-state: running;
	}
	.btns-port-web .text-rotate path {
		fill: none;
	}
	.btns-port-web .text-rotate text {
		fill: black;
	}
	@keyframes circular-text-rotate {
		to {
		transform: rotate(1turn);
		}
	}
</style>

<script>
	window.addEventListener('load', () => {
  const COMPONENT_SELECTOR = '.carousel__wrapper';

  const components = document.querySelectorAll(COMPONENT_SELECTOR);

  components.forEach((component) => {
    const CONTENT_SELECTOR = '.carousel__content';
    const CONTROLS_SELECTOR = '.carousel__controls';

    const content = component.querySelector(CONTENT_SELECTOR);
    let x = 0;
    let mx = 0;
    const maxScrollWidth = content.scrollWidth - content.clientWidth / 2 - content.clientWidth / 2;
    const nextButton = component.querySelector('.arrow-next');
    const prevButton = component.querySelector('.arrow-prev');

    if (maxScrollWidth !== 0) {
      component.classList.add('has-arrows');
    }

    if (nextButton) {
      nextButton.addEventListener('click', function (event) {
        event.preventDefault();
        x = content.clientWidth / 2 + content.scrollLeft + 0;
        content.scroll({
          left: x,
          behavior: 'smooth',
        });
      });
    }

    if (prevButton) {
      prevButton.addEventListener('click', function (event) {
        event.preventDefault();
        x = content.clientWidth / 2 - content.scrollLeft + 0;
        content.scroll({
          left: -x,
          behavior: 'smooth',
        });
      });
    }

    const mousemoveHandler = (e) => {
      if (!content.classList.contains('dragging')) {
        return;
      }

      const mx2 = e.pageX - content.offsetLeft;
      content.scrollLeft = content.sx + mx - mx2;
    };

    const mousedownHandler = (e) => {
      mx = e.pageX - content.offsetLeft;
      content.sx = content.scrollLeft;
      content.classList.add('dragging');
    };

    const scrollHandler = () => {
      toggleArrows();
    };

    const toggleArrows = () => {
      if (content.scrollLeft > maxScrollWidth - 10) {
        nextButton.classList.add('disabled');
      } else if (content.scrollLeft < 10) {
        prevButton.classList.add('disabled');
      } else {
        nextButton.classList.remove('disabled');
        prevButton.classList.remove('disabled');
      }
    };

    const mouseupHandler = () => {
      mx = 0;
      content.classList.remove('dragging');
    };

    content.addEventListener('mousemove', mousemoveHandler);
    content.addEventListener('mousedown', mousedownHandler);
    if (component.querySelector(CONTROLS_SELECTOR) !== undefined) {
      content.addEventListener('scroll', scrollHandler);
    }
    content.addEventListener('mouseup', mouseupHandler);
    content.addEventListener('mouseleave', mouseupHandler);
  });
});

const letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
let intervals = {};

function startAnimation(titleElement) {
  let iteration = 0;
  const originalText = titleElement.dataset.value;
  const titleId = titleElement.id;

  clearInterval(intervals[titleId]);

  intervals[titleId] = setInterval(() => {
    titleElement.innerText = originalText
      .split('')
      .map((letter, index) => {
        if (index < iteration) {
          return originalText[index];
        }
        return letters[Math.floor(Math.random() * 26)];
      })
      .join('');
    if (iteration >= originalText.length) {
      clearInterval(intervals[titleId]);
    }
    iteration += 1 / 3;
  }, 50);
}

document.addEventListener('DOMContentLoaded', () => {
  const titleElements = document.querySelectorAll('.animated_title');
  titleElements.forEach((titleElement, index) => {
    titleElement.id = `title_${index + 1}`;
    startAnimation(titleElement);
  });
});

</script>