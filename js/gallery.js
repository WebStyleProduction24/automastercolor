var gallery1 = new Gallery('gallery', {
	dots: true,
	keyControl: true,
	responsive: true,
	adaptive: {
		320: {
			visibleItems: 1,
			margin: 5,
			dots: false
		},
		560: {
			visibleItems: 2,
			margin: 5,
			dots: false
		},
		768: {
			visibleItems: 3,
		},
		1024: {
			visibleItems: 4
		}
	}
});