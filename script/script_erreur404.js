gsap.registerPlugin(ScrollTrigger);

const tl = gsap.timeline({paused: true});

tl.to(".gsap_contenus", { x: 500, duration: 2 })
	.to(".mask",{ scaleX: 0},"<")
	.to(".campagne__contenus_gsap",{scale: 1, duration: 0.3}, 0.5)
	.to(".text1",{ autoAlpha: 1, scale: 1}, "-=0.2")

	.add(sequence2,"+=0.1").timeScale(0.8)

	tl.seek(1.2).play()