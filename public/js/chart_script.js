var graph = document.querySelector(".graph");
var svg = document.querySelector(".svg");
var pointsWrapper = document.querySelector(".points");
var valueLine = document.querySelector(".value_line");
var degree, limit, pair;
var range = 0;
var range = [23, 6, 30]

var xaxes, yaxes, pops;

var months = ["Января", "Февраля", "Марта", "Апреля", "Мая", "Июня", "Июля", "Августа", "Сентября", "Октября", "Ноября", "Декабря"];
var mons = ["Янв", "Фев", "Мар", "Апр", "Мая", "Июн", "Июл", "Авг", "Сен", "Окт", "Нояб", "Дек"];
var weekDays = ["Пн", "Вт", "Ср", "Чт", "Пт", "Сб", "Вс"];
var timeZones = ["UTC-12", "UTC-11", "UTC-10", "UTC-9", "UTC-8", "UTC-7", "UTC-6", "UTC-5", "UTC-4", "UTC-3", "UTC-2", "UTC-1", "UTC", "UTC+1", "UTC+2", "МСК", "UTC+4", "UTC+5", "UTC+6", "UTC+7", "UTC+8", "UTC+9", "UTC+10", "UTC+11", "UTC+12", "UTC+13", "UTC+14"];
var xaxesValues = [];

var base = [6,12,18,24,30,36,42,48,54,60,66,72,78,84,90,96];

document.addEventListener("DOMContentLoaded", function(){
	setupGraph();
	drawPopsAndPoints(dataSet1, "yellow");
	drawPopsAndPoints(dataSet2, "grey");
	drawGraph(dataSet1, "yellow");
	drawGraph(dataSet2, "grey");
	drawGraph(dataSet1, "fill");
	setTimeout(function(){
		graph.classList.add("active");
		updatePath(dataSet1, "yellow");
		updatePath(dataSet2, "grey")
		updatePath(dataSet1, "fill")
	}, 1000);

	var graphSelect = document.querySelectorAll(".chart_select");
	for (var g=0; g<graphSelect.length; g++){
		graphSelect[g].addEventListener("click", function(){
			document.body.classList.add("preload");
			range = this.getAttribute("data-range");
			if (this.classList.contains("acrive")) return;
			document.querySelector(".chart_select.active").classList.remove("active");
			this.classList.add("active");
			var points = pointsWrapper.querySelectorAll(".point");
			for (var p=0; p<points.length; p++){
				points[p].remove();
			}
			graph.classList.remove("active");
			if (svg.querySelector(".path_yellow")) svg.querySelector(".path_yellow").remove();
			if (svg.querySelector(".path_grey")) svg.querySelector(".path_grey").remove();
			if (svg.querySelector(".path_fill")) svg.querySelector(".path_fill").remove();
			xaxes.remove();
			yaxes.remove();
			pops.remove();
			sendRequest("getdata", range);
		});
	}
});

function setupGraph(){
	var maximum = Math.max(...dataSet1);
	for (var m=0; m<=10; m++){
		if (Math.trunc(maximum/Math.pow(10, m)) == 0){
			degree = m-1;
			break;
		}
	}
	for (var b=0; b<base.length; b++){
		if (maximum<=Math.pow(10, (degree-1))*base[b]){
			limit = Math.pow(10, (degree-1))*base[b+1];
			break;
		}
	}
	xaxes = document.createElement("div");
	xaxes.classList.add("xaxes");
	graph.appendChild(xaxes);
	for (var d=0; d<dataSet1.length; d++){
		var xStep = document.createElement("div");
		xStep.classList.add("xaxe");
		xStep.setAttribute("id", "xaxe_"+d);
		xStep.style.left = (100/(dataSet1.length-1)*d)+"%";
		//xStep.textContent = (range == 0 ? d : d+1);
		xStep.textContent = (xaxesValues[d] ? xaxesValues[d] : d);
		xaxes.appendChild(xStep);
	}
	yaxes = document.createElement("div");
	yaxes.classList.add("yaxes");
	graph.appendChild(yaxes);
	for (var i=0; i<7; i++){
		if (document.querySelector("#yaxe_"+i)) document.querySelector("#yaxe_"+i).textContent = limit/6*i;
		else {
			var yStep = document.createElement("div");
			yStep.classList.add("yaxe");
			yStep.setAttribute("id", "yaxe_"+i);
			yStep.style.top = (100-100/6*i)+"%";
			yStep.textContent = limit/6*i;
			yaxes.appendChild(yStep);
		}
	}
}

