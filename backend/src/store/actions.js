import axiosClient from "../axios";

export function getCurrentUser({commit}, data) {
  return axiosClient.get('/user', data)
    .then(({data}) => {
      commit('setUser', data);
      return data;
    })
}

export function login({commit}, data) {
  return axiosClient.post('/login', data)
    .then(({data}) => {
      commit('setUser', data.user);
      commit('setToken', data.token)
      return data;
    })
}

export function logout({commit}) {
  return axiosClient.post('/logout')
    .then((response) => {
      commit('setToken', null)

      return response;
    })
}

export function getCountries({commit}) {
  return axiosClient.get('countries')
    .then(({data}) => {
      commit('setCountries', data)
    })
}

export function getOrders({commit, state}, {url = null, search = '', per_page, sort_field, sort_direction} = {}) {
  commit('setOrders', [true])
  url = url || '/orders'
  const params = {
    per_page: state.orders.limit,
  }
  return axiosClient.get(url, {
    params: {
      ...params,
      search, per_page, sort_field, sort_direction
    }
  })
    .then((response) => {
      commit('setOrders', [false, response.data])
    })
    .catch(() => {
      commit('setOrders', [false])
    })
}

export function getOrder({commit}, id) {
  return axiosClient.get(`/orders/${id}`)
}
// CATEGORIES
export function getCategories({commit, state}, {url = null, search = '', per_page, sort_field, sort_direction} = {}) {
  commit('setCategories', [true])
  url = url || '/categories'
  const params = {
    per_page: state.categories.limit,
  }
  return axiosClient.get(url, {
    params: {
      ...params,
      search, per_page, sort_field, sort_direction
    }
  })
    .then((response) => {
      commit('setCategories', [false, response.data])
    })
    .catch(() => {
      commit('setCategories', [false])
    })
}

export function getCategory({commit}, id) {
  return axiosClient.get(`/categories/${id}`)
}

export function createCategory({commit}, category) {
  if (category.image instanceof File) {
    const form = new FormData();
    form.append('name', category.name);
    form.append('image', category.image);
    category = form;
  }
  return axiosClient.post('/categories', category)
}

export function updateCategory({commit}, category) {
  const id = category.id
  if (category.image instanceof File) {
    const form = new FormData();
    form.append('id', category.id);
    form.append('name', category.name);
    form.append('image', category.image);
    form.append('_method', 'PUT');
    category = form;
  } else {
    category._method = 'PUT'
  }
  return axiosClient.post(`/categories/${id}`, category)
}

export function deleteCategory({commit}, id) {
  return axiosClient.delete(`/categories/${id}`)
}
// PRODUCTS
export function getProducts({commit, state}, {url = null, search = '', per_page, sort_field, sort_direction} = {}) {
  commit('setProducts', [true])
  url = url || '/products'
  const params = {
    per_page: state.products.limit,
  }
  return axiosClient.get(url, {
    params: {
      ...params,
      search, per_page, sort_field, sort_direction
    }
  })
    .then((response) => {
      commit('setProducts', [false, response.data])
    })
    .catch(() => {
      commit('setProducts', [false])
    })
}

export function getProduct({commit}, id) {
  return axiosClient.get(`/products/${id}`)
}

export function createProduct({commit}, product) {
  if (product.image instanceof File) {
    const form = new FormData();
    form.append('title', product.title);
    form.append('category', product.category);
    form.append('categories_id', product.categories_id);
    form.append('image', product.image);
    form.append('description', product.description || '');
    form.append('published', product.published ? 1 : 0);
    form.append('price', product.price);
    product = form;
  }
  return axiosClient.post('/products', product)
}

export function deleteProduct({commit}, id) {
  return axiosClient.delete(`/products/${id}`)
}
// Projects
export function getProjects({commit, state}, {url = null, search = '', per_page, sort_field, sort_direction} = {}) {
  commit('setProjects', [true])
  url = url || '/projects'
  const params = {
    per_page: state.projects.limit,
  }
  return axiosClient.get(url, {
    params: {
      ...params,
      search, per_page, sort_field, sort_direction
    }
  })
    .then((response) => {
      commit('setProjects', [false, response.data])
    })
    .catch(() => {
      commit('setProjects', [false])
    })
}

export function getProject({commit}, id) {
  return axiosClient.get(`/projects/${id}`)
}

