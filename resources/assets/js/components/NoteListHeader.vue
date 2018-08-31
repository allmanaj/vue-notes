<template>
	<div class="row">
		<div class="col-md-12 border-bottom mt-3 list-header">
			<i class="fas fa-plus" @click="addNote"></i>
		</div>
	</div>
</template>
<script>
	export default {
		props:['note'],
		methods: {
			addNote(){
				this.$emit('note-added');
			},
		}
	}
</script>

<style scoped>
	.list-header{
		height: 30px;
	}

	.fa-plus:hover{
		color: #f8e198;
		cursor: pointer;
	}
</style>

