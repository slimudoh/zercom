
"use strict"

onresize = onload = function() {
										var bigMenu = document.getElementById("section-nav");
										var smallMenu = document.getElementById("section-mobile"); 
										 var mobileNav = document.getElementById("mobile-nav");               
									 
										

										if (window.innerWidth < 501 || document.documentElement.clientWidth < 501 || document.body.clientWidth < 501 ) {            
												bigMenu.style.display = "none";
												smallMenu.style.display = "block";                                            
										} else if (window.innerWidth > 500 || document.documentElement.clientWidth > 500 || document.body.clientWidth > 500 ){
												bigMenu.style.display = "block";
												smallMenu.style.display = "none";                       
										}
										
};


document.getElementById("section-mobile").addEventListener("click", openMenu, false);


function openMenu(e) {
	
					 var mobileNav = document.getElementById("mobile-nav");

					 if (mobileNav.style.display === 'block') {
						mobileNav.style.animation = "upmenu .3s";
									mobileNav.style.webkitAnimation = "upmenu .3s";
									setTimeout( function() {
										mobileNav.style.display = "none";
									}, 300);
									
					 } else {
									mobileNav.style.display = "block";
									mobileNav.style.animation = "dropmenu .3s";
									mobileNav.style.webkitAnimation = "dropmenu .3s";
						};
};


function menu() {
	this.pands = document.getElementById("pands");
	this.port = document.getElementById("port");
	this.portDiv = document.getElementById("port-div");
	this.pandsDiv = document.getElementById("pands-div");
	this.about = document.getElementsByClassName("sect-about")[0];
	this.sectAbout = document.getElementsByClassName("sect-down")[0];
	this.section = document.getElementsByClassName("section-inside")[0];
	this.sectText = document.getElementsByClassName("sect-text")[0];
	this.colMd = document.getElementById("index-col");
	

	this.openNav = function(e) {
		if (e.target === this.about) {
			this.pandsDiv.style.display = "none";
			this.portDiv.style.display = "none";
		} else if (e.target === this.sectAbout || e.target === this.sectText) {
			this.pandsDiv.style.display = "none";
			this.portDiv.style.display = "none";
		} else if (e.target === this.section || e.target === this.colMd) {
			this.pandsDiv.style.display = "none";
			this.portDiv.style.display = "none";
		} else if (e.target === this.pands) {
			this.pandsDiv.style.display = "block";
			this.portDiv.style.display = "none";
		} else  if (e.target === this.port) {			
			this.portDiv.style.display = "block";
			this.pandsDiv.style.display = "none";
		}; 
	}
}

document.addEventListener("mouseover", function() {
	var runMenu = new menu();
	runMenu.openNav(event);
});

