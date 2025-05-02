

export default function planStyles () {

    const cards = document.querySelectorAll('.plan__card');


    function delay(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    async function animateCards() {

        for( const card of cards) {

            card.classList.add('plan__card--naranja');
            await delay(7000);
            card.classList.remove('plan__card--naranja');

        }
    }

    async function loop() {
        while (true) {
            await animateCards();
        }
    }

    if(cards.length > 0) loop()

};