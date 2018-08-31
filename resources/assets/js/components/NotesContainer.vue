<template>
	<div class="row">
		<note-list :notes="notes" @update-selected="updateSelected" @note-added="noteAdded"></note-list>
		<editable-area :note="note"></editable-area>
	</div>
</template>

<script>
	export default{
		data: function(){
			return {
				'note': {},
				'notes': [
					{id: 1, title: "good notes", body: 'this is the body', selected: false},
					{id: 2, title: "medium notes", body: 'this is the body 2', selected: false},
					{id: 3, title: "great notes", body: 'this is the qhooooo', selected: false},
					{id: 4, title: "increbidle notes", body: 'absolute scenes', selected: false},
				]
			}
		},
		mounted(){
			let test = axios.get('/notes')
			.then((res) => {
				this.notes = res.data;
			})
			.catch((err) => {
				console.error(err)
			})
		},
		methods:{
			updateSelected(note){
				this.note = note;
				const index = this.notes.findIndex((element) => {
					return element.id == note.id;
				})
				this.notes.forEach((el) => {
					el.selected = false;
				});

				this.notes[index].selected = true;
			},
			noteAdded(){
				this.notes.forEach((el) => {
					el.selected = false;
				});
				const note = {id: this.notes.length + 1, title: '', body: '', selected: true};
				this.note = note;
				this.notes.push(note);
			}
		}
		
	}
</script>

<style scoped>

</style>