function drawPopsAndPoints(data, type){
	if (!document.querySelector(".pops")){
		pops = document.createElement("div");
		pops.classList.add("pops");
		graph.appendChild(pops);
	}
	for (var d=0; d<=data.length-1; d++){
		var pop = document.createElement("div");
		pop.setAttribute("id", "pop_"+type+"_"+d)
		pop.classList.add("pop");
		pop.classList.add("pop_"+type);
		pop.style.left = (100/(dataSet1.length-1)*d)+"%"
		pop.style.top = 360 - data[d]/((limit/100)/(360/100))+"px";
		pop.textContent = data[d];
		pops.appendChild(pop);
		
		var point = document.createElement('div');
		point.setAttribute("id", "point_"+type+"_"+d);
		point.setAttribute("data-type", type);
		point.setAttribute("data-num", d);
		point.classList.add("point");
		point.classList.add("point_"+type);
		point.style.left = (100/(dataSet1.length-1)*d)+"%"
		point.style.bottom = data[d]/((limit/100)/(360/100))+"px";
		point.addEventListener("mouseenter", function(e){
			document.querySelector("#pop_"+this.getAttribute("data-type")+"_"+this.getAttribute("data-num")).classList.add("active");
			document.querySelector("#xaxe_"+this.getAttribute("data-num")).classList.add("active");
			pointsWrapper.querySelector(".value_line").style.left = (this.getBoundingClientRect().left + this.getBoundingClientRect().width/2 - pointsWrapper.getBoundingClientRect().left) + "px";
			pointsWrapper.querySelector(".value_line").style.height = (pointsWrapper.getBoundingClientRect().top + 360 - this.getBoundingClientRect().top) + "px";
			valueLine.style.display = "block";
		});
		point.addEventListener("mouseleave", function(e){
			document.querySelector("#pop_"+this.getAttribute("data-type")+"_"+this.getAttribute("data-num")).classList.remove("active");
			document.querySelector("#xaxe_"+this.getAttribute("data-num")).classList.remove("active");
			valueLine.style.display = "none";
		});
		pointsWrapper.appendChild(point);
	}
}

function drawGraph(data, type){
	x=new Array();
	y=new Array();
	for (var d=0; d<data.length; d++){
		x[d]=d/(data.length-1)*1015;
		y[d]=360;
	}
	px = computeControlPoints(x);
	py = computeControlPoints(y);
	var splain = document.createElementNS("http://www.w3.org/2000/svg", 'path');
	var splainPath = "M "+Math.round(x[0])+" "+Math.round(y[0]);
	for (var d=0; d<data.length-1; d++){
		splainPath += " C "+Math.round(px.p1[d])+" "+Math.round(py.p1[d])+" "+Math.round(px.p2[d])+" "+Math.round(py.p2[d])+" "+Math.round(x[d+1])+" "+Math.round(y[d+1]);
	}
	if (type == "fill"){
		splainPath += " L "+Math.round(x[data.length-1])+" 360 L 0 360 Z";
	}
	splain.setAttribute("d", splainPath);
	splain.setAttribute("vector-effect", "non-scaling-stroke");
	splain.classList.add("path_"+type);
	svg.appendChild(splain);
}

