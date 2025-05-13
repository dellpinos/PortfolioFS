

export default function services () {

    const items = document.querySelectorAll('.services__grid-item--not-empty');
    const overlay = document.querySelector('.body-overlay');

    items.forEach( item => {
        item.addEventListener('mouseenter', () => {

            items.forEach( otherItem => {
                if(otherItem !== item) {
                    otherItem.style.opacity = '1';
                }
            });

            // overlay.classList.add('body-overlay--on');
            
        });
        item.addEventListener('mouseleave', () => {

            items.forEach( otherItem => {
                if(otherItem !== item) {
                    otherItem.style.opacity = '1';
                }
            });
            // overlay.classList.remove('body-overlay--on');
        });
    });
}


