<template>
	<div class="row">
		<div class="col-md-12 border-bottom mt-3">
			<strong v-if="note.title != ''" class="lead">{{ note.title | truncate(30) }}</strong>
			<strong v-if="note.title == ''" class="lead">Enter a title...</strong>
			<p v-if="note.body != ''">{{ note.body | truncate(30) }}</p>
			<p v-if="note.body == ''">Enter a note...</p>
		</div>
	</div>
</template>
<script>
	export default {
		props:['note']
	}
</script>

<style scoped>
	.row{
		cursor: pointer;
	}
</style>

