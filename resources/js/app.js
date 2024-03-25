import './bootstrap';

import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse'
import focus from '@alpinejs/focus'
import {get, post} from "./http.js";
import 'flowbite';
import Splide from '@splidejs/splide';

Alpine.plugin(collapse)
Alpine.plugin(focus)

window.Alpine = Alpine;

document.addEventListener("alpine:init", async () => {

  Alpine.data("toast", () => ({
    visible: false,
    delay: 5000,
    percent: 0,
    interval: null,
    timeout: null,
    message: null,
    close() {
      this.visible = false;
      clearInterval(this.interval);
    },
    show(message) {
      this.visible = true;
      this.message = message;

      if (this.interval) {
        clearInterval(this.interval);
        this.interval = null;
      }
      if (this.timeout) {
        clearTimeout(this.timeout);
        this.timeout = null;
      }

      this.timeout = setTimeout(() => {
        this.visible = false;
        this.timeout = null;
      }, this.delay);
      const startDate = Date.now();
      const futureDate = Date.now() + this.delay;
      this.interval = setInterval(() => {
        const date = Date.now();
        this.percent = ((date - startDate) * 100) / (futureDate - startDate);
        if (this.percent >= 100) {
          clearInterval(this.interval);
          this.interval = null;
        }
      }, 30);
    },
  }));

  Alpine.data("productItem", (product) => {
    return {
      product,
      addToCart(quantity = 1) {
        post(this.product.addToCartUrl, {quantity})
          .then(result => {
            this.$dispatch('cart-change', {count: result.count})
            this.$dispatch("notify", {
              message: "The item was added into the cart",
            });
          })
          .catch(response => {
            console.log(response);
          })
      },
      removeItemFromCart() {
        post(this.product.removeUrl)
          .then(result => {
            this.$dispatch("notify", {
              message: "The item was removed from cart",
            });
            this.$dispatch('cart-change', {count: result.count})
            this.cartItems = this.cartItems.filter(p => p.id !== product.id)
          })
      },
      changeQuantity() {
        post(this.product.updateQuantityUrl, {quantity: product.quantity})
          .then(result => {
            this.$dispatch('cart-change', {count: result.count})
            this.$dispatch("notify", {
              message: "The item quantity was updated",
            });
          })
      },
    };
  });
  Alpine.data("galleryItems", () => {
    return {
      imageGalleryOpened: false,
      imageGalleryActiveUrl: null,
      imageGalleryActiveAlt: null,
      imageGalleryActiveCaption: null,
      imageGalleryActiveClient: null,
      imageGalleryImageIndex: null,
      imageGallery: [
        {
        'photo': 'storage/images/cv/portfolio/el-parquimetro-homanaje-a-fernando-pena.jpg',
        'alt': 'Photo of Mountains',
        'caption': 'Homenaje a Fernando Peña',
        'client': 'ETER'
        },
        {
        'photo': 'storage/images/cv/portfolio/publi-carrera-produccion.jpg',
        'alt': 'Photo of Mountains 02',
        'caption': 'Promo Carrera de Producción',
        'client': 'ETER'
        },
        {
        'photo': 'storage/images/cv/portfolio/eter-sos-lo-que-estudias.png',
        'alt': 'Photo of Mountains 03',
        'caption': 'Mick',
        'client': 'ETER'
        },
        {
        'photo': 'storage/images/cv/portfolio/isologo-sur-comunica.jpg',
        'alt': 'Photo of Mountains 04',
        'caption': 'Isologo Sur Comunica',
        'client': 'Sur Comunica'
        },
        {
        'photo': 'storage/images/cv/portfolio/arte-stone.jpg',
        'alt': 'Photo of Mountains 05',
        'caption': 'Arte Stone',
        'client': 'Inspiración Rolling Stone'
        },
        {
        'photo': 'storage/images/cv/portfolio/amor.jpg',
        'alt': 'Photo of Mountains 06',
        'caption': 'Amor',
        'client': 'Licenciada Graciela Antes'
        },
        {
        'photo': 'storage/images/cv/portfolio/isologo-100-anos-de-radio.jpg',
        'alt': 'Photo of Mountains 07',
        'caption': 'Isologo 100 años de radio',
        'client': 'ETER'
        },
        {
        'photo': 'storage/images/cv/portfolio/logotipo-rada.jpg',
        'alt': 'Photo of Mountains 08',
        'caption': 'Logo Rada',
        'client': 'Rada Zapatos'
        },
        {
        'photo': 'storage/images/cv/portfolio/publi-eter-carreras.jpg',
        'alt': 'Photo of Mountains 09',
        'caption': 'Promo ETER Carreras',
        'client': 'ETER'
        },
        {
        'photo': 'storage/images/cv/portfolio/isologo-bamboo-sushi-wok.jpg',
        'alt': 'Photo of Mountains 10',
        'caption': 'Isologo Bamboo',
        'client': 'Bamboo Sushi & Wok'
        },
        {
        'photo': 'storage/images/cv/portfolio/publi-johnny-walker.jpg',
        'alt': 'Photo of Mountains 10',
        'caption': 'Publi Johnnie Walker',
        'client': 'Escuela de Creativos Publicitarios'
        },
        {
        'photo': 'storage/images/cv/portfolio/editorial-skatalites.jpg',
        'alt': 'Photo of Mountains 10',
        'caption': 'Diseño Editorial - Skatalites',
        'client': 'Escuela de Creativos Publicitarios'
        },
        {
        'photo': 'storage/images/cv/portfolio/premioseter-diploma.png',
        'alt': 'Photo of Mountains 10',
        'caption': 'Diploma Premios ETER',
        'client': 'ETER'
        },
        {
        'photo': 'storage/images/cv/portfolio/nunca-mas-pandemia.jpg',
        'alt': 'Photo of Mountains 10',
        'caption': 'Efeméride 24 de marzo',
        'client': 'ETER'
        },
        {
        'photo': 'storage/images/cv/portfolio/eter-senalador.png',
        'alt': 'Photo of Mountains 10',
        'caption': 'Señalador ETER carreras',
        'client': 'ETER'
        }
      ],
      imageGalleryOpen(event) {
        this.imageGalleryImageIndex = event.target.dataset.index;
        this.imageGalleryActiveUrl = event.target.src;
        this.imageGalleryActiveAlt = event.target.alt;
        this.imageGalleryActiveCaption = event.target.dataset.caption;
        this.imageGalleryActiveClient = event.target.dataset.client;
        this.imageGalleryOpened = true;
      },
        imageGalleryClose() {
        this.imageGalleryOpened = false;
        setTimeout(() => this.imageGalleryActiveUrl = null, 300);
      },
      imageGalleryNext(){
        this.imageGalleryImageIndex = (this.imageGalleryImageIndex == this.imageGallery.length) ? 1 : (parseInt(this.imageGalleryImageIndex) + 1);
        this.imageGalleryActiveUrl = this.$refs.gallery.querySelector('[data-index=\'' + this.imageGalleryImageIndex + '\']').src;
        this.imageGalleryActiveCaption = this.$refs.gallery.querySelector('[data-index=\'' + this.imageGalleryImageIndex + '\']').dataset.caption;
        this.imageGalleryActiveClient = this.$refs.gallery.querySelector('[data-index=\'' + this.imageGalleryImageIndex + '\']').dataset.client;
        },
        imageGalleryPrev() {
        this.imageGalleryImageIndex = (this.imageGalleryImageIndex == 1) ? this.imageGallery.length : (parseInt(this.imageGalleryImageIndex) - 1);
        this.imageGalleryActiveUrl = this.$refs.gallery.querySelector('[data-index=\'' + this.imageGalleryImageIndex + '\']').src;
        this.imageGalleryActiveCaption = this.$refs.gallery.querySelector('[data-index=\'' + this.imageGalleryImageIndex + '\']').dataset.caption;
        this.imageGalleryActiveClient = this.$refs.gallery.querySelector('[data-index=\'' + this.imageGalleryImageIndex + '\']').dataset.client;
      }
    };
  });
  
});


