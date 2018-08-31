<template>
		<div class="col-md-4 border-right h-100">
			<note-list-header v-on:note-added="noteAdded"></note-list-header>
			<note :class="{'selected': note.selected}" v-for="(note, index) in notes" :note="note" :key="index" v-on:click.native="updateSelected(note)"></note>
		</div>
</template>

<script>
	export default{
		props: ['notes'],
		methods: {
			updateSelected(note){
				// this.$eventHub.$emit('update-selected', note);
				this.$emit('update-selected', note);
			},
			noteAdded(){
				this.$emit('note-added');
			}
		}
	}
</script>

<style scoped>
	.selected{
		background: #f8e198;
	}
</style>
