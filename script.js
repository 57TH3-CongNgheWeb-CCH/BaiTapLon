var index = 1;

showImage(0);

function next(n){
	index += n;
	showImage(index);
}

function prev(n){
	index -= n;
	showImage(index);
}

function showImage(n){
	var x = document.getElementsByClassName("myslides");
	var i;
	if (n > x.length) { index = 1 };
	if (n < 1) { index = x.length };
	for(i=0;i<x.length;i++){
		x[i].style.display = "none";
	}
	x[index-1].style.display = "block";
}

autoSlide();

function autoSlide(){
	var i;
	var x = document.getElementsByClassName("myslides");
	for(i=0;i<x.length;i++){
		x[i].style.display = "none";
	}
	if ( index > x.length) { index = 1};
	x[index-1].style.display = "block";
	index++;
	setTimeout(autoSlide,3000);
}