Alpine.start();

document.addEventListener('DOMContentLoaded', function () {
  new Splide( '#image-carousel', {
    type   : 'loop',
    perPage: 5,
    perMove: 1,
    gap    : '0.5rem',
    autoplay: true,
    pagination: true,
    omitEnd  : true,
    autoWidth: false,
    breakpoints: {
      800: {
        perPage: 4,
        gap    : '.7rem',
      },
      640: {
        perPage: 3,
        gap    : '.7rem',
      },
      480: {
        perPage: 2,
        gap    : '.5rem',
      },
    },
  }).mount();
  // Tu código de inicialización de Splide aquí
});

document.addEventListener('DOMContentLoaded', function () {
  // Tu código de inicialización de Splide aquí
  new Splide( '#hero_banner', {
    type   : 'fade',
    rewind: true,
    perPage: 1,
    perMove: 1,
    autoplay: true,
    pagination: false,
    omitEnd  : true,
    width: '100%',
    height:'100vh',
    cover:true,
    breakpoints: {
      // 800: {
      //   perPage: 4,
      //   gap    : '.7rem',
      // },
      // 640: {
      //   perPage: 3,
      //   gap    : '.7rem',
      // },
      // 480: {
      //   perPage: 2,
      //   gap    : '.5rem',
      // },
    },
  }).mount();
});