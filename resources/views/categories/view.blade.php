<x-app-layout>
    <div class="pt-24">
        <div id="categories-carousel">
            <div class="container">
                <div class="carousel">
                    <div class="carousel__wrapper">
                        <div class="carousel__header mb-8 text-center">
                            <h2 class="text-2xl font-bold ">{{$categories->name}}</h2>
                        </div>
                        <ul class="carousel__content ">
                            @foreach($categories->products as $product)
                            <li class="carousel__item">
                                <div x-data="productItem({{ json_encode([
                                    'id' => $product->id,
                                    'slug' => $product->slug,
                                    'image' => $product->image,
                                    'title' => $product->title,
                                    'price' => $product->price,
                                    'addToCartUrl' => route('cart.add', $product)
                                    ]) }})" class="border-transparent overflow-hidden rounded-lg bg-white underline-hover product_listing">
                                    <a href="{{ route('product.view', [$product->category?->slug, $product->slug ]) }}" class="aspect-w-3 aspect-h-2 block">
                                        <img src="{{ $product->image }}" alt="{{$product->title}}" class="card-image object-cover hover:scale-105 hover:rotate-1 transition-transform" />
                                        <div class="p-4 card-listing">
                                            <div class="flex flex-col">
                                                <p class="small-text category_subtitle">{{$product->category?->name}}</p>
                                            </div>
                                            <div class="relative flex justify-between">
                                                <h4 class="w-fit">
                                                    {{$product->title}}
                                                </h4>
                                                <span class="price">${{$product->price}}</span>
                                            </div>
                                            <div class="relative flex">
                                                <p class="text-xs font-light">{{$product->description}}</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="flex justify-center mb-5">
                                        <button class="btn-cart-product" @click="addToCart()">
                                            <!-- Add to Cart -->
                                            <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                            stroke-width="1"
                                            >
                                                <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                                                />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            
            </div>
        </div>
        
    </div>
</x-app-layout>

<script>
    window.addEventListener( 'load', () => {
	const COMPONENT_SELECTOR = '.carousel__wrapper';
	const CONTROLS_SELECTOR = '.carousel__controls';
    const CONTENT_SELECTOR = '.carousel__content';

	const components = document.querySelectorAll( COMPONENT_SELECTOR );

	for ( let i = 0; i < components.length; i++ ) {
		const component = components[ i ];
		const content = component.querySelector( CONTENT_SELECTOR );
		let x = 0;
		let mx = 0;
		const maxScrollWidth = content.scrollWidth - content.clientWidth / 2 - content.clientWidth / 2;

		/**
		 * Mouse move handler.
		 *
		 * @param {object} e event object.
		 */
		const mousemoveHandler = ( e ) => {
			const mx2 = e.pageX - content.offsetLeft;
			if ( mx ) {
				content.scrollLeft = content.sx + mx - mx2;
			}
		};

		/**
		 * Mouse down handler.
		 *
		 * @param {object} e event object.
		 */
		const mousedownHandler = ( e ) => {
			content.sx = content.scrollLeft;
			mx = e.pageX - content.offsetLeft;
			content.classList.add( 'dragging' );
		};

		/**
		 * Mouse up handler.
		 */
		const mouseupHandler = () => {
			mx = 0;
			content.classList.remove( 'dragging' );
		};

		content.addEventListener( 'mouseup', mouseupHandler );
		content.addEventListener( 'mouseleave', mouseupHandler );
	};
} );


</script>