function updatePath(data, type){
	x=new Array();
	y=new Array();
	for (var d=0; d<data.length; d++){
		x[d]=d/(data.length-1)*1015;
		y[d]=360 - data[d]/((limit/100)/(360/100));
	}
	px = computeControlPoints(x);
	py = computeControlPoints(y);
	var splain = document.querySelector(".path_"+type);
	var splainPath = "M "+Math.round(x[0])+" "+Math.round(y[0]);
	for (var d=0; d<data.length-1; d++){
		splainPath += " C "+Math.round(px.p1[d])+" "+Math.round(py.p1[d])+" "+Math.round(px.p2[d])+" "+Math.round(py.p2[d])+" "+Math.round(x[d+1])+" "+Math.round(y[d+1]);
	}
	if (type == "fill"){
		splainPath += " L "+Math.round(x[data.length-1])+" 360 L 0 360 Z";
	}
	splain.setAttribute("d", splainPath);
}

function computeControlPoints(K){
	p1=new Array();
	p2=new Array();
	n = K.length-1;
	
	/*rhs vector*/
	a=new Array();
	b=new Array();
	c=new Array();
	r=new Array();
	
	/*left most segment*/
	a[0]=0;
	b[0]=2;
	c[0]=1;
	r[0] = K[0]+2*K[1];
	
	/*internal segments*/
	for (i = 1; i < n - 1; i++){
		a[i]=1;
		b[i]=4;
		c[i]=1;
		r[i] = 4 * K[i] + 2 * K[i+1];
	}
	
	/*right segment*/
	a[n-1]=2;
	b[n-1]=7;
	c[n-1]=0;
	r[n-1] = 8*K[n-1]+K[n];

	/*solves Ax=b with the Thomas algorithm (from Wikipedia)*/
	for (i = 1; i < n; i++){
		m = a[i]/b[i-1];
		b[i] = b[i] - m * c[i - 1];
		r[i] = r[i] - m*r[i-1];
	}

	p1[n-1] = r[n-1]/b[n-1];
	for (i = n - 2; i >= 0; --i) p1[i] = (r[i] - c[i] * p1[i+1]) / b[i];

	/*we have p1, now compute p2*/
	for (i=0;i<n-1;i++)p2[i]=2*K[i+1]-p1[i+1];

	p2[n-1]=0.5*(K[n]+p1[n-1]);

	return {p1:p1, p2:p2};
}

function processData(data){
	dataSet1 = data.dataSet1;
	dataSet2 = data.dataSet2;
	var date = new Date(data.time*1000);
	if ((dataSet1.length == 1 && dataSet1[0]==0) || (dataSet2.length == 0 && dataSet1[0]==0)){
		graph.classList.add("nodata");
		document.body.classList.remove("preload");
		return;
	} else {
		graph.classList.remove("nodata");
	}
	xaxesValues = [];
	if (range==0){
		for (i=0; i<=23; i++){
			var h = (date.getHours()+i>=23 ? date.getHours()+i-23 : date.getHours()+i+1);
			xaxesValues.push(h);
			graph.classList.remove("months");
		}
	} else if (range==1){
		for (i=0; i<=6; i++){
			var h = (date.getDay()+i-1>=6 ? date.getDay()+i-7 : date.getDay()+i);
			xaxesValues.push(weekDays[h]);
			graph.classList.remove("months");
		}
	} else {
		for (i=0; i<=30; i++){
			var newTime = new Date(date - 864e5*(31-i));
			var h = (newTime.getDate()+" "+mons[newTime.getMonth()]);
			xaxesValues.push(h);
			graph.classList.add("months");
		}
	}
	var curDateString = date.getDate()+" "+months[date.getMonth()]+" "+date.getFullYear()+", "+date.getHours()+":"+(date.getMinutes() < 10 ? "0"+date.getMinutes() : date.getMinutes())+" по "+timeZones[Math.abs(date.getTimezoneOffset()/60)+12];
	document.querySelector(".period").textContent = curDateString;
	setupGraph();
	drawPopsAndPoints(dataSet1, "yellow");
	drawPopsAndPoints(dataSet2, "grey");
	drawGraph(dataSet1, "yellow");
	drawGraph(dataSet2, "grey");
	drawGraph(dataSet1, "fill");
	setTimeout(function(){
		graph.classList.add("active");
		updatePath(dataSet1, "yellow");
		updatePath(dataSet2, "grey")
		updatePath(dataSet1, "fill")
		document.body.classList.remove("preload");
	}, 1000);
}