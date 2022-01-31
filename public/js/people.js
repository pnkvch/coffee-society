const CLIENT_ID = 'yjqyDG5bKNFC2gDh_dQc4RQZcl10SDMKGAA8hSHC08w'

const cards = document.querySelectorAll('.card');

const params = {
  headers: new Headers({
    'Authorization': `Client-ID ${CLIENT_ID}`,
  }),
}

fetch("https://api.unsplash.com/search/photos?query='people portrait'", params)
  .then(x => x.json())
  .then(data => {
    cards.forEach((card, index) => {
      card.style.backgroundImage = `linear-gradient(rgb(var(--primary-black), var(--alpha)), rgba(var(--primary-black), var(--alpha))), url(${data.results[index].urls.small})`
    })
  })