document.addEventListener("DOMContentLoaded", function(){
	document.querySelector(".menu_btn").addEventListener("click", function(){
		if (document.body.classList.contains("menu_active")) document.body.classList.remove("menu_active");
		else document.body.classList.add("menu_active");
	});
	
	modal_link = document.querySelectorAll(".open_modal");
	for (var m=0; m<modal_link.length; m++){
		modal_link[m].addEventListener("click", function(){
			document.querySelector("#modal_"+this.getAttribute("href").substring(1)).classList.add("active");
		});
	}
	modal_close = document.querySelectorAll(".modal_close");
	for (var m=0; m<modal_close.length; m++){
		modal_close[m].addEventListener("click", function(){
			document.querySelector(".modal.active").classList.remove("active");
		});
	}
	modal_overlay = document.querySelectorAll(".modal_overlay");
	for (var m=0; m<modal_overlay.length; m++){
		modal_overlay[m].addEventListener("click", function(){
			document.querySelector(".modal.active").classList.remove("active");
		});
	}
	
	var regInputs = document.querySelectorAll(".reg_input");
	for (var r=0; r<regInputs.length; r++){
		regInputs[r].addEventListener("blur", function(){
			if (this.value != "") this.classList.add("notempty");
			else this.classList.remove("notempty");
		});
	}
	var regRadios = document.querySelectorAll(".radio_mes");
	var radioInvalid = true;
	var radioVal;
	for (var r=0; r<regRadios.length; r++){
		regRadios[r].addEventListener("change", function(){
			radioVal = this.value;
			radioInvalid = false;
		});
	}
	
	document.querySelector(".reg_input[name='name']").addEventListener("keydown", function(e){
		console.log(e.key);
		if (!e.key.match(/[0-9а-яa-z\s-]/i)) {
			e.preventDefault();
			e.stopPropagation();
		};
	});
	/*document.querySelector(".reg_input[name='email']").addEventListener("keydown", function(e){
		console.log(e.key);
		if (!e.key.match(/[0-9a-z-_@.]/i)) {
			e.preventDefault();
			e.stopPropagation();
		};
	});
	document.querySelector(".reg_input[name='login']").addEventListener("keydown", function(e){
		console.log(e.key);
		if (!e.key.match(/[0-9а-яa-z-_@.]/i)) {
			e.preventDefault();
			e.stopPropagation();
		};
	});*/
	
	var submitDisable = true;
	var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,6}$/i;
	document.querySelector("#register_submit").addEventListener("click", function(){
		if (document.querySelector(".reg_input[name='name']").value == "") document.querySelector(".reg_input[name='name']").classList.add("invalid");
		else document.querySelector(".reg_input[name='name']").classList.remove("invalid");
		if (document.querySelector(".reg_input[name='email']").value == "") document.querySelector(".reg_input[name='email']").classList.add("invalid");
		else document.querySelector(".reg_input[name='email']").classList.remove("invalid");
		if (!pattern.test(document.querySelector(".reg_input[name='email']").value)) document.querySelector(".reg_input[name='email']").classList.add("invalid");
		else document.querySelector(".reg_input[name='email']").classList.remove("invalid");
		if (document.querySelector(".reg_input[name='login']").value == "") document.querySelector(".reg_input[name='login']").classList.add("invalid");
		else document.querySelector(".reg_input[name='login']").classList.remove("invalid");
		if (radioInvalid) document.querySelector(".mes_sub").classList.add("invalid");
		else document.querySelector(".mes_sub").classList.remove("invalid");
		if (!document.querySelector(".accept_check").checked) document.querySelector(".accept_check").classList.add("invalid");
		else document.querySelector(".accept_check").classList.remove("invalid");
		if (document.querySelector(".invalid")){
			document.querySelector(".invalid_text").style.display = "block";
			return;
		} else {
			$.ajax({
				url: "send.php",
				type: "POST",
				data: "act=reg&name="+document.querySelector(".reg_input[name='name']").value+"&email="+document.querySelector(".reg_input[name='email']").value+"&messeger="+radioVal+"&login="+document.querySelector(".reg_input[name='login']").value,
				success: function(response) { //Данные отправлены успешно
					if (response == "ok"){
						document.querySelector(".invalid_text").style.display = "none";
						document.querySelector("#modal_registration .modal_wrapper").style.opacity = 0;
						document.querySelector("#modal_registration .modal_wrapper").style.pointerEvents = "none";
						document.querySelector("#register_success").style.opacity = 1;
						setTimeout(function(){
							document.querySelector("#modal_registration").classList.remove("active");
						}, 2000);
					} else {
						alert('Ошибка. Данные не отправлены.');
					}
				},
				error: function(response) { // Данные не отправлены
					alert('Ошибка. Данные не отправлены.');
				}
			});
		}
	});
});