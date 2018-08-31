<template>
		<div class="col-md-8 border-right h-100 p-3">
			<input type="text" placeholder="Title" v-model="note.title" v-show="note.title != null" class="w-100 border-bottom" @keyup="textUpdated">
			<textarea v-model="note.body" v-show="note.body != null" placeholder="Enter a note" @keyup="textUpdated"></textarea>
		</div>
</template>

<script>
	export default {
		props:['note'],
		data: function(){
			return {
				'timer': null
			}
		},
		methods: {
			textUpdated(){
				if(this.timer){
					clearTimeout(this.timer);
					this.timer = null;
				}
				this.timer = setTimeout(() => {
					this.$emit('note-updated');
				}, 1000);
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