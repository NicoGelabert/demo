<template>
    <div>
        <div class="flex items-center justify-between mb-3">
            <h1 class="text-3xl font-semibold">Projects</h1>
            <button type="button"
                    @click="showAddNewModal()"
                    class="py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >
            Add new Project
            </button>
        </div>
        <ProjectsTable @clickEdit="editProject"/>
        <ProjectModal v-model="showProjectModal" :project="projectModel" @close="onModalClose"/>        
    </div>
  
</template>

<script setup>

import {computed, onMounted, ref} from "vue";
import store from "../../store";
import ProjectModal from "./ProjectModal.vue";
import ProjectsTable from "./ProjectsTable.vue";

const DEFAULT_PROJECT = {
  id: '',
  title: '',
  description: '',
  image: '',
  location: ''
}

const projects = computed(() => store.state.projects);

const projectModel = ref({...DEFAULT_PROJECT})
const showProjectModal = ref(false);

function showAddNewModal() {
  showProjectModal.value = true
}

function editProject(p) {
  store.dispatch('getProject', p.id)
    .then(({data}) => {
      projectModel.value = data
      showAddNewModal();
    })
}

function onModalClose() {
  projectModel.value = {...DEFAULT_PROJECT}
}

</script>

<style>

</style>