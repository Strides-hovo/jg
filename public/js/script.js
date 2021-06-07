document.addEventListener("DOMContentLoaded", function(){
	var menu = document.querySelectorAll(".menu_item");
	for (var m=0; m<menu.length; m++){
		menu[m].addEventListener("click", function(){
			if (this.querySelector(".submenu")){
				if (this.classList.contains("showsub")) this.classList.remove("showsub");
				else {
					if (document.querySelector(".showsub")) document.querySelector(".showsub").classList.remove("showsub");
					this.classList.add("showsub");
				}
			}
		});
	}
	
	document.querySelector(".menu_btn").addEventListener("click", function(){
		document.body.classList.toggle("hidemenu");
	});
	
	
	var textInputs = document.querySelectorAll("INPUT[type=text]");
	var pageForms = document.querySelectorAll("FORM");
	
/* POST FORMS */
	for (var f=0; f<pageForms.length; f++){
		pageForms[f].addEventListener("submit", function(e){
			e.preventDefault();
			e.stopPropagation();
			var actionForm = this;
			if (this.hasAttribute("validate")){
				var validation = validate(actionForm);
				if (!validation) return;
			}
			document.body.classList.add("preload");
			var data = new FormData(actionForm);
			data.append("isNaked", "1");
			data.append("userID", "1");
			data.append("action", actionForm.getAttribute("action"));
			var xhr = new XMLHttpRequest();
			xhr.open("POST", "https://lfactory.artstargroup.ru/jg-server/");
			xhr.timeout = 5000;
			xhr.send(data);
			xhr.ontimeout = function() {
				console.log("error_timeout");
				document.body.classList.remove("preload");
				actionForm.setAttribute("data-state", "error");
			};
			xhr.onerror = function() {
				console.log("error_request");
				document.body.classList.remove("preload");
				actionForm.setAttribute("data-state", "error");
			};
			xhr.onload = function() {
				document.body.classList.remove("preload");
				if (xhr.status != 200) {
					console.log("error_"+xhr.status+": "+xhr.statusText);
					actionForm.setAttribute("data-state", "error");
				} else {
					data = JSON.parse(xhr.response);
					if (data.result != 1) actionForm.setAttribute("data-state", "error");
					else actionForm.setAttribute("data-state", "success");
				}
			};
		});
	}
	
	var payments = document.querySelectorAll(".add_btn");
	for (var p=0; p<payments.length; p++){
		payments[p].addEventListener("click", function(){
			document.querySelector(".payment_text").textContent = this.getAttribute("data-payment");
			document.querySelector(".cur").textContent = this.getAttribute("data-cur");
			document.querySelector("#payment_hidden").value = this.getAttribute("data-payment");
			document.querySelector("#payment_modal").classList.add("active");
		});
	}
	
	var closers = document.querySelectorAll(".modal_close");
	for (var c=0; c<closers.length; c++){
		closers[c].addEventListener("click", function(){
			document.querySelector(".modal.active").classList.remove("active");
		});
	}
	
	var numInputs = document.querySelectorAll(".num_input");
	for (var n=0; n<numInputs.length; n++){
		numInputs[n].addEventListener("keydown", function(e){
			if (!e.key.match(/^[0-9.,]$/) && e.keyCode!=13 && e.keyCode!=37 && e.keyCode!=39 && e.keyCode!=9 && e.keyCode!=16 && e.keyCode!=8 && e.keyCode!=46 && e.keyCode!=17 && e.keyCode!=86){
				e.preventDefault();
				e.stopPropagation();
				return;
			}
		});
		numInputs[n].addEventListener("blur", function(e){
			var val = e.currentTarget.value;
			val = val.replace(/\s/g, "");
			val = val.replace(",", ".");
			if (!val.match(/[0-9.]/)) e.currentTarget.value = "";
			else {
				console.log(e.currentTarget);
				e.currentTarget.classList.remove("invalid");
				e.currentTarget.value = val;
			}
		});
	};
	
	var mailPattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,6}$/i;
	if (document.querySelector("INPUT[name='newmail']")) document.querySelector("INPUT[name='newmail']").addEventListener("blur", function(){
		if (!mailPattern.test(document.querySelector("INPUT[name='newmail']").value)) this.value = "";
	});
	
	var wallets = document.querySelectorAll(".wallet");
		
	for (var w=0; w<wallets.length; w++){
		wallets[w].addEventListener("change", function(){
			document.querySelector(".radio_group").classList.remove("invalid");
		});
	}
	
	for (var t=0; t<textInputs.length; t++){
		textInputs[t].addEventListener("focus", function(){
			this.classList.add("hideplaceholder");
		});
		textInputs[t].addEventListener("blur", function(){
			if (this.value == "") this.classList.remove("hideplaceholder");
		});
	}
	
	var selects = document.querySelectorAll(".select_wrapper");
	for (var s=0; s<selects.length; s++){
		var thisSelect = selects[s];
		var selected = selects[s].querySelector(".selected");
		var selectsList = selects[s].querySelectorAll(".select_option");
		for (var l=0; l<selectsList.length; l++){
			selectsList[l].addEventListener("click", function(){
				console.log(thisSelect);
				console.log(thisSelect.querySelector(".option_selected"));
				thisSelect.querySelector(".option_selected").classList.remove("option_selected");
				console.log(this);
				this.classList.add("option_selected");
				selected.textContent = this.getAttribute("data-value");
				thisSelect.querySelector(".selected_value").value = this.getAttribute("data-value");
			})
		}
		selects[s].addEventListener("click", function(){
			this.classList.toggle("active");
		});
	}
	
	if (document.querySelector("#userid")) {
		document.querySelector("#userid").addEventListener("keydown", function(e){
			if ((!e.key.match(/^\d$/) || e.currentTarget.value.length>=8) && e.keyCode!=13 && e.keyCode!=37 && e.keyCode!=39 && e.keyCode!=9 && e.keyCode!=16 && e.keyCode!=8 && e.keyCode!=46 && e.keyCode!=17 && e.keyCode!=86){
				e.preventDefault();
				e.stopPropagation();
				return;
			}
		});
		document.querySelector("#userid").addEventListener("keyup", function(e){
			if (!e.currentTarget.value.match(/JG\d/)) {
				console.log(e.currentTarget.value);
				e.currentTarget.value = "JG";
			}
		});
		document.querySelector("#userid").addEventListener("blur", function(e){
			if (!e.currentTarget.value.match(/^JG\d{6}$/)){
				e.currentTarget.classList.remove("valid");
				e.currentTarget.value="JG";
				e.preventDefault();
				e.stopPropagation();
				return;
			} else {
				e.currentTarget.classList.add("valid");
			}
		});
	}
	
	if (document.querySelector(".table")){
		var table = document.querySelector(".table");
		var tableAction = document.querySelector(".table").getAttribute("data-action");
		var pagesSelect = document.querySelectorAll(".pages_item");
		var tableItems = document.querySelectorAll(".table .row");
		var rowsTotals = document.querySelector("#pages_totals");
		var rowsFrom = document.querySelector("#pages_from");
		var rowsTo = document.querySelector("#pages_to");
		var next = document.querySelector(".page_nav.next");
		var prev = document.querySelector(".page_nav.prev");
		var curPage = 1;
		var showRows = 8;
		var pages = Math.ceil(showRows/showRows);
		
		for (var p=0; p<pagesSelect.length; p++){
			pagesSelect[p].addEventListener("click", function(){
				for (var t=1; t<tableItems.legth; t++){
					tableItems[t].remove();
				}
				curPage = 1;
				showRows = this.getAttribute("data-pages")*1;
				document.body.classList.add("preload");
				sendRequest(tableAction, curPage, showRows);
			});
		}
		
		if (showRows*curPage>=tableItems.length) next.classList.add("hide");
		
		next.addEventListener("click", function(){
			curPage++;
			sendRequest(tableAction, curPage, showRows);
		});
		prev.addEventListener("click", function(){
			curPage--;
			sendRequest(tableAction, curPage, showRows);
		});
	}
	
	function processStatistics(tableData){
		rowsFrom.textContent = tableData.begin;
		rowsTo.textContent = tableData.end;
		rowsTotals.textContent = tableData.total;
		var row = '<tr class="table_header"><th>Оффер</th><th>Показы</th><th>Переходы</th><th>CTR</th><th>Регистраций</th><th>Первый депозит</th><th>Повторный депозит</th><th>Активность</th><th>CPA</th><th>EPC</th></tr>';
		for (var t=0; t<tableData.table.length; t++){
			row += '<tr class="row"><td>'+tableData.table[t].offer+'</td><td>'+tableData.table[t].impressions+'</td><td>'+tableData.table[t].clicks+'</td><td>'+tableData.table[t].ctr+'</td><td>'+tableData.table[t].registrations+'</td><td>'+tableData.table[t].first+'</td><td>'+tableData.table[t].repeat+'</td><td>'+tableData.table[t].activity+'</td><td>'+tableData.table[t].cpa+'</td><td>'+tableData.table[t].epc+'</td></tr>';
		}
		if (tableData.begin<=1) prev.classList.add("hide");
		else prev.classList.remove("hide");
		if (tableData.end>=tableData.total) next.classList.add("hide");
		else next.classList.remove("hide");
		table.innerHTML = row;
	}
	
	function processOperations(tableData){
		rowsFrom.textContent = tableData.begin;
		rowsTo.textContent = tableData.end;
		rowsTotals.textContent = tableData.total;
		var row = '<tr class="table_header"><th>Дата операции</th><th>Тип операции</th><th>Система</th><th>Валюта</th><th>Приход</th><th>Расход</th><th>ID Пользователя</th><th>Статус</th></tr>';
		for (var t=0; t<tableData.table.length; t++){
			row += '<tr class="row '+tableData.table[t].state+'"><td><a href="'+tableData.table[t].url+'">'+tableData.table[t].date+'</a></td><td><a href="'+tableData.table[t].url+'">"'+tableData.table[t].type+'</a></td><td><a href="'+tableData.table[t].url+'">'+tableData.table[t].system+'</a></td><td><a href="'+tableData.table[t].url+'">'+tableData.table[t].currency+'</a></td><td><a href="'+tableData.table[t].url+'">'+tableData.table[t].incoming+'</a></td><td><a href="'+tableData.table[t].url+'">'+tableData.table[t].expense+'</a></td><td><a href="'+tableData.table[t].url+'">'+tableData.table[t].userid+'</a></td><td><a href="'+tableData.table[t].url+'">'+tableData.table[t].status+'</a></td></tr>';
		}
		if (tableData.begin<=1) prev.classList.add("hide");
		else prev.classList.remove("hide");
		if (tableData.end>=tableData.total) next.classList.add("hide");
		else next.classList.remove("hide");
		table.innerHTML = row;
	}
	
	function processDeposits(tableData){
		rowsFrom.textContent = tableData.begin;
		rowsTo.textContent = tableData.end;
		rowsTotals.textContent = tableData.total;
		var row = '<tr class="table_header"><th>Создание депозита</th><th>Завершение депозита</th><th>Валюта</th><th>Сумма инвестиций</th><th>Начислено</th><th>Срок инвестиций</th><th>Статус</th></tr>';
		for (var t=0; t<tableData.table.length; t++){
			row += '<tr class="row '+tableData.table[t].state+'"><td><a href="'+tableData.table[t].url+'">'+tableData.table[t].start+'</a></td><td><a href="'+tableData.table[t].url+'">"'+tableData.table[t].end+'</a></td><td><a href="'+tableData.table[t].url+'">'+tableData.table[t].currency+'</a></td><td><a href="'+tableData.table[t].url+'">'+tableData.table[t].sum+'</a></td><td><a href="'+tableData.table[t].url+'">'+tableData.table[t].profit+'</a></td><td><a href="'+tableData.table[t].url+'">'+tableData.table[t].term+'</a></td><td><a href="'+tableData.table[t].url+'">'+tableData.table[t].status+'</a></td></tr>';
		}
		if (tableData.begin<=1) prev.classList.add("hide");
		else prev.classList.remove("hide");
		if (tableData.end>=tableData.total) next.classList.add("hide");
		else next.classList.remove("hide");
		table.innerHTML = row;
	}
	
	function processReferals(tableData){
		rowsFrom.textContent = tableData.begin;
		rowsTo.textContent = tableData.end;
		rowsTotals.textContent = tableData.total;
		var row = '<tr class="table_header"><th>Логин реферала</th><th>Сумма депозита</th></tr>';
		for (var t=0; t<tableData.table.length; t++){
			row += '<tr class="row visible"><td>'+tableData.table[t].login+'</td><td>'+tableData.table[t].sum+'</td></tr>';
		}
		if (tableData.begin<=1) prev.classList.add("hide");
		else prev.classList.remove("hide");
		if (tableData.end>=tableData.total) next.classList.add("hide");
		else next.classList.remove("hide");
		table.innerHTML = row;
	}

	/* GET DATA */
	function sendRequest(requestAction, requestData = new Array){
		var xhr = new XMLHttpRequest();
		var request = "https://lfactory.artstargroup.ru/jg-server/?isNaked=1&userID=1&action="+requestAction;
		if (requestAction=="getdata"){
			request += "&range="+requestData[0];
		} else if (requestAction=="getdeposits" || requestAction=="getstatistics" || requestAction=="getreferals" || requestAction=="getoperations"){
			request += "&curpage="+requestData[0]+"&showrows="+requestData[1];
		}
		xhr.open("GET", request);
		xhr.timeout = 5000;
		xhr.send();
		xhr.ontimeout = function() {
			console.log("error_timeout");
			//handleError();
		};
		xhr.onerror = function() {
			console.log("error_request");
			//handleError();
		};
		xhr.onload = function() {
			if (xhr.status != 200) {
				console.log("error_"+xhr.status+": "+xhr.statusText);
				//handleError();
			} else {
				document.body.classList.remove("preload");
				data = JSON.parse(xhr.response);
				if (requestAction=="getdata"){
					processData(data);
				} else if (requestAction=="getdeposits"){
					processDeposits(data);
					//DATA: { "begin" : 1, "end" : 8, "total" : 16, "table" : [{"state" : "finished", "url" : "deposit_dateils.html", "start" : "17.04.2021", "end" : "17.07.2021", "currency" : "EUR", "sum" : "7,64%", "profit" : "542", "term" : "3 месяца", "status" : "Завершен"}, {"state" : "finished", "url" : "deposit_dateils.html", "start" : "17.04.2021", "end" : "17.07.2021", "currency" : "EUR", "sum" : "7,64%", "profit" : "542", "term" : "3 месяца", "status" : "Завершен"}, {"state" : "finished", "url" : "deposit_dateils.html", "start" : "17.04.2021", "end" : "17.07.2021", "currency" : "EUR", "sum" : "7,64%", "profit" : "542", "term" : "3 месяца", "status" : "Завершен"}]}
				} else if (requestAction=="getstatistics"){
					processStatistics(data);
					//DATA: { "begin" : 1, "end" : 8, "total" : 16, "table" : [{"offer" : "Pin-up.ru", "impressions" : "16240", "clicks" : "1242", "ctr" : "7,64%", "registrations" : "542", "first" : "324", "repeat" : "84", "activity" : "324/542", "cpa" : "323$", "epc" : "3.17$"}, {"offer" : "Pin-up.ru", "impressions" : "16240", "clicks" : "1242", "ctr" : "7,64%", "registrations" : "542", "first" : "324", "repeat" : "84", "activity" : "324/542", "cpa" : "323$", "epc" : "3.17$"}, {"offer" : "Pin-up.ru", "impressions" : "16240", "clicks" : "1242", "ctr" : "7,64%", "registrations" : "542", "first" : "324", "repeat" : "84", "activity" : "324/542", "cpa" : "323$", "epc" : "3.17$"}, {"offer" : "Pin-up.ru", "impressions" : "16240", "clicks" : "1242", "ctr" : "7,64%", "registrations" : "542", "first" : "324", "repeat" : "84", "activity" : "324/542", "cpa" : "323$", "epc" : "3.17$"}]}
				} else if (requestAction=="getreferals"){
					processReferals(data);
					//DATA: { "begin" : 1, "end" : 8, "total" : 16, "table" : [{"login" : "login", "sum" : "12 345 678 RUB"}, {"login" : "login", "sum" : "12 345 678 RUB"}, {"login" : "login", "sum" : "12 345 678 RUB"}, {"login" : "login", "sum" : "12 345 678 RUB"}, {"login" : "login", "sum" : "12 345 678 RUB"}, {"login" : "login", "sum" : "12 345 678 RUB"}, {"login" : "login", "sum" : "12 345 678 RUB"}, {"login" : "login", "sum" : "12 345 678 RUB"}]}
				} else if (requestAction=="getoperations"){
					processOperations(data);
					//DATA: '{ "begin" : 1, "end" : 8, "total" : 16, "table" : [{"state" : "confirmed", "url" : "operation_details.html", "date" : "27.04.2021", "type" : "Перевод", "system" : "JoinGambling", "currency" : "UAH", "incoming" : "—", "expense" : "14 000", "userid" : "JG542814", "status" : "Подтверждена"}, {"state" : "confirmed", "url" : "operation_details.html", "date" : "27.04.2021", "type" : "Перевод", "system" : "JoinGambling", "currency" : "UAH", "incoming" : "—", "expense" : "14 000", "userid" : "JG542814", "status" : "Подтверждена"}, {"state" : "confirmed", "url" : "operation_details.html", "date" : "27.04.2021", "type" : "Перевод", "system" : "JoinGambling", "currency" : "UAH", "incoming" : "—", "expense" : "14 000", "userid" : "JG542814", "status" : "Подтверждена"}, {"state" : "confirmed", "url" : "operation_details.html", "date" : "27.04.2021", "type" : "Перевод", "system" : "JoinGambling", "currency" : "UAH", "incoming" : "—", "expense" : "14 000", "userid" : "JG542814", "status" : "Подтверждена"}]}
				}
			}
		};
	}
});

function validate(actionForm){
	var requireds = actionForm.querySelectorAll("INPUT[require]");
	if (requireds && requireds.length>0){
		for (var r=0; r<requireds.length; r++){
			if (requireds[r].value == "") requireds[r].classList.add("invalid");
			else requireds[r].classList.remove("invalid");
		}
	}
	var radios = actionForm.querySelectorAll("INPUT[type=radio]");
	if (radios && radios.length>0){
		var radioChecked = false;
		for (var r=0; r<radios.length; r++){
			if (radios[r].checked) radioChecked = true;
		}
		if (radioChecked) document.querySelector(".radio_group").classList.remove("invalid");
		else document.querySelector(".radio_group").classList.add("invalid");
	}
	if (actionForm.querySelector("INPUT.invalid") || actionForm.querySelector(".radio_group.invalid")) {
		actionForm.setAttribute("data-state", "invalid");
		return false;
	} else {
		actionForm.setAttribute("data-state", "");
		return true;
	}
}