function setDefaultSwal(icon, title, text){
	Swal.fire({
		icon: icon,
		title: title,
		text: text,
		customClass: {
			htmlContainer: 'cus-swal-html',
			confirmButton: 'cus-swal-confirm',
		}
	})
}

function setReloadSwal(icon, title, text){
	Swal.fire({
		icon: icon,
		title: title,
		text: text,
		customClass: {
			htmlContainer: 'cus-swal-html',
			confirmButton: 'cus-swal-confirm',
		}
	}).then(function() {
		location.reload();
	});
}

function setRedirectSwal(icon, title, text, link){
	Swal.fire({
		icon: icon,
		title: title,
		text:text,
		showCancelButton: false,
		confirmButtonText: 'OK'
	}).then((result) => {
		if (result.isConfirmed) {
			window.location.href = link;
		}
	});
}

function showLoading(){
	$('html').addClass('loading-full');
}

function hideLoading(){
	$('html').removeClass('loading-full');
}

function closeModal(event){
    $(event).closest('.modal').hide();
}

$(document).ready(function(){
    document.querySelectorAll('.modal').forEach((element)=>{
        element.addEventListener('click',(e)=>{
            if (e.target.classList.contains('modal')) {
                e.target.style.display = "none";
            }
        });
    });
});


function fixDecimals(num) {
	return parseFloat(num.toString().split('.')[0] + '.' + (num.toString().split('.')[1] || '00').substring(0, 2));
}

function ensureDecimals(num) {
    let strNum = num.toString();
    if (!strNum.includes('.')) {
        return strNum + '.00'; // No decimal point, add .00
    }

    let parts = strNum.split('.');
    if (parts[1].length === 1) {
        return strNum + '0'; // One decimal place, add a zero
    }

    return strNum; // Already has two decimal places, return as is
}
