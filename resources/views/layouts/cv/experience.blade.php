<?php
    /** @var \Illuminate\Database\Eloquent\Collection $experiences */
    ?>
<div class="flex flex-col">
	<ul class="carousel__content">
		@foreach($experiences as $experience)
			<li class="carousel__item">
				<div class="carousel-image">
					<img class="carousel__item__image" src="{{ $experience -> image}}" alt=""/>
				</div>
				<div class="carousel__description">
					<p class="small-text subtitle">{{ $experience -> timelapse}}</p>
					<h3>{{ $experience -> title}}</h3>
					<p class="small-text subtitle">{{ $experience -> company}}</p>
					<div class="mb-6" x-data="{expanded: false}">
						<div
							x-show="expanded"
							x-collapse.min.110px
							class="text-gray-500 wysiwyg-content"
						>
						<p class="small-text font-light">{{ $experience -> description}}</p>
						</div>
						<p class="text-right">
							<a
								@click="expanded = !expanded"
								href="javascript:void(0)"
								class="small-text"
								x-text="expanded ? 'Leer menos' : 'Leer más'"
							></a>
						</p>
					</div>
					<p class="small-text subtitle">{{ $experience -> site}}</p>
				</div>
			</li>
		@endforeach
	</ul>
	<div class="subtitle flex justify-end sticky bottom-8 right-0 -z-[3]">
		<h3 class="relative origin-center text-7xl font-semibold opacity-10 uppercase">{{__('Experiencia')}}</h3>
	</div>
</div>