export function createProject({commit}, project) {
  if (project.image instanceof File) {
    const form = new FormData();
    form.append('title', project.title);
    form.append('image', project.image);
    form.append('description', project.description || '');
    form.append('published', project.published ? 1 : 0);
    form.append('location', project.location);
    project = form;
  }
  return axiosClient.post('/projects', project)
}

export function updateProject({commit}, project) {
  const id = project.id
  if (project.image instanceof File) {
    const form = new FormData();
    form.append('id', project.id);
    form.append('title', project.title);
    form.append('image', project.image);
    form.append('description', project.description || '');
    form.append('published', project.published ? 1 : 0);
    form.append('location', project.location);
    form.append('_method', 'PUT');
    project = form;
  } else {
    project._method = 'PUT'
  }
  return axiosClient.post(`/projects/${id}`, project)
}

export function deleteProject({commit}, id) {
  return axiosClient.delete(`/projects/${id}`)
}

// End Projects
export function getUsers({commit, state}, {url = null, search = '', per_page, sort_field, sort_direction} = {}) {
  commit('setUsers', [true])
  url = url || '/users'
  const params = {
    per_page: state.users.limit,
  }
  return axiosClient.get(url, {
    params: {
      ...params,
      search, per_page, sort_field, sort_direction
    }
  })
    .then((response) => {
      commit('setUsers', [false, response.data])
    })
    .catch(() => {
      commit('setUsers', [false])
    })
}

export function createUser({commit}, user) {
  return axiosClient.post('/users', user)
}

export function updateUser({commit}, user) {
  return axiosClient.put(`/users/${user.id}`, user)
}

export function getCustomers({commit, state}, {url = null, search = '', per_page, sort_field, sort_direction} = {}) {
  commit('setCustomers', [true])
  url = url || '/customers'
  const params = {
    per_page: state.customers.limit,
  }
  return axiosClient.get(url, {
    params: {
      ...params,
      search, per_page, sort_field, sort_direction
    }
  })
    .then((response) => {
      commit('setCustomers', [false, response.data])
    })
    .catch(() => {
      commit('setCustomers', [false])
    })
}

export function getCustomer({commit}, id) {
  return axiosClient.get(`/customers/${id}`)
}

export function createCustomer({commit}, customer) {
  return axiosClient.post('/customers', customer)
}

export function updateCustomer({commit}, customer) {
  return axiosClient.put(`/customers/${customer.id}`, customer)
}

export function deleteCustomer({commit}, customer) {
  return axiosClient.delete(`/customers/${customer.id}`)
}

export function updateProduct({commit}, product) {
  const id = product.id
  if (product.image instanceof File) {
    const form = new FormData();
    form.append('id', product.id);
    form.append('title', product.title);
    form.append('category', product.category);
    form.append('categories_id', product.categories_id);
    form.append('image', product.image);
    form.append('description', product.description || '');
    form.append('published', product.published ? 1 : 0);
    form.append('price', product.price);
    form.append('_method', 'PUT');
    product = form;
  } else {
    product._method = 'PUT'
  }
  return axiosClient.post(`/products/${id}`, product)
}

// SERVICES
export function getServices({commit, state}, {url = null, search = '', per_page, sort_field, sort_direction} = {}) {
  commit('setServices', [true])
  url = url || '/services'
  const params = {
    per_page: state.services.limit,
  }
  return axiosClient.get(url, {
    params: {
      ...params,
      search, per_page, sort_field, sort_direction
    }
  })
    .then((response) => {
      commit('setServices', [false, response.data])
    })
    .catch(() => {
      commit('setServices', [false])
    })
}

export function getService({commit}, id) {
  return axiosClient.get(`/services/${id}`)
}

export function createService({commit}, service) {
  if (service.image instanceof File) {
    const form = new FormData();
    form.append('title', service.title);
    form.append('image', service.image);
    form.append('description', service.description || '');
    form.append('published', service.published ? 1 : 0);
    service = form;
  }
  return axiosClient.post('/services', service)
}

export function updateService({commit}, service) {
  const id = service.id
  if (service.image instanceof File) {
    const form = new FormData();
    form.append('id', service.id);
    form.append('title', service.title);
    form.append('image', service.image);
    form.append('description', service.description || '');
    form.append('published', service.published ? 1 : 0);
    form.append('_method', 'PUT');
    service = form;
  } else {
    service._method = 'PUT'
  }
  return axiosClient.post(`/services/${id}`, service)
}

export function deleteService({commit}, id) {
  return axiosClient.delete(`/services/${id}`)
}