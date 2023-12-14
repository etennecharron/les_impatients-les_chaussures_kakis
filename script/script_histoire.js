let anim = gsap
  .timeline({scrollTrigger:{
    pin:false,
    scrub: 0.5,
    start: 'top 60%',
    end: 'bottom 35%',
    trigger: '.histoire__modules',
    toggleActions: 'play pause resume pause',





  }})

  .to('.histoire__1992', { opacity:1,duration:4})
  .to('.histoire__1999', { opacity:1,duration:4},'<6')
  .to('.histoire__2009', { opacity:1,duration:4},'<8')
  .to('.histoire__2011', { opacity:1,duration:4},'<10')












