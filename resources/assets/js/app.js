
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

var VueTruncate = require('vue-truncate-filter')
Vue.use(VueTruncate)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.prototype.$eventHub = new Vue();

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('note', require('./components/Note.vue'));
Vue.component('note-list', require('./components/NoteList.vue'));
Vue.component('editable-area', require('./components/EditableArea.vue'));
Vue.component('notes-container', require('./components/NotesContainer.vue'));
Vue.component('note-list-header', require('./components/NoteListHeader.vue'));


const app = new Vue({
    el: '#app',
    data: {
    	note: {title:'',body:''}
    },
    methods: {
    	updateSelected(){
    		console.log('selected changed')
    	}
    }
});
