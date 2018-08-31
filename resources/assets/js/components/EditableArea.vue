<template>
		<div class="col-md-8 border-right h-100 p-3">
			<input type="text" placeholder="Title" v-model="note.title" v-show="note.title != null" class="w-100 border-bottom">
			<!-- <span :contenteditable="note.title != null ? true : false" v-text="note.title"></span> -->
			<textarea v-model="note.body" v-show="note.body != null" placeholder="Enter a note"></textarea>
		</div>
</template>

<script>
	export default {
		props:['note'],
		methods: {
			updateTitle(val){
				this.note.title = val;
				// this.$emit('title-updated', {id: this.note.id, title: this.note.title})
			},
			updateBody(val){
				this.note.body = val;
				// this.$emit('body-updated', {id: this.note.id, title: this.note.body})
			}
		}
	}
</script>

<style scoped>
	[contenteditable]{
		outline: none;
	}

	input{
		scroll-behavior:unset; 
		background: transparent;
		border:none;
		font-size:2em;
		outline: none;
		overflow:visible;
		resize: none;
		height: auto;
	}

	textarea{
		height: 100%;
		width: 100%;
		background: transparent;
		border:none;
		resize: none;
		outline:none;
	}

</style>