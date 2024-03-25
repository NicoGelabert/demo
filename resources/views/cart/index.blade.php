<x-app-layout>
    <div class="container lg:w-2/3 xl:w-2/3 mx-auto pt-32 pb-16">
        <h1 class="text-3xl font-bold mb-6">{{__('Your Cart Items')}}</h1>

        <div x-data="{
            cartItems: {{
                json_encode(
                    $products->map(fn($product) => [
                        'id' => $product->id,
                        'slug' => $product->slug,
                        'image' => $product->image,
                        'title' => $product->title,
                        'price' => $product->price,
                        'category' => $product->category?->name,
                        'quantity' => $cartItems[$product->id]['quantity'],
                        'href' => route('product.view', [$product->category?->slug, $product->slug ]),
                        'removeUrl' => route('cart.remove', $product),
                        'updateQuantityUrl' => route('cart.update-quantity', $product)
                    ])
                )
            }},
            get cartTotal() {
                return this.cartItems.reduce((accum, next) => accum + next.price * next.quantity, 0).toFixed(2)
            },
        }" class="bg-white p-4 rounded-lg shadow">
            <!-- Product Items -->
            <template x-if="cartItems.length">
                <div class="flex flex-wrap flex-col justify-center">
                    <!-- Product Item -->
                    <template x-for="product of cartItems" :key="product.id">
                        <div x-data="productItem(product)" class="py-6 border-b">
                            <div
                                class="w-full flex flex-col sm:flex-row items-center gap-4 flex-1">
                                <a :href="product.href"
                                   class="w-36 h-32 flex items-center justify-center overflow-hidden">
                                    <img :src="product.image" class="object-cover" alt=""/>
                                </a>
                                <div class="flex flex-col justify-between flex-1">
                                    <div class="flex flex-col sm:flex-row items-center sm:items-end sm:justify-between mb-3">
                                        <div class="flex flex-col items-center sm:items-start">
                                            <p class="small-text" x-text="product.category"></p>
                                            <h3 x-text="product.title"></h3>
                                        </div>
                                        <span class="text-lg font-semibold">
                                            $<span x-text="product.price"></span>
                                        </span>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center">
                                            Qty:
                                            <input
                                                type="number"
                                                min="1"
                                                x-model="product.quantity"
                                                @change="changeQuantity()"
                                                class="ml-3 py-1 border-none w-16"
                                            />
                                        </div>
                                        <a
                                            href="#"
                                            @click.prevent="removeItemFromCart()"
                                            class="text-purple-600 hover:text-purple-500"
                                        >{{__('Remove')}}</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <!--/ Product Item -->
                        </div>
                    </template>
                    <!-- Product Item -->

                    <div class="pt-6">
                        <div class="flex justify-between align-center">
                            <span class="font-semibold">Subtotal</span>
                            <span id="cartTotal" class="text-xl" x-text="`$${cartTotal}`"></span>
                        </div>
                        <p class="text-gray-500 mb-6">
                            {{__('Shipping and taxes calculated at checkout.')}}
                        </p>

                        <form action="{{route('cart.checkout')}}" method="post" class="flex justify-center sm:justify-end">
                            @csrf
                            <button type="submit" class="btn-primary w-auto py-3 text-lg">
                                {{__('Proceed to Checkout')}}
                            </button>
                        </form>
                    </div>
                </div>
                <!--/ Product Items -->
            </template>
            <template x-if="!cartItems.length">
                <div class="text-center py-8 text-gray-500">
                    You don't have any items in cart
                </div>
            </template>

        </div>
    </div>
</x-app-layout>
