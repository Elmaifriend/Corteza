import './bootstrap';

import.meta.glob(['../images/*', '../images/corteza-products/*', '../images/tiny-houses/*'])

document.addEventListener('alpine:init', function () {
  Alpine.data('catalogData', function() {
    return {
      sections: [
        {
          "title": "Herramientas",
          "description": "Potencia y precisión para cada proyecto",
          "products": [
            {
              "name": "Herramientas Milwaukee",
              "description": "Herramientas eléctricas de alto rendimiento, ideales para profesionales y aficionados que buscan precisión y resistencia en cada uso.",
              "image": "herramientas-milwaukee.jpg"
            },
            {
              "name": "Herramientas Ridgid",
              "description": "Herramientas robustas diseñadas para trabajos exigentes, con garantía de larga duración y alto desempeño.",
              "image": "herramientas-ridgid.jpg"
            },
            {
              "name": "Herramientas DeWalt",
              "description": "Herramientas eléctricas de alto rendimiento, diseñadas para profesionales que buscan eficiencia y durabilidad.",
              "image": "herramientas-dewalt.jpg"
            },
            {
              "name": "Herramientas Ryobi",
              "description": "Herramientas eléctricas versátiles, perfectas para aficionados y profesionales que buscan calidad y rendimiento.",
              "image": "herramientas-ryobi.jpg"
            },
            {
              "name": "Herramientas Básicas",
              "description": "Kit de herramientas manuales, incluyendo martillos, destornilladores y más, para trabajos cotidianos.",
              "image": "herramientas-basicas.jpg"
            }
          ]
        },
        {
          "title": "Maderas y Tablones",
          "description": "Calidad y versatilidad en cada corte",
          "products": [
            {
              "name": "Shelby 1x6",
              "description": "Madera de pino de alta calidad, perfecta para proyectos de construcción, muebles y decoración con un acabado impecable.",
              "image": "shelby-1x6.jpg"
            },
            {
              "name": "Shelby 1x4",
              "description": "Madera de pino en medidas estándar, perfecta para estructuras, marcos y detalles finos en construcción y carpintería.",
              "image": "shelby-1x4.jpg"
            },
            {
              "name": "Petatillo",
              "description": "Madera con acabado rústico, ideal para revestimientos y proyectos decorativos que requieren un toque único y natural.",
              "image": "petatillo.jpg"
            },
            {
              "name": "Tablones Todas las Medidas",
              "description": "Tablones de madera en variedad de medidas y acabados, adaptables a todo tipo de construcciones y diseños.",
              "image": "tablones-todas-las-medidas.jpg"
            },
            {
              "name": "Triplay",
              "description": "Madera contrachapada versátil, ideal para muebles, revestimientos y proyectos de construcción.",
              "image": "triplay.jpg"
            },
            {
              "name": "Triplay Ranurado Exterior",
              "description": "Madera tratada especialmente para exteriores, resistente a la humedad y condiciones climáticas adversas.",
              "image": "triplay-ranurado-exterior.jpg"
            },
            {
              "name": "Barrote 2x4",
              "description": "Barrotes ideales para estructuras, soportes y proyectos que requieren materiales confiables y duraderos.",
              "image": "barrote-2x4.jpg"
            },
            {
              "name": "Barrote 2x6",
              "description": "Barrotes de alta resistencia, perfectos para construcciones medianas que necesitan firmeza y estabilidad.",
              "image": "barrote-2x6.jpg"
            },
            {
              "name": "Barrote 2x8",
              "description": "Barrotes robustos y duraderos, perfectos para soportes y estructuras que requieren máxima resistencia.",
              "image": "barrote-2x8.jpg"
            }
          ]
        },
        {
          "title": "Pinturas y Acabados",
          "description": "Color y protección para tus espacios",
          "products": [
            {
              "name": "Pintura Sayer",
              "description": "Pintura de alto rendimiento, resistente a la intemperie y perfecta para interiores y exteriores.",
              "image": "pintura-sayer.jpg"
            },
            {
              "name": "Pintura Comex",
              "description": "Pintura con tecnología avanzada, diseñada para ofrecer cobertura, durabilidad y acabados impecables.",
              "image": "pintura-comex.jpg"
            },
            {
              "name": "Pintura",
              "description": "Amplia gama de colores y texturas, diseñada para brindar acabados profesionales y duraderos.",
              "image": "pintura.jpg"
            },
            {
              "name": "Pintura Berel",
              "description": "Pintura de alta calidad en presentaciones prácticas, perfecta para dar vida y protección a tus paredes y superficies.",
              "image": "pintura-berel.jpg"
            },
            {
              "name": "Papel Felpa",
              "description": "Papel de lija de alta calidad, perfecto para preparar superficies antes de pintar o aplicar acabados.",
              "image": "papel-felpa.jpg"
            }
          ]
        },
        {
          "title": "Materiales de Construcción",
          "description": "Resistencia y funcionalidad en cada proyecto",
          "products": [
            {
              "name": "Hojas de Yeso",
              "description": "Paneles de yeso ideales para construcciones interiores, fáciles de instalar y con acabados impecables.",
              "image": "hojas-de-yeso.jpg"
            },
            {
              "name": "Shingle Techo",
              "description": "Tejas asfálticas resistentes y duraderas, ideales para techos con acabados modernos y funcionales.",
              "image": "shingle-techo.jpg"
            },
            {
              "name": "Panel Ranurado MDF",
              "description": "Paneles de MDF ranurados, ideales para decoración, muebles y proyectos de construcción ligera.",
              "image": "panel-ranurado-mdf.jpg"
            },
            {
              "name": "Clavos",
              "description": "Clavos de acero de alta calidad, diseñados para asegurar estructuras y proyectos con firmeza.",
              "image": "clavos.jpg"
            },
            {
              "name": "Tornillería",
              "description": "Tornillos y anclajes de alta calidad, diseñados para asegurar estructuras y proyectos con firmeza.",
              "image": "tornilleria.jpg"
            },
            {
              "name": "Accesorios Eléctricos",
              "description": "Componentes eléctricos de confianza, ideales para instalaciones seguras y eficientes en hogares y proyectos comerciales.",
              "image": "accesorios-electricos.jpg"
            },
          ]
        },
        {
          "title": "Iluminación y Decoración",
          "description": "Estilo y funcionalidad para tus espacios",
          "products": [
            {
              "name": "Lámparas",
              "description": "Lámparas y accesorios de iluminación modernos, perfectos para interiores y exteriores.",
              "image": "lamparas.jpg"
            }
          ]
        }
      ],
      currentSection: 0,
    }
  });
  Alpine.data('enCatalogData', function() {
    return {
      sections: [
        {
          "title": "Tools",
          "description": "Power and precision for every project",
          "products": [
            {
              "name": "Milwaukee Tools",
              "description": "High-performance power tools, ideal for professionals and hobbyists seeking precision and durability in every use.",
              "image": "herramientas-milwaukee.jpg"
            },
            {
              "name": "Ridgid Tools",
              "description": "Robust tools designed for demanding jobs, with guaranteed long life and high performance.",
              "image": "herramientas-ridgid.jpg"
            },
            {
              "name": "DeWalt Tools",
              "description": "High-performance power tools designed for professionals seeking efficiency and durability.",
              "image": "herramientas-dewalt.jpg"
            },
            {
              "name": "Ryobi Tools",
              "description": "Versatile power tools, perfect for hobbyists and professionals looking for quality and performance.",
              "image": "herramientas-ryobi.jpg"
            },
            {
              "name": "Basic Tools",
              "description": "Hand tool kit including hammers, screwdrivers and more for everyday jobs.",
              "image": "herramientas-basicas.jpg"
            }
          ]
        },
        {
          "title": "Lumber and Planks",
          "description": "Quality and versatility in every cut",
          "products": [
            {
              "name": "Shelby 1x6",
              "description": "High-quality pine wood, perfect for construction projects, furniture and decoration with impeccable finish.",
              "image": "shelby-1x6.jpg"
            },
            {
              "name": "Shelby 1x4",
              "description": "Pine wood in standard sizes, perfect for structures, frames and fine details in construction and carpentry.",
              "image": "shelby-1x4.jpg"
            },
            {
              "name": "Rustic Wood",
              "description": "Wood with rustic finish, ideal for cladding and decorative projects requiring a unique, natural touch.",
              "image": "petatillo.jpg"
            },
            {
              "name": "Planks All Sizes",
              "description": "Wood planks in various sizes and finishes, adaptable to all types of constructions and designs.",
              "image": "tablones-todas-las-medidas.jpg"
            },
            {
              "name": "Plywood",
              "description": "Versatile plywood, ideal for furniture, paneling and construction projects.",
              "image": "triplay.jpg"
            },
            {
              "name": "Grooved Exterior Plywood",
              "description": "Specially treated wood for exteriors, resistant to moisture and adverse weather conditions.",
              "image": "triplay-ranurado-exterior.jpg"
            },
            {
              "name": "2x4 Stud",
              "description": "Ideal studs for structures, supports and projects requiring reliable, durable materials.",
              "image": "barrote-2x4.jpg"
            },
            {
              "name": "2x6 Stud",
              "description": "High-strength studs, perfect for medium constructions needing firmness and stability.",
              "image": "barrote-2x6.jpg"
            },
            {
              "name": "2x8 Stud",
              "description": "Robust and durable studs, perfect for supports and structures requiring maximum strength.",
              "image": "barrote-2x8.jpg"
            }
          ]
        },
        {
          "title": "Paints and Finishes",
          "description": "Color and protection for your spaces",
          "products": [
            {
              "name": "Sayer Paint",
              "description": "High-performance paint, weather-resistant and perfect for interiors and exteriors.",
              "image": "pintura-sayer.jpg"
            },
            {
              "name": "Comex Paint",
              "description": "Paint with advanced technology, designed to provide coverage, durability and impeccable finishes.",
              "image": "pintura-comex.jpg"
            },
            {
              "name": "Paint",
              "description": "Wide range of colors and textures, designed to provide professional, long-lasting finishes.",
              "image": "pintura.jpg"
            },
            {
              "name": "Berel Paint",
              "description": "High-quality paint in practical presentations, perfect for bringing life and protection to your walls and surfaces.",
              "image": "pintura-berel.jpg"
            },
            {
              "name": "Sandpaper",
              "description": "High-quality sandpaper, perfect for preparing surfaces before painting or applying finishes.",
              "image": "papel-felpa.jpg"
            }
          ]
        },
        {
          "title": "Construction Materials",
          "description": "Strength and functionality for every project",
          "products": [
            {
              "name": "Drywall Sheets",
              "description": "Drywall panels ideal for interior constructions, easy to install with impeccable finishes.",
              "image": "hojas-de-yeso.jpg"
            },
            {
              "name": "Roof Shingles",
              "description": "Durable asphalt shingles, ideal for roofs with modern, functional finishes.",
              "image": "shingle-techo.jpg"
            },
            {
              "name": "Grooved MDF Panel",
              "description": "Grooved MDF panels, ideal for decoration, furniture and light construction projects.",
              "image": "panel-ranurado-mdf.jpg"
            },
            {
              "name": "Nails",
              "description": "High-quality steel nails, designed to secure structures and projects firmly.",
              "image": "clavos.jpg"
            },
            {
              "name": "Hardware",
              "description": "High-quality screws and anchors, designed to secure structures and projects firmly.",
              "image": "tornilleria.jpg"
            },
            {
              "name": "Electrical Components",
              "description": "Reliable electrical components, ideal for safe and efficient installations in homes and commercial projects.",
              "image": "accesorios-electricos.jpg"
            }
          ]
        },
        {
          "title": "Lighting and Decor",
          "description": "Style and functionality for your spaces",
          "products": [
            {
              "name": "Lamps",
              "description": "Modern lamps and lighting accessories, perfect for interiors and exteriors.",
              "image": "lamparas.jpg"
            }
          ]
        }
      ],
      currentSection: 0,
    }
  });
  Alpine.data('scrollTracker', function() {
    return {
      progress: 0,
      trackScroll() {
        this.updateScroll = this.updateScroll.bind(this);
        document.addEventListener('scroll', this.updateScroll);
        document.addEventListener('resize', this.updateScroll);
      },
      untrackScroll() {
        document.removeEventListener('scroll', this.updateScroll);
        document.removeEventListener('scroll', this.updateScroll);
      },
      updateScroll() {
        const timelineRect = this.$el.getBoundingClientRect();
        const scrollProgress = window.scrollX - timelineRect.top + window.innerHeight * 0.60;
        this.progress = clamp(scrollProgress, 0, timelineRect.height);
      }
    };
  });
  Alpine.data('modelGallery', function(imagesList) {
    return {
      galleryIndex: 0,
      images: imagesList,
      maxPreviewImages: 2,
      showImagesModal: false,
      
      currentImage() {
        return this.images[this.galleryIndex];
      },

      toggleModal() {
        document.body.style.overflow = this.showImagesModal ? "auto" : "hidden";
        this.showImagesModal = !this.showImagesModal;
      },

      setImage(index) {
        this.galleryIndex = index;
      },
    
      nextImage() {
        this.galleryIndex = (this.galleryIndex + 1) % this.images.length;
      },
      
      previousImage() {
        this.galleryIndex = (this.galleryIndex - 1 + this.images.length) % this.images.length;
      },
    }
  })
});

function clamp(value, min, max) {
  return Math.min(Math.max(value, min), max);
}