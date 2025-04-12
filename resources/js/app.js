import './bootstrap';

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