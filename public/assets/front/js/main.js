/* ==============
 ========= js documentation ==========================

 * theme name: Xpovio
 * version: 1.0
 * description: Creative Agency Portfolio PHP Template
 * author: pixel-plus
 * author-url: https://themeforest.net/user/pixel-plus

	==================================================

	 01. preloader
	 -------------------------------------------------
	 02. primary navbar sticky
	 -------------------------------------------------
	 03. progress wrap sticky
	 -------------------------------------------------
	 04. data background
	 -------------------------------------------------
	 05. custom cursor
	 -------------------------------------------------
	 06. mobile menu
	 -------------------------------------------------
	 07. on window scroll navbar
	 -------------------------------------------------
	 08. on window resize navbar
	 -------------------------------------------------
	 09. offcanvas navigation
	 -------------------------------------------------
	 10. toggle class to items
	 -------------------------------------------------
	 11. offer image move with cursor
	 -------------------------------------------------
	 12. service faq
	 -------------------------------------------------
	 13. work image move with cursor
	 -------------------------------------------------
	 14. blog three image hover
	 -------------------------------------------------
	 15. faq
	 -------------------------------------------------
	 16. footer copyright year
	 -------------------------------------------------
	 17. scroll to top with progress

	==================================================
============== */

(function ($) {
	"use strict";

	jQuery(document).ready(function () {

		// 01. preloader
		$("#preloader").fadeOut(800);

		$(window).on("load", function () {
			// 02. primary navbar sticky
			var initialScroll = $(window).scrollTop();
			if (initialScroll >= 100) {
				$(".primary-navbar").addClass("navbar-active");
			}

			// 03. progress wrap sticky
			var initialScroll = $(window).scrollTop();
			if (initialScroll >= 100) {
				$(".progress-wrap").addClass("active-progress");
			}
		});

		// Header scroll effect
		window.addEventListener('scroll', function () {
			const header = document.getElementById('rainbowHeader');
			if (window.scrollY > 40) {
				header.classList.add('scrolled');
			} else {
				header.classList.remove('scrolled');
			}
		});

		// Mobile nav elements
		const navToggle = document.getElementById('rainbowNavToggle');
		const navClose = document.getElementById('rainbowNavClose');
		const nav = document.getElementById('rainbowNav');
		const overlay = document.getElementById('rainbowNavOverlay');

		function openNav() {
			nav.classList.add('open');
			overlay.classList.add('active');
			navToggle.classList.add('is-hidden');
			navToggle.setAttribute('aria-expanded', 'true');
			document.body.style.overflow = 'hidden';
		}

		function closeNav() {
			nav.classList.remove('open');
			overlay.classList.remove('active');
			navToggle.classList.remove('is-hidden');
			navToggle.setAttribute('aria-expanded', 'false');
			document.body.style.overflow = '';

			// also collapse any open dropdown when the whole nav closes
			document.querySelectorAll('.has-dropdown.dropdown-open').forEach(el => {
				el.classList.remove('dropdown-open');
			});
		}

		navToggle.addEventListener('click', function () {
			nav.classList.contains('open') ? closeNav() : openNav();
		});

		navClose.addEventListener('click', closeNav);
		overlay.addEventListener('click', closeNav);

		// Products dropdown toggle (mobile only)
		const dropdownParent = document.querySelector('.has-dropdown');
		if (dropdownParent) {
			const dropdownLink = dropdownParent.querySelector(':scope > a');

			dropdownLink.addEventListener('click', function (e) {
				if (window.innerWidth <= 991) {
					e.preventDefault();
					e.stopPropagation();
					dropdownParent.classList.toggle('dropdown-open');
				}
			});
		}

		// Close mobile nav when a link is clicked —
		// but SKIP the "Products" dropdown toggle link itself,
		// so opening/closing the dropdown doesn't close the whole drawer.
		document.querySelectorAll('.rainbow-header__nav a').forEach(link => {
			const isDropdownToggle = link.parentElement.classList.contains('has-dropdown');

			if (!isDropdownToggle) {
				link.addEventListener('click', closeNav);
			}
		});

		// Hero product image auto-slider (fade cycle)
		(function () {
			const slider = document.getElementById('rainbowHeroSlider');
			if (!slider) return;

			const images = slider.querySelectorAll('img');
			if (images.length <= 1) return; // fakt 1 image hoy to slider ni jarur nathi

			let current = 0;

			setInterval(() => {
				images[current].classList.remove('active');
				current = (current + 1) % images.length;
				images[current].classList.add('active');
			}, 3500); // dar 3.5 second e product badlaay
		})();

		// Featured product colour swatch switching
		(function () {
			const swatches = document.querySelectorAll('#colourSwatches .swatch');
			const productImage = document.getElementById('featuredProductImage');
			const colourName = document.getElementById('selectedColourName');

			if (!swatches.length || !productImage) return;

			swatches.forEach(swatch => {
				swatch.addEventListener('click', () => {
					swatches.forEach(s => s.classList.remove('active'));
					swatch.classList.add('active');

					productImage.style.opacity = '0';
					productImage.style.transform = 'scale(.94)';

					setTimeout(() => {
						productImage.src = swatch.getAttribute('data-image');
						productImage.style.opacity = '1';
						productImage.style.transform = 'scale(1)';
					}, 180);

					if (colourName) {
						colourName.textContent = swatch.getAttribute('data-name');
					}
				});
			});

			// Size chip selection
			const sizeChips = document.querySelectorAll('.size-chip');
			sizeChips.forEach(chip => {
				chip.addEventListener('click', () => {
					sizeChips.forEach(c => c.classList.remove('active'));
					chip.classList.add('active');
				});
			});
		})();

		// 04. data background
		$("[data-background]").each(function () {
			$(this).css(
				"background-image",
				"url(" + $(this).attr("data-background") + ")"
			);
		});

		let device_width = window.innerWidth;

		// Journey tabs interaction
		(function () {
			const tabs = document.querySelectorAll('.story-tab');
			const panels = document.querySelectorAll('.story-panel');
			const slider = document.getElementById('storyTabsSlider');

			if (!tabs.length) return;

			tabs.forEach((tab, index) => {
				tab.addEventListener('click', () => {
					// Update active tab
					tabs.forEach(t => t.classList.remove('active'));
					tab.classList.add('active');

					// Move slider
					slider.style.transform = `translateX(${index * 100}%)`;

					// Update active panel
					const targetId = tab.getAttribute('data-target');
					panels.forEach(panel => {
						panel.classList.toggle('active', panel.id === targetId);
					});
				});
			});
		})();

		// Pouch page
		(function () {

			const sizeTabs =
				document.querySelectorAll('.pouch-size-tab');

			if (!sizeTabs.length) return;


			const pouchBasePath =
				'/assets/front/images/rainbow/pouch';


			const pouchData = {

				"100gm": {

					label: "100 GM",

					packaging: {
						pouch: "10 Pouch",
						bunch: "1 KG Bunch",
						carton: "25 Bunch",
						cartonWeight: "25 KG Carton"
					},

					colours: {

						red: {
							name: "Red",
							title: "VIBRANT RED",
							image: `${pouchBasePath}/100gm/red.png`,
							dot: "#E53935",
							description: "A vibrant red shade designed to bring energy and excitement to every colourful celebration."
						},

						"sky-blue": {
							name: "Sky Blue",
							title: "SKY BLUE",
							image: `${pouchBasePath}/100gm/sky-blue.png`,
							dot: "#56CCF2",
							description: "A fresh and uplifting blue shade that brings a cool and refreshing character to every celebration."
						},

						blue: {
							name: "Blue",
							title: "VIBRANT BLUE",
							image: `${pouchBasePath}/100gm/blue.png`,
							dot: "#287BEA",
							description: "A bold blue shade created for vibrant celebrations and colourful expressions."
						},

						purple: {
							name: "Purple",
							title: "ROYAL PURPLE",
							image: `${pouchBasePath}/100gm/purple.png`,
							dot: "#7047B8",
							description: "A rich purple shade that adds depth, character and a premium touch to every colour collection."
						},

						pink: {
							name: "Pink",
							title: "PLAYFUL PINK",
							image: `${pouchBasePath}/100gm/pink.png`,
							dot: "#F783B6",
							description: "A bright and playful pink shade made for joyful and colourful celebrations."
						},

						"rani-pink": {
							name: "Rani Pink",
							title: "RANI PINK",
							image: `${pouchBasePath}/100gm/rani-pink.png`,
							dot: "#E83E8C",
							description: "A rich and expressive pink shade that adds a beautiful festive character to every celebration."
						},

						green: {
							name: "Green",
							title: "FRESH GREEN",
							image: `${pouchBasePath}/100gm/green.png`,
							dot: "#36C96F",
							description: "A lively green shade inspired by freshness, energy and colourful celebration."
						},

						orange: {
							name: "Orange",
							title: "BRIGHT ORANGE",
							image: `${pouchBasePath}/100gm/orange.png`,
							dot: "#FF7A00",
							description: "A bright orange shade full of warmth, energy and festive spirit."
						},

						yellow: {
							name: "Yellow",
							title: "SUNNY YELLOW",
							image: `${pouchBasePath}/100gm/yellow.png`,
							dot: "#FDD200",
							description: "A bright yellow shade that brings warmth, happiness and instant festive energy."
						},

						parrot: {
							name: "Parrot",
							title: "PARROT GREEN",
							image: `${pouchBasePath}/100gm/parrot.png`,
							dot: "#8BCF45",
							description: "A lively parrot green shade that adds freshness and playful energy to every colour palette."
						},

						white: {
							name: "White",
							title: "PURE WHITE",
							image: `${pouchBasePath}/100gm/white.png`,
							dot: "#F4F4F4",
							description: "A clean and pure white shade that completes the Rainbow colour collection."
						}

					}

				},


				"250gm": {

					label: "250 GM",

					packaging: {
						pouch: "10 Pouch",
						bunch: "2.5 KG Bunch",
						carton: "10 Bunch",
						cartonWeight: "25 KG Carton"
					},

					colours: {}

				},


				"500gm": {

					label: "500 GM",

					packaging: {
						pouch: "5 Pouch",
						bunch: "2.5 KG Bunch",
						carton: "10 Bunch",
						cartonWeight: "25 KG Carton"
					},

					colours: {}

				}

			};


			Object.keys(
				pouchData["100gm"].colours
			).forEach(function (key) {

				const baseColour =
					pouchData["100gm"].colours[key];


				pouchData["250gm"].colours[key] = {
					...baseColour,
					image:
						`${pouchBasePath}/250gm/${key}.png`
				};


				pouchData["500gm"].colours[key] = {
					...baseColour,
					image:
						`${pouchBasePath}/500gm/${key}.png`
				};

			});


			const colourGrid =
				document.getElementById('pouchColourGrid');

			const marqueeTrack =
				document.getElementById('pouchMarqueeTrack');

			const mainImage =
				document.getElementById('mainPouchImage');

			const mainColourName =
				document.getElementById('mainColourName');

			const mainColourDot =
				document.getElementById('mainColourDot');

			const mainColourTitle =
				document.getElementById('mainColourTitle');

			const mainColourDescription =
				document.getElementById('mainColourDescription');

			const mainSizeLabel =
				document.getElementById('mainSizeLabel');

			const metaSize =
				document.getElementById('metaSize');

			const shadeCount =
				document.getElementById('shadeCount');


			let currentSize =
				'100gm';

			let currentColour =
				'red';


			function renderColours() {

				if (!colourGrid) {
					return;
				}


				colourGrid.innerHTML = '';


				const colours =
					pouchData[currentSize].colours;


				Object.keys(colours).forEach(function (key) {

					const colour =
						colours[key];


					const button =
						document.createElement('button');


					button.type =
						'button';


					button.className =
						'pouch-colour-option' +
						(
							key === currentColour
								? ' active'
								: ''
						);


					button.dataset.colour =
						key;


					button.innerHTML = `
                <span
                    class="pouch-colour-option__dot"
                    style="--colour:${colour.dot}"
                ></span>

                <span class="pouch-colour-option__name">
                    ${colour.name}
                </span>
            `;


					button.addEventListener(
						'click',
						function () {
							selectColour(key);
						}
					);


					colourGrid.appendChild(button);

				});


				if (shadeCount) {

					shadeCount.textContent =
						Object.keys(colours).length +
						' COLOURS';

				}

			}


			function renderMarquee() {

				if (!marqueeTrack) {
					return;
				}


				marqueeTrack.innerHTML = '';


				const sizes = [

					{
						key: '100gm',
						label: '100 GM'
					},

					{
						key: '250gm',
						label: '250 GM'
					},

					{
						key: '500gm',
						label: '500 GM'
					}

				];


				let items = [];


				sizes.forEach(function (size) {

					const colours =
						pouchData[size.key].colours;


					Object.keys(colours).forEach(function (key) {

						items.push({

							sizeKey: size.key,

							sizeLabel: size.label,

							colourKey: key,

							colour: colours[key]

						});

					});

				});


				const repeatedItems = [
					...items,
					...items,
					...items
				];


				repeatedItems.forEach(function (item) {

					const colour =
						item.colour;


					const product =
						document.createElement('button');


					product.type =
						'button';

					product.className = `pouch-marquee-item pouch-marquee-size-${item.sizeKey}`;


					product.innerHTML = `
							<span class="pouch-marquee-item__size">${item.sizeLabel}</span>
							<span class="pouch-marquee-item__dot" style="--colour:${colour.dot}"></span>

							<div class="pouch-marquee-item__image">
								<img src="${colour.image}" alt="${colour.name} ${item.sizeLabel} Rainbow Pouch">
							</div>

							<strong>${colour.name}</strong>
						`;


					product.addEventListener(
						'click',
						function () {

							selectSize(
								item.sizeKey,
								item.colourKey,
								true
							);

						}
					);


					marqueeTrack.appendChild(product);

				});

			}


			function selectColour(key) {

				const colours =
					pouchData[currentSize].colours;


				const colour =
					colours[key];


				if (!colour) {
					return;
				}


				currentColour =
					key;


				if (mainImage) {

					mainImage.classList.add(
						'changing'
					);

				}


				setTimeout(function () {

					if (mainImage) {

						mainImage.src =
							colour.image;

						mainImage.alt =
							`Rainbow ${colour.name} ${pouchData[currentSize].label} Pouch`;

					}


					if (mainColourName) {

						mainColourName.textContent =
							colour.name;

					}


					if (mainColourTitle) {

						mainColourTitle.textContent =
							colour.title;

					}


					if (mainColourDescription) {

						mainColourDescription.textContent =
							colour.description;

					}


					if (mainColourDot) {

						mainColourDot.style.background =
							colour.dot;

					}


					if (mainImage) {

						mainImage.classList.remove(
							'changing'
						);

					}

				}, 120);


				document
					.querySelectorAll(
						'.pouch-colour-option'
					)
					.forEach(function (button) {

						button.classList.toggle(
							'active',
							button.dataset.colour === key
						);

					});

			}


			function selectSize(
				size,
				requestedColour = null,
				scrollToShowcase = false
			) {

				if (!pouchData[size]) {
					return;
				}


				const colours =
					pouchData[size].colours;


				const colourKeys =
					Object.keys(colours);


				if (!colourKeys.length) {
					return;
				}


				currentSize =
					size;

				const productStage =
					document.querySelector('.pouch-product-stage');

				if (productStage) {
					productStage.classList.remove(
						'pouch-size-100gm',
						'pouch-size-250gm',
						'pouch-size-500gm'
					);

					productStage.classList.add(
						`pouch-size-${size}`
					);
				}


				sizeTabs.forEach(function (tab) {

					tab.classList.toggle(
						'active',
						tab.dataset.size === size
					);

				});


				let nextColour =
					requestedColour;


				if (
					!nextColour ||
					!colours[nextColour]
				) {

					if (colours[currentColour]) {

						nextColour =
							currentColour;

					} else {

						nextColour =
							colourKeys[0];

					}

				}


				currentColour =
					nextColour;


				if (mainSizeLabel) {

					mainSizeLabel.textContent =
						pouchData[size].label;

				}


				if (metaSize) {

					metaSize.textContent =
						pouchData[size].label;

				}


				renderColours();


				selectColour(
					nextColour
				);


				if (
					scrollToShowcase &&
					document.querySelector(
						'.pouch-showcase'
					)
				) {

					document
						.querySelector(
							'.pouch-showcase'
						)
						.scrollIntoView({
							behavior: 'smooth',
							block: 'center'
						});

				}

			}


			sizeTabs.forEach(function (tab) {

				tab.addEventListener(
					'click',
					function () {

						const size =
							tab.dataset.size;


						if (!size) {
							return;
						}


						selectSize(size);

					}
				);

			});


			renderColours();

			renderMarquee();

			selectSize(
				'100gm',
				'red'
			);

		})();


		// Container page
		(function () {

			const tabs = document.querySelectorAll('.container-collection-tab');

			if (!tabs.length) return;

			const containerData = {

				sparsh: {
					name: 'Sparsh',
					size: '250 GM',
					logo: 'SPARSH',
					folder: '250gm',
					description: 'A vibrant colour collection designed to bring energy, richness and a beautiful sensory experience to every colourful celebration.'
				},

				signature: {
					name: 'Signature',
					size: '500 GM',
					logo: 'SIGNATURE',
					folder: '500gm',
					description: 'A premium colour collection created to bring rich shades, beautiful fragrance and a refined Rainbow experience to every celebration.'
				},

				harmony: {
					name: 'Harmony',
					size: '1 KG',
					logo: 'HARMONY',
					folder: '1kg',
					description: 'A generous container collection bringing vibrant shades, smooth fragrance and a memorable colourful experience together.'
				},

				heritage: {
					name: 'Heritage',
					size: '2 KG',
					logo: 'HERITAGE',
					folder: '2kg',
					description: 'A classic Rainbow collection inspired by tradition, crafted for celebrations where colour, character and fragrance come together.'
				}

			};


			const colours = [

				{
					key: 'blue',
					name: 'Blue',
					dot: '#287BEA'
				},

				{
					key: 'green',
					name: 'Green',
					dot: '#36C96F'
				},

				{
					key: 'orange',
					name: 'Orange',
					dot: '#FF7A00'
				},

				{
					key: 'parrot',
					name: 'Parrot',
					dot: '#8BCF45'
				},

				{
					key: 'pink',
					name: 'Pink',
					dot: '#F783B6'
				},

				{
					key: 'purple',
					name: 'Purple',
					dot: '#7047B8'
				},

				{
					key: 'rani-pink',
					name: 'Rani Pink',
					dot: '#E83E8C'
				},

				{
					key: 'red',
					name: 'Red',
					dot: '#E53935'
				},

				{
					key: 'sky-blue',
					name: 'Sky Blue',
					dot: '#56CCF2'
				},

				{
					key: 'yellow',
					name: 'Yellow',
					dot: '#FDD200'
				},

				{
					key: 'white',
					name: 'White',
					dot: '#FFFFFF'
				},

				{
					key: 'black',
					name: 'Black',
					dot: '#111111'
				}

			];


			const colourGrid =
				document.getElementById('containerColourGrid');

			const mainImage =
				document.getElementById('mainContainerImage');

			const showcaseVisual =
				document.querySelector('.container-showcase__visual');

			const collectionName =
				document.getElementById('containerCollectionName');

			const collectionTitle =
				document.getElementById('containerCollectionTitle');

			const collectionDescription =
				document.getElementById('containerCollectionDescription');

			const collectionLogo =
				document.getElementById('containerCollectionLogo');

			const sizeLabel =
				document.getElementById('containerSizeLabel');

			const metaCollection =
				document.getElementById('containerMetaCollection');

			const metaSize =
				document.getElementById('containerMetaSize');

			const colourDot =
				document.getElementById('containerColourDot');


			let currentCollection = 'sparsh';

			let currentColour = 'blue';


			const containerBasePath =
				'/assets/front/images/rainbow/container';


			function getColourImage() {

				const data =
					containerData[currentCollection];

				if (!data) {
					return '';
				}

				return `${containerBasePath}/${data.folder}/${currentColour}.png`;

			}


			function renderColours() {

				if (!colourGrid) {
					return;
				}

				colourGrid.innerHTML = '';


				colours.forEach(function (colour) {

					const button =
						document.createElement('button');

					button.type = 'button';

					button.className =
						'container-colour-option' +
						(
							colour.key === currentColour
								? ' active'
								: ''
						);

					button.dataset.colour =
						colour.key;

					button.setAttribute(
						'aria-label',
						colour.name
					);

					button.innerHTML = `
                <span
                    class="container-colour-option__dot"
                    style="--colour:${colour.dot}"
                ></span>

                <span class="container-colour-option__name">
                    ${colour.name}
                </span>
            `;

					button.addEventListener(
						'click',
						function () {
							selectColour(colour.key);
						}
					);

					colourGrid.appendChild(button);

				});

			}


			function selectColour(key) {

				const colour =
					colours.find(function (item) {
						return item.key === key;
					});

				if (!colour) {
					return;
				}


				currentColour =
					key;


				if (colourDot) {

					colourDot.style.background =
						colour.dot;

				}


				if (collectionTitle) {

					collectionTitle.textContent =
						colour.name;

				}


				document
					.querySelectorAll('.container-colour-option')
					.forEach(function (button) {

						button.classList.toggle(
							'active',
							button.dataset.colour === key
						);

					});


				if (mainImage) {

					mainImage.classList.add('changing');

					const newImage =
						getColourImage();

					mainImage.src =
						newImage;

					mainImage.alt =
						`Rainbow ${containerData[currentCollection].name} ${colour.name} Container`;

					mainImage.onload =
						function () {

							mainImage.classList.remove(
								'changing'
							);

						};

					mainImage.onerror =
						function () {

							mainImage.classList.remove(
								'changing'
							);

						};

				}

			}


			function updateCollection() {

				const data =
					containerData[currentCollection];

				if (!data) {
					return;
				}


				if (showcaseVisual) {

					showcaseVisual.classList.remove(
						'collection-sparsh',
						'collection-signature',
						'collection-harmony',
						'collection-heritage'
					);

					showcaseVisual.classList.add(
						`collection-${currentCollection}`
					);

				}


				collectionName.textContent =
					data.name;

				collectionDescription.textContent =
					data.description;

				collectionLogo.textContent =
					data.logo;

				sizeLabel.textContent =
					data.size;

				metaCollection.textContent =
					data.name;

				metaSize.textContent =
					data.size;


				const selectedColour =
					colours.find(function (item) {

						return item.key === currentColour;

					});


				if (selectedColour) {

					collectionTitle.textContent =
						selectedColour.name;

					if (colourDot) {

						colourDot.style.background =
							selectedColour.dot;

					}

				}


				if (mainImage) {

					mainImage.classList.add('changing');

					const newImage =
						getColourImage();

					mainImage.src =
						newImage;

					mainImage.alt =
						`Rainbow ${data.name} ${currentColour} Container`;

					mainImage.onload =
						function () {

							mainImage.classList.remove(
								'changing'
							);

						};

					mainImage.onerror =
						function () {

							mainImage.classList.remove(
								'changing'
							);

						};

				}

			}


			tabs.forEach(function (tab) {

				tab.addEventListener(
					'click',
					function () {

						const collection =
							tab.dataset.collection;

						if (!containerData[collection]) {
							return;
						}


						currentCollection =
							collection;


						tabs.forEach(function (item) {

							item.classList.toggle(
								'active',
								item === tab
							);

						});


						updateCollection();

					}
				);

			});


			renderColours();

			updateCollection();

			selectColour('blue');

		})();

		// Neo Pop page
		(function () {

			const packTabs =
				document.querySelectorAll('.neopop-pack-tab');

			if (!packTabs.length) return;


			const neoPopData = {

				'250gm': {

					size: '250 GM',

					shades: [
						'fuzzy-lemon',
						'electric-orange',
						'toxic-green',
						'pink-blast'
					]

				},

				'500gm': {

					size: '500 GM',

					shades: [
						'fuzzy-lemon',
						'electric-orange',
						'toxic-green',
						'pink-blast',
						'cosmic-purple'
					]

				},

				'1kg': {

					size: '1 KG',

					shades: [
						'fuzzy-lemon',
						'electric-orange',
						'toxic-green',
						'pink-blast',
						'cosmic-purple'
					]

				},

				'2kg': {

					size: '2 KG',

					shades: [
						'fuzzy-lemon',
						'electric-orange',
						'toxic-green',
						'pink-blast',
						'cosmic-purple'
					]

				}

			};


			const shadeInfo = {

				'fuzzy-lemon': {

					name: 'Fuzzy Lemon',
					dot: '#DFFF00'

				},

				'electric-orange': {

					name: 'Electric Orange',
					dot: '#FF7900'

				},

				'toxic-green': {

					name: 'Toxic Green',
					dot: '#73D13D'

				},

				'pink-blast': {

					name: 'Pink Blast',
					dot: '#FF4F9A'

				},

				'cosmic-purple': {

					name: 'Cosmic Purple',
					dot: '#7447C7'

				}

			};


			const colourGrid =
				document.getElementById('neopopColourGrid');

			const mainImage =
				document.getElementById('mainNeoPopImage');

			const sizeLabel =
				document.getElementById('neopopSizeLabel');

			const metaSize =
				document.getElementById('neopopMetaSize');

			const available =
				document.getElementById('neopopAvailable');

			const shadeCount =
				document.getElementById('neopopShadeCount');

			const colourName =
				document.getElementById('neopopColourName');

			const colourDot =
				document.getElementById('neopopColourDot');

			const description =
				document.getElementById('neopopDescription');


			let currentPack =
				'250gm';

			let currentShade =
				'fuzzy-lemon';


			const neoPopBasePath =
				'/assets/front/images/rainbow/container/neo-pop';


			function getImagePath() {

				return `${neoPopBasePath}/${currentPack}/${currentShade}.png`;

			}


			function updateDescription() {

				const shade =
					shadeInfo[currentShade];

				if (!shade) {
					return;
				}


				description.textContent =
					`${shade.name} brings a fresh Neo Pop character with vibrant colour, playful energy and a distinctive Rainbow finish to every celebration.`;

			}


			function renderShades() {

				const pack =
					neoPopData[currentPack];

				if (!pack || !colourGrid) {
					return;
				}


				colourGrid.innerHTML = '';


				pack.shades.forEach(function (key) {

					const shade =
						shadeInfo[key];

					if (!shade) {
						return;
					}


					const button =
						document.createElement('button');

					button.type = 'button';

					button.className =
						'neopop-colour-option' +
						(
							key === currentShade
								? ' active'
								: ''
						);

					button.dataset.shade =
						key;

					button.setAttribute(
						'aria-label',
						shade.name
					);

					button.innerHTML = `
                <span
                    class="neopop-colour-option__dot"
                    style="--colour:${shade.dot}"
                ></span>
            `;


					button.addEventListener(
						'click',
						function () {

							selectShade(key);

						}
					);


					colourGrid.appendChild(
						button
					);

				});


				available.textContent =
					`${pack.shades.length} Shades`;

				shadeCount.textContent =
					`${pack.shades.length} COLOURS`;

			}


			function selectShade(key) {

				const pack =
					neoPopData[currentPack];

				if (
					!pack ||
					!pack.shades.includes(key)
				) {
					return;
				}


				const shade =
					shadeInfo[key];

				if (!shade) {
					return;
				}


				currentShade =
					key;


				colourName.textContent =
					shade.name;

				colourDot.style.background =
					shade.dot;


				updateDescription();


				document
					.querySelectorAll(
						'.neopop-colour-option'
					)
					.forEach(function (button) {

						button.classList.toggle(
							'active',
							button.dataset.shade === key
						);

					});


				if (mainImage) {

					mainImage.classList.add(
						'changing'
					);


					const newImage =
						getImagePath();


					mainImage.src =
						newImage;

					mainImage.alt =
						`Rainbow Neo Pop ${shade.name}`;


					mainImage.onload =
						function () {

							mainImage.classList.remove(
								'changing'
							);

						};


					mainImage.onerror =
						function () {

							mainImage.classList.remove(
								'changing'
							);

						};

				}

			}


			function updatePack() {

				const pack =
					neoPopData[currentPack];

				if (!pack) {
					return;
				}


				sizeLabel.textContent =
					pack.size;

				metaSize.textContent =
					pack.size;


				if (
					!pack.shades.includes(
						currentShade
					)
				) {

					currentShade =
						pack.shades[0];

				}


				renderShades();

				selectShade(
					currentShade
				);

			}


			packTabs.forEach(function (tab) {

				tab.addEventListener(
					'click',
					function () {

						const pack =
							tab.dataset.pack;

						if (!neoPopData[pack]) {
							return;
						}


						currentPack =
							pack;


						packTabs.forEach(
							function (item) {

								item.classList.toggle(
									'active',
									item === tab
								);

							}
						);


						updatePack();

					}
				);

			});

			renderShades();

			updatePack();

		})();

		(function () {

			const collectionTabs =
				document.querySelectorAll('.box-collection-tab');

			const formatButtons =
				document.getElementById('boxFormatButtons');

			const mainImage =
				document.getElementById('boxMainImage');

			const imageCollection =
				document.getElementById('boxImageCollection');

			const imageFormat =
				document.getElementById('boxImageFormat');

			const collectionTitle =
				document.getElementById('boxCollectionTitle');

			const collectionDescription =
				document.getElementById('boxCollectionDescription');

			const selectedTitle =
				document.getElementById('boxSelectedTitle');

			const selectedBadge =
				document.getElementById('boxSelectedBadge');

			const metaCollection =
				document.getElementById('boxMetaCollection');

			const metaPacking =
				document.getElementById('boxMetaPacking');


			if (!formatButtons || !mainImage) return;


			const boxBasePath =
				'/assets/front/images/rainbow/box';


			const boxData = {

				sparsh: {
					title: '250 Sparsh',
					shortTitle: 'SPARSH',

					description:
						'Window-style Rainbow packaging designed to present the Sparsh container collection in a colourful and premium format.',

					formats: [
						{
							key: '4',
							button: '4 PCS',
							selected: '4 Containers',
							packing: '4 Container in 1 Box',
							image: `${boxBasePath}/sparsh-4.png`
						},
						{
							key: '8',
							button: '8 PCS',
							selected: '8 Containers',
							packing: '8 Container in 1 Box',
							image: `${boxBasePath}/sparsh-8.png`
						},
						{
							key: '10',
							button: '10 PCS',
							selected: '10 Containers',
							packing: '10 Container in 1 Box',
							image: `${boxBasePath}/sparsh-10.png`
						}
					]
				},


				signature: {
					title: '500 Signature',
					shortTitle: 'SIGNATURE',

					description:
						'A premium Rainbow box collection designed around Signature container combinations and colourful presentation.',

					formats: [
						{
							key: '2',
							button: '2 PCS',
							selected: '2 Containers',
							packing: '2 Container in 1 Box',
							image: `${boxBasePath}/signature-2.png`
						},
						{
							key: '4',
							button: '4 PCS',
							selected: '4 Containers',
							packing: '4 Container in 1 Box',
							image: `${boxBasePath}/signature-4.png`
						},
						{
							key: '5',
							button: '5 PCS',
							selected: '5 Containers',
							packing: '5 Container in 1 Box',
							image: `${boxBasePath}/signature-5.png`
						}
					]
				},


				neopop: {
					title: 'NeoPop',
					shortTitle: 'NEOPOP',

					description:
						'A bold Rainbow box collection available with selected 250gm and 500gm container combinations.',

					formats: [
						{
							key: '250-4',
							button: '250GM · 4 PCS',
							selected: '250gm · 4 Containers',
							packing: '250gm - 4 Container in 1 Box',
							image: `${boxBasePath}/neopop-250-4.png`
						},
						{
							key: '500-4',
							button: '500GM · 4 PCS',
							selected: '500gm · 4 Containers',
							packing: '500gm - 4 Container in 1 Box',
							image: `${boxBasePath}/neopop-500-4.png`
						},
						{
							key: '500-5',
							button: '500GM · 5 PCS',
							selected: '500gm · 5 Containers',
							packing: '500gm - 5 Container in 1 Box',
							image: `${boxBasePath}/neopop-500-5.png`
						}
					]
				}

			};


			let currentCollection = 'sparsh';
			let currentFormat = '4';


			function getCurrentCollection() {
				return boxData[currentCollection];
			}


			function renderFormatButtons() {

				const collection =
					getCurrentCollection();

				formatButtons.innerHTML = '';


				collection.formats.forEach(function (format, index) {

					const button =
						document.createElement('button');

					button.type = 'button';

					button.className =
						'box-format-button' +
						(index === 0 ? ' active' : '');

					button.dataset.format =
						format.key;

					button.innerHTML = `
                <span class="box-format-button__number">
                    0${index + 1}
                </span>

                <strong>
                    ${format.button}
                </strong>

                <i class="fa-solid fa-arrow-right"></i>
            `;

					button.addEventListener('click', function () {
						selectFormat(format.key);
					});

					formatButtons.appendChild(button);

				});

			}


			function updateButtons() {

				document
					.querySelectorAll('.box-format-button')
					.forEach(function (button) {

						button.classList.toggle(
							'active',
							button.dataset.format === currentFormat
						);

					});

			}


			function selectFormat(formatKey) {

				const collection =
					getCurrentCollection();

				const format =
					collection.formats.find(function (item) {
						return item.key === formatKey;
					});


				if (!format) return;


				currentFormat = formatKey;


				mainImage.classList.add('changing');


				setTimeout(function () {

					mainImage.src =
						format.image;

					mainImage.alt =
						`Rainbow ${collection.shortTitle} ${format.selected} Box`;

					imageCollection.textContent =
						collection.shortTitle;

					imageFormat.textContent =
						format.button;

					selectedTitle.textContent =
						format.selected;

					selectedBadge.textContent =
						collection.shortTitle;

					metaCollection.textContent =
						collection.title;

					metaPacking.textContent =
						format.packing;

					mainImage.classList.remove('changing');

				}, 150);


				updateButtons();

			}


			function selectCollection(collectionKey) {

				if (!boxData[collectionKey]) return;


				currentCollection =
					collectionKey;

				currentFormat =
					boxData[collectionKey].formats[0].key;


				collectionTabs.forEach(function (tab) {

					tab.classList.toggle(
						'active',
						tab.dataset.collection === collectionKey
					);

				});


				const collection =
					getCurrentCollection();


				collectionTitle.textContent =
					collection.title;

				collectionDescription.textContent =
					collection.description;


				renderFormatButtons();

				selectFormat(currentFormat);

			}


			collectionTabs.forEach(function (tab) {

				tab.addEventListener('click', function () {

					selectCollection(
						tab.dataset.collection
					);

				});

			});


			renderFormatButtons();

			selectFormat('4');

		})();

		// 05. custom cursor
		function itCursor() {
			var myCursor = jQuery(".mouseCursor");
			if (myCursor.length) {
				if ($("body")) {
					const e = document.querySelector(".cursor-inner"),
						t = document.querySelector(".cursor-outer");
					let n,
						i = 0,
						o = !1;
					(window.onmousemove = function (s) {
						o ||
							(t.style.transform =
								"translate(" + s.clientX + "px, " + s.clientY + "px)"),
							(e.style.transform =
								"translate(" + s.clientX + "px, " + s.clientY + "px)"),
							(n = s.clientY),
							(i = s.clientX);
					}),
						$("body").on(
							"mouseenter",
							"button, a, .cursor-pointer",
							function () {
								e.classList.add("cursor-hover"),
									t.classList.add("cursor-hover");
							}
						),
						$("body").on(
							"mouseleave",
							"button, a, .cursor-pointer",
							function () {
								($(this).is("a", "button") &&
									$(this).closest(".cursor-pointer").length) ||
									(e.classList.remove("cursor-hover"),
										t.classList.remove("cursor-hover"));
							}
						),
						(e.style.visibility = "visible"),
						(t.style.visibility = "visible");
				}
			}
		}
		itCursor();

		// 06. mobile menu
		if ($(".mobile-menu").length) {
			var mobileMenuContent = $(".cmn-nav .navbar__menu").html();
			$(".cmn-nav .mobile-menu__list").append(mobileMenuContent);

			var mobileMenuOptions = $(".cmn-nav .navbar__mobile-options").html();
			$(".cmn-nav .mobile-menu__options").append(mobileMenuOptions);

			$(".mobile-menu .navbar__dropdown-label").on("click", function () {
				$(this).parent().siblings().find(".navbar__sub-menu").slideUp(300);
				$(this)
					.parent()
					.siblings()
					.find(".navbar__dropdown-label")
					.removeClass("navbar__item-active");
				$(this).siblings(".navbar__sub-menu").slideToggle(300);
				$(this).toggleClass("navbar__item-active");
			});
		}

		$(".open-mobile-menu, .open-offcanvas-nav").on("click", function () {
			$(".mobile-menu__backdrop").addClass("mobile-menu__backdrop-active");
			$(".nav-fade").each(function (i) {
				$(this).css("animation-delay", 0.2 * 1 * i + "s");
			});

			$(".mobile-menu").addClass("show-menu");
			$(".mobile-menu__wrapper").removeClass("nav-fade-active");
		});

		$(".close-mobile-menu, .mobile-menu__backdrop").on("click", function () {
			setTimeout(function () {
				$(".mobile-menu").removeClass("show-menu");
			}, 900);
			setTimeout(function () {
				$(".mobile-menu__backdrop").removeClass("mobile-menu__backdrop-active");
			}, 1100);

			$(".mobile-menu__wrapper").addClass("nav-fade-active");
		});

		// 07. close video popup
		$(".close-v").on("click", function () {
			$(".vid-m").fadeOut(300);
		});

		// 08. on window scroll navbar
		$(window).on("scroll", function () {
			var scroll = $(window).scrollTop();
			if (scroll < 100) {
				$(".primary-navbar").removeClass("navbar-active");
			} else {
				$(".primary-navbar").addClass("navbar-active");
			}
		});

		// 09. on window resize navbar
		$(window).on("resize", function () {
			$("body").removeClass("body-active");
			$(".mobile-menu").removeClass("show-menu");
			$(".mobile-menu__backdrop").removeClass("mobile-menu__backdrop-active");
			$(".mobile-menu__wrapper").addClass("nav-fade-active");
		});

		// 10. offcanvas navigation
		if ($(".offcanvas-nav").length) {
			$(".offcanvas-menu .navbar__dropdown-label").on("click", function () {
				$(this).parent().siblings().find(".navbar__sub-menu").slideUp(300);
				$(this)
					.parent()
					.siblings()
					.find(".navbar__dropdown-label")
					.removeClass("navbar__item-active");
				$(this).siblings(".navbar__sub-menu").slideToggle(300);
				$(this).toggleClass("navbar__item-active");
			});
		}

		$(".open-offcanvas-nav").on("click", function () {
			$(".nav-fade").each(function (i) {
				$(this).css("animation-delay", 1 + 0.2 * 1 * i + "s");
			});

			$(".offcanvas-menu").addClass("show-offcanvas-menu");
			$(".offcanvas-menu__wrapper").removeClass("nav-fade-active");
		});

		$(".close-offcanvas-menu, .offcanvas-menu__backdrop").on(
			"click",
			function () {
				setTimeout(function () {
					$(".offcanvas-menu").removeClass("show-offcanvas-menu");
				}, 900);
				$(".offcanvas-menu__wrapper").addClass("nav-fade-active");
			}
		);

		// 11. toggle class to items
		$(".portfolio__single").on("mouseover", function () {
			$(".portfolio__single").removeClass("portfolio__single-active");
			$(this).addClass("portfolio__single-active");
		});

		$(".work-steps__single").on("mouseover", function () {
			$(".work-steps__single").removeClass("work-steps__single-active");
			$(this).addClass("work-steps__single-active");
		});

		// 12. offer image move with cursor
		if (device_width > 576) {
			const blogImgItem = document.querySelectorAll(".offer__cta-single");

			function followImageCursor(event, blogImgItem) {
				const contentBox = blogImgItem.getBoundingClientRect();
				const dx = event.clientX - contentBox.x;
				const dy = event.clientY - contentBox.y;
				blogImgItem.children[2].style.transform = `translate(${dx}px, ${dy}px) rotate(15deg)`;
			}
			blogImgItem.forEach((item, i) => {
				item.addEventListener("mousemove", (event) => {
					setInterval(followImageCursor(event, item), 1000);
				});
			});
		}

		// 13. service faq
		$(".service-f-single:first").addClass("service-f-single-active");
		$(".service-f-single:first .p-single").show();
		$(".toggle-service-f").on("click", function () {
			var parent = $(this).parent();
			parent.find(".p-single").slideToggle(600);
			parent.toggleClass("service-f-single-active");
			parent.siblings().removeClass("service-f-single-active");
			parent.siblings().find(".p-single").slideUp(600);
		});

		// 14. work image move with cursor
		if (device_width > 576) {
			const workImgItem = document.querySelectorAll(".work-steps__single");

			function followImageCursor(event, workImgItem) {
				const contentBox = workImgItem.getBoundingClientRect();
				const dx = event.clientX - contentBox.x;
				const dy = event.clientY - contentBox.y;
				workImgItem.children[2].style.transform = `translate(${dx}px`;
			}
			workImgItem.forEach((item, i) => {
				item.addEventListener("mousemove", (event) => {
					setInterval(followImageCursor(event, item), 1000);
				});
			});
		}

		// 15. blog three image hover
		$(".blog-three__thumb .blog-single-img:not(:first-child)").hide();

		$(".blog-three__single").on("mouseenter", function () {
			if ($(this).hasClass("active")) {
				return;
			}

			var index = $(this).index();
			gsap.to(".blog-three__thumb .blog-single-img", {
				opacity: 0,
				scale: 0,
				duration: 0.4,
				onComplete: function () {
					$(".blog-three__thumb .blog-single-img").hide();
					$(".blog-three__thumb .blog-single-img").eq(index).show();
					gsap.fromTo(
						".blog-three__thumb .blog-single-img", {
						opacity: 0,
						scale: 0,
					}, {
						opacity: 1,
						scale: 1,
						duration: 0.4,
					}
					);
				},
			});

			$(".blog-three__single").removeClass("active");
			$(this).addClass("active");
		});

		$(".blog-three__single").on("mouseleave", function () {
			gsap.to(".blog-three__thumb .blog-single-img", {
				opacity: 1,
				scale: 1,
				duration: 0.4,
			});
		});

		// 16. faq
		$(".accordion-button:not(.collapsed)")
			.parents(".accordion-item")
			.addClass("faq-one-active");
		$(".accordion-button").on("click", function () {
			$(".accordion-item").removeClass("faq-one-active");
			$(".accordion-button:not(.collapsed)")
				.parents(".accordion-item")
				.addClass("faq-one-active");
		});

		// 17. footer copyright year
		$("#copyYear").text(new Date().getFullYear());

		// 18. scroll to top with progress
		if ($(".progress-wrap").length > 0) {
			var progressPath = document.querySelector(".progress-wrap path");
			var pathLength = progressPath.getTotalLength();
			progressPath.style.transition = progressPath.style.WebkitTransition =
				"none";
			progressPath.style.strokeDasharray = pathLength + " " + pathLength;
			progressPath.style.strokeDashoffset = pathLength;
			progressPath.getBoundingClientRect();
			progressPath.style.transition = progressPath.style.WebkitTransition =
				"stroke-dashoffset 10ms linear";
			var updateProgress = function () {
				var scroll = $(window).scrollTop();
				var height = $(document).height() - $(window).height();
				var progress = pathLength - (scroll * pathLength) / height;
				progressPath.style.strokeDashoffset = progress;
			};
			updateProgress();
			$(window).scroll(updateProgress);
			var offset = 50;
			var duration = 1000;
			$(window).on("scroll", function () {
				if ($(this).scrollTop() > offset) {
					$(".progress-wrap").addClass("active-progress");
				} else {
					$(".progress-wrap").removeClass("active-progress");
				}
			});
			$(".progress-wrap").on("click", function (event) {
				event.preventDefault();
				$("html, body").animate({
					scrollTop: 0,
				},
					duration
				);
				return false;
			});
		}
	});
})(jQuery);