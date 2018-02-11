document.addEventListener("DOMContentLoaded", function(event) {
	document.getElementById('chat-starter').addEventListener('click',function(e) {
		e.preventDefault()
		this.parentElement.parentElement.parentElement.style.height = '90vh';
		this.parentElement.parentElement.parentElement.style.position = 'relative';
		this.parentElement.parentElement.parentElement.innerHTML = `
			<iframe src="chat.html" style='min-height:40em;width:100%;border:none;'></iframe>
		`
	})
})