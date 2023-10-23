gsap.timeline()
.from('.drawanim', { opacity:100 })
.from('.element.no2', { x: '400%' })
.from('.element.no3', { x: '400%' }, '<0.25');
