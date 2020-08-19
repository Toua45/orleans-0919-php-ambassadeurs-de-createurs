const axios = require('axios');

function onClickBtnFavorite(event) {
    event.preventDefault();

    const url = this.href;
    const spanCount = this.querySelector('span.js-favorites');
    const icone = this.querySelector('.fa-star');

    // On récupère l'élément html div
    const parent = event.currentTarget.closest('div').parentNode.parentNode.parentNode;
    // eslint-disable-next-line no-unused-vars
    let idUserToFollow;
    const regexp = new RegExp('^(card_on_favorite_)');
    // On vérifie si l'élément hmtl div correspond au regex
    if (parent.id.match(regexp) !== null) {
        // On récupère l'id de la personne à suivre
        // eslint-disable-next-line prefer-destructuring
        idUserToFollow = parent.id.split('_')[3];
    }

    axios.get(url)
        .then((response) => {
            if (response.status === 403) {
                // eslint-disable-next-line no-alert
                window.alert("Une erreur s'est produite, réessayez plus tard !");
            } else {
                spanCount.textContent = response.data.favorites;

                if (icone.dataset.prefix === 'far') {
                    icone.dataset.prefix = 'fas';
                } else {
                    icone.dataset.prefix = 'far';

                    // eslint-disable-next-line max-len
                    // Cette condition ne fonctionne que sur la page avec l'url qui comprend le regex 'favorite'
                    if (window.location.href.match(new RegExp('favorite'))) {
                        // Si l'étoile est transparente alors, on cache la card de la personne
                        // eslint-disable-next-line max-len
                        document.getElementById('card_on_favorite_' + idUserToFollow).classList.replace('d-flex', 'd-none');
                    }

                }
            }
            // eslint-disable-next-line no-unused-vars
        }).catch((error) => {
        // eslint-disable-next-line no-alert
            window.alert("Vous ne pouvez pas ajouter en favoris si vous n'êtes pas connecté !");
        });
}

document.querySelectorAll('a.js-favorite-link').forEach((link) => {
    link.addEventListener('click', onClickBtnFavorite);
});
