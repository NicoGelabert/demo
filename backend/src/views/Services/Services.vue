<template>
    <div>
        <div class="flex items-center justify-between mb-3">
            <h1 class="text-3xl font-semibold">Services</h1>
            <button type="button"
                    @click="showAddNewModal()"
                    class="py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >
            Add new Service
            </button>
        </div>
        <ServicesTable @clickEdit="editService"/>
        <ServiceModal v-model="showServiceModal" :service="serviceModel" @close="onModalClose" />
    </div>
  
</template>

<script setup>

import {computed, onMounted, ref} from "vue";
import store from "../../store";
import ServiceModal from "./ServiceModal.vue" ;
import ServicesTable from "./ServicesTable.vue";

const DEFAULT_SERVICE = {
  id: '',
  title: '',
  description: '',
  image: '',
}

const services = computed(() => store.state.services);

const serviceModel = ref({...DEFAULT_SERVICE})
const showServiceModal = ref(false);

function showAddNewModal() {
  showServiceModal.value = true
}

function editService(p) {
  store.dispatch('getService', p.id)
    .then(({data}) => {
      serviceModel.value = data
      showAddNewModal();
    })
}

function onModalClose() {
  serviceModel.value = {...DEFAULT_SERVICE}
}

</script>

<style>

</style>