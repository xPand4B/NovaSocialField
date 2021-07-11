Nova.booting((Vue, router, store) => {
  Vue.component('index-nova-social-field', require('./components/IndexField'))
  Vue.component('detail-nova-social-field', require('./components/DetailField'))
  Vue.component('form-nova-social-field', require('./components/FormField'))